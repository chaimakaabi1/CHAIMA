<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231213015305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnemnt (id_abonnement INT AUTO_INCREMENT NOT NULL, user VARCHAR(255) NOT NULL, cours VARCHAR(255) NOT NULL, type_abonnement VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, date_debut DATE NOT NULL, date_expiration DATE NOT NULL, PRIMARY KEY(id_abonnement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chapitre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT \'NULL\', description TEXT DEFAULT \'NULL\', creationDate DATE DEFAULT NULL, type INT DEFAULT NULL, courseId INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chapitrefile (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT \'NULL\', content LONGBLOB DEFAULT \'NULL\', chapitreId INT DEFAULT NULL, INDEX chapitreId (chapitreId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chapitrequizz (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT \'NULL\', questions TEXT DEFAULT \'NULL\', answers TEXT DEFAULT \'NULL\', correctAnswers VARCHAR(255) DEFAULT \'NULL\', chapitreId INT DEFAULT NULL, INDEX chapitreId (chapitreId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id_payment INT AUTO_INCREMENT NOT NULL, card_number VARCHAR(255) NOT NULL, expiration_date DATE NOT NULL, eight_card VARCHAR(255) NOT NULL, PRIMARY KEY(id_payment)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chapitrefile ADD CONSTRAINT FK_6DE8512292FACFB FOREIGN KEY (chapitreId) REFERENCES chapitre (id)');
        $this->addSql('ALTER TABLE chapitrequizz ADD CONSTRAINT FK_B441B1DA92FACFB FOREIGN KEY (chapitreId) REFERENCES chapitre (id)');
        $this->addSql('ALTER TABLE admin ADD is_verified TINYINT(1) NOT NULL, ADD verification_code VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cmnt CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8ECB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8E8C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8E4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE course CHANGE courseId courseId BIGINT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE donation CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE instructor ADD is_verified TINYINT(1) NOT NULL, ADD verification_code VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_31FC43DDF85E0677 ON instructor (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_31FC43DDE7927C74 ON instructor (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_31FC43DDE85E83E4 ON instructor (phoneNumber)');
        $this->addSql('ALTER TABLE post CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DCB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D8C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DCB944F1A ON post (student_id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D8C4FC193 ON post (instructor_id)');
        $this->addSql('ALTER TABLE reclamation ADD student_id INT DEFAULT NULL, ADD status VARCHAR(255) DEFAULT \'En cours de traitement\', CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('CREATE INDEX IDX_CE606404CB944F1A ON reclamation (student_id)');
        $this->addSql('ALTER TABLE reset_password_request CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES admin (id)');
        $this->addSql('CREATE INDEX IDX_7CE748AA76ED395 ON reset_password_request (user_id)');
        $this->addSql('ALTER TABLE review CHANGE reviewId reviewId BIGINT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (reviewId)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6C2B73C54 FOREIGN KEY (courseId) REFERENCES course (courseId)');
        $this->addSql('CREATE INDEX IDX_794381C6C2B73C54 ON review (courseId)');
        $this->addSql('ALTER TABLE student ADD is_verified TINYINT(1) NOT NULL, ADD verification_code VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33F85E0677 ON student (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33E7927C74 ON student (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33E85E83E4 ON student (phoneNumber)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitrefile DROP FOREIGN KEY FK_6DE8512292FACFB');
        $this->addSql('ALTER TABLE chapitrequizz DROP FOREIGN KEY FK_B441B1DA92FACFB');
        $this->addSql('DROP TABLE abonnemnt');
        $this->addSql('DROP TABLE chapitre');
        $this->addSql('DROP TABLE chapitrefile');
        $this->addSql('DROP TABLE chapitrequizz');
        $this->addSql('DROP TABLE payment');
        $this->addSql('ALTER TABLE admin DROP is_verified, DROP verification_code, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8ECB944F1A');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8E8C4FC193');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8E4B89032C');
        $this->addSql('ALTER TABLE cmnt CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE course CHANGE courseId courseId BIGINT NOT NULL');
        $this->addSql('ALTER TABLE donation MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON donation');
        $this->addSql('ALTER TABLE donation CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE instructor MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_31FC43DDF85E0677 ON instructor');
        $this->addSql('DROP INDEX UNIQ_31FC43DDE7927C74 ON instructor');
        $this->addSql('DROP INDEX UNIQ_31FC43DDE85E83E4 ON instructor');
        $this->addSql('DROP INDEX `primary` ON instructor');
        $this->addSql('ALTER TABLE instructor DROP is_verified, DROP verification_code, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages MODIFY id BIGINT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON messenger_messages');
        $this->addSql('DROP INDEX IDX_75EA56E0FB7336F0 ON messenger_messages');
        $this->addSql('DROP INDEX IDX_75EA56E0E3BD61CE ON messenger_messages');
        $this->addSql('DROP INDEX IDX_75EA56E016BA31DB ON messenger_messages');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE post MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DCB944F1A');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D8C4FC193');
        $this->addSql('DROP INDEX IDX_5A8A6C8DCB944F1A ON post');
        $this->addSql('DROP INDEX IDX_5A8A6C8D8C4FC193 ON post');
        $this->addSql('DROP INDEX `primary` ON post');
        $this->addSql('ALTER TABLE post CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404CB944F1A');
        $this->addSql('DROP INDEX IDX_CE606404CB944F1A ON reclamation');
        $this->addSql('DROP INDEX `primary` ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP student_id, DROP status, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reset_password_request MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP INDEX IDX_7CE748AA76ED395 ON reset_password_request');
        $this->addSql('DROP INDEX `primary` ON reset_password_request');
        $this->addSql('ALTER TABLE reset_password_request CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE review MODIFY reviewId BIGINT NOT NULL');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6C2B73C54');
        $this->addSql('DROP INDEX IDX_794381C6C2B73C54 ON review');
        $this->addSql('DROP INDEX `primary` ON review');
        $this->addSql('ALTER TABLE review CHANGE reviewId reviewId BIGINT NOT NULL');
        $this->addSql('ALTER TABLE student MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_B723AF33F85E0677 ON student');
        $this->addSql('DROP INDEX UNIQ_B723AF33E7927C74 ON student');
        $this->addSql('DROP INDEX UNIQ_B723AF33E85E83E4 ON student');
        $this->addSql('DROP INDEX `primary` ON student');
        $this->addSql('ALTER TABLE student DROP is_verified, DROP verification_code, CHANGE id id INT NOT NULL');
    }
}
