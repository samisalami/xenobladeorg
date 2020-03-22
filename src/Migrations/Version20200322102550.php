<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200322102550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("ALTER TABLE xenoblade_items ADD item_type VARCHAR(255);");
        $this->addSql("UPDATE xenoblade_items as item SET item_type = (SELECT `type` FROM xenoblade_itemcategories as category WHERE category.icid = item.icid)");
    }

    public function down(Schema $schema) : void
    {
        $this->addSql("ALTER TABLE xenoblade_items DROP item_type;");
    }
}
