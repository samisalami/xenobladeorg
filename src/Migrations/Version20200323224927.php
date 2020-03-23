<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200323224927 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_collections CHANGE field1 field1 INT DEFAULT NULL, CHANGE field2 field2 INT DEFAULT NULL, CHANGE field3 field3 INT DEFAULT NULL, CHANGE field4 field4 INT DEFAULT NULL, CHANGE field5 field5 INT DEFAULT NULL, CHANGE field6 field6 INT DEFAULT NULL, CHANGE iid iid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_146FBF25E637C334 ON xenoblade_collections (field1)');
        $this->addSql('CREATE INDEX IDX_146FBF257F3E928E ON xenoblade_collections (field2)');
        $this->addSql('CREATE INDEX IDX_146FBF25839A218 ON xenoblade_collections (field3)');
        $this->addSql('CREATE INDEX IDX_146FBF25965D37BB ON xenoblade_collections (field4)');
        $this->addSql('CREATE INDEX IDX_146FBF25E15A072D ON xenoblade_collections (field5)');
        $this->addSql('CREATE INDEX IDX_146FBF2578535697 ON xenoblade_collections (field6)');
        $this->addSql('CREATE INDEX IDX_146FBF2546A75C12 ON xenoblade_collections (iid)');
        $this->addSql('CREATE INDEX IDX_146FBF25F5D6654D ON xenoblade_collections (stid)');
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
        $this->addSql('DROP INDEX IDX_146FBF25E637C334 ON xenoblade_collections');
        $this->addSql('DROP INDEX IDX_146FBF257F3E928E ON xenoblade_collections');
        $this->addSql('DROP INDEX IDX_146FBF25839A218 ON xenoblade_collections');
        $this->addSql('DROP INDEX IDX_146FBF25965D37BB ON xenoblade_collections');
        $this->addSql('DROP INDEX IDX_146FBF25E15A072D ON xenoblade_collections');
        $this->addSql('DROP INDEX IDX_146FBF2578535697 ON xenoblade_collections');
        $this->addSql('DROP INDEX IDX_146FBF2546A75C12 ON xenoblade_collections');
        $this->addSql('DROP INDEX IDX_146FBF25F5D6654D ON xenoblade_collections');
        $this->addSql('ALTER TABLE xenoblade_collections CHANGE field1 field1 VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE field2 field2 VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE field3 field3 VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE field4 field4 VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE field5 field5 VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE field6 field6 VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE iid iid INT NOT NULL');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68ED31B6743');
        $this->addSql('ALTER TABLE xenoblade_items DROP FOREIGN KEY FK_671BE68EDB43A936');
        $this->addSql('ALTER TABLE xenoblade_mappoints DROP FOREIGN KEY FK_3B7CF95C5FFD247A');
        $this->addSql('ALTER TABLE xenoblade_maps DROP FOREIGN KEY FK_91F31F754B30D9C4');
        $this->addSql('ALTER TABLE xenoblade_missions DROP FOREIGN KEY FK_50EA14A130811003');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE887750A6156C');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877C9AF44D6');
        $this->addSql('ALTER TABLE xenoblade_sockettype DROP FOREIGN KEY FK_CECE8877BEA87440');
    }
}
