<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ImageForm;
use App\Entity\DossierMedical;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class DossierMedicalForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero_dossier', NumberType::class, [
                'label' => 'Numéro de dossier',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => ['placeholder' => 'Entrez le numéro de dossier',
                'autocomplete' => 'off',
                'autocorrect' => 'off',
                'class' => 'form-control',
                'type' => 'number',
                'min' => 0,
                'max' => 9999999999],
                'required' => true,
                'html5' => true,
                'constraints' => [
                    new Length([
                        'min' => 1,
                        'max' => 10,
                        'minMessage' => 'Le numéro de dossier doit contenir au moins {{ limit }} chiffres.',
                        'maxMessage' => 'Le numéro de dossier ne peut pas dépasser {{ limit }} chiffres.',
                    ]),
                    new Regex([
                        'pattern' => '/^[0-9]+$/',
                        'message' => 'Le numéro de dossier doit contenir uniquement des chiffres.',
                    ]),
                ],
            ])
            // ->add('date_creation', DateTimeType::class, [
            //     'label' => 'Date de création',
            //     'widget' => 'single_text',
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'attr' => ['placeholder' => 'Sélectionnez la date de création',
            //     'autocomplete' => 'off',
            //     'autocorrect' => 'off',
            //     'class' => 'form-control',
            //     'type' => 'datetime-local'],
            //     'html5' => true,
            //     'required' => true,
            //     // 'constraints' => [
            //     //     new Regex([
            //     //         'pattern' => '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$/',
            //     //         'message' => 'La date doit être au format YYYY-MM-DDTHH:MM:SS.',
            //     //     ]),
            //     // ],
            // ])
            // ->add('nom_medecin', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'nom',
            //     'choice_value' => 'id',
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'label' => 'Spécialités',
            //     'attr' => [
            //         'class' => 'form-control',
            //     ],
            //     'label' => 'Médecin responsable',
            //     'required' => true,
            //     'placeholder' => 'Sélectionnez un médecin',
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('u')
            //             ->where('u.roles LIKE :role')
            //             ->setParameter('role', '%ROLE_MEDECIN%')
            //             ->orderBy('u.nom', 'ASC');
            //     },
            // ])
            ->add('nom_medecin', TextType::class, [
                'label' => 'Médecin responsable',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => ['placeholder' => 'Entrez le nom du médecin responsable',
                'autocomplete' => 'off',
                'autocorrect' => 'off',
                'class' => 'form-control'],
                'required' => false,
                'constraints' => [
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Le nom du médecin ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            // ->add('imageFile', VichImageType::class, [
            //     'label' => 'Image du dossier médical',
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'required' => true,
            //     'allow_delete' => true,
            //     'download_uri' => false,
            //     'delete_label' => 'Ecraser l\'image actuelle ?',
            //     'attr' => [
            //         'accept' => 'image/*',
            //         'class' => 'form-control',
            //     ],
            //     // 'constraints' => [
            //     //     new Regex([
            //     //         'pattern' => '/\.(jpg|jpeg|png|gif)$/i',
            //     //         'message' => 'Veuillez télécharger une image valide (jpg, jpeg, png, gif).',
            //     //     ]),
            //     // ],
            // ])
            // ->add('dossier_patient',EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'nom',
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'label' => 'Spécialités',
            //     'attr' => [
            //         'class' => 'form-control',
            //     ],
            //     'label' => 'Patient',
            //     'required' => true,
            //     'placeholder' => 'Sélectionnez un patient',
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('u')
            //             ->where('u.roles LIKE :role')
            //             ->setParameter('role', '%"ROLE_PATIENT"%')
            //             ->orderBy('u.nom', 'ASC');
            //     },
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DossierMedical::class,
        ]);
    }
}
