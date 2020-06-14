<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20200614120352 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'change map image source to jpg';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('UPDATE xenoblade_maps SET imgsrc = REPLACE(imgsrc, ".png", ".jpg")');

    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        // map images starting with 1365609 do not have a .png source
        $this->addSql('UPDATE xenoblade_maps SET imgsrc = REPLACE(imgsrc, ".jpg", ".png") WHERE ( NOT imgsrc REGEXP "^1365609*")');

    }
}
