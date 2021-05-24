<?php

declare(strict_types=1);

namespace Estuda\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210523235122 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE aluno (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, telefone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, data_nascimento DATETIME DEFAULT NULL, genero VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE escola (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) DEFAULT NULL, situacao ENUM(\'ativo\', \'inativo\'), endereco VARCHAR(255) DEFAULT NULL, data DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE turma (id INT AUTO_INCREMENT NOT NULL, ano DATETIME DEFAULT NULL, nivel ENUM(\'fundamental\', \'medio\'), serie VARCHAR(255) DEFAULT NULL, turno VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE aluno');
        $this->addSql('DROP TABLE escola');
        $this->addSql('DROP TABLE turma');
    }
}
