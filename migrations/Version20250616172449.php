<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250616172449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE techno_back_project (techno_back_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_F640A3DC30B99E03 (techno_back_id), INDEX IDX_F640A3DC166D1F9C (project_id), PRIMARY KEY(techno_back_id, project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE techno_database_project (techno_database_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_E3B27C374A92F18 (techno_database_id), INDEX IDX_E3B27C37166D1F9C (project_id), PRIMARY KEY(techno_database_id, project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE techno_front_project (techno_front_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_C45D83078EC1AA1A (techno_front_id), INDEX IDX_C45D8307166D1F9C (project_id), PRIMARY KEY(techno_front_id, project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_back_project ADD CONSTRAINT FK_F640A3DC30B99E03 FOREIGN KEY (techno_back_id) REFERENCES back (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_back_project ADD CONSTRAINT FK_F640A3DC166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_database_project ADD CONSTRAINT FK_E3B27C374A92F18 FOREIGN KEY (techno_database_id) REFERENCES db (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_database_project ADD CONSTRAINT FK_E3B27C37166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_front_project ADD CONSTRAINT FK_C45D83078EC1AA1A FOREIGN KEY (techno_front_id) REFERENCES front (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_front_project ADD CONSTRAINT FK_C45D8307166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_back_project DROP FOREIGN KEY FK_F640A3DC30B99E03
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_back_project DROP FOREIGN KEY FK_F640A3DC166D1F9C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_database_project DROP FOREIGN KEY FK_E3B27C374A92F18
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_database_project DROP FOREIGN KEY FK_E3B27C37166D1F9C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_front_project DROP FOREIGN KEY FK_C45D83078EC1AA1A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE techno_front_project DROP FOREIGN KEY FK_C45D8307166D1F9C
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE techno_back_project
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE techno_database_project
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE techno_front_project
        SQL);
    }
}
