<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\CardScheme;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class PaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $data = $options['data'] ?? [];
        
        $builder
            ->add('cardNumber', TextType::class, [
                'label' => 'Credit Card Number',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'XXXX XXXX XXXX XXXX',
                    'autocomplete' => 'cc-number',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your credit card number']),
                    new Callback(function($value, ExecutionContextInterface $context) {
                        // Remove spaces and non-digits
                        $cleanValue = preg_replace('/\D/', '', $value);
                        
                        // Apply CardScheme constraint to the cleaned value
                        $cardScheme = new CardScheme([
                            'schemes' => ['VISA', 'MASTERCARD', 'AMEX', 'DISCOVER'],
                            'message' => 'Your credit card number is invalid',
                        ]);
                        
                        $violations = $context->getValidator()->validate($cleanValue, $cardScheme);
                        if (count($violations) > 0) {
                            $context->buildViolation($violations[0]->getMessage())
                                ->addViolation();
                        }
                    }),
                ],
                'data' => $data['cardNumber'] ?? null,
            ])
            ->add('expirationDate', TextType::class, [
                'label' => 'Expiration Date (MM/YY)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'MM/YY',
                    'autocomplete' => 'cc-exp',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter the expiration date']),
                    new Regex([
                        'pattern' => '/^(0[1-9]|1[0-2])\/([0-9]{2})$/',
                        'message' => 'Please enter a valid expiration date (MM/YY)',
                    ]),
                    new Callback([$this, 'validateExpirationDate']),
                ],
                'data' => $data['expirationDate'] ?? null,
            ])
            ->add('cvv', TextType::class, [
                'label' => 'CVV',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '123',
                    'autocomplete' => 'cc-csc',
                    'maxlength' => 3,
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter the CVV']),
                    new Length([
                        'min' => 3,
                        'max' => 3,
                        'exactMessage' => 'CVV must be exactly {{ limit }} digits',
                    ]),
                    new Regex([
                        'pattern' => '/^[0-9]{3}$/',
                        'message' => 'CVV must contain only digits',
                    ]),
                ],
                'data' => $data['cvv'] ?? null,
            ])
        ;
    }

    public function validateExpirationDate($value, ExecutionContextInterface $context)
    {
        if (!preg_match('/^(0[1-9]|1[0-2])\/([0-9]{2})$/', $value, $matches)) {
            return;
        }

        $month = (int)$matches[1];
        $year = (int)('20' . $matches[2]);
        
        $currentMonth = (int)date('m');
        $currentYear = (int)date('Y');
        
        // Create date objects for the last day of the expiration month and current date
        $expirationDate = new \DateTime($year . '-' . $month . '-01');
        $expirationDate->modify('last day of this month');
        $currentDate = new \DateTime();
        
        if ($expirationDate < $currentDate) {
            $context->buildViolation('The expiration date must be in the future')
                ->addViolation();
        }
    }

    public function validateCreditCard($value, ExecutionContextInterface $context)
    {
        // Remove any spaces or non-digit characters
        $cardNumber = preg_replace('/\D/', '', $value);
        
        // List of valid test card numbers
        $validTestCards = [
            '4111111111111111', // Visa
            '4242424242424242', // Visa
            '5555555555554444', // Mastercard
            '5105105105105100', // Mastercard
            '378282246310005',  // Amex
            '371449635398431',  // Amex
        ];
        
        if (!in_array($cardNumber, $validTestCards)) {
            $context->buildViolation('For testing, please use one of these numbers: 4111111111111111, 5555555555554444, or 378282246310005')
                ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'data' => [],
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'payment_form',
        ]);
    }
}