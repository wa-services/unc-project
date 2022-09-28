<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220928130216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE billet_client (billet_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', client_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_D8C0F82644973C78 (billet_id), INDEX IDX_D8C0F82619EB6921 (client_id), PRIMARY KEY(billet_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concert_groupe (concert_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', groupe_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_A1B69CA083C97B2E (concert_id), INDEX IDX_A1B69CA07A45358C (groupe_id), PRIMARY KEY(concert_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_technicien (groupe_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', technicien_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_2EC51D907A45358C (groupe_id), INDEX IDX_2EC51D9013457256 (technicien_id), PRIMARY KEY(groupe_id, technicien_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE billet_client ADD CONSTRAINT FK_D8C0F82644973C78 FOREIGN KEY (billet_id) REFERENCES billet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE billet_client ADD CONSTRAINT FK_D8C0F82619EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concert_groupe ADD CONSTRAINT FK_A1B69CA083C97B2E FOREIGN KEY (concert_id) REFERENCES concert (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concert_groupe ADD CONSTRAINT FK_A1B69CA07A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_technicien ADD CONSTRAINT FK_2EC51D907A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_technicien ADD CONSTRAINT FK_2EC51D9013457256 FOREIGN KEY (technicien_id) REFERENCES technicien (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artiste ADD groupe_id BINARY(16) DEFAULT NULL COMMENT \'(DC2Type:uuid)\'');
        $this->addSql('ALTER TABLE artiste ADD CONSTRAINT FK_9C07354F7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX IDX_9C07354F7A45358C ON artiste (groupe_id)');
        $this->addSql('ALTER TABLE billet ADD concert_id BINARY(16) DEFAULT NULL COMMENT \'(DC2Type:uuid)\'');
        $this->addSql('ALTER TABLE billet ADD CONSTRAINT FK_1F034AF683C97B2E FOREIGN KEY (concert_id) REFERENCES concert (id)');
        $this->addSql('CREATE INDEX IDX_1F034AF683C97B2E ON billet (concert_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE billet_client DROP FOREIGN KEY FK_D8C0F82644973C78');
        $this->addSql('ALTER TABLE billet_client DROP FOREIGN KEY FK_D8C0F82619EB6921');
        $this->addSql('ALTER TABLE concert_groupe DROP FOREIGN KEY FK_A1B69CA083C97B2E');
        $this->addSql('ALTER TABLE concert_groupe DROP FOREIGN KEY FK_A1B69CA07A45358C');
        $this->addSql('ALTER TABLE groupe_technicien DROP FOREIGN KEY FK_2EC51D907A45358C');
        $this->addSql('ALTER TABLE groupe_technicien DROP FOREIGN KEY FK_2EC51D9013457256');
        $this->addSql('DROP TABLE billet_client');
        $this->addSql('DROP TABLE concert_groupe');
        $this->addSql('DROP TABLE groupe_technicien');
        $this->addSql('ALTER TABLE artiste DROP FOREIGN KEY FK_9C07354F7A45358C');
        $this->addSql('DROP INDEX IDX_9C07354F7A45358C ON artiste');
        $this->addSql('ALTER TABLE artiste DROP groupe_id');
        $this->addSql('ALTER TABLE billet DROP FOREIGN KEY FK_1F034AF683C97B2E');
        $this->addSql('DROP INDEX IDX_1F034AF683C97B2E ON billet');
        $this->addSql('ALTER TABLE billet DROP concert_id');
    }
}
