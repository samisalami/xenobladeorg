<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200613194513 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Sanitize xenoblade_itemmission_r table';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        // Entry 855 referred to a non existant element in xenoblade_equip_sockettype_r
        $this->addSql('DELETE FROM xenoblade_itemmission_r WHERE imid=855;');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql("INSERT INTO xenoblade_itemmission_r VALUES (855, 241, NULL, 0, '2012-04-30 09:10:43');");
    }
}
