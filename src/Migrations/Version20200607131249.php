<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607131249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE INDEX IDX_3937A15079815D2B ON xenoblade_colony6categorieslevels_r (c6cid)');
        $this->addSql('CREATE INDEX IDX_3937A150877D8E77 ON xenoblade_colony6categorieslevels_r (c6clid)');
        $this->addSql('ALTER TABLE xenoblade_colony6categorylevelitem_r CHANGE iid iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_F51BCF1B46A75C12 ON xenoblade_colony6categorylevelitem_r (iid)');
        $this->addSql('CREATE INDEX IDX_F51BCF1B877D8E77 ON xenoblade_colony6categorylevelitem_r (c6clid)');
        $this->addSql('ALTER TABLE xenoblade_colony6levelitem_r CHANGE iid iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_48F0243D46A75C12 ON xenoblade_colony6levelitem_r (iid)');
        $this->addSql('CREATE INDEX IDX_48F0243DBD3D7F2D ON xenoblade_colony6levelitem_r (c6cclid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX IDX_3937A15079815D2B ON xenoblade_colony6categorieslevels_r');
        $this->addSql('DROP INDEX IDX_3937A150877D8E77 ON xenoblade_colony6categorieslevels_r');
        $this->addSql('DROP INDEX IDX_F51BCF1B46A75C12 ON xenoblade_colony6categorylevelitem_r');
        $this->addSql('DROP INDEX IDX_F51BCF1B877D8E77 ON xenoblade_colony6categorylevelitem_r');
        $this->addSql('ALTER TABLE xenoblade_colony6categorylevelitem_r CHANGE iid iid INT NOT NULL');
        $this->addSql('DROP INDEX IDX_48F0243D46A75C12 ON xenoblade_colony6levelitem_r');
        $this->addSql('DROP INDEX IDX_48F0243DBD3D7F2D ON xenoblade_colony6levelitem_r');
        $this->addSql('ALTER TABLE xenoblade_colony6levelitem_r CHANGE iid iid INT NOT NULL');
    }
}
