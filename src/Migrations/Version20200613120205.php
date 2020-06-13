<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200613120205 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_collectioncollectionfieldtypes_r ADD id INT UNSIGNED AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE xenoblade_collectioncollectionfieldtypes_r CHANGE colid colid INT DEFAULT NULL, CHANGE colftid colftid INT DEFAULT NULL, CHANGE iid iid INT DEFAULT NULL, CHANGE stid stid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_59679E91C4D85A3E ON xenoblade_collectioncollectionfieldtypes_r (colid)');
        $this->addSql('CREATE INDEX IDX_59679E913107B339 ON xenoblade_collectioncollectionfieldtypes_r (colftid)');
        $this->addSql('CREATE INDEX IDX_59679E9146A75C12 ON xenoblade_collectioncollectionfieldtypes_r (iid)');
        $this->addSql('CREATE INDEX IDX_59679E91F5D6654D ON xenoblade_collectioncollectionfieldtypes_r (stid)');
        $this->addSql('ALTER TABLE xenoblade_crystaljewel_r CHANGE crid crid INT DEFAULT NULL, CHANGE iid iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_26D9B0BCA1424E60 ON xenoblade_crystaljewel_r (crid)');
        $this->addSql('CREATE INDEX IDX_26D9B0BC46A75C12 ON xenoblade_crystaljewel_r (iid)');
        $this->addSql('ALTER TABLE xenoblade_jewelethervein_r CHANGE iid iid INT DEFAULT NULL, CHANGE evid evid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_26D5440946A75C12 ON xenoblade_jewelethervein_r (iid)');
        $this->addSql('CREATE INDEX IDX_26D544098320B960 ON xenoblade_jewelethervein_r (evid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('ALTER TABLE xenoblade_collectioncollectionfieldtypes_r MODIFY id INT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_collectioncollectionfieldtypes_r DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE xenoblade_collectioncollectionfieldtypes_r DROP id');
        $this->addSql('DROP INDEX IDX_59679E91C4D85A3E ON xenoblade_collectioncollectionfieldtypes_r');
        $this->addSql('DROP INDEX IDX_59679E913107B339 ON xenoblade_collectioncollectionfieldtypes_r');
        $this->addSql('DROP INDEX IDX_59679E9146A75C12 ON xenoblade_collectioncollectionfieldtypes_r');
        $this->addSql('DROP INDEX IDX_59679E91F5D6654D ON xenoblade_collectioncollectionfieldtypes_r');
        $this->addSql('ALTER TABLE xenoblade_collectioncollectionfieldtypes_r CHANGE colid colid INT NOT NULL, CHANGE colftid colftid INT NOT NULL, CHANGE iid iid INT NOT NULL, CHANGE stid stid INT NOT NULL');
        $this->addSql('DROP INDEX IDX_26D9B0BCA1424E60 ON xenoblade_crystaljewel_r');
        $this->addSql('DROP INDEX IDX_26D9B0BC46A75C12 ON xenoblade_crystaljewel_r');
        $this->addSql('ALTER TABLE xenoblade_crystaljewel_r CHANGE crid crid INT NOT NULL, CHANGE iid iid INT NOT NULL');
        $this->addSql('DROP INDEX IDX_26D5440946A75C12 ON xenoblade_jewelethervein_r');
        $this->addSql('DROP INDEX IDX_26D544098320B960 ON xenoblade_jewelethervein_r');
        $this->addSql('ALTER TABLE xenoblade_jewelethervein_r CHANGE iid iid INT NOT NULL, CHANGE evid evid INT NOT NULL');
    }
}
