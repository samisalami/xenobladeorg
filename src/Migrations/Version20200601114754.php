<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200601114754 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE INDEX IDX_1EA7EC955630970 ON xenoblade_monsterstoryfight_r (moid)');
        $this->addSql('CREATE INDEX IDX_1EA7EC9EA741253 ON xenoblade_monsterstoryfight_r (sfid)');
        $this->addSql('CREATE INDEX IDX_6EF5F9C757167AB4 ON xenoblade_skillmonster_r (sid)');
        $this->addSql('CREATE INDEX IDX_6EF5F9C755630970 ON xenoblade_skillmonster_r (moid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');


        $this->addSql('DROP INDEX IDX_1EA7EC955630970 ON xenoblade_monsterstoryfight_r');
        $this->addSql('DROP INDEX IDX_1EA7EC9EA741253 ON xenoblade_monsterstoryfight_r');
        $this->addSql('DROP INDEX IDX_6EF5F9C757167AB4 ON xenoblade_skillmonster_r');
        $this->addSql('DROP INDEX IDX_6EF5F9C755630970 ON xenoblade_skillmonster_r');
    }
}
