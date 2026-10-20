<?php

namespace App\Form;

use App\Entity\Consultation;
use App\Entity\DossierMedical;
use Symfony\Component\Clock\now;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\DateTime;

class ConsultationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_consultation', DateTimeType::class, [
                'label' => 'Date de la consultation',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Entrez la date de la consultation',
                    'type' => 'datetime-local',
                    'autocomplete' => 'off',
                    'autocorrect' => 'off',
                    'class' => 'form-control',
                ],
                'html5' => true,
                'required' => true,
                'data' => (new \DateTime())->setTimezone(new \DateTimeZone('Europe/Paris')),
                
            ])

            ->add('compte_rendu',  TextareaType::class, [
                'label' => 'Compte rendu',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => ['placeholder' => 'Entrez le compte rendu',
                'type' => 'text',
                'autocorrect' => 'off',
                'autocomplete' => 'off',
                'class' => 'form-control'],
                'required' => true,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\p{L}a-zA-Z0-9\s.,;:!?\'"()\-]+$/u',
                        'message' => 'Compte rendu ne doit contenir que des lettres, des chiffres et des caractères spéciaux autorisés.',
                    ]),
                ],
            ])
            // ->add('dossierMedical', EntityType::class, [
            //     'class' => DossierMedical::class,
            //     'choice_label' => function (DossierMedical $dossier) {
            //         return $dossier->getNumeroDossier() . ' - ' . $dossier->getDossierPatient()->getNom();
            //     },
            //     'label_attr' => [
            //         'class' => 'form-label',
            //     ],
            //     'label' => 'Numero Dossier',
            //     'attr' => [
            //         'class' => 'form-control',
            //     ],
            //     'placeholder' => 'Sélectionnez un dossier médical',
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('d')
            //             ->orderBy('d.id', 'DESC');
            //     },
            //     'required' => true,
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Consultation::class,
        ]);
    }
}
