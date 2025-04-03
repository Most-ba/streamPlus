<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $data = $options['data'] ?? [];

        $builder
            ->add('line1', TextType::class, [
                'label' => 'Address Line 1',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Street address, P.O. box, company name',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your address']),
                ],
                'data' => $data['line1'] ?? null,
            ])
            ->add('line2', TextType::class, [
                'label' => 'Address Line 2 (Optional)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Apartment, suite, unit, building, floor, etc.',
                ],
                'data' => $data['line2'] ?? null,
            ])
            ->add('city', TextType::class, [
                'label' => 'City',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter your city',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your city']),
                ],
                'data' => $data['city'] ?? null,
            ])
            
            ->add('country', CountryType::class, [
                'label' => 'Country',
                'attr' => [
                    'class' => 'form-select',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please select your country']),
                ],
                'data' => $data['country'] ?? null,
                'placeholder' => 'Select your country',
            ]);


            // Add state and postal code fields with basic constraints
            $builder
                ->add('state', TextType::class, [
                    'label' => 'State/Province',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Enter your state or province',
                    ],
                    'constraints' => [
                        new NotBlank(['message' => 'Please enter your state or province']),
                    ],
                    'data' => $data['state'] ?? null,
                ])
                ->add('postalCode', TextType::class, [
                    'label' => 'Postal Code',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Enter your postal code',
                    ],
                    'constraints' => [
                        new NotBlank(['message' => 'Please enter your postal code']),
                    ],
                    'data' => $data['postalCode'] ?? null,
                ]);

            // Add form event listener to modify fields based on country selection
            $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
                $data = $event->getData();
                $form = $event->getForm();
                
                if (!isset($data['country'])) {
                    return;
                }
                
                // Get the selected country
                $country = $data['country'];

                // Apply country-specific validation
                switch ($country) {
                    case 'US':
                        // US-specific validation
                        $form->add('state', TextType::class, [
                            'label' => 'State',
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => 'Enter your state (e.g., CA, NY)',
                            ],
                            'constraints' => [
                                new NotBlank(['message' => 'Please enter your state']),
                                new Length([
                                    'min' => 2,
                                    'max' => 2,
                                    'exactMessage' => 'US state code must be exactly {{ limit }} characters',
                                ]),
                                new Regex([
                                    'pattern' => '/^[A-Z]{2}$/',
                                    'message' => 'State must be a valid 2-letter US state code (e.g., CA, NY)',
                                ]),
                            ],
                        ]);
                        
                        $form->add('postalCode', TextType::class, [
                            'label' => 'ZIP Code',
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => 'Enter your ZIP code (e.g., 12345 or 12345-6789)',
                            ],
                            'constraints' => [
                                new NotBlank(['message' => 'Please enter your ZIP code']),
                                new Regex([
                                    'pattern' => '/^[0-9]{5}(-[0-9]{4})?$/',
                                    'message' => 'ZIP code must be in format 12345 or 12345-6789',
                                ]),
                            ],
                        ]);
                        break;
                        
                    case 'CA':
                        // Canada-specific validation
                        $form->add('state', TextType::class, [
                            'label' => 'Province',
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => 'Enter your province (e.g., ON, BC)',
                            ],
                            'constraints' => [
                                new NotBlank(['message' => 'Please enter your province']),
                                new Length([
                                    'min' => 2,
                                    'max' => 2,
                                    'exactMessage' => 'Province code must be exactly {{ limit }} characters',
                                ]),
                                new Regex([
                                    'pattern' => '/^[A-Z]{2}$/',
                                    'message' => 'Province must be a valid 2-letter code (e.g., ON, BC)',
                                ]),
                            ],
                        ]);
                        
                        $form->add('postalCode', TextType::class, [
                            'label' => 'Postal Code',
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => 'Enter your postal code (e.g., A1A 1A1)',
                            ],
                            'constraints' => [
                                new NotBlank(['message' => 'Please enter your postal code']),
                                new Regex([
                                    'pattern' => '/^[A-Z][0-9][A-Z]\s?[0-9][A-Z][0-9]$/',
                                    'message' => 'Postal code must be in format A1A 1A1',
                                ]),
                            ],
                        ]);
                        break;
                        
                    case 'UK':
                        // UK-specific validation
                        $form->add('state', TextType::class, [
                            'label' => 'County',
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => 'Enter your county',
                            ],
                            'constraints' => [
                                new NotBlank(['message' => 'Please enter your county']),
                            ],
                        ]);
                        
                        $form->add('postalCode', TextType::class, [
                            'label' => 'Postcode',
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => 'Enter your postcode',
                            ],
                            'constraints' => [
                                new NotBlank(['message' => 'Please enter your postcode']),
                                new Regex([
                                    'pattern' => '/^[A-Z]{1,2}[0-9][A-Z0-9]? ?[0-9][A-Z]{2}$/',
                                    'message' => 'Please enter a valid UK postcode',
                                ]),
                            ],
                        ]);
                        break;
                        
                   
                }
            });
        
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'data' => [],
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'address_form'
        ]);
    }
}
