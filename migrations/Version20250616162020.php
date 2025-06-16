<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250616162020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE back (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE db (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE front (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE technology (id INT AUTO_INCREMENT NOT NULL, tech_name VARCHAR(50) NOT NULL, tech_logo VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE back ADD CONSTRAINT FK_6DCEC137BF396750 FOREIGN KEY (id) REFERENCES technology (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE db ADD CONSTRAINT FK_E3F4BC28BF396750 FOREIGN KEY (id) REFERENCES technology (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE front ADD CONSTRAINT FK_FEFB62F6BF396750 FOREIGN KEY (id) REFERENCES technology (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE back DROP FOREIGN KEY FK_6DCEC137BF396750
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE db DROP FOREIGN KEY FK_E3F4BC28BF396750
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE front DROP FOREIGN KEY FK_FEFB62F6BF396750
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE back
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE db
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE front
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE technology
        SQL);
    }
}
