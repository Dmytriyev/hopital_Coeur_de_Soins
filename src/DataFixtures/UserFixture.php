<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
// use Symfony\Component\Validator\Constraints\DateTime; // Removed, not needed
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixture extends Fixture
{
    private UserPasswordHasherInterface $userPasswordHasher;
    
    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setEmail('savva@gmail.com');
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setPassword($this->userPasswordHasher->hashPassword($user,'12345Sd!'));
        $user->setPrenom('Savva');
        $user->setNom('Dmytriyev');
        $user->setGenre('Homme');
        $user->setTelephone('0612345678');
        $user->setDateNaissance(new \DateTimeImmutable('1990-05-09'));
        $user->setAdresse('123 Rue de Paris, 75001 Paris, France');
        $user->setMatricule('123456');
        $manager->persist($user);
        $manager->flush();


        /** 
         * Chaque entrée respecte :
         *  • Email 5-180 car. + regex
         *  • Mot de passe ≥ 8 car., 1 maj, 1 chiffre, 1 spécial
         *  • Nom/Prénom 2-10 car. alpha
         *  • Téléphone 10 chiffres (regex + longueur)
         *  • Etc.
         */
        $usersData = [

            /* ─────────────  ROLE_PERSONEL_ADMINISTRATIF  ───────────── */
            [
                'email' => 'pa1@coeurdesoins.fr',
                'password' => 'Pa1@Admin',
                'roles' => ['ROLE_USER', 'ROLE_PERSONEL_ADMINISTRATIF'],
                'genre' => 'Femme',
                'nom' => 'Martin',
                'prenom' => 'Emma',
                'date' => '1988-03-12',
                'adresse' => '12 Rue des Lilas, 75010 Paris',
                'telephone' => '0612345678',
                'matricule' => '1001',
                'post' => 'Secretaire',
            ],
            [
                'email' => 'pa2@coeurdesoins.fr',
                'password' => 'Pa2@Admin',
                'roles' => ['ROLE_USER', 'ROLE_PERSONEL_ADMINISTRATIF'],
                'genre' => 'Homme',
                'nom' => 'Durand',
                'prenom' => 'Hugo',
                'date' => '1992-07-21',
                'adresse' => '5 Av Carnot, 69003 Lyon',
                'telephone' => '0623456789',
                'matricule' => '1002',
                'post' => 'Comptable',
            ],
            [
                'email' => 'pa3@coeurdesoins.fr',
                'password' => 'Pa3@Admin',
                'roles' => ['ROLE_USER', 'ROLE_PERSONEL_ADMINISTRATIF'],
                'genre' => 'Femme',
                'nom' => 'Petit',
                'prenom' => 'Lina',
                'date' => '1990-11-09',
                'adresse' => '4 Rue Verte, 59000 Lille',
                'telephone' => '0634567890',
                'matricule' => '1003',
                'post' => 'Archiviste',
            ],
            [
                'email' => 'pa4@coeurdesoins.fr',
                'password' => 'Pa4@Admin',
                'roles' => ['ROLE_USER', 'ROLE_PERSONEL_ADMINISTRATIF'],
                'genre' => 'Homme',
                'nom' => 'Lopez',
                'prenom' => 'Nino',
                'date' => '1985-02-14',
                'adresse' => '8 Rue Jules Verne, 44000 Nantes',
                'telephone' => '0645678901',
                'matricule' => '1004',
                'post' => 'Gestionaire',
            ],

            /* ─────────────────────  ROLE_MEDECIN  ─────────────────── */
            [
                'email' => 'med1@coeurdesoins.fr',
                'password' => 'Me1@Decin',
                'roles' => ['ROLE_USER', 'ROLE_MEDECIN'],
                'genre' => 'Homme',
                'nom' => 'Leroy',
                'prenom' => 'Louis',
                'date' => '1979-06-30',
                'adresse' => '2 Bd Pasteur, 75015 Paris',
                'telephone' => '0656789012',
                'matricule' => '9001',
                'post' => 'Cardio',
            ],
            [
                'email' => 'med2@coeurdesoins.fr',
                'password' => 'Me2@Decin',
                'roles' => ['ROLE_USER', 'ROLE_MEDECIN'],
                'genre' => 'Femme',
                'nom' => 'Renard',
                'prenom' => 'Chloe',
                'date' => '1982-10-18',
                'adresse' => '15 Rue Moliere, 31000 Toulouse',
                'telephone' => '0667890123',
                'matricule' => '9002',
                'post' => 'Dermato',
            ],
            [
                'email' => 'med3@coeurdesoins.fr',
                'password' => 'Me3@Decin',
                'roles' => ['ROLE_USER', 'ROLE_MEDECIN'],
                'genre' => 'Homme',
                'nom' => 'Garcia',
                'prenom' => 'Yanis',
                'date' => '1987-09-05',
                'adresse' => '20 Rue Colbert, 13008 Marseille',
                'telephone' => '0678901234',
                'matricule' => '9003',
                'post' => 'Onco',
            ],
            [
                'email' => 'med4@coeurdesoins.fr',
                'password' => 'Me4@Decin',
                'roles' => ['ROLE_USER', 'ROLE_MEDECIN'],
                'genre' => 'Femme',
                'nom' => 'Boutin',
                'prenom' => 'Sarah',
                'date' => '1985-01-02',
                'adresse' => '7 Allée des Tilleuls, 34000 Montpellier',
                'telephone' => '0689012345',
                'matricule' => '9004',
                'post' => 'Pediatre',
            ],

            // /* ─────────────────────  ROLE_PATIENT  ─────────────────── */
            // [
            //     'email' => 'pat1@coeurdesoins.fr',
            //     'password' => 'Pa1@Tient',
            //     'roles' => ['ROLE_USER', 'ROLE_PATIENT'],
            //     'genre' => 'Femme',
            //     'nom' => 'Moreau',
            //     'prenom' => 'Léa',
            //     'date' => '2001-04-11',
            //     'adresse' => '3 Rue Neuve, 35000 Rennes',
            //     'telephone' => '0690123456',
            //     'numeroSecu' => '295041123456789',
            // ],
            // [
            //     'email' => 'pat2@coeurdesoins.fr',
            //     'password' => 'Pa2@Tient',
            //     'roles' => ['ROLE_USER', 'ROLE_PATIENT'],
            //     'genre' => 'Homme',
            //     'nom' => 'Simon',
            //     'prenom' => 'Axel',
            //     'date' => '1998-08-27',
            //     'adresse' => '9 Chemin Vert, 67000 Strasbourg',
            //     'telephone' => '0701234567',
            //     'numeroSecu' => '198082712345678',
            // ],
            // [
            //     'email' => 'pat3@coeurdesoins.fr',
            //     'password' => 'Pa3@Tient',
            //     'roles' => ['ROLE_USER', 'ROLE_PATIENT'],
            //     'genre' => 'Femme',
            //     'nom' => 'Robin',
            //     'prenom' => 'Ines',
            //     'date' => '1995-12-02',
            //     'adresse' => '11 Rue Victor, 06000 Nice',
            //     'telephone' => '0712345678',
            //     'numeroSecu' => '295120212345678',
            // ],
            // [
            //     'email' => 'pat4@coeurdesoins.fr',
            //     'password' => 'Pa4@Tient',
            //     'roles' => ['ROLE_USER', 'ROLE_PATIENT'],
            //     'genre' => 'Homme',
            //     'nom' => 'Henry',
            //     'prenom' => 'Eliot',
            //     'date' => '2000-02-19',
            //     'adresse' => '14 Rue Gambetta, 80000 Amiens',
            //     'telephone' => '0723456789',
            //     'numeroSecu' => '100021912345678',
            // ],

            /* ─────────────────────  ROLE_INFERMIER  ───────────────── */
            [
                'email' => 'inf1@coeurdesoins.fr',
                'password' => 'In1@Firm',
                'roles' => ['ROLE_USER', 'ROLE_INFERMIER'],
                'genre' => 'Femme',
                'nom' => 'Poirier',
                'prenom' => 'Jade',
                'date' => '1993-05-28',
                'adresse' => '2 Rue Blanche, 37000 Tours',
                'telephone' => '0734567890',
                'matricule' => '3001',
                'telephoneConfiance' => '0611121314',
            ],
            [
                'email' => 'inf2@coeurdesoins.fr',
                'password' => 'In2@Firm',
                'roles' => ['ROLE_USER', 'ROLE_INFERMIER'],
                'genre' => 'Homme',
                'nom' => 'Fabre',
                'prenom' => 'Noah',
                'date' => '1991-11-13',
                'adresse' => '6 Rue du Port, 17000 La Rochelle',
                'telephone' => '0745678901',
                'matricule' => '3002',
                'telephoneConfiance' => '0621314151',
            ],
            [
                'email' => 'inf3@coeurdesoins.fr',
                'password' => 'In3@Firm',
                'roles' => ['ROLE_USER', 'ROLE_INFERMIER'],
                'genre' => 'Femme',
                'nom' => 'Lamy',
                'prenom' => 'Mila',
                'date' => '1989-01-25',
                'adresse' => '18 Rue des Lilas, 72000 Le Mans',
                'telephone' => '0756789012',
                'matricule' => '3003',
                'telephoneConfiance' => '0631415161',
            ],
            [
                'email' => 'inf4@coeurdesoins.fr',
                'password' => 'In4@Firm',
                'roles' => ['ROLE_USER', 'ROLE_INFERMIER'],
                'genre' => 'Homme',
                'nom' => 'Lenoir',
                'prenom' => 'Oscar',
                'date' => '1990-09-09',
                'adresse' => '22 Rue Jean Jaurès, 54000 Nancy',
                'telephone' => '0767890123',
                'matricule' => '3004',
                'telephoneConfiance' => '0641516171',
            ],
        ];

        foreach ($usersData as $data) {
            $user = new User();
            $user
                ->setEmail($data['email'])
                ->setRoles($data['roles'])
                ->setPassword(
                    $this->userPasswordHasher->hashPassword($user, $data['password'])
                )
                ->setNom($data['nom'])
                ->setPrenom($data['prenom'])
                ->setGenre($data['genre'])
                ->setDateNaissance(new \DateTimeImmutable($data['date']))
                ->setAdresse($data['adresse'])
                ->setTelephone($data['telephone']);

            // Champs facultatifs
            $user->setMatricule($data['matricule'] ?? null);
            $user->setPost($data['post'] ?? null);
            $user->setNumeroSecu($data['numeroSecu'] ?? null);
            $user->setTelephoneConfiance($data['telephoneConfiance'] ?? null);

            $manager->persist($user);
        }

        $manager->flush();
    }} 
