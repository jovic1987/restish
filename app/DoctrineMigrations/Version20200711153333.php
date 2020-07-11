<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20200711153333 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->skipIf($this->connection->getDatabasePlatform()->getName() === 'mysql', 'Migration can not be executed safely on \'mysql\'.');

        $sql = 'CREATE TABLE payments (id serial PRIMARY KEY NOT NULL, account VARCHAR(255) NOT NULL,'
            . ' direction VARCHAR (255) NOT NULL,'
            . ' amount FLOAT NOT NULL,'
            . ' to_account VARCHAR (255) NOT NULL)';

        $this->addSql($sql);

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE payments');
        // this down() migration is auto-generated, please modify it to your needs

    }
}
