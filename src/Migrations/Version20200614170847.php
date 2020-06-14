<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200614170847 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('UPDATE xenoblade_collections SET field1 = null where field1 = 9');
        $this->addSql('UPDATE xenoblade_collections SET field2 = null where field2 = 9');
        $this->addSql('UPDATE xenoblade_collections SET field3 = null where field3 = 9');
        $this->addSql('UPDATE xenoblade_collections SET field4 = null where field4 = 9');
        $this->addSql('UPDATE xenoblade_collections SET field5 = null where field5 = 9');
        $this->addSql('UPDATE xenoblade_collections SET field6 = null where field6 = 9');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('UPDATE xenoblade_collections SET field1 = 9 where field1 is null');
        $this->addSql('UPDATE xenoblade_collections SET field2 = 9 where field2 is null');
        $this->addSql('UPDATE xenoblade_collections SET field3 = 9 where field3 is null');
        $this->addSql('UPDATE xenoblade_collections SET field4 = 9 where field4 is null');
        $this->addSql('UPDATE xenoblade_collections SET field5 = 9 where field5 is null');
        $this->addSql('UPDATE xenoblade_collections SET field6 = 9 where field6 is null');
    }
}
