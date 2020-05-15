<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200515192435 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cote (id INT AUTO_INCREMENT NOT NULL, cote_value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE match_foot_ball (id INT AUTO_INCREMENT NOT NULL, championat_id INT DEFAULT NULL, equipe_domicile_id INT NOT NULL, equipe_externe_id INT DEFAULT NULL, cote_null_id INT DEFAULT NULL, cote_externe_id INT DEFAULT NULL, cote_domicile_id INT DEFAULT NULL, but_club_domicile INT NOT NULL, but_club_externe INT NOT NULL, date_match DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, INDEX IDX_DB72AEBA8E5873AB (championat_id), INDEX IDX_DB72AEBA5FE1AEAD (equipe_domicile_id), INDEX IDX_DB72AEBAB1881EA3 (equipe_externe_id), INDEX IDX_DB72AEBAB6317F15 (cote_null_id), INDEX IDX_DB72AEBA7121F6E (cote_externe_id), INDEX IDX_DB72AEBABA828AA1 (cote_domicile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(25) NOT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(254) NOT NULL, is_active TINYINT(1) NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3F85E0677 (username), UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE match_foot_ball ADD CONSTRAINT FK_DB72AEBA8E5873AB FOREIGN KEY (championat_id) REFERENCES championnat (id)');
        $this->addSql('ALTER TABLE match_foot_ball ADD CONSTRAINT FK_DB72AEBA5FE1AEAD FOREIGN KEY (equipe_domicile_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE match_foot_ball ADD CONSTRAINT FK_DB72AEBAB1881EA3 FOREIGN KEY (equipe_externe_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE match_foot_ball ADD CONSTRAINT FK_DB72AEBAB6317F15 FOREIGN KEY (cote_null_id) REFERENCES cote (id)');
        $this->addSql('ALTER TABLE match_foot_ball ADD CONSTRAINT FK_DB72AEBA7121F6E FOREIGN KEY (cote_externe_id) REFERENCES cote (id)');
        $this->addSql('ALTER TABLE match_foot_ball ADD CONSTRAINT FK_DB72AEBABA828AA1 FOREIGN KEY (cote_domicile_id) REFERENCES cote (id)');
        $this->addSql('ALTER TABLE club CHANGE logo logo VARCHAR(255) DEFAULT NULL, CHANGE full_name full_name VARCHAR(150) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE match_foot_ball DROP FOREIGN KEY FK_DB72AEBAB6317F15');
        $this->addSql('ALTER TABLE match_foot_ball DROP FOREIGN KEY FK_DB72AEBA7121F6E');
        $this->addSql('ALTER TABLE match_foot_ball DROP FOREIGN KEY FK_DB72AEBABA828AA1');
        $this->addSql('DROP TABLE cote');
        $this->addSql('DROP TABLE match_foot_ball');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE club CHANGE logo logo VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE full_name full_name VARCHAR(150) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
