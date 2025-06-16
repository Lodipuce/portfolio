<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250616170618 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE message ADD admin_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE message ADD CONSTRAINT FK_B6BD307F642B8210 FOREIGN KEY (admin_id) REFERENCES `admin` (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B6BD307F642B8210 ON message (admin_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE project ADD admin_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE642B8210 FOREIGN KEY (admin_id) REFERENCES `admin` (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_2FB3D0EE642B8210 ON project (admin_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE642B8210
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_2FB3D0EE642B8210 ON project
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE project DROP admin_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F642B8210
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_B6BD307F642B8210 ON message
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE message DROP admin_id
        SQL);
    }
}
