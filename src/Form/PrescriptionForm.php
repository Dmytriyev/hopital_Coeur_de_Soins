<?php

namespace App\Form;

use App\Entity\Consultation;
use App\Entity\Prescription;
use App\Entity\DossierMedical;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PrescriptionForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $id = $options ['id'];
        $builder
            ->add('traitement', TextareaType::class, [
                'label' => 'Traitement',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Entrez le traitement prescrit',
                    'class' => 'form-control',
                ],
                'required' => true,
                // 'constraints' => [
                //     new Regex([
                //         'pattern' => '/^[\p{L}a-zA-Z0-9\s() -.,:\-]+$/u',
                //         'message' => 'Le traitement ne doit contenir que des lettres, des chiffres et des espaces.',
                //     ]),
                // ],
            ])
            ->add('period', TextareaType::class, [
                'label' => 'Période',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'attr' => [
                    'placeholder' => 'Entrez la période de prescription',
                    'class' => 'form-control',
                ],
                // 'constraints' => [
                //     new Regex([
                //         'pattern' => '/^[\p{L}a-zA-Z0-9\s() -.,:\-]+$/u',
                //         'message' => 'Le traitement ne doit contenir que des lettres, des chiffres et des espaces.',
                //     ]),
                // ],
            ])
            ->add('consultation', EntityType::class, [
                'class' => Consultation::class,
                'choice_label' => function (Consultation $consultation) {
                    return $consultation->getDateConsultation()->format('d/m/Y H:m') . ' - ' . $consultation->getDossierMedical()->getDossierPatient()->getNom();
                },
                'choice_value' => 'id',
                'label' => 'Consultation',
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'placeholder' => 'Sélectionnez une consultation',
                'attr' => [
                    'class' => 'form-select',
                ],
                'query_builder' => function (EntityRepository $er) use ($id) {
                    return $er->createQueryBuilder('c')
                        ->join('c.dossierMedical', 'd')
                        ->where('d.id=:dossierId')
                        ->setParameter('dossierId', $id )
                        ->orderBy('c.id', 'DESC');
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prescription::class,
            'id' => null
        ]);
    }
}
