<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309132914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amount ADD product_id INT NOT NULL, ADD order_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE amount ADD CONSTRAINT FK_8EA170424584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE amount ADD CONSTRAINT FK_8EA17042FCDAEAAA FOREIGN KEY (order_id_id) REFERENCES `order` (id)');
        $this->addSql('CREATE INDEX IDX_8EA170424584665A ON amount (product_id)');
        $this->addSql('CREATE INDEX IDX_8EA17042FCDAEAAA ON amount (order_id_id)');
        $this->addSql('ALTER TABLE product ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD12469DE2 ON product (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amount DROP FOREIGN KEY FK_8EA170424584665A');
        $this->addSql('ALTER TABLE amount DROP FOREIGN KEY FK_8EA17042FCDAEAAA');
        $this->addSql('DROP INDEX IDX_8EA170424584665A ON amount');
        $this->addSql('DROP INDEX IDX_8EA17042FCDAEAAA ON amount');
        $this->addSql('ALTER TABLE amount DROP product_id, DROP order_id_id');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('DROP INDEX IDX_D34A04AD12469DE2 ON product');
        $this->addSql('ALTER TABLE product DROP category_id');
    }
}
