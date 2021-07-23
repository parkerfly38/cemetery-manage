<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210722005931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cemetery (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, google_map_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE deed (id INT AUTO_INCREMENT NOT NULL, cemetery_id INT DEFAULT NULL, lot VARCHAR(5) DEFAULT NULL, lastname1 VARCHAR(255) DEFAULT NULL, firstname1 VARCHAR(255) NOT NULL, middle_initial1 VARCHAR(20) DEFAULT NULL, lastname2 VARCHAR(255) DEFAULT NULL, firstname2 VARCHAR(255) DEFAULT NULL, middle_initial2 VARCHAR(20) DEFAULT NULL, issue_date DATE DEFAULT NULL, notes LONGTEXT DEFAULT NULL, lot2 VARCHAR(5) DEFAULT NULL, INDEX IDX_89498C20EC636C87 (cemetery_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE interment (id INT AUTO_INCREMENT NOT NULL, cemetery_id INT DEFAULT NULL, lot VARCHAR(5) DEFAULT NULL, book VARCHAR(4) DEFAULT NULL, page_number VARCHAR(5) DEFAULT NULL, deceased_date DATE DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, firstname VARCHAR(255) DEFAULT NULL, middle_initial VARCHAR(20) DEFAULT NULL, birth_place VARCHAR(255) DEFAULT NULL, last_residence VARCHAR(255) DEFAULT NULL, age INT DEFAULT NULL, sex VARCHAR(20) DEFAULT NULL, notes LONGTEXT DEFAULT NULL, lot2 VARCHAR(5) DEFAULT NULL, INDEX IDX_3BE29DBFEC636C87 (cemetery_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_34DCD176A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, cemetery_id INT NOT NULL, code VARCHAR(5) DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_2D737AEFEC636C87 (cemetery_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE deed ADD CONSTRAINT FK_89498C20EC636C87 FOREIGN KEY (cemetery_id) REFERENCES cemetery (id)');
        $this->addSql('ALTER TABLE interment ADD CONSTRAINT FK_3BE29DBFEC636C87 FOREIGN KEY (cemetery_id) REFERENCES cemetery (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEFEC636C87 FOREIGN KEY (cemetery_id) REFERENCES cemetery (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE deed DROP FOREIGN KEY FK_89498C20EC636C87');
        $this->addSql('ALTER TABLE interment DROP FOREIGN KEY FK_3BE29DBFEC636C87');
        $this->addSql('ALTER TABLE section DROP FOREIGN KEY FK_2D737AEFEC636C87');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176A76ED395');
        $this->addSql('DROP TABLE cemetery');
        $this->addSql('DROP TABLE deed');
        $this->addSql('DROP TABLE interment');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE user');
    }
}
