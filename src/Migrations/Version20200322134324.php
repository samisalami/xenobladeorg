<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200322134324 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE xenoblade_items modify sid int null;');
        $this->addSql('ALTER TABLE xenoblade_items modify jvid int null;');
        $this->addSql('ALTER TABLE xenoblade_items modify colid int null;');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r modify stid int null;');
        $this->addSql('UPDATE xenoblade_items SET jvid = null WHERE jvid = 0 or jvid = "0";');
        $this->addSql('UPDATE xenoblade_items SET sid = null WHERE sid = 0 or sid = "0";');
        $this->addSql('UPDATE xenoblade_items SET colid = null WHERE colid = 0 or colid = "0";');
        $this->addSql('UPDATE xenoblade_chestitems_r SET stid = null WHERE stid = 0 or stid = "0";');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
