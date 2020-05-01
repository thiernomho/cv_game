<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200501155656 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE club (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, country VARCHAR(60) NOT NULL, logo VARCHAR(255) DEFAULT NULL, full_name VARCHAR(150) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club_championnat (club_id INT NOT NULL, championnat_id INT NOT NULL, INDEX IDX_D44A9AAB61190A32 (club_id), INDEX IDX_D44A9AAB627A0DA8 (championnat_id), PRIMARY KEY(club_id, championnat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE club_championnat ADD CONSTRAINT FK_D44A9AAB61190A32 FOREIGN KEY (club_id) REFERENCES club (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE club_championnat ADD CONSTRAINT FK_D44A9AAB627A0DA8 FOREIGN KEY (championnat_id) REFERENCES championnat (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE club_championnat DROP FOREIGN KEY FK_D44A9AAB61190A32');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE club_championnat');
    }
}
