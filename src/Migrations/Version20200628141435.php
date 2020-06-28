<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200628141435 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('CREATE INDEX IDX_671BE68E57167AB4 ON xenoblade_items (sid)');
        $this->addSql('UPDATE xenoblade_itemmerchant_r SET eqstid = null WHERE eqstid = 0');
        $this->addSql('UPDATE xenoblade_itemmerchant_r SET iid = null WHERE iid = 0');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP INDEX IDX_671BE68E57167AB4 ON xenoblade_items');
    }
}
