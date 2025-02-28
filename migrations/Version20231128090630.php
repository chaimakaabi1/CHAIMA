<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231128090630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin ADD verification_code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE instructor ADD verification_code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE student ADD verification_code VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin DROP verification_code');
        $this->addSql('ALTER TABLE instructor DROP verification_code');
        $this->addSql('ALTER TABLE student DROP verification_code');
    }
}
