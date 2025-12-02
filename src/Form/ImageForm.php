<?php

namespace App\Form;

use App\Entity\Image;
use App\Entity\DossierMedical;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ImageForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'image',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Entrez le nom de l\'image',
                    'type' => 'text',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',

                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Length([
                        'min' =>  2,
                        'max' => 50,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z_ '-]+$/u",
                        'message' => 'Le nom ne doit contenir que des lettres.',
                    ])
                ],
                'required' => true,
            ])
            ->add('imageFile', VichImageType::class, [
                'label' => 'Image du dossier médical',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'required' => true,
                'allow_delete' => true,
                'download_uri' => false,
                'delete_label' => 'Ecraser l\'image actuelle ?',
                'attr' => [
                    'accept' => 'image/*',
                    'class' => 'form-control',
                ],
                // 'constraints' => [
                //     new Regex([
                //         'pattern' => '/\.(jpg|jpeg|png|gif)$/i',
                //         'message' => 'Veuillez télécharger une image valide (jpg, jpeg, png, gif).',
                //     ]),
                // ],
            ])
            // ->add('image_dossier', EntityType::class, [
            //     'class' => DossierMedical::class,
            //     'choice_label' => 'numero_dossier',
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'label' => 'Dossier_assosier',
            //     'attr' => [
            //         'class' => 'form-control',
            //     ],
            //     'placeholder' => 'Sélectionnez un dossier médical',
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('d')
            //             ->orderBy('d.numero_dossier', 'ASC');
            //     }
            // ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Image::class,

        ]);
    }
}
