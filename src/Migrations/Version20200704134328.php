<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200704134328 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX idx_b92a45123a8ee76f ON xenoblade_harmonymeetings');
        $this->addSql('CREATE INDEX IDX_B92A4512B1B86CED ON xenoblade_harmonymeetings (charid1)');
        $this->addSql('DROP INDEX idx_b92a4512a387b6d5 ON xenoblade_harmonymeetings');
        $this->addSql('CREATE INDEX IDX_B92A451228B13D57 ON xenoblade_harmonymeetings (charid2)');
        $this->addSql('ALTER TABLE xenoblade_skills CHANGE charid charid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_D7DA8075BCEFB92C ON xenoblade_skills (charid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('DROP INDEX idx_b92a451228b13d57 ON xenoblade_harmonymeetings');
        $this->addSql('CREATE INDEX IDX_B92A4512A387B6D5 ON xenoblade_harmonymeetings (charid2)');
        $this->addSql('DROP INDEX idx_b92a4512b1b86ced ON xenoblade_harmonymeetings');
        $this->addSql('CREATE INDEX IDX_B92A45123A8EE76F ON xenoblade_harmonymeetings (charid1)');
        $this->addSql('ALTER TABLE xenoblade_harmonymeetings ADD CONSTRAINT FK_B92A4512B1B86CED FOREIGN KEY (charid1) REFERENCES xenoblade_characters (charid)');
        $this->addSql('ALTER TABLE xenoblade_harmonymeetings ADD CONSTRAINT FK_B92A451228B13D57 FOREIGN KEY (charid2) REFERENCES xenoblade_characters (charid)');
    }
}
