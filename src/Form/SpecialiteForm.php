<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Specialite;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SpecialiteForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_specialite', TextareaType::class, [
                'label' => 'Nom de la spécialité',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => ['placeholder' => 'Entrez le nom de la spécialité',
                    'class' => 'form-control',
                ],
                'required' => true,
                'constraints' => [
                    new Regex([
                        'pattern' => "/^[\p{L}a-zA-Z_ '-]+$/u",
                        'message' => 'Le nom ne doit contenir que des lettres.',
                    ])
                ],
            ])
            // ->add('medecins', EntityType::class, [
            //     'class' => User::class,
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'label' => 'Spécialités',
            //     'attr' => [
            //         'class' => 'form-control',
            //     ],
            //     'choice_label' => 'nom',
            //     'multiple' => true,
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('u')
            //             ->where('u.roles LIKE :role')
            //             ->setParameter('role', '%"ROLE_MEDECIN"%');
            //     },
            //     'required' => true,
            //     'constraints' => [
            //         new NotBlank([
            //             'message' => 'Veuillez sélectionner au moins un médecin.',
            //         ]),
            //     ],
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Specialite::class,
        ]);
    }
}
