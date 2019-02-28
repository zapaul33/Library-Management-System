<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190228083249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE opac CHANGE student_id student_id INT DEFAULT NULL, CHANGE faculty_id faculty_id INT DEFAULT NULL, CHANGE staff_id staff_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BEAD3A1D16A2B381 ON opac (book_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_BEAD3A1D16A2B381 ON opac');
        $this->addSql('ALTER TABLE opac CHANGE student_id student_id INT DEFAULT NULL, CHANGE faculty_id faculty_id INT DEFAULT NULL, CHANGE staff_id staff_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin');
    }
}
