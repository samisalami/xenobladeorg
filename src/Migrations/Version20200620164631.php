<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200620164631 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('UPDATE xenoblade_persons SET location = REPLACE(location, "http://www.xenoblade.org/wordpress/?page_id=28", "/missionen" ) WHERE location like "%http://www.xenoblade.org/wordpress/?page_id=28%"');
        $this->addSql('UPDATE xenoblade_persons SET location = REPLACE(location, "http://www.xenoblade.org/wordpress/?page_id=22", "/personen" ) WHERE location like "%http://www.xenoblade.org/wordpress/?page_id=22%"');
        $this->addSql('UPDATE xenoblade_missions SET solution = REPLACE(solution, "http://www.xenoblade.org/wordpress/?page_id=22", "/personen" ) WHERE solution like "%http://www.xenoblade.org/wordpress/?page_id=22%"');
        $this->addSql('UPDATE xenoblade_mapinfos SET description = REPLACE(description, "http://www.xenoblade.org/wordpress/?page_id=28", "/missionen" ) WHERE description like "%http://www.xenoblade.org/wordpress/?page_id=28%"');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
    }
}
