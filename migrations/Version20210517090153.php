<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210517090153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE announces (id INT AUTO_INCREMENT NOT NULL, members_id INT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, animal_type VARCHAR(255) NOT NULL, weight INT DEFAULT NULL, image_profil VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, zip_code INT NOT NULL, price INT NOT NULL, creation_at DATETIME NOT NULL, update_at DATETIME NOT NULL, availability_date DATE NOT NULL, INDEX IDX_3B879C65BD01F5ED (members_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE announces ADD CONSTRAINT FK_3B879C65BD01F5ED FOREIGN KEY (members_id) REFERENCES members (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE announces');
    }
}
