<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200322134323 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('UPDATE xenoblade_items as item SET name = CONCAT((SELECT `name` FROM xenoblade_jewelvalues as jewelvalue WHERE jewelvalue.jvid = item.jvid), " ", item.level) WHERE item.item_type = "jewel"');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
