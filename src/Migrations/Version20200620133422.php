<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200620133422 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('ALTER TABLE xenoblade_colony6categories ADD iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_904D4E3F46A75C12 ON xenoblade_colony6categories (iid)');
        $this->addSql('ALTER TABLE xenoblade_colony6categorylevelitem_r DROP eqstid');
        $this->addSql('ALTER TABLE xenoblade_colony6categorylevels DROP money');
        $this->addSql('UPDATE xenoblade_colony6categories SET iid = 1276 WHERE c6cid = 1');
        $this->addSql('UPDATE xenoblade_colony6categories SET iid = 2498 WHERE c6cid = 2');
        $this->addSql('UPDATE xenoblade_colony6categories SET iid = 633 WHERE c6cid = 3');
        $this->addSql('UPDATE xenoblade_colony6categories SET iid = 1250 WHERE c6cid = 4');
        $this->addSql('INSERT INTO xenoblade_colony6categorylevelitem_r (iid, c6clid) values (2364, 1)');
        $this->addSql('INSERT INTO xenoblade_colony6categorylevelitem_r (iid, c6clid) values (632, 2)');
        $this->addSql('INSERT INTO xenoblade_colony6categorylevelitem_r (iid, c6clid) values (921, 3)');
        $this->addSql('INSERT INTO xenoblade_colony6categorylevelitem_r (iid, c6clid) values (844, 4)');
        $this->addSql('INSERT INTO xenoblade_colony6categorylevelitem_r (iid, c6clid) values (1419, 5)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('ALTER TABLE xenoblade_colony6categories DROP FOREIGN KEY FK_904D4E3F46A75C12');
        $this->addSql('DROP INDEX IDX_904D4E3F46A75C12 ON xenoblade_colony6categories');
        $this->addSql('ALTER TABLE xenoblade_colony6categories DROP iid');
        $this->addSql('ALTER TABLE xenoblade_colony6categorylevelitem_r ADD eqstid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_colony6categorylevels ADD money INT NOT NULL');
        $this->addSql('DELETE FROM xenoblade_colony6categorylevelitem_r');
    }
}
