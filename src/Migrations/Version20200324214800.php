<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200324214800 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r CHANGE tiid tiid INT DEFAULT NULL, CHANGE iid iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_66670237CFF6DD7 ON xenoblade_itemtradeinventory_r (tiid)');
        $this->addSql('CREATE INDEX IDX_666702346A75C12 ON xenoblade_itemtradeinventory_r (iid)');
        $this->addSql('ALTER TABLE xenoblade_persons CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_D234D8CA4B30D9C4 ON xenoblade_persons (cid)');
        $this->addSql('ALTER TABLE xenoblade_tradeinventory CHANGE pid pid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_97B2D645550C4ED ON xenoblade_tradeinventory (pid)');

        $this->addSql('ALTER TABLE xenoblade_characters ADD isStory tinyint(1) DEFAULT 0');
        $this->addSql('UPDATE xenoblade_characters SET isStory = 1 WHERE name = "Shulk" or name = "Reyn" or name = "Sharla" or name = "Melia" or name = "Dunban" or name = "Riki" or name = "Person 7"');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E77046A75C12');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E770F5D6654D');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E77046D5465D');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF25E637C334');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF257F3E928E');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF25839A218');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF25965D37BB');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF25E15A072D');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF2578535697');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF254B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF2546A75C12');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF25F5D6654D');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68ED31B6743');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68EDB43A936');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68EC4D85A3E');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68E3107B339');
        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r DROP FOREIGN KEY FK_66670237CFF6DD7');
        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r DROP FOREIGN KEY FK_666702346A75C12');
        $this->addSql('DROP INDEX IDX_66670237CFF6DD7 ON xenoblade_itemtradeinventory_r');
        $this->addSql('DROP INDEX IDX_666702346A75C12 ON xenoblade_itemtradeinventory_r');
        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r CHANGE tiid tiid INT NOT NULL, CHANGE iid iid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_mappoints DROP FOREIGN KEY FK_3B7CF95C5FFD247A');
        $this->addSql('ALTER TABLE xenoblade_maps DROP FOREIGN KEY FK_91F31F754B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_missions DROP FOREIGN KEY FK_50EA14A130811003');
        $this->addSql('ALTER TABLE xenoblade_persons DROP FOREIGN KEY FK_D234D8CA4B30D9C4');
        $this->addSql('DROP INDEX IDX_D234D8CA4B30D9C4 ON xenoblade_persons');
        $this->addSql('ALTER TABLE xenoblade_persons CHANGE cid cid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE887750A6156C');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877C9AF44D6');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877BEA87440');
        $this->addSql('ALTER TABLE xenoblade_tradeinventory DROP FOREIGN KEY FK_97B2D645550C4ED');
        $this->addSql('DROP INDEX IDX_97B2D645550C4ED ON xenoblade_tradeinventory');
        $this->addSql('ALTER TABLE xenoblade_tradeinventory CHANGE pid pid INT NOT NULL');
    }
}
