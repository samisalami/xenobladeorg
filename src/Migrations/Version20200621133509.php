<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200621133509 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE xenoblade_itemmerchant_r CHANGE merid merid INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_4D6D639B2ED8A41 ON xenoblade_itemmerchant_r (merid)');
        $this->addSql('CREATE INDEX IDX_4D6D639B46A75C12 ON xenoblade_itemmerchant_r (iid)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP INDEX IDX_4D6D639B2ED8A41 ON xenoblade_itemmerchant_r');
        $this->addSql('DROP INDEX IDX_4D6D639B46A75C12 ON xenoblade_itemmerchant_r');
        $this->addSql('ALTER TABLE xenoblade_itemmerchant_r CHANGE merid merid INT NOT NULL');
    }
}
