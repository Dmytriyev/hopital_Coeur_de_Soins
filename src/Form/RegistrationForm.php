<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom famille',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre Nom famille',
                    'type' => 'text',
                    'autocomplete' => 'family-name',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Enter votre Nom famille',
                    ]),
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z_'-]+$/u",
                        'message' => 'Le nom ne doit contenir que des lettres.',
                    ])
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre Prénom',
                    'type' => 'text',
                    'autocomplete' => 'given-name',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Enter votre Prénom',
                    ]),
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z_'-]+$/u",
                        'message' => 'Le nom ne doit contenir que des lettres.',
                    ])
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre adresse email',
                    'type' => 'email',
                    'autocomplete' => 'email',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'required' => true,
                'constraints' => [
                    new Length([
                        'min' => 5,
                        'max' => 180,
                        'minMessage' => 'L\'email doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'L\'email ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Regex([
                        'pattern' => '/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,}$/',
                        'message' => 'Veuillez entrer une adresse email valide.',
                    ]),
                ],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => [
                        'placeholder' => 'Enter votre mot de passe',
                        'autocomplete' => 'new-password',
                        'autocorrect' => 'off',
                        'type' => 'password',
                        'class' => 'form-control',
                    ],
                    'constraints' => [
                        new Regex([
                            'pattern' => '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/',
                            'message' => 'Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.',
                        ]),
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.',
                            'max' => 64,
                            'maxMessage' => 'Le mot de passe ne peut pas dépasser {{ limit }} caractères.',
                        ]),
                    ],

                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'label_attr' => [
                    'class' => 'form-label',
                ],
                    'attr' => [
                        'placeholder' => 'Confirmer votre mot de passe',
                        'autocomplete' => 'new-password',
                        'autocorrect' => 'off',
                        'type' => 'password',
                        'class' => 'form-control',
                    ],
                    'constraints' => [
                        new Regex([
                            'pattern' => '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/',
                            'message' => 'Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.',
                        ]),
                    ],
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'J\'accepte les termes et conditions',
                'required' => true,
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'class' => 'form-check-input',
                    'type' => 'checkbox',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                ],
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devriez accepter les termes et conditions.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
