<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200601161400 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chapters CHANGE missionchapter missionchapter TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chapters CHANGE missionchapter missionchapter INT DEFAULT 1 NOT NULL');
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
        $this->addSql('ALTER TABLE xenoblade_equip_sockettype_r DROP FOREIGN KEY FK_AC6362ED46A75C12');
        $this->addSql('ALTER TABLE xenoblade_extraskills DROP FOREIGN KEY FK_62D8D68741AEF4CE');
        $this->addSql('ALTER TABLE xenoblade_itemmission_r DROP FOREIGN KEY FK_CC7650CB41AEF4CE');
        $this->addSql('ALTER TABLE xenoblade_itemmission_r DROP FOREIGN KEY FK_CC7650CB46A75C12');
        $this->addSql('ALTER TABLE xenoblade_itemmission_r DROP FOREIGN KEY FK_CC7650CBF9DB4C64');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68ED31B6743');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68EDB43A936');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68EC4D85A3E');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68E3107B339');
        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r DROP FOREIGN KEY FK_66670237CFF6DD7');
        $this->addSql('ALTER TABLE xenoblade_itemtradeinventory_r DROP FOREIGN KEY FK_666702346A75C12');
        $this->addSql('ALTER TABLE xenoblade_mappoints DROP FOREIGN KEY FK_3B7CF95C5FFD247A');
        $this->addSql('ALTER TABLE xenoblade_maps DROP FOREIGN KEY FK_91F31F754B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_missions DROP FOREIGN KEY FK_50EA14A15550C4ED');
        $this->addSql('ALTER TABLE xenoblade_missions DROP FOREIGN KEY FK_50EA14A14B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_missions DROP FOREIGN KEY FK_50EA14A130811003');
        $this->addSql('ALTER TABLE xenoblade_monsterstoryfight_r DROP FOREIGN KEY FK_1EA7EC955630970');
        $this->addSql('ALTER TABLE xenoblade_monsterstoryfight_r DROP FOREIGN KEY FK_1EA7EC9EA741253');
        $this->addSql('ALTER TABLE xenoblade_persons DROP FOREIGN KEY FK_D234D8CA4B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_skillmonster_r DROP FOREIGN KEY FK_6EF5F9C757167AB4');
        $this->addSql('ALTER TABLE xenoblade_skillmonster_r DROP FOREIGN KEY FK_6EF5F9C755630970');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE887750A6156C');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877C9AF44D6');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877BEA87440');
        $this->addSql('ALTER TABLE xenoblade_storyfight DROP FOREIGN KEY FK_77E627184B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_tradeinventory DROP FOREIGN KEY FK_97B2D645550C4ED');
    }
}
