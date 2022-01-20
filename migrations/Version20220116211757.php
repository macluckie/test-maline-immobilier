<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220116211757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE apartment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, stage INTEGER NOT NULL, room_number INTEGER NOT NULL, lift BOOLEAN NOT NULL, zip_code INTEGER NOT NULL, city VARCHAR(50) NOT NULL, address VARCHAR(255) NOT NULL, complement VARCHAR(100) NOT NULL, picture_file_name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4D7E6854D4E6F81 ON apartment (address)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE apartment');
    }
}
