<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250616171217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE translation ADD language_id INT NOT NULL, ADD project_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE translation ADD CONSTRAINT FK_B469456F82F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE translation ADD CONSTRAINT FK_B469456F166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B469456F82F1BAF4 ON translation (language_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B469456F166D1F9C ON translation (project_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE translation DROP FOREIGN KEY FK_B469456F82F1BAF4
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE translation DROP FOREIGN KEY FK_B469456F166D1F9C
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_B469456F82F1BAF4 ON translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_B469456F166D1F9C ON translation
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE translation DROP language_id, DROP project_id
        SQL);
    }
}
