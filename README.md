# Cahier des Charges - Site-Application Cœur de Soins

## 1. Présentation du Projet

* **Nom du projet :** Cœur de Soins
* **Type :** Site-Application interne pour un hôpital
* **Objectif :** Permettre aux médecins et infirmiers de gérer les patients, leurs traitements, et leurs informations médicales de manière centralisée.
* **Utilisateur cible :** Médecins, Infirmiers, et Administrateurs de l'hôpital.
* **Accès :** Interne uniquement, aucune connexion externe autorisée.

## 2. Objectifs Fonctionnels

* Gestion des Utilisateurs : Création, modification et suppression de comptes pour les médecins, infirmiers, et administrateurs.
* Gestion des Patients : Ajout, modification, suppression et visualisation des informations des patients.
* Gestion des Traitements : Attribution de traitements personnalisés aux patients, possibilité de joindre des images IRM.
* Gestion des Chambres : Suivi des chambres occupées par les patients.
* Attribution d'un Médecin Principal : Association de chaque patient à un médecin référent.

## 3. Gestion des Rôles et Permissions

* **Administrateur :**

  * Peut créer, modifier et supprimer des utilisateurs.
  * Peut gérer les rôles des utilisateurs.

* **Médecin :**

  * Peut créer, modifier et consulter les fiches médicales des patients a lui associé.
  * Peut ajouter des images IRM aux fiches médicales.
  * Peut consulter les informations des patients.

* **Infirmier :**

  * Peut ajouter des observations aux fiches médicales.

* **Utilisateur Lecture Seule :**

  * Peut uniquement consulter les information general.

## 4. Gestion des Patients

* Chaque patient a une fiche médicale comprenant les informations suivantes :

  * Nom, prénom, date de naissance, adresse, numéro de téléphone d'une persone de confiance.
  * Numéro de dossier.
  * Chambre attribuée.
  * Médecin principal.
  * Traitement personnalisé.
  * Observations de l’infirmier.
  * Images IRM (téléchargeables par les médecins uniquement).

## 5. Gestion des Medcins

* Chaque medcin a une fiche de profile comprenant les informations suivantes :

  * Nom, prénom, date de naissance, telephone. 
  * Profession, Spécialisation

## 6. Gestion des Infirmiers

* Chaque infirmier a une fiche de profile comprenant les informations suivantes :

  * Nom, prénom, date de naissance, telephone.

## 5. Sécurité

* Accès restreint uniquement au réseau de l’hôpital.
* Absense de possibilitte de telechargement de dossiers.
* Authentification sécurisée pour chaque utilisateur.
* Les données des patients doivent être protégées par un système de permissions.

## 6. Architecture du Système

* Frontend : JavaScript, HTML, CSS (avec Twig pour les templates).
* Backend : PHP avec Symfony.
* Base de Données : MySQL ou PostgreSQL.
* Hébergement : Serveur externe sécurisé.

## 7. Maquette et Interface

* Interface utilisateur intuitive pour une prise en main rapide.
* Design adapté aux besoins médicaux (accès rapide aux patients, traitements et chambres).
* Charte graphique incus.

## 8. Gestion de Projet

* Developpeur : Dmytriyev Savva
* Responsable du projet : Gille Bonenfant
* Durée estimée : 1 mois
* Phases : Preparation, Conception, Développement, Test.

## 9. Planning

* Conception UML : diagrammes de cas d'utilisation et diagramme de classes : 14/05/2025
* Création du site et mise en place de la BDD : 16/05/2025
* Réalisation des différentes fonctionnalités: du 19/05/2025   au 20/06/2025
