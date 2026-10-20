<?php

namespace App\Form;

use App\Entity\RDV;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class RDVForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('nom_patient', TextType::class, [
            //     'label' => 'Nom du patient',
            //     'attr' => [
            //         'placeholder' => 'Entrez le nom du patient',
            //     ],
            //     'required' => true,
            //     'constraints' => [
            //         new Regex([
            //             'pattern' => "/^[\p{L}a-zA-Z_'-]+$/u",
            //             'message' => 'Le nom ne doit contenir que des lettres.',
            //         ]),
            //     ],
            // ])
            // ->add('nom_medecin', TextType::class, [
            //     'label' => 'Nom du médecin',
            //     'attr' => [
            //         'placeholder' => 'Entrez le nom du médecin',
            //     ],
            //     'required' => true,
            //     'constraints' => [
            //         new Regex([
            //             'pattern' => "/^[\p{L}a-zA-Z_'-]+$/u",
            //             'message' => 'Le nom ne doit contenir que des lettres.',
            //         ]),
            //     ],
            // ])
            ->add('date_rdv', DateTimeType::class, [
                'label' => 'Date du RDV',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'Entrez la date du RDV',
                    'type' => 'datetime-local',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'html5' => true,
                'required' => true,
                // 'constraints' => [
                //     new Regex([
                //         'pattern' => '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/',
                //         'message' => 'La date doit être au format YYYY-MM-DDTHH:MM:SS.',
                //     ]),
                // ],
            ])
            ->add('rdv_patient', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'label' => 'Patient',
                'attr' => [
                    'class' => 'form-control',
                ],
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.roles LIKE :role')
                        ->setParameter('role', '%"ROLE_PATIENT"%')
                        ->orderBy('u.nom', 'ASC');
                },
            ])
            ->add('rdv_medecin', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'label' => 'Medecin',
                'attr' => [
                    'class' => 'form-control',
                ],
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.roles LIKE :role')
                        ->setParameter('role', '%"ROLE_MEDECIN"%')
                        ->orderBy('u.nom', 'ASC');
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RDV::class,
        ]);
    }
}
