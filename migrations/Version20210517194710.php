<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210517194710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD last_name VARCHAR(255) NOT NULL, ADD profil_image VARCHAR(255) DEFAULT NULL, ADD city VARCHAR(100) NOT NULL, ADD zip_code INT NOT NULL, ADD birth_date DATE NOT NULL, ADD animal_type VARCHAR(100) NOT NULL, ADD inscription_at DATETIME NOT NULL, ADD reservation_at DATETIME NOT NULL, ADD rgpd TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP last_name, DROP profil_image, DROP city, DROP zip_code, DROP birth_date, DROP animal_type, DROP inscription_at, DROP reservation_at, DROP rgpd');
    }
}
