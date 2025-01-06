<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231122112742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reset_password_request ADD admin_id INT DEFAULT NULL, ADD student_id INT DEFAULT NULL, ADD instructor_id INT DEFAULT NULL, ADD user VARCHAR(255) DEFAULT NULL, DROP user_type, DROP user_id');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748A642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748ACB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748A8C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('CREATE INDEX IDX_7CE748A642B8210 ON reset_password_request (admin_id)');
        $this->addSql('CREATE INDEX IDX_7CE748ACB944F1A ON reset_password_request (student_id)');
        $this->addSql('CREATE INDEX IDX_7CE748A8C4FC193 ON reset_password_request (instructor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748A642B8210');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748ACB944F1A');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748A8C4FC193');
        $this->addSql('DROP INDEX IDX_7CE748A642B8210 ON reset_password_request');
        $this->addSql('DROP INDEX IDX_7CE748ACB944F1A ON reset_password_request');
        $this->addSql('DROP INDEX IDX_7CE748A8C4FC193 ON reset_password_request');
        $this->addSql('ALTER TABLE reset_password_request ADD user_type VARCHAR(255) NOT NULL, ADD user_id INT NOT NULL, DROP admin_id, DROP student_id, DROP instructor_id, DROP user');
    }
}
