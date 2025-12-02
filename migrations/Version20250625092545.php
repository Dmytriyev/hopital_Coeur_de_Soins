<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250625092545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE consultation (id INT AUTO_INCREMENT NOT NULL, dossier_medical_id INT NOT NULL, date_consultation DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', compte_rendu LONGTEXT NOT NULL, INDEX IDX_964685A67750B79F (dossier_medical_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dossier_medical (id INT AUTO_INCREMENT NOT NULL, dossier_patient_id INT NOT NULL, numero_dossier INT NOT NULL, date_creation DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', nom_medecin VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', UNIQUE INDEX UNIQ_3581EE6245F3D65C (dossier_patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, image_dossier_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, update_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_C53D045FDC21B60 (image_dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE observation (id INT AUTO_INCREMENT NOT NULL, dossier_medical_id INT NOT NULL, observation LONGTEXT NOT NULL, date_observation DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', matricule INT NOT NULL, INDEX IDX_C576DBE07750B79F (dossier_medical_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE prescription (id INT AUTO_INCREMENT NOT NULL, consultation_id INT NOT NULL, traitement LONGTEXT NOT NULL, period VARCHAR(255) NOT NULL, INDEX IDX_1FBFB8D962FF6CDF (consultation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, rdv_patient_id INT NOT NULL, rdv_medecin_id INT DEFAULT NULL, date_rdv DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_10C31F86BCC2491E (rdv_patient_id), INDEX IDX_10C31F86D3B8C1E3 (rdv_medecin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, nom_specialite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE specialite_user (specialite_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5048E28F2195E0F0 (specialite_id), INDEX IDX_5048E28FA76ED395 (user_id), PRIMARY KEY(specialite_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL COMMENT '(DC2Type:date_immutable)', adresse LONGTEXT NOT NULL, telephone INT DEFAULT NULL, matricule INT DEFAULT NULL, post VARCHAR(255) DEFAULT NULL, numero_secu VARCHAR(255) DEFAULT NULL, telephone_confiance INT DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_user (user_source INT NOT NULL, user_target INT NOT NULL, INDEX IDX_F7129A803AD8644E (user_source), INDEX IDX_F7129A80233D34C1 (user_target), PRIMARY KEY(user_source, user_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE consultation ADD CONSTRAINT FK_964685A67750B79F FOREIGN KEY (dossier_medical_id) REFERENCES dossier_medical (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dossier_medical ADD CONSTRAINT FK_3581EE6245F3D65C FOREIGN KEY (dossier_patient_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE image ADD CONSTRAINT FK_C53D045FDC21B60 FOREIGN KEY (image_dossier_id) REFERENCES dossier_medical (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE observation ADD CONSTRAINT FK_C576DBE07750B79F FOREIGN KEY (dossier_medical_id) REFERENCES dossier_medical (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE prescription ADD CONSTRAINT FK_1FBFB8D962FF6CDF FOREIGN KEY (consultation_id) REFERENCES consultation (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86BCC2491E FOREIGN KEY (rdv_patient_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86D3B8C1E3 FOREIGN KEY (rdv_medecin_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE specialite_user ADD CONSTRAINT FK_5048E28F2195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE specialite_user ADD CONSTRAINT FK_5048E28FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user ADD CONSTRAINT FK_F7129A803AD8644E FOREIGN KEY (user_source) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user ADD CONSTRAINT FK_F7129A80233D34C1 FOREIGN KEY (user_target) REFERENCES user (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE consultation DROP FOREIGN KEY FK_964685A67750B79F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE dossier_medical DROP FOREIGN KEY FK_3581EE6245F3D65C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE image DROP FOREIGN KEY FK_C53D045FDC21B60
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE observation DROP FOREIGN KEY FK_C576DBE07750B79F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE prescription DROP FOREIGN KEY FK_1FBFB8D962FF6CDF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86BCC2491E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86D3B8C1E3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE specialite_user DROP FOREIGN KEY FK_5048E28F2195E0F0
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE specialite_user DROP FOREIGN KEY FK_5048E28FA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user DROP FOREIGN KEY FK_F7129A803AD8644E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_user DROP FOREIGN KEY FK_F7129A80233D34C1
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE consultation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dossier_medical
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE image
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE observation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE prescription
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE rdv
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE specialite
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE specialite_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
