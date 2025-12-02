<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserForm;
use App\Form\MyProfilForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class MyProfilController extends AbstractController
{
    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_PERSONEL_ADMINISTRATIF') or is_granted('ROLE_MEDECIN') or is_granted('ROLE_INFERMIER')"))]
    #[Route('/my_profil', name: 'app_my_profil')]
    public function index(): Response
    {
        return $this->render('my_profil/index.html.twig', [
            'controller_name' => 'MyProfilController',
        ]);
    }
    #[IsGranted(new Expression("is_granted('ROLE_ADMIN') or is_granted('ROLE_PERSONEL_ADMINISTRATIF') or is_granted('ROLE_MEDECIN')"))]
    #[Route('my_profil/{id}/edit', name: 'my_profil_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $form = $this->createForm(MyProfilForm::class, $user, ['role' => $user->getRole()]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($userPasswordHasher->hashPassword($user,$form->get('password')->getData())
            );
            $selectedRole = $form->get('role')->getData();
            $user->setRoles([$selectedRole]);

            $entityManager->flush();

            return $this->redirectToRoute('app_my_profil', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('my_profil/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
}
