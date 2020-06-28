<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200628155427 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('ALTER TABLE xenoblade_sockettype modify slot1 int null;');
        $this->addSql('ALTER TABLE xenoblade_sockettype modify slot2 int null;');
        $this->addSql('ALTER TABLE xenoblade_sockettype modify slot3 int null;');
        $this->addSql('UPDATE xenoblade_sockettype SET slot1 = null WHERE slot1 = 0 or slot1 = "0";');
        $this->addSql('UPDATE xenoblade_sockettype SET slot2 = null WHERE slot2 = 0 or slot2 = "0";');
        $this->addSql('UPDATE xenoblade_sockettype SET slot3 = null WHERE slot3 = 0 or slot3 = "0";');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
    }
}
