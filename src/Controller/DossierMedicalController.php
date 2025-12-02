<?php

namespace App\Controller;

use App\Entity\Image;
use DatetimeImmutable;
use App\Entity\DossierMedical;
use App\Form\DossierMedicalForm;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DossierMedicalRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/dossier_medical')]
final class DossierMedicalController extends AbstractController
{
    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_PERSONEL_ADMINISTRATIF') or is_granted('ROLE_MEDECIN') or is_granted('ROLE_INFERMIER')"))]
    #[Route(name: 'app_dossier_medical_index', methods: ['GET'])]
    public function index(DossierMedicalRepository $dossierMedicalRepository): Response
    {
        return $this->render('dossier_medical/index.html.twig', [
            'dossier_medicals' => $dossierMedicalRepository->findAll(),
        ]);
    }

    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_PERSONEL_ADMINISTRATIF') or is_granted('ROLE_MEDECIN')"))]
    #[Route('/new', name: 'app_dossier_medical_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dossierMedical = new DossierMedical();
        $form = $this->createForm(DossierMedicalForm::class, $dossierMedical);
        $date = new \DateTimeImmutable('now');
        $user = $this->getUser();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossierMedical->setUpdatedAt(new DatetimeImmutable());
            $dossierMedical->setDossierPatient($user);
            $dossierMedical->setDateCreation($date);
            $entityManager->persist($dossierMedical);
            $entityManager->flush();

            return $this->redirectToRoute('app_dossier_medical_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dossier_medical/new.html.twig', [
            'dossier_medical' => $dossierMedical,
            'form' => $form,
        ]);
    }

    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_PERSONEL_ADMINISTRATIF') or is_granted('ROLE_MEDECIN') or is_granted('ROLE_INFERMIER')"))]
    #[Route('/{id}', name: 'app_dossier_medical_show', methods: ['GET'])]
    public function show(DossierMedical $dossierMedical): Response
    {
        return $this->render('dossier_medical/show.html.twig', [
            'dossier_medical' => $dossierMedical,
        ]);
    }

    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_PERSONEL_ADMINISTRATIF') or is_granted('ROLE_MEDECIN')"))]
    #[Route('/{id}/edit', name: 'app_dossier_medical_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DossierMedicalForm::class, $dossierMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossierMedical->setUpdatedAt(new DatetimeImmutable());
            $entityManager->flush();
            return $this->redirectToRoute('app_dossier_medical_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dossier_medical/edit.html.twig', [
            'dossier_medical' => $dossierMedical,
            'form' => $form,
        ]);
    }

    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_PERSONEL_ADMINISTRATIF') or is_granted('ROLE_MEDECIN')"))]
    #[Route('/{id}', name: 'app_dossier_medical_delete', methods: ['POST'])]
    public function delete(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $dossierMedical->getId(), $request->getPayload()->getString('_token'))) {

            $entityManager->remove($dossierMedical);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_dossier_medical_index', [], Response::HTTP_SEE_OTHER);
    }

    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_MEDECIN')"))]
    #[Route('/image/{id}/delete', name: 'dossier_medical_image_delete', methods: ['POST'])]
    public function deleteImage(Image $image, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(VichImageType::class, $image, [
            'allow_delete' => true,
            'delete_label' => 'Supprimer l\'image',
        ]);
        $form->handleRequest($request);
        
        if (!$this->isCsrfTokenValid('delete-image-' . $image->getId(), $request->request->get('_token'))) {
            return new JsonResponse(['error' => 'Jeton CSRF invalide'], Response::HTTP_FORBIDDEN);
        }
        $dossier_medicalId = $image->getImageDossier()?->getId();
        $em->remove($image);
        $em->flush();
        $this->addFlash('success', 'Image supprimée.');
        return $this->redirectToRoute('app_dossier_medical_edit', ['id' => $dossier_medicalId]);
    }
}
