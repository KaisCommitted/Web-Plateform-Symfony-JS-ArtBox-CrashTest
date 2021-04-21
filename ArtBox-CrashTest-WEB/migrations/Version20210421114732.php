<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210421114732 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX categorie_name ON categorie (categorie_name)');
        $this->addSql('ALTER TABLE comment_event DROP FOREIGN KEY FK_923492566B3CA4B');
        $this->addSql('ALTER TABLE comment_event DROP FOREIGN KEY FK_92349256D52B4B97');
        $this->addSql('ALTER TABLE comment_event ADD CONSTRAINT FK_923492566B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment_event ADD CONSTRAINT FK_92349256D52B4B97 FOREIGN KEY (id_event) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY evenement_ibfk_2');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E35A28D50 FOREIGN KEY (type_event) REFERENCES type_event (type_name) ON DELETE CASCADE');
        $this->addSql('CREATE FULLTEXT INDEX IDX_B26681E915696326DE44026 ON evenement (nom_event, description)');
        $this->addSql('CREATE UNIQUE INDEX nom_event ON evenement (nom_event)');
        $this->addSql('ALTER TABLE feedback CHANGE date_feedback date_feedback DATETIME NOT NULL');
        $this->addSql('ALTER TABLE postes CHANGE post_date post_date DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL');
        $this->addSql('ALTER TABLE rating_event DROP FOREIGN KEY fk_event');
        $this->addSql('ALTER TABLE rating_event DROP FOREIGN KEY fk_user');
        $this->addSql('ALTER TABLE rating_event ADD CONSTRAINT FK_A6B8059BD52B4B97 FOREIGN KEY (id_event) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rating_event ADD CONSTRAINT FK_A6B8059B6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_event CHANGE type_name type_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX categorie_name ON categorie');
        $this->addSql('ALTER TABLE comment_event DROP FOREIGN KEY FK_92349256D52B4B97');
        $this->addSql('ALTER TABLE comment_event DROP FOREIGN KEY FK_923492566B3CA4B');
        $this->addSql('ALTER TABLE comment_event ADD CONSTRAINT FK_92349256D52B4B97 FOREIGN KEY (id_event) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE comment_event ADD CONSTRAINT FK_923492566B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E35A28D50');
        $this->addSql('DROP INDEX IDX_B26681E915696326DE44026 ON evenement');
        $this->addSql('DROP INDEX nom_event ON evenement');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT evenement_ibfk_2 FOREIGN KEY (type_event) REFERENCES type_event (type_name)');
        $this->addSql('ALTER TABLE feedback CHANGE date_feedback date_feedback DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL');
        $this->addSql('ALTER TABLE postes CHANGE post_date post_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE rating_event DROP FOREIGN KEY FK_A6B8059BD52B4B97');
        $this->addSql('ALTER TABLE rating_event DROP FOREIGN KEY FK_A6B8059B6B3CA4B');
        $this->addSql('ALTER TABLE rating_event ADD CONSTRAINT fk_event FOREIGN KEY (id_event) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE rating_event ADD CONSTRAINT fk_user FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE type_event CHANGE type_name type_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE user DROP is_verified');
    }
}
