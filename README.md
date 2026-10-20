# Cœur de Soins

Application web de gestion hospitalière destinée aux professionnels de santé. Le projet centralise les informations liées aux patients et à leur suivi médical dans une interface développée avec Symfony.


## Sommaire

- [Cœur de Soins](#cœur-de-soins)
  - [Sommaire](#sommaire)
  - [Fonctionnalités](#fonctionnalités)
  - [Technologies](#technologies)
  - [Prérequis](#prérequis)
  - [Installation](#installation)
    - [Commandes utiles](#commandes-utiles)
  - [Tests](#tests)
  - [Structure du projet](#structure-du-projet)
  - [Documentation du projet](#documentation-du-projet)
  - [Sécurité et données](#sécurité-et-données)
  - [Équipe](#équipe)

## Fonctionnalités

Le projet comprend des modules consacrés à :

- la gestion des utilisateurs et des profils (administratif, médecin, infirmier, patient) ;
- la gestion des dossiers médicaux et des patients ;
- le suivi des consultations et des rendez-vous ;
- la gestion des prescriptions et des observations ;
- l'ajout et la gestion d'images médicales ;
- la gestion des spécialités.

Les fonctionnalités et les permissions disponibles peuvent évoluer. Les rôles et règles d'accès doivent être vérifiés dans l'application avant toute utilisation opérationnelle.

## Technologies

| Domaine | Outils |
| --- | --- |
| Backend | PHP 8.2 ou supérieur, Symfony 7.2 |
| Templates | Twig |
| Persistance | Doctrine ORM, PostgreSQL |
| Frontend | JavaScript, CSS, Symfony UX, Webpack Encore |
| Infrastructure locale | Docker Compose (base de données, Mailpit) |
| Tests | PHPUnit |

## Prérequis

- PHP 8.2 ou supérieur et les extensions requises par Symfony et Doctrine (dont `pdo_pgsql`) ;
- [Composer](https://getcomposer.org/) ;
- Node.js et npm ;
- Docker avec Docker Compose ;
- [Symfony CLI](https://symfony.com/download), pour lancer facilement le serveur de développement.

## Installation

1. **Clonez le dépôt et installez les dépendances PHP :**

   ```bash
   git clone https://github.com/Dmytriyev/hopital_Coeur_de_Soins.git
   cd hopital_Coeur_de_Soins
   composer install
   ```

2. **Démarrez PostgreSQL :**

   ```bash
   docker compose up -d database
   ```

   Le port 5432 du conteneur est publié sur un port aléatoire de la machine hôte. Pour le connaître :

   ```bash
   docker compose port database 5432
   ```

3. **Configurez la connexion à la base de données** dans un fichier local `.env.local` à la racine du projet (non versionné). Ce fichier remplace la valeur par défaut de `.env`. Renseignez le port relevé à l'étape précédente et les identifiants définis dans `compose.yaml` :

   ```dotenv
   DATABASE_URL="postgresql://UTILISATEUR:MOT_DE_PASSE@127.0.0.1:PORT/NOM_BASE?serverVersion=16&charset=utf8"
   ```

   Remplacez les identifiants de développement avant tout déploiement.

4. **Créez la base et appliquez les migrations :**

   ```bash
   php bin/console doctrine:database:create --if-not-exists
   php bin/console doctrine:migrations:migrate
   ```

5. **Installez et compilez les ressources frontend :**

   ```bash
   npm ci
   npm run dev
   ```

6. **Lancez le serveur de développement Symfony :**

   ```bash
   symfony server:start
   ```

   Ouvrez ensuite l'adresse affichée par Symfony CLI dans votre navigateur.

### Commandes utiles

| Commande | Rôle |
| --- | --- |
| `npm run dev` | Compile les ressources en mode développement |
| `npm run watch` | Recompile automatiquement à chaque modification |
| `npm run build` | Génère les ressources optimisées pour la production |

`npm run build` ne constitue pas à elle seule une procédure de déploiement en production.

Le service Mailpit défini dans `compose.override.yaml` peut être démarré avec `docker compose up -d mailer` pour intercepter les e-mails en développement (interface web sur le port publié pour 8025 ; `docker compose port mailer 8025`).

## Tests

Lancez la suite de tests PHPUnit avec :

```bash
php bin/phpunit
```

## Structure du projet

```text
├── assets/           Ressources frontend (JS, CSS, contrôleurs Stimulus)
├── config/           Configuration Symfony
├── documentation/    Conception, maquettes, diagrammes, planning
├── migrations/       Migrations Doctrine
├── public/           Point d'entrée web
├── src/
│   ├── Controller/   Contrôleurs (consultations, dossiers médicaux, RDV, ...)
│   ├── Entity/       Entités Doctrine (User, DossierMedical, Consultation, ...)
│   └── Form/         Formulaires Symfony
├── templates/        Vues Twig
├── tests/            Tests PHPUnit
└── compose.yaml      Services Docker (PostgreSQL)
```

## Documentation du projet

Les documents de conception et de suivi sont disponibles dans [`documentation/`](./documentation/) :

- [Charte graphique](./documentation/Charte_graphique.md)
- [Maquette](./documentation/Maquette.pdf)
- [Planning](./documentation/Planning.png)
- [Diagramme de classes UML](./documentation/Diagramme%20de%20classe%20uml.jpg)
- [Diagramme de cas d'utilisation UML](./documentation/useCase%20uml.jpg)
- [Modèle physique de données](./documentation/MPD.png)
- [Plan du site](./documentation/sitemap.png)

## Sécurité et données

Le projet vise un usage interne à l'hôpital et manipule des données particulièrement sensibles. Un déploiement réel nécessite notamment une revue des autorisations, de l'authentification, de la protection des fichiers téléversés, des sauvegardes, du chiffrement et de la configuration réseau. Le réseau interne seul ne remplace pas ces mesures.

N'ajoutez pas de données personnelles ou médicales, de mots de passe, de clés ou d'autres secrets au dépôt. Utilisez une configuration locale non versionnée (`.env.local`) pour les paramètres propres à votre environnement.

## Équipe

- **Développeur :** Dmytriyev Savva
- **Responsable du projet :** Gille Bonenfant
