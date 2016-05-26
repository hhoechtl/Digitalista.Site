<?php
namespace TYPO3\Flow\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
	Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20150426104944 extends AbstractMigration {

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function up(Schema $schema) {
		// this up() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
		
		$this->addSql("CREATE TABLE jhoechtl_digitalista_domain_model_pageview (persistence_object_identifier VARCHAR(40) NOT NULL, nodedata VARCHAR(40) DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_56FD770093BDC8E2 (nodedata), PRIMARY KEY(persistence_object_identifier)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
		$this->addSql("ALTER TABLE jhoechtl_digitalista_domain_model_pageview ADD CONSTRAINT FK_56FD770093BDC8E2 FOREIGN KEY (nodedata) REFERENCES typo3_typo3cr_domain_model_nodedata (persistence_object_identifier) ON DELETE CASCADE");
	}

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function down(Schema $schema) {
		// this down() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
		$this->addSql("DROP TABLE jhoechtl_digitalista_domain_model_pageview");
	}
}