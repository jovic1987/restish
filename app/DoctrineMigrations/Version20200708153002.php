<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20200708153002 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->skipIf($this->connection->getDatabasePlatform()->getName() === 'mysql', 'Migration can not be executed safely on \'mysql\'.');

        $sql = 'CREATE TABLE account (id VARCHAR(50) PRIMARY KEY NOT NULL,'
            . ' owner VARCHAR (50) NOT NULL,'
            . ' balance FLOAT NOT NULL,'
            . ' currency VARCHAR (50) NOT NULL)';

        $this->addSql($sql);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE account');
    }
}
