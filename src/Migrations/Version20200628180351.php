<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200628180351 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE xenoblade_harmonymeetings ADD charid1 INT DEFAULT NULL, ADD charid2 INT DEFAULT NULL, CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_B92A45124B30D9C4 ON xenoblade_harmonymeetings (cid)');
        $this->addSql('CREATE INDEX IDX_B92A45123A8EE76F ON xenoblade_harmonymeetings (charid1)');
        $this->addSql('CREATE INDEX IDX_B92A4512A387B6D5 ON xenoblade_harmonymeetings (charid2)');

        // for character 1 the name is in position 1 of the persons string
        $this->addSql('UPDATE xenoblade_harmonymeetings AS harmonymeeting SET charid1 = (SELECT charid FROM xenoblade_characters WHERE INSTR(harmonymeeting.persons,name) = 1 LIMIT 1)');
        // for character 2 the name position must be bigger than 1
        $this->addSql('UPDATE xenoblade_harmonymeetings AS harmonymeeting SET charid2 = (SELECT charid FROM xenoblade_characters WHERE INSTR(harmonymeeting.persons,name) > 1 LIMIT 1)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_B92A45124B30D9C4 ON xenoblade_harmonymeetings');
        $this->addSql('DROP INDEX IDX_B92A45123A8EE76F ON xenoblade_harmonymeetings');
        $this->addSql('DROP INDEX IDX_B92A4512A387B6D5 ON xenoblade_harmonymeetings');
        $this->addSql('ALTER TABLE xenoblade_harmonymeetings DROP charid1, DROP charid2, CHANGE cid cid INT NOT NULL');
    }
}
