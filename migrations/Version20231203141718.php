<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231203141718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cmnt (id INT AUTO_INCREMENT NOT NULL, student_id INT DEFAULT NULL, instructor_id INT DEFAULT NULL, post_id INT DEFAULT NULL, content VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', likes INT NOT NULL, dislikes INT NOT NULL, INDEX IDX_E4CE2C8ECB944F1A (student_id), INDEX IDX_E4CE2C8E8C4FC193 (instructor_id), INDEX IDX_E4CE2C8E4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, student_id INT DEFAULT NULL, instructor_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', likes INT NOT NULL, dislikes INT NOT NULL, INDEX IDX_5A8A6C8DCB944F1A (student_id), INDEX IDX_5A8A6C8D8C4FC193 (instructor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8ECB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8E8C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8E4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DCB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D8C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES admin (id)');
        $this->addSql('ALTER TABLE admin ADD reset_token VARCHAR(255) DEFAULT NULL, ADD verification_code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE course CHANGE title title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE instructor ADD reset_token VARCHAR(255) DEFAULT NULL, ADD is_verified TINYINT(1) NOT NULL, ADD verification_code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE student ADD reset_token VARCHAR(255) DEFAULT NULL, ADD is_verified TINYINT(1) NOT NULL, ADD verification_code VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8ECB944F1A');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8E8C4FC193');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8E4B89032C');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DCB944F1A');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D8C4FC193');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE cmnt');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE admin DROP reset_token, DROP verification_code');
        $this->addSql('ALTER TABLE course CHANGE title title VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE instructor DROP reset_token, DROP is_verified, DROP verification_code');
        $this->addSql('ALTER TABLE student DROP reset_token, DROP is_verified, DROP verification_code, CHANGE id id INT NOT NULL');
    }
}
