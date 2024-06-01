<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240430065902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investment CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE createdat createdat DATETIME DEFAULT NULL, CHANGE duration duration VARCHAR(255) DEFAULT NULL, CHANGE endat endat DATETIME DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE transaction CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE data data JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD token VARCHAR(255) DEFAULT NULL, ADD visiblepassword VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE btcaddress btcaddress VARCHAR(255) DEFAULT NULL, CHANGE ethaddress ethaddress VARCHAR(255) DEFAULT NULL, CHANGE usdtaddress usdtaddress VARCHAR(255) DEFAULT NULL, CHANGE middlename middlename VARCHAR(255) DEFAULT NULL, CHANGE state state VARCHAR(255) DEFAULT NULL, CHANGE dob dob VARCHAR(255) DEFAULT NULL, CHANGE occupation occupation VARCHAR(255) DEFAULT NULL, CHANGE income income VARCHAR(255) DEFAULT NULL, CHANGE ssn ssn VARCHAR(255) DEFAULT NULL, CHANGE accounttype accounttype VARCHAR(255) DEFAULT NULL, CHANGE currency currency VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE idcard idcard VARCHAR(255) DEFAULT NULL, CHANGE accountnumber accountnumber VARCHAR(255) DEFAULT NULL, CHANGE date date DATETIME DEFAULT NULL, CHANGE paypaladdress paypaladdress VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE investment CHANGE name name VARCHAR(255) DEFAULT \'NULL\', CHANGE createdat createdat DATETIME DEFAULT \'NULL\', CHANGE duration duration VARCHAR(255) DEFAULT \'NULL\', CHANGE endat endat DATETIME DEFAULT \'NULL\', CHANGE status status VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE transaction CHANGE status status VARCHAR(255) DEFAULT \'NULL\', CHANGE data data LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE `user` DROP token, DROP visiblepassword, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE btcaddress btcaddress VARCHAR(255) DEFAULT \'NULL\', CHANGE ethaddress ethaddress VARCHAR(255) DEFAULT \'NULL\', CHANGE usdtaddress usdtaddress VARCHAR(255) DEFAULT \'NULL\', CHANGE middlename middlename VARCHAR(255) DEFAULT \'NULL\', CHANGE state state VARCHAR(255) DEFAULT \'NULL\', CHANGE dob dob VARCHAR(255) DEFAULT \'NULL\', CHANGE occupation occupation VARCHAR(255) DEFAULT \'NULL\', CHANGE income income VARCHAR(255) DEFAULT \'NULL\', CHANGE ssn ssn VARCHAR(255) DEFAULT \'NULL\', CHANGE accounttype accounttype VARCHAR(255) DEFAULT \'NULL\', CHANGE currency currency VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(255) DEFAULT \'NULL\', CHANGE idcard idcard VARCHAR(255) DEFAULT \'NULL\', CHANGE accountnumber accountnumber VARCHAR(255) DEFAULT \'NULL\', CHANGE date date DATETIME DEFAULT \'NULL\', CHANGE paypaladdress paypaladdress VARCHAR(255) DEFAULT \'NULL\'');
    }
}
