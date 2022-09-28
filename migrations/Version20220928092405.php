<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220928092405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE technicien_groupe DROP FOREIGN KEY FK_67D56B5F13457256');
        $this->addSql('ALTER TABLE technicien_groupe DROP FOREIGN KEY FK_67D56B5F7A45358C');
        $this->addSql('ALTER TABLE groupe_concert DROP FOREIGN KEY FK_131BE59C7A45358C');
        $this->addSql('ALTER TABLE groupe_concert DROP FOREIGN KEY FK_131BE59C83C97B2E');
        $this->addSql('ALTER TABLE concert_groupe DROP FOREIGN KEY FK_A1B69CA07A45358C');
        $this->addSql('ALTER TABLE concert_groupe DROP FOREIGN KEY FK_A1B69CA083C97B2E');
        $this->addSql('DROP TABLE technicien_groupe');
        $this->addSql('DROP TABLE groupe_concert');
        $this->addSql('DROP TABLE concert_groupe');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE technicien_groupe (technicien_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_67D56B5F7A45358C (groupe_id), INDEX IDX_67D56B5F13457256 (technicien_id), PRIMARY KEY(technicien_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE groupe_concert (groupe_id INT NOT NULL, concert_id INT NOT NULL, INDEX IDX_131BE59C83C97B2E (concert_id), INDEX IDX_131BE59C7A45358C (groupe_id), PRIMARY KEY(groupe_id, concert_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE concert_groupe (concert_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_A1B69CA07A45358C (groupe_id), INDEX IDX_A1B69CA083C97B2E (concert_id), PRIMARY KEY(concert_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE technicien_groupe ADD CONSTRAINT FK_67D56B5F13457256 FOREIGN KEY (technicien_id) REFERENCES technicien (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE technicien_groupe ADD CONSTRAINT FK_67D56B5F7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_concert ADD CONSTRAINT FK_131BE59C7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_concert ADD CONSTRAINT FK_131BE59C83C97B2E FOREIGN KEY (concert_id) REFERENCES concert (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concert_groupe ADD CONSTRAINT FK_A1B69CA07A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concert_groupe ADD CONSTRAINT FK_A1B69CA083C97B2E FOREIGN KEY (concert_id) REFERENCES concert (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
