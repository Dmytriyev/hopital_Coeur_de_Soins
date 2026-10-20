<?php

namespace App\Form;

use DateTime;
use App\Entity\User;
use App\Entity\Observation;
use App\Entity\DossierMedical;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ObservationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('observation',  TextareaType::class, [
                'label' => 'Observation',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Entrez l\'observation',
                    'type' => 'text',
                    'autocorrect' => 'off',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                ],
                'required' => true,
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'max' => 700,
                        'minMessage' => 'L\'observation doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'L\'observation ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    // new Regex([
                    //     'pattern' => '/^[\p{L}a-zA-Z0-9\s.,;:!?\'"()\-]+$/u',
                    //     'message' => 'L\'observation ne doit contenir que des lettres, des chiffres et des caractères spéciaux autorisés.',
                    // ]),
                ],
            ])
            ->add('date_observation', DateTimeType::class, [
                'label' => 'Date de l\'observation',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Entrez la date de l\'observation',
                    'type' => 'date',
                    'autocorrect' => 'off',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                ],
                'required' => true,
                // 'constraints' => [
                //     new Regex([
                //         'pattern' => '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/',
                //         'message' => 'La date doit être au format YYYY-MM-DDTHH:MM:SS.',
                //     ]),
                // ],
            ])
            // ->add('matricule', NumberType::class, [
            //     'label' => 'Matricule',
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'required' => true,
            //     'constraints' => [
            //         new Length([
            //             'min' => 4,
            //             'max' => 10,
            //             'minMessage' => 'Le matricule doit contenir au moins {{ limit }} caractères.',
            //             'maxMessage' => 'Le matricule ne peut pas dépasser {{ limit }} caractères.',
            //         ]),
            //         new Regex([
            //             'pattern' => '/^\d+$/',
            //             'message' => 'Le matricule ne doit contenir que des chiffres.',
            //         ]),
            //     ],
            //     'attr' => [
            //         'placeholder' => 'Enter votre matricule',
            //         'type' => 'number',
            //         'class' => 'form-control',
            //         'autocorrect' => 'off',
            //         'autocomplete' => 'off',
            //     ],
            // ])
            ->add('dossierMedical', EntityType::class, [
                'class' => DossierMedical::class,
                'choice_label' => 'numero_dossier',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'label' => 'Spécialités',
                'attr' => [
                    'class' => 'form-control',
                ],
                'placeholder' => 'Sélectionnez un dossier médical',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('d')
                        ->orderBy('d.numero_dossier', 'ASC');
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Observation::class,
        ]);
    }
}
