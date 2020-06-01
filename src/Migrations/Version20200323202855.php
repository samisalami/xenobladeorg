<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200323202855 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_items CHANGE iid iid INT AUTO_INCREMENT NOT NULL, CHANGE icid icid INT DEFAULT NULL, CHANGE str str INT NOT NULL, CHANGE aeth aeth INT NOT NULL, CHANGE agi agi INT NOT NULL, CHANGE pha pha INT NOT NULL, CHANGE aeta aeta INT NOT NULL, CHANGE blockrate blockrate INT DEFAULT NULL, CHANGE kritrate kritrate INT DEFAULT NULL, CHANGE harmonyshulk harmonyshulk VARCHAR(11) DEFAULT NULL, CHANGE harmonyreyn harmonyreyn VARCHAR(11) DEFAULT NULL, CHANGE harmonysharla harmonysharla VARCHAR(11) DEFAULT NULL, CHANGE harmonydunban harmonydunban VARCHAR(11) DEFAULT NULL, CHANGE harmonymeli harmonymeli VARCHAR(11) DEFAULT NULL, CHANGE harmonyriki harmonyriki VARCHAR(11) DEFAULT NULL, CHANGE harmonyperson7 harmonyperson7 VARCHAR(11) DEFAULT NULL, CHANGE item_type item_type VARCHAR(255) NOT NULL');
        $this->addSql('CREATE INDEX IDX_671BE68ED31B6743 ON xenoblade_items (icid)');
        $this->addSql('CREATE INDEX IDX_671BE68EDB43A936 ON xenoblade_items (jvid)');
        $this->addSql('ALTER TABLE xenoblade_chapters CHANGE personchapter personchapter TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r CHANGE iid iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_D719E77046A75C12 ON xenoblade_chestitems_r (iid)');
        $this->addSql('CREATE INDEX IDX_D719E770F5D6654D ON xenoblade_chestitems_r (stid)');
        $this->addSql('ALTER TABLE xenoblade_mappoints CHANGE typeid typeid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_3B7CF95CE70B032 ON xenoblade_mappoints (typeid)');
        $this->addSql('ALTER TABLE xenoblade_collections CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_146FBF254B30D9C4 ON xenoblade_collections (cid)');
        $this->addSql('ALTER TABLE xenoblade_elements CHANGE prio prio INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_extraskills CHANGE skill4 skill4 TINYINT(1) NOT NULL, CHANGE skill5 skill5 TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_glossary CHANGE spoiler spoiler TINYINT(1) NOT NULL, CHANGE gamerentry gamerentry TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_maps CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_91F31F754B30D9C4 ON xenoblade_maps (cid)');
        $this->addSql('ALTER TABLE xenoblade_missions CHANGE nextmission nextmission INT DEFAULT NULL, CHANGE startmission startmission TINYINT(1) NOT NULL, CHANGE skill4 skill4 TINYINT(1) NOT NULL, CHANGE skill5 skill5 TINYINT(1) NOT NULL, CHANGE spoiler spoiler TINYINT(1) NOT NULL, CHANGE story story TINYINT(1) NOT NULL');
        $this->addSql('CREATE INDEX IDX_50EA14A130811003 ON xenoblade_missions (nextmission)');
        $this->addSql('ALTER TABLE xenoblade_monsters CHANGE spoiler spoiler TINYINT(1) NOT NULL, CHANGE storyboss storyboss TINYINT(1) NOT NULL, CHANGE individual individual TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_persons CHANGE spoiler spoiler TINYINT(1) NOT NULL, CHANGE story story TINYINT(1) NOT NULL, CHANGE colony6 colony6 TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_skills DROP monster');
        $this->addSql('CREATE INDEX IDX_CECE887750A6156C ON xenoblade_sockettype (slot1)');
        $this->addSql('CREATE INDEX IDX_CECE8877C9AF44D6 ON xenoblade_sockettype (slot2)');
        $this->addSql('CREATE INDEX IDX_CECE8877BEA87440 ON xenoblade_sockettype (slot3)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_chapters CHANGE personchapter personchapter TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E77046A75C12');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r DROP FOREIGN KEY FK_D719E770F5D6654D');
        $this->addSql('DROP INDEX IDX_D719E77046A75C12 ON xenoblade_chestitems_r');
        $this->addSql('DROP INDEX IDX_D719E770F5D6654D ON xenoblade_chestitems_r');
        $this->addSql('ALTER TABLE xenoblade_chestitems_r CHANGE iid iid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_collections DROP FOREIGN KEY FK_146FBF254B30D9C4');
        $this->addSql('DROP INDEX IDX_146FBF254B30D9C4 ON xenoblade_collections');
        $this->addSql('ALTER TABLE xenoblade_collections CHANGE cid cid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_elements CHANGE prio prio INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_extraskills CHANGE skill4 skill4 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE skill5 skill5 TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_glossary CHANGE spoiler spoiler TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE gamerentry gamerentry TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_items MODIFY iid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68ED31B6743');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68EDB43A936');
        $this->addSql('DROP INDEX IDX_671BE68ED31B6743 ON xenoblade_items');
        $this->addSql('DROP INDEX IDX_671BE68EDB43A936 ON xenoblade_items');
        $this->addSql('ALTER TABLE xenoblade_items DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE xenoblade_items CHANGE iid iid INT NOT NULL, CHANGE icid icid INT NOT NULL, CHANGE str str INT DEFAULT 0 NOT NULL, CHANGE aeth aeth INT DEFAULT 0 NOT NULL, CHANGE agi agi INT DEFAULT 0 NOT NULL, CHANGE pha pha INT DEFAULT 0 NOT NULL, CHANGE aeta aeta INT DEFAULT 0 NOT NULL, CHANGE item_type item_type VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE harmonyshulk harmonyshulk VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE harmonyreyn harmonyreyn VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE harmonysharla harmonysharla VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE harmonydunban harmonydunban VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE harmonymeli harmonymeli VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE harmonyriki harmonyriki VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE harmonyperson7 harmonyperson7 VARCHAR(11) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE blockrate blockrate INT DEFAULT 0 NOT NULL, CHANGE kritrate kritrate INT DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX IDX_3B7CF95CE70B032 ON xenoblade_mappoints');
        $this->addSql('ALTER TABLE xenoblade_mappoints CHANGE typeid typeid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_maps DROP FOREIGN KEY FK_91F31F754B30D9C4');
        $this->addSql('DROP INDEX IDX_91F31F754B30D9C4 ON xenoblade_maps');
        $this->addSql('ALTER TABLE xenoblade_maps CHANGE cid cid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_missions DROP FOREIGN KEY FK_50EA14A130811003');
        $this->addSql('DROP INDEX IDX_50EA14A130811003 ON xenoblade_missions');
        $this->addSql('ALTER TABLE xenoblade_missions CHANGE nextmission nextmission INT NOT NULL, CHANGE startmission startmission TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE skill4 skill4 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE skill5 skill5 TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE spoiler spoiler TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE story story TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_monsters CHANGE spoiler spoiler TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE storyboss storyboss TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE individual individual TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_persons CHANGE spoiler spoiler TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE story story TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE colony6 colony6 TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_skills ADD monster TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE887750A6156C');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877C9AF44D6');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877BEA87440');
        $this->addSql('DROP INDEX IDX_CECE887750A6156C ON xenoblade_sockettype');
        $this->addSql('DROP INDEX IDX_CECE8877C9AF44D6 ON xenoblade_sockettype');
        $this->addSql('DROP INDEX IDX_CECE8877BEA87440 ON xenoblade_sockettype');
    }
}
