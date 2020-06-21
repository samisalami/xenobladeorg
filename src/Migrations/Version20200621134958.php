<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200621134958 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE INDEX IDX_4D6D639BF9DB4C64 ON xenoblade_itemmerchant_r (eqstid)');
        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r CHANGE eqstid eqstid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_6667023F9DB4C64 ON xenoblade_itemtradeinventory_r (eqstid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP INDEX IDX_4D6D639BF9DB4C64 ON xenoblade_itemmerchant_r');
        $this->addSql('DROP INDEX IDX_6667023F9DB4C64 ON xenoblade_itemtradeinventory_r');
        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r CHANGE eqstid eqstid INT NOT NULL');
    }
}
