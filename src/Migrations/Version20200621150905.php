<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200621150905 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_itemmonster_r CHANGE moid moid INT DEFAULT NULL, CHANGE iid iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_EEE14D0155630970 ON xenoblade_itemmonster_r (moid)');
        $this->addSql('CREATE INDEX IDX_EEE14D0146A75C12 ON xenoblade_itemmonster_r (iid)');
        $this->addSql('ALTER TABLE xenoblade_monsters CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_C5E167174B30D9C4 ON xenoblade_monsters (cid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP INDEX IDX_EEE14D0155630970 ON xenoblade_itemmonster_r');
        $this->addSql('DROP INDEX IDX_EEE14D0146A75C12 ON xenoblade_itemmonster_r');
        $this->addSql('ALTER TABLE xenoblade_itemmonster_r CHANGE moid moid INT NOT NULL, CHANGE iid iid INT NOT NULL');
        $this->addSql('DROP INDEX IDX_C5E167174B30D9C4 ON xenoblade_monsters');
        $this->addSql('ALTER TABLE xenoblade_monsters CHANGE cid cid INT NOT NULL');
    }
}
