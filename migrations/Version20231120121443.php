<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231120121443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE donation (id INT AUTO_INCREMENT NOT NULL, montant INT NOT NULL, numero_mobile INT NOT NULL, address VARCHAR(1000) NOT NULL, code_postal INT NOT NULL, nom VARCHAR(1000) NOT NULL, prenom VARCHAR(1000) NOT NULL, email VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, numero_mobile VARCHAR(1110) NOT NULL, description VARCHAR(1110) NOT NULL, objet VARCHAR(1110) NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(1000) NOT NULL, email VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin CHANGE resetToken reset_token VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_Instructor_Cmnt');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_Post_Cmnt');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_Student_Cmnt');
        $this->addSql('ALTER TABLE cmnt CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE likes likes INT NOT NULL, CHANGE dislikes dislikes INT NOT NULL');
        $this->addSql('DROP INDEX fk_student_cmnt ON cmnt');
        $this->addSql('CREATE INDEX IDX_E4CE2C8ECB944F1A ON cmnt (student_id)');
        $this->addSql('DROP INDEX fk_instructor_cmnt ON cmnt');
        $this->addSql('CREATE INDEX IDX_E4CE2C8E8C4FC193 ON cmnt (instructor_id)');
        $this->addSql('DROP INDEX fk_post_cmnt ON cmnt');
        $this->addSql('CREATE INDEX IDX_E4CE2C8E4B89032C ON cmnt (post_id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_Instructor_Cmnt FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_Post_Cmnt FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_Student_Cmnt FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE course CHANGE title title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE instructor CHANGE resetToken reset_token VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_Instructor');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_Student');
        $this->addSql('ALTER TABLE post CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE likes likes INT NOT NULL, CHANGE dislikes dislikes INT NOT NULL');
        $this->addSql('DROP INDEX fk_student ON post');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DCB944F1A ON post (student_id)');
        $this->addSql('DROP INDEX fk_instructor ON post');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D8C4FC193 ON post (instructor_id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_Instructor FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_Student FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY courseId');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6C2B73C54 FOREIGN KEY (courseId) REFERENCES course (courseId)');
        $this->addSql('ALTER TABLE student CHANGE resetToken reset_token VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE donation');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('ALTER TABLE admin CHANGE reset_token resetToken VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8ECB944F1A');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8E8C4FC193');
        $this->addSql('ALTER TABLE cmnt DROP FOREIGN KEY FK_E4CE2C8E4B89032C');
        $this->addSql('ALTER TABLE cmnt CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL, CHANGE likes likes INT DEFAULT NULL, CHANGE dislikes dislikes INT DEFAULT NULL');
        $this->addSql('DROP INDEX idx_e4ce2c8e4b89032c ON cmnt');
        $this->addSql('CREATE INDEX FK_Post_Cmnt ON cmnt (post_id)');
        $this->addSql('DROP INDEX idx_e4ce2c8ecb944f1a ON cmnt');
        $this->addSql('CREATE INDEX FK_Student_Cmnt ON cmnt (student_id)');
        $this->addSql('DROP INDEX idx_e4ce2c8e8c4fc193 ON cmnt');
        $this->addSql('CREATE INDEX FK_Instructor_Cmnt ON cmnt (instructor_id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8ECB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8E8C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('ALTER TABLE cmnt ADD CONSTRAINT FK_E4CE2C8E4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE course CHANGE title title VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE instructor CHANGE reset_token resetToken VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DCB944F1A');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D8C4FC193');
        $this->addSql('ALTER TABLE post CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL, CHANGE likes likes INT DEFAULT NULL, CHANGE dislikes dislikes INT DEFAULT NULL');
        $this->addSql('DROP INDEX idx_5a8a6c8d8c4fc193 ON post');
        $this->addSql('CREATE INDEX FK_Instructor ON post (instructor_id)');
        $this->addSql('DROP INDEX idx_5a8a6c8dcb944f1a ON post');
        $this->addSql('CREATE INDEX FK_Student ON post (student_id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DCB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D8C4FC193 FOREIGN KEY (instructor_id) REFERENCES instructor (id)');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6C2B73C54');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT courseId FOREIGN KEY (courseId) REFERENCES course (courseId) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student CHANGE reset_token resetToken VARCHAR(255) DEFAULT NULL');
    }
}
