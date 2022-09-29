<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220929045211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artiste (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', nom_artiste VARCHAR(255) DEFAULT NULL, prenom_artiste VARCHAR(255) DEFAULT NULL, role_artiste VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE billet (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', prix_billet INT DEFAULT NULL, reference_billet VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', nom_client VARCHAR(255) DEFAULT NULL, prenom_client VARCHAR(255) DEFAULT NULL, date_reservation DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concert (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', nom_concert VARCHAR(255) DEFAULT NULL, date_concert DATE DEFAULT NULL, nom_salle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', nom_groupe VARCHAR(255) DEFAULT NULL, categorie_groupe VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technicien (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', nom_technicien VARCHAR(255) DEFAULT NULL, prenom_technicien VARCHAR(255) DEFAULT NULL, qualif_technicien VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artiste');
        $this->addSql('DROP TABLE billet');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE concert');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE technicien');
    }
}
