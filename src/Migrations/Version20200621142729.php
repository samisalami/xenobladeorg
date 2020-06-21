<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200621142729 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_merchants CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_DA7F62454B30D9C4 ON xenoblade_merchants (cid)');
        $this->addSql('DELETE FROM xenoblade_chestitems_r WHERE chestid = 15');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP INDEX IDX_DA7F62454B30D9C4 ON xenoblade_merchants');
        $this->addSql('ALTER TABLE xenoblade_merchants CHANGE cid cid INT NOT NULL');
    }
}
