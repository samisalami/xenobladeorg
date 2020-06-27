<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Gedmo\Sluggable\Util as Sluggable;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200627150804 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        $queryBuilder
            ->select('name, cid')
            ->from('xenoblade_chapters', 'm');

        $queryChapters = $queryBuilder->execute();

        foreach ($queryChapters as $chapter) {
            $this->addSql('UPDATE xenoblade_chapters SET slug = "'.Sluggable\Urlizer::urlize($chapter['name'], '-').'" WHERE cid = '.$chapter['cid']);
        }

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('UPDATE xenoblade_chapters SET slug = null');
    }
}
