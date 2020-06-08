<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200606131725 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE achat CHANGE Date_achat date_achat DATETIME NOT NULL, CHANGE Prix prix INT NOT NULL, CHANGE Code code VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE avis CHANGE Date_avis date_avis DATETIME NOT NULL');
        $this->addSql('ALTER TABLE jeux CHANGE nom_jeux nom_jeux VARCHAR(50) NOT NULL, CHANGE description description VARCHAR(500) NOT NULL, CHANGE image image VARCHAR(50) NOT NULL, CHANGE notem notem INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE DateN daten DATETIME NOT NULL, CHANGE Solde solde INT NOT NULL');
        $this->addSql('ALTER TABLE vente CHANGE Prix prix INT NOT NULL, CHANGE Date_vente date_vente DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE achat CHANGE date_achat Date_achat DATE NOT NULL, CHANGE prix Prix NUMERIC(8, 0) NOT NULL, CHANGE code Code INT NOT NULL');
        $this->addSql('ALTER TABLE avis CHANGE date_avis Date_avis DATE NOT NULL');
        $this->addSql('ALTER TABLE jeux CHANGE nom_jeux nom_jeux VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE description description VARCHAR(1000) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE image image VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE notem notem NUMERIC(10, 0) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE daten DateN DATE NOT NULL, CHANGE solde Solde NUMERIC(10, 0) NOT NULL');
        $this->addSql('ALTER TABLE vente CHANGE prix Prix NUMERIC(10, 0) NOT NULL, CHANGE date_vente Date_vente DATE NOT NULL');
    }
}
