<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Specialite;
use App\Entity\DossierMedical;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MyProfilForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter votre adresse email',
                    'type' => 'email',
                    'autocomplete' => 'email',
                    'autocorrect' => 'off',
                ],
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
            ->add('genre', ChoiceType::class, [
                'label' => 'Genre',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
                'expanded' => true,
                'multiple' => false,
                'attr' => [
                    'placeholder' => 'Choisissez votre genre',
                    'class' => 'form-control',
                ],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre Nom',
                    'type' => 'text',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Length([
                        'min' =>  2,
                        'max' => 10,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z_'-]+$/u",
                        'message' => 'Le nom ne doit contenir que des lettres.',
                    ])
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prenom',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre Prenom',
                    'type' => 'text',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Length([
                        'min' =>  2,
                        'max' => 10,
                        'minMessage' => 'Le prenom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le prenom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z_'-]+$/u",
                        'message' => 'Le nom ne doit contenir que des lettres.',
                    ])
                ],
            ])
            ->add('date_naissance', DateType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre date de naissance',
                    'type' => 'date',
                    'min' => '1900-01-01',
                    'max' => date('d/m/Y'),
                    'autocomplete' => 'bday',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
            ])
            ->add('adresse', TextareaType::class, [
                'label' => 'Adresse',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre Adresse',
                    'type' => 'text',
                    'autocomplete' => 'street-address',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Length([
                        'min' => 5,
                        'max' => 100,
                        'minMessage' => 'L\'adresse doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'L\'adresse ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('telephone', NumberType::class, [
                'label' => 'Téléphone',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre numéro de téléphone',
                    'type' => 'tel',
                    'autocorrect' => 'off',
                    'autocomplete' => 'off',
                    'min' => 0,
                    'max' => 9999999999,
                    'class' => 'form-control',
                ],
                'html5' => true,
                'required' => true,
                'constraints' => [
                    new Length([
                        'min' => 7,
                        'max' => 10,
                        'minMessage' => 'Le numéro de téléphone doit contenir au moins {{ limit }} chiffres.',
                        'maxMessage' => 'Le numéro de téléphone ne peut pas dépasser {{ limit }} chiffres.',
                    ]),
                    new Regex([
                        'pattern' => '/^\+?[0-9]{7,10}$/',
                        'message' => 'Le numéro de téléphone doit contenir entre 10 et 13 chiffres.',
                    ]),
                ],
            ])
            ->add('matricule', NumberType::class, [
                'label' => 'Matricule',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre matricule',
                    'type' => 'number',
                    'autocorrect' => 'off',
                    'autocomplete' => 'off',
                    'min' => 0,
                    'max' => 9999999999,
                    'class' => 'form-control',
                ],
                'required' => false,
                'html5' => true,
                'constraints' => [
                    new Length([
                        'min' => 4,
                        'max' => 10,
                        'minMessage' => 'Le matricule doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le matricule ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Regex([
                        'pattern' => '/^[0-9]+$/',
                        'message' => 'Le matricule ne doit contenir que  des chiffres.',
                    ]),
                ],
            ])
            ->add('post', TextType::class, [
                'label' => 'Post',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre post',
                    'type' => 'text',
                    'autocomplete' => 'organization-title',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'required' => false,
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le post doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le post ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z _'-]+$/u",
                        'message' => 'Le post ne doit contenir que des lettres.',
                    ])
                ],
            ])
            ->add('numero_secu', TextType::class, [
                'label' => 'Numéro de sécurité sociale',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter votre numéro de sécurité sociale',
                    'type' => 'number',
                    'min' => 0,
                    'max' => 999999999999999,
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'required' => false,
                'constraints' => [
                    new Length([
                        'min' => 15,
                        'max' => 15,
                        'minMessage' => 'Le numéro de sécurité sociale doit contenir exactement {{ limit }} caractères.',
                        'maxMessage' => 'Le numéro de sécurité sociale doit contenir exactement {{ limit }} caractères.',
                    ]),
                    // new Regex([
                    //     'pattern' => '/^\d[0-9]{15}+$/',
                    //     'message' => 'Le numéro de sécurité sociale doit contenir uniquement des chiffres.',
                    // ]),
                ],
                
            ])
            ->add('medecin', TextType::class, [
                'label' => 'Médecin',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter le nom du médecin',
                    'type' => 'text',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le nom du médecin doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom du médecin ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z_ .'-]+$/u",
                        'message' => 'Le nom du médecin ne doit contenir que des lettres.',
                    ])
                ],
            ])
            ->add('telephone_confiance', NumberType::class, [
                'label' => 'Téléphone de confiance',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Enter le numéro de téléphone de confiance',
                    'type' => 'tel',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                    'min' => 0,
                    'max' => 9999999999,
                    'class' => 'form-control',
                ],
                'html5' => true,
                'required' => false,
                'constraints' => [
                    new Length([
                        'min' => 7,
                        'max' => 10,
                        'minMessage' => 'Le numéro de téléphone doit contenir au moins {{ limit }} chiffres.',
                        'maxMessage' => 'Le numéro de téléphone ne peut pas dépasser {{ limit }} chiffres.',
                    ]),
                    new Regex([
                        'pattern' => '/^\+?[0-9]{7,10}+$/',
                        'message' => 'Le numéro de téléphone de confiance doit contenir entre 10 et 13 chiffres.',
                    ]),
                ],
            ])
            ->add('specialites', EntityType::class, [
                'class' => Specialite::class,
                'choice_label' => 'nom_specialite',
                'multiple' => true,
                'required' => false,
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'label' => 'Spécialités',
                'attr' => [
                    'class' => 'form-control',
                ],
                'placeholder' => 'Sélectionnez une ou plusieurs spécialités',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nom_specialite', 'ASC');
                },
            ])
            ->add('mes_medecins', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'required' => false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.roles LIKE :role')
                        ->setParameter('role', '%"ROLE_MEDECIN"%');
                },
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'label' => 'mes medecins',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('mes_patients', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'required' => false,
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'label' => 'mes patients',
                'attr' => [
                    'class' => 'form-control',
                ],
                'placeholder' => 'Sélectionnez un patient ou plusieurs',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.nom IS NOT NULL')
                        ->andWhere('u.roles LIKE :role')
                        ->setParameter('role', '%"ROLE_PATIENT"%')
                        ->orderBy('u.nom', 'ASC');
                },
            ])
            // ->add('dossierMedical', EntityType::class, [
            //     'class' => DossierMedical::class,
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'label' => 'Spécialités',
            //     'attr' => [
            //         'class' => 'form-control',
            //     ],
            //     'choice_label' => 'numero_dossier',
            //     'multiple' => false,
            //     'placeholder' => 'Sélectionnez un dossier médical',
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('d')
            //             ->orderBy('d.numero_dossier', 'ASC');
            //     },
            // ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'role' => null, // Optional: to set a default role if needed
        ]);
    }
}
