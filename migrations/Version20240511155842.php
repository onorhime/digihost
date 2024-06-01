<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240511155842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE card (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, number VARCHAR(255) DEFAULT NULL, cvv VARCHAR(255) DEFAULT NULL, exp VARCHAR(255) DEFAULT NULL, pin INT DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, createdat DATETIME DEFAULT NULL, INDEX IDX_161498D3A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE card_transaction (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, amount INT DEFAULT NULL, interest DOUBLE PRECISION DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, date DATETIME DEFAULT NULL, INDEX IDX_95E35A4BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE card_transaction ADD CONSTRAINT FK_95E35A4BA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE investment CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE createdat createdat DATETIME DEFAULT NULL, CHANGE duration duration VARCHAR(255) DEFAULT NULL, CHANGE endat endat DATETIME DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE transaction CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE data data JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE btcaddress btcaddress VARCHAR(255) DEFAULT NULL, CHANGE ethaddress ethaddress VARCHAR(255) DEFAULT NULL, CHANGE usdtaddress usdtaddress VARCHAR(255) DEFAULT NULL, CHANGE middlename middlename VARCHAR(255) DEFAULT NULL, CHANGE state state VARCHAR(255) DEFAULT NULL, CHANGE dob dob VARCHAR(255) DEFAULT NULL, CHANGE occupation occupation VARCHAR(255) DEFAULT NULL, CHANGE income income VARCHAR(255) DEFAULT NULL, CHANGE ssn ssn VARCHAR(255) DEFAULT NULL, CHANGE accounttype accounttype VARCHAR(255) DEFAULT NULL, CHANGE currency currency VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE idcard idcard VARCHAR(255) DEFAULT NULL, CHANGE accountnumber accountnumber VARCHAR(255) DEFAULT NULL, CHANGE date date DATETIME DEFAULT NULL, CHANGE paypaladdress paypaladdress VARCHAR(255) DEFAULT NULL, CHANGE token token VARCHAR(255) DEFAULT NULL, CHANGE visiblepassword visiblepassword VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3A76ED395');
        $this->addSql('ALTER TABLE card_transaction DROP FOREIGN KEY FK_95E35A4BA76ED395');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE card_transaction');
        $this->addSql('ALTER TABLE investment CHANGE name name VARCHAR(255) DEFAULT \'NULL\', CHANGE createdat createdat DATETIME DEFAULT \'NULL\', CHANGE duration duration VARCHAR(255) DEFAULT \'NULL\', CHANGE endat endat DATETIME DEFAULT \'NULL\', CHANGE status status VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE transaction CHANGE status status VARCHAR(255) DEFAULT \'NULL\', CHANGE data data LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE btcaddress btcaddress VARCHAR(255) DEFAULT \'NULL\', CHANGE ethaddress ethaddress VARCHAR(255) DEFAULT \'NULL\', CHANGE usdtaddress usdtaddress VARCHAR(255) DEFAULT \'NULL\', CHANGE middlename middlename VARCHAR(255) DEFAULT \'NULL\', CHANGE state state VARCHAR(255) DEFAULT \'NULL\', CHANGE dob dob VARCHAR(255) DEFAULT \'NULL\', CHANGE occupation occupation VARCHAR(255) DEFAULT \'NULL\', CHANGE income income VARCHAR(255) DEFAULT \'NULL\', CHANGE ssn ssn VARCHAR(255) DEFAULT \'NULL\', CHANGE accounttype accounttype VARCHAR(255) DEFAULT \'NULL\', CHANGE currency currency VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(255) DEFAULT \'NULL\', CHANGE idcard idcard VARCHAR(255) DEFAULT \'NULL\', CHANGE accountnumber accountnumber VARCHAR(255) DEFAULT \'NULL\', CHANGE date date DATETIME DEFAULT \'NULL\', CHANGE paypaladdress paypaladdress VARCHAR(255) DEFAULT \'NULL\', CHANGE token token VARCHAR(255) DEFAULT \'NULL\', CHANGE visiblepassword visiblepassword VARCHAR(255) DEFAULT \'NULL\'');
    }
}
