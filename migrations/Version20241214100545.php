<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241214100545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activity (id VARCHAR(255) NOT NULL, list_id VARCHAR(255) NOT NULL, task_id VARCHAR(255) NOT NULL, moved_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_AC74095A3DAE168B ON activity (list_id)');
        $this->addSql('CREATE INDEX IDX_AC74095A8DB60186 ON activity (task_id)');
        $this->addSql('CREATE TABLE capacity_day_chart_point (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, chart_line_id INTEGER DEFAULT NULL, date DATETIME NOT NULL, value INTEGER NOT NULL)');
        $this->addSql('CREATE INDEX IDX_8C42949BAB2F36 ON capacity_day_chart_point (chart_line_id)');
        $this->addSql('CREATE TABLE chart_line (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sprint_id INTEGER DEFAULT NULL, capacity INTEGER DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_83F7E9B98C24077B ON chart_line (sprint_id)');
        $this->addSql('CREATE TABLE chart_point (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, chart_line_id INTEGER DEFAULT NULL, date DATETIME NOT NULL, value INTEGER NOT NULL)');
        $this->addSql('CREATE INDEX IDX_51944C78AB2F36 ON chart_point (chart_line_id)');
        $this->addSql('CREATE TABLE list (id VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, position INTEGER NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE sprint (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, perfect_chart_line_id INTEGER DEFAULT NULL, current_chart_line_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, capacity INTEGER NOT NULL, start_at DATE NOT NULL, end_at DATE NOT NULL, list_done_id VARCHAR(255) DEFAULT NULL, board_id INTEGER DEFAULT NULL, capacity_type INTEGER NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EF8055B7ED2867B9 ON sprint (perfect_chart_line_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EF8055B7115595D4 ON sprint (current_chart_line_id)');
        $this->addSql('CREATE TABLE sprint_excluded_day (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sprint_id INTEGER DEFAULT NULL, date DATETIME NOT NULL)');
        $this->addSql('CREATE INDEX IDX_BCE416A48C24077B ON sprint_excluded_day (sprint_id)');
        $this->addSql('CREATE TABLE sprint_story (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sprint_id INTEGER DEFAULT NULL, created_at DATETIME NOT NULL, capacity INTEGER NOT NULL)');
        $this->addSql('CREATE INDEX IDX_D9B5AA748C24077B ON sprint_story (sprint_id)');
        $this->addSql('CREATE TABLE task (id VARCHAR(255) NOT NULL, list_id VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, story_points INTEGER NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_527EDB253DAE168B ON task (list_id)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL, headers CLOB NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activity');
        $this->addSql('DROP TABLE capacity_day_chart_point');
        $this->addSql('DROP TABLE chart_line');
        $this->addSql('DROP TABLE chart_point');
        $this->addSql('DROP TABLE list');
        $this->addSql('DROP TABLE sprint');
        $this->addSql('DROP TABLE sprint_excluded_day');
        $this->addSql('DROP TABLE sprint_story');
        $this->addSql('DROP TABLE task');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
