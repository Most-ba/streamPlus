<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\Payment;
// use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $data = $options['data'] ?? [];
        $builder
            ->add('name', TextType::class, [
                'label' => 'Full Name',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter your full name',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your name']),
                ],
                'data' => $data['name'] ?? null,
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter your email address',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your email']),
                    new Email(['message' => 'Please enter a valid email address']),
                ],
                'data' => $data['email'] ?? null,
            ])
            ->add('phone', TextType::class, [
                'label' => 'Phone Number',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter your phone number',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your phone number']),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Your phone number should have at least {{ limit }} digits',
                    ]),
                    new Regex([
                        'pattern' => '/^[0-9\-\+\s\(\)]+$/',
                        'message' => 'Please enter a valid phone number',
                    ]),
                ],
                'data' => $data['phone'] ?? null,
            ])

            // Subscription type selection (radio buttons)
            ->add('subscriptionType', ChoiceType::class, [
                'label' => 'Subscription Type',
                'choices' => [
                    'Free' => 'free',
                    'Premium' => 'premium',
                ],
                'expanded' => true, // Display as radio buttons
                'multiple' => false, // Only one option can be selected
                'attr' => [
                    'class' => 'subscription-type-radio',
                ],
                'data' => $data['subscriptionType'] ?? 'free', // Default to free subscription
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'data' => [],
            'csrf_protection' => true, // Enable CSRF protection
            'csrf_field_name' => '_token', 
            'csrf_token_id' => 'user_form', 
        ]);
    }
}
