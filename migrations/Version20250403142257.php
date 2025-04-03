<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250403142257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, line1 VARCHAR(255) NOT NULL, line2 VARCHAR(255) NOT NULL, city VARCHAR(100) NOT NULL, postal_code VARCHAR(20) NOT NULL, state VARCHAR(100) NOT NULL, country VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_D4E6F81A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, card_number VARCHAR(255) NOT NULL, expiration_date VARCHAR(7) NOT NULL, cvv VARCHAR(3) NOT NULL, UNIQUE INDEX UNIQ_6D28840DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL, subscription_type VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE address ADD CONSTRAINT FK_D4E6F81A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payment ADD CONSTRAINT FK_6D28840DA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE app_item DROP FOREIGN KEY FK_1A3500BEA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE app_item_comment DROP FOREIGN KEY FK_ITEM_ID
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item_limit_purchase DROP FOREIGN KEY FK_240070CDA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE qr_code DROP FOREIGN KEY FK_7D8B1FB5126F525E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_address DROP FOREIGN KEY FK_B97FF0589395C3F3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment DROP FOREIGN KEY FK_ACA6E0F27BE036FC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment DROP FOREIGN KEY FK_ACA6E0F28D9F6D38
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment DROP FOREIGN KEY FK_ACA6E0F2E415FB15
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment DROP FOREIGN KEY FK_ACA6E0F2F720C233
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_avatar_image DROP FOREIGN KEY FK_1068A3A97E3C61F9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_action DROP FOREIGN KEY FK_F529624722E2CB5A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_channels DROP FOREIGN KEY FK_48E9AE7622E2CB5A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_channels DROP FOREIGN KEY FK_48E9AE7672F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_scope DROP FOREIGN KEY FK_584AA86A139DF194
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_translation DROP FOREIGN KEY FK_BA065D3C2C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119E3101778E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119E743BF776
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119E75F20EAE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119EA978C17
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119EB5282EDF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel DROP FOREIGN KEY FK_16C8119EF242B1E6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_countries DROP FOREIGN KEY FK_D96E51AE72F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_countries DROP FOREIGN KEY FK_D96E51AEF92F3E70
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_currencies DROP FOREIGN KEY FK_AE491F9338248176
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_currencies DROP FOREIGN KEY FK_AE491F9372F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_locales DROP FOREIGN KEY FK_786B7A8472F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_locales DROP FOREIGN KEY FK_786B7A84E559DFD1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_price_history_config_excluded_taxons DROP FOREIGN KEY FK_77FD02A72F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_price_history_config_excluded_taxons DROP FOREIGN KEY FK_77FD02ADE13F470
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing DROP FOREIGN KEY FK_7801820CA80EF684
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing_catalog_promotions DROP FOREIGN KEY FK_9F52FF5122E2CB5A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing_catalog_promotions DROP FOREIGN KEY FK_9F52FF513EADFFE5
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing_log_entry DROP FOREIGN KEY FK_77181A53EADFFE5
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_customer DROP FOREIGN KEY FK_7E82D5E6BD94FB16
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_customer DROP FOREIGN KEY FK_7E82D5E6D2919A68
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_exchange_rate DROP FOREIGN KEY FK_5F52B852A76BEED
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_exchange_rate DROP FOREIGN KEY FK_5F52B85B3FD5856
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order DROP FOREIGN KEY FK_6196A1F917B24436
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order DROP FOREIGN KEY FK_6196A1F94D4CFF2B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order DROP FOREIGN KEY FK_6196A1F972F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order DROP FOREIGN KEY FK_6196A1F979D0C0E4
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order DROP FOREIGN KEY FK_6196A1F99395C3F3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item DROP FOREIGN KEY FK_77B587ED3B69A9AF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item DROP FOREIGN KEY FK_77B587ED8D9F6D38
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item_unit DROP FOREIGN KEY FK_82BF226E7BE036FC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item_unit DROP FOREIGN KEY FK_82BF226EE415FB15
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment DROP FOREIGN KEY FK_D9191BD419883967
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment DROP FOREIGN KEY FK_D9191BD48D9F6D38
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method DROP FOREIGN KEY FK_A75B0B0DF23D6140
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method_channels DROP FOREIGN KEY FK_543AC0CC5AA1164F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method_channels DROP FOREIGN KEY FK_543AC0CC72F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method_translation DROP FOREIGN KEY FK_966BE3A12C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_paypal_plugin_pay_pal_credentials DROP FOREIGN KEY FK_C56F54AD5AA1164F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product DROP FOREIGN KEY FK_677B9B74731E505
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association DROP FOREIGN KEY FK_48E9CDAB4584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association DROP FOREIGN KEY FK_48E9CDABB1E1C39
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association_product DROP FOREIGN KEY FK_A427B9834584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association_product DROP FOREIGN KEY FK_A427B983EFB9C8A5
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association_type_translation DROP FOREIGN KEY FK_4F618E52C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_attribute_translation DROP FOREIGN KEY FK_93850EBA2C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_attribute_value DROP FOREIGN KEY FK_8A053E544584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_attribute_value DROP FOREIGN KEY FK_8A053E54B6E62EFA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_channels DROP FOREIGN KEY FK_F9EF269B4584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_channels DROP FOREIGN KEY FK_F9EF269B72F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_image DROP FOREIGN KEY FK_88C64B2D7E3C61F9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_image_product_variants DROP FOREIGN KEY FK_8FFDAE8D3B69A9AF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_image_product_variants DROP FOREIGN KEY FK_8FFDAE8D3DA5256D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_option_translation DROP FOREIGN KEY FK_CBA491AD2C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_option_value DROP FOREIGN KEY FK_F7FF7D4BA7C41D6F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_option_value_translation DROP FOREIGN KEY FK_8D4382DC2C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_options DROP FOREIGN KEY FK_2B5FF0094584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_options DROP FOREIGN KEY FK_2B5FF009A7C41D6F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_review DROP FOREIGN KEY FK_C7056A994584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_review DROP FOREIGN KEY FK_C7056A99F675F31B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_taxon DROP FOREIGN KEY FK_169C6CD94584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_taxon DROP FOREIGN KEY FK_169C6CD9DE13F470
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_translation DROP FOREIGN KEY FK_105A9082C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant DROP FOREIGN KEY FK_A29B5234584665A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant DROP FOREIGN KEY FK_A29B5239DF894ED
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant DROP FOREIGN KEY FK_A29B5239E2D1A41
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant_option_value DROP FOREIGN KEY FK_76CDAFA13B69A9AF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant_option_value DROP FOREIGN KEY FK_76CDAFA1D957CA06
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant_translation DROP FOREIGN KEY FK_8DC18EDC2C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_action DROP FOREIGN KEY FK_933D0915139DF194
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_channels DROP FOREIGN KEY FK_1A044F64139DF194
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_channels DROP FOREIGN KEY FK_1A044F6472F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_coupon DROP FOREIGN KEY FK_B04EBA85139DF194
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_order DROP FOREIGN KEY FK_BF9CF6FB139DF194
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_order DROP FOREIGN KEY FK_BF9CF6FB8D9F6D38
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_rule DROP FOREIGN KEY FK_2C188EA8139DF194
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_translation DROP FOREIGN KEY FK_3C7A76182C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_province DROP FOREIGN KEY FK_B5618FE4F92F3E70
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipment DROP FOREIGN KEY FK_FD707B3319883967
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipment DROP FOREIGN KEY FK_FD707B338D9F6D38
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method DROP FOREIGN KEY FK_5FB0EE1112469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method DROP FOREIGN KEY FK_5FB0EE119DF894ED
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method DROP FOREIGN KEY FK_5FB0EE119F2C3FAB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_channels DROP FOREIGN KEY FK_2D9833355F7D6850
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_channels DROP FOREIGN KEY FK_2D98333572F5A1AA
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_rule DROP FOREIGN KEY FK_88A0EB655F7D6850
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_translation DROP FOREIGN KEY FK_2B37DB3D2C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shop_user DROP FOREIGN KEY FK_7C2B74809395C3F3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_tax_rate DROP FOREIGN KEY FK_3CD86B2E12469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_tax_rate DROP FOREIGN KEY FK_3CD86B2E9F2C3FAB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon DROP FOREIGN KEY FK_CFD811CA727ACA70
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon DROP FOREIGN KEY FK_CFD811CAA977936C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon_image DROP FOREIGN KEY FK_DBE52B287E3C61F9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon_translation DROP FOREIGN KEY FK_1487DFCF2C2AC5D3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_user_oauth DROP FOREIGN KEY FK_C3471B78A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_zone_member DROP FOREIGN KEY FK_E8B5ABF34B0E929B
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE app_item
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE app_item_comment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE item_limit_purchase
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE qr_code
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_address
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_address_log_entries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_adjustment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_admin_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_avatar_image
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_catalog_promotion
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_catalog_promotion_action
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_catalog_promotion_channels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_catalog_promotion_scope
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_catalog_promotion_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_countries
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_currencies
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_locales
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_price_history_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_price_history_config_excluded_taxons
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_pricing
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_pricing_catalog_promotions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_channel_pricing_log_entry
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_country
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_currency
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_customer
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_customer_group
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_exchange_rate
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_gateway_config
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_locale
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_migrations
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_order
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_order_item
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_order_item_unit
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_order_sequence
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_payment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_payment_method
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_payment_method_channels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_payment_method_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_payment_security_token
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_paypal_plugin_pay_pal_credentials
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_association
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_association_product
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_association_type
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_association_type_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_attribute
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_attribute_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_attribute_value
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_channels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_image
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_image_product_variants
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_option
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_option_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_option_value
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_option_value_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_options
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_review
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_taxon
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_variant
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_variant_option_value
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_product_variant_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_promotion
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_promotion_action
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_promotion_channels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_promotion_coupon
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_promotion_order
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_promotion_rule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_promotion_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_province
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shipment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shipping_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shipping_method
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shipping_method_channels
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shipping_method_rule
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shipping_method_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shop_billing_data
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_shop_user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_tax_category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_tax_rate
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_taxon
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_taxon_image
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_taxon_translation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_user_oauth
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_zone
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sylius_zone_member
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE app_item (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, device_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, serial_number VARCHAR(25) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, imei_number VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, non_tech TINYINT(1) NOT NULL, device_status INT NOT NULL, device_image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, wallpaper VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, qr_position INT DEFAULT NULL, qr_wallpaper VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', updated_at DATETIME DEFAULT NULL, uuid VARCHAR(36) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_1A3500BED17F50A6 (uuid), UNIQUE INDEX UNIQ_1A3500BED948KE2 (serial_number), UNIQUE INDEX UNIQ_1A3500BE4F98CE43 (imei_number), INDEX IDX_1A3500BEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE app_item_comment (id INT AUTO_INCREMENT NOT NULL, item_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, comment LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, createdAt DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_5DA76EB9126F525E (item_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE item_limit_purchase (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, purchasedAt DATETIME NOT NULL, additionalLimit INT NOT NULL, pricePaid NUMERIC(10, 2) NOT NULL, INDEX IDX_240070CDA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE qr_code (id INT AUTO_INCREMENT NOT NULL, item_id INT DEFAULT NULL, hash VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, filePath VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, isActivated TINYINT(1) NOT NULL, createdAt DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', updatedAt DATETIME DEFAULT NULL, logoPath VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, isDownloaded TINYINT(1) NOT NULL, validTil DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_7D8B1FB5D1B862B8 (hash), INDEX IDX_7D8B1FB5126F525E (item_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_address (id INT AUTO_INCREMENT NOT NULL, customer_id INT DEFAULT NULL, first_name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, last_name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, phone_number VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, street VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, company VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, city VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, postcode VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, country_code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, province_code VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, province_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, INDEX IDX_B97FF0589395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_address_log_entries (id INT AUTO_INCREMENT NOT NULL, action VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, logged_at DATETIME NOT NULL, object_id VARCHAR(64) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, object_class VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, version INT NOT NULL, data LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`, username VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_adjustment (id INT AUTO_INCREMENT NOT NULL, order_id INT DEFAULT NULL, order_item_id INT DEFAULT NULL, order_item_unit_id INT DEFAULT NULL, shipment_id INT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, label VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, amount INT NOT NULL, is_neutral TINYINT(1) NOT NULL, is_locked TINYINT(1) NOT NULL, origin_code VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, details LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, INDEX IDX_ACA6E0F28D9F6D38 (order_id), INDEX IDX_ACA6E0F2E415FB15 (order_item_id), INDEX IDX_ACA6E0F2F720C233 (order_item_unit_id), INDEX IDX_ACA6E0F27BE036FC (shipment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_admin_user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, username_canonical VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, password VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, last_login DATETIME DEFAULT NULL, password_reset_token VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, password_requested_at DATETIME DEFAULT NULL, email_verification_token VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, verified_at DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, credentials_expire_at DATETIME DEFAULT NULL, roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, email VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, email_canonical VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, first_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, last_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, locale_code VARCHAR(12) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, encoder_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_88D5CC4D6B7BA4B6 (password_reset_token), UNIQUE INDEX UNIQ_88D5CC4DC4995C67 (email_verification_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_avatar_image (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, path VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_1068A3A97E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_catalog_promotion (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, enabled TINYINT(1) NOT NULL, start_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, state VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, priority INT DEFAULT 0 NOT NULL, exclusive TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX UNIQ_1055865077153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_catalog_promotion_action (id INT AUTO_INCREMENT NOT NULL, catalog_promotion_id INT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, configuration LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, INDEX IDX_F529624722E2CB5A (catalog_promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_catalog_promotion_channels (catalog_promotion_id INT NOT NULL, channel_id INT NOT NULL, INDEX IDX_48E9AE7622E2CB5A (catalog_promotion_id), INDEX IDX_48E9AE7672F5A1AA (channel_id), PRIMARY KEY(catalog_promotion_id, channel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_catalog_promotion_scope (id INT AUTO_INCREMENT NOT NULL, promotion_id INT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, configuration LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, INDEX IDX_584AA86A139DF194 (promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_catalog_promotion_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, label VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX sylius_catalog_promotion_translation_uniq_trans (translatable_id, locale), INDEX IDX_BA065D3C2C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel (id INT AUTO_INCREMENT NOT NULL, default_locale_id INT NOT NULL, base_currency_id INT NOT NULL, default_tax_zone_id INT DEFAULT NULL, shop_billing_data_id INT DEFAULT NULL, menu_taxon_id INT DEFAULT NULL, channel_price_history_config_id INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, color VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, enabled TINYINT(1) NOT NULL, hostname VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, theme_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, tax_calculation_strategy VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, contact_email VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, skipping_shipping_step_allowed TINYINT(1) NOT NULL, account_verification_required TINYINT(1) NOT NULL, skipping_payment_step_allowed TINYINT(1) NOT NULL, contact_phone_number VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, shipping_address_in_checkout_required TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX UNIQ_16C8119E77153098 (code), UNIQUE INDEX UNIQ_16C8119EB5282EDF (shop_billing_data_id), UNIQUE INDEX UNIQ_16C8119E75F20EAE (channel_price_history_config_id), INDEX IDX_16C8119E743BF776 (default_locale_id), INDEX IDX_16C8119E3101778E (base_currency_id), INDEX IDX_16C8119EA978C17 (default_tax_zone_id), INDEX IDX_16C8119EE551C011 (hostname), INDEX IDX_16C8119EF242B1E6 (menu_taxon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_countries (channel_id INT NOT NULL, country_id INT NOT NULL, INDEX IDX_D96E51AE72F5A1AA (channel_id), INDEX IDX_D96E51AEF92F3E70 (country_id), PRIMARY KEY(channel_id, country_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_currencies (channel_id INT NOT NULL, currency_id INT NOT NULL, INDEX IDX_AE491F9372F5A1AA (channel_id), INDEX IDX_AE491F9338248176 (currency_id), PRIMARY KEY(channel_id, currency_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_locales (channel_id INT NOT NULL, locale_id INT NOT NULL, INDEX IDX_786B7A8472F5A1AA (channel_id), INDEX IDX_786B7A84E559DFD1 (locale_id), PRIMARY KEY(channel_id, locale_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_price_history_config (id INT AUTO_INCREMENT NOT NULL, lowest_price_for_discounted_products_checking_period INT DEFAULT 30 NOT NULL, lowest_price_for_discounted_products_visible TINYINT(1) DEFAULT 1 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_price_history_config_excluded_taxons (channel_id INT NOT NULL, taxon_id INT NOT NULL, INDEX IDX_77FD02A72F5A1AA (channel_id), INDEX IDX_77FD02ADE13F470 (taxon_id), PRIMARY KEY(channel_id, taxon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_pricing (id INT AUTO_INCREMENT NOT NULL, product_variant_id INT NOT NULL, price INT DEFAULT NULL, channel_code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, original_price INT DEFAULT NULL, minimum_price INT DEFAULT 0, lowest_price_before_discount INT DEFAULT NULL, UNIQUE INDEX product_variant_channel_idx (product_variant_id, channel_code), INDEX IDX_7801820CA80EF684 (product_variant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_pricing_catalog_promotions (channel_pricing_id INT NOT NULL, catalog_promotion_id INT NOT NULL, INDEX IDX_9F52FF513EADFFE5 (channel_pricing_id), INDEX IDX_9F52FF5122E2CB5A (catalog_promotion_id), PRIMARY KEY(channel_pricing_id, catalog_promotion_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_channel_pricing_log_entry (id INT AUTO_INCREMENT NOT NULL, channel_pricing_id INT NOT NULL, price INT NOT NULL, original_price INT DEFAULT NULL, logged_at DATETIME NOT NULL, INDEX IDX_77181A53EADFFE5 (channel_pricing_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_country (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(2) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, enabled TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_E74256BF77153098 (code), INDEX IDX_E74256BF77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_currency (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(3) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_96EDD3D077153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_customer (id INT AUTO_INCREMENT NOT NULL, customer_group_id INT DEFAULT NULL, default_address_id INT DEFAULT NULL, email VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, email_canonical VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, first_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, last_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, birthday DATETIME DEFAULT NULL, gender VARCHAR(1) CHARACTER SET utf8mb3 DEFAULT 'u' NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, phone_number VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, subscribed_to_newsletter TINYINT(1) NOT NULL, agree_terms_of_condition TINYINT(1) DEFAULT 0 NOT NULL, isAffiliate TINYINT(1) NOT NULL, affiliateCode VARCHAR(10) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, commissionRate DOUBLE PRECISION DEFAULT NULL, totalClicks TINYINT(1) NOT NULL, totalConversions TINYINT(1) NOT NULL, totalEarnings DOUBLE PRECISION DEFAULT NULL, customer_stripe_id VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_7E82D5E6E7927C74 (email), UNIQUE INDEX UNIQ_7E82D5E6A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_7E82D5E6BD94FB16 (default_address_id), UNIQUE INDEX UNIQ_7E82D5E6E1DD8651 (affiliateCode), INDEX IDX_7E82D5E6D2919A68 (customer_group_id), INDEX created_at_index (created_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_customer_group (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_7FCF9B0577153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_exchange_rate (id INT AUTO_INCREMENT NOT NULL, source_currency INT NOT NULL, target_currency INT NOT NULL, ratio NUMERIC(10, 5) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_5F52B852A76BEEDB3FD5856 (source_currency, target_currency), INDEX IDX_5F52B852A76BEED (source_currency), INDEX IDX_5F52B85B3FD5856 (target_currency), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_gateway_config (id INT AUTO_INCREMENT NOT NULL, config LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, gateway_name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, factory_name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_locale (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(12) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_7BA1286477153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_migrations (version VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, executed_at DATETIME DEFAULT NULL, execution_time INT DEFAULT NULL, PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_order (id INT AUTO_INCREMENT NOT NULL, shipping_address_id INT DEFAULT NULL, billing_address_id INT DEFAULT NULL, channel_id INT DEFAULT NULL, promotion_coupon_id INT DEFAULT NULL, customer_id INT DEFAULT NULL, number VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, notes LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, state VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, checkout_completed_at DATETIME DEFAULT NULL, items_total INT NOT NULL, adjustments_total INT NOT NULL, total INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, currency_code VARCHAR(3) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, locale_code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, checkout_state VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, payment_state VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, shipping_state VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, token_value VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, customer_ip VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_by_guest TINYINT(1) DEFAULT 1 NOT NULL, referrer VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_6196A1F996901F54 (number), UNIQUE INDEX UNIQ_6196A1F94D4CFF2B (shipping_address_id), UNIQUE INDEX UNIQ_6196A1F979D0C0E4 (billing_address_id), UNIQUE INDEX UNIQ_6196A1F9BEA95C75 (token_value), INDEX IDX_6196A1F972F5A1AA (channel_id), INDEX IDX_6196A1F917B24436 (promotion_coupon_id), INDEX IDX_6196A1F99395C3F3 (customer_id), INDEX IDX_6196A1F9A393D2FB43625D9F (state, updated_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_order_item (id INT AUTO_INCREMENT NOT NULL, order_id INT NOT NULL, variant_id INT NOT NULL, quantity INT NOT NULL, unit_price INT NOT NULL, units_total INT NOT NULL, adjustments_total INT NOT NULL, total INT NOT NULL, is_immutable TINYINT(1) NOT NULL, product_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, variant_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, version INT DEFAULT 1 NOT NULL, original_unit_price INT DEFAULT NULL, INDEX IDX_77B587ED8D9F6D38 (order_id), INDEX IDX_77B587ED3B69A9AF (variant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_order_item_unit (id INT AUTO_INCREMENT NOT NULL, order_item_id INT NOT NULL, shipment_id INT DEFAULT NULL, adjustments_total INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_82BF226EE415FB15 (order_item_id), INDEX IDX_82BF226E7BE036FC (shipment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_order_sequence (id INT AUTO_INCREMENT NOT NULL, idx INT NOT NULL, version INT DEFAULT 1 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_payment (id INT AUTO_INCREMENT NOT NULL, method_id INT DEFAULT NULL, order_id INT NOT NULL, currency_code VARCHAR(3) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, amount INT NOT NULL, state VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, details LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_D9191BD419883967 (method_id), INDEX IDX_D9191BD48D9F6D38 (order_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_payment_method (id INT AUTO_INCREMENT NOT NULL, gateway_config_id INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, environment VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, is_enabled TINYINT(1) NOT NULL, position INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_A75B0B0D77153098 (code), INDEX IDX_A75B0B0DF23D6140 (gateway_config_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_payment_method_channels (payment_method_id INT NOT NULL, channel_id INT NOT NULL, INDEX IDX_543AC0CC5AA1164F (payment_method_id), INDEX IDX_543AC0CC72F5A1AA (channel_id), PRIMARY KEY(payment_method_id, channel_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_payment_method_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, instructions LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_payment_method_translation_uniq_trans (translatable_id, locale), INDEX IDX_966BE3A12C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_payment_security_token (hash VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, details LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci` COMMENT '(DC2Type:object)', after_url LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, target_url LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, gateway_name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, PRIMARY KEY(hash)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_paypal_plugin_pay_pal_credentials (id VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, payment_method_id INT DEFAULT NULL, access_token VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, creation_time DATETIME NOT NULL, expiration_time DATETIME NOT NULL, INDEX IDX_C56F54AD5AA1164F (payment_method_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product (id INT AUTO_INCREMENT NOT NULL, main_taxon_id INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, enabled TINYINT(1) NOT NULL, variant_selection_method VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, average_rating DOUBLE PRECISION DEFAULT '0' NOT NULL, UNIQUE INDEX UNIQ_677B9B7477153098 (code), INDEX IDX_677B9B74731E505 (main_taxon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_association (id INT AUTO_INCREMENT NOT NULL, association_type_id INT NOT NULL, product_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX product_association_idx (product_id, association_type_id), INDEX IDX_48E9CDABB1E1C39 (association_type_id), INDEX IDX_48E9CDAB4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_association_product (association_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_A427B983EFB9C8A5 (association_id), INDEX IDX_A427B9834584665A (product_id), PRIMARY KEY(association_id, product_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_association_type (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_CCB8914C77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_association_type_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_product_association_type_translation_uniq_trans (translatable_id, locale), INDEX IDX_4F618E52C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_attribute (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, type VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, storage_type VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, configuration LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, position INT NOT NULL, translatable TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX UNIQ_BFAF484A77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_attribute_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_product_attribute_translation_uniq_trans (translatable_id, locale), INDEX IDX_93850EBA2C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_attribute_value (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, attribute_id INT NOT NULL, text_value LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, boolean_value TINYINT(1) DEFAULT NULL, integer_value INT DEFAULT NULL, float_value DOUBLE PRECISION DEFAULT NULL, datetime_value DATETIME DEFAULT NULL, date_value DATE DEFAULT NULL, json_value LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`, locale_code VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, INDEX IDX_8A053E544584665A (product_id), INDEX IDX_8A053E54B6E62EFA (attribute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_channels (product_id INT NOT NULL, channel_id INT NOT NULL, INDEX IDX_F9EF269B4584665A (product_id), INDEX IDX_F9EF269B72F5A1AA (channel_id), PRIMARY KEY(product_id, channel_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_image (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, path VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, INDEX IDX_88C64B2D7E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_image_product_variants (image_id INT NOT NULL, variant_id INT NOT NULL, INDEX IDX_8FFDAE8D3DA5256D (image_id), INDEX IDX_8FFDAE8D3B69A9AF (variant_id), PRIMARY KEY(image_id, variant_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_option (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, position INT NOT NULL, UNIQUE INDEX UNIQ_E4C0EBEF77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_option_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_product_option_translation_uniq_trans (translatable_id, locale), INDEX IDX_CBA491AD2C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_option_value (id INT AUTO_INCREMENT NOT NULL, option_id INT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_F7FF7D4B77153098 (code), INDEX IDX_F7FF7D4BA7C41D6F (option_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_option_value_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, value VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_product_option_value_translation_uniq_trans (translatable_id, locale), INDEX IDX_8D4382DC2C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_options (product_id INT NOT NULL, option_id INT NOT NULL, INDEX IDX_2B5FF0094584665A (product_id), INDEX IDX_2B5FF009A7C41D6F (option_id), PRIMARY KEY(product_id, option_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_review (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, author_id INT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, rating INT NOT NULL, comment LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, status VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_C7056A994584665A (product_id), INDEX IDX_C7056A99F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_taxon (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, taxon_id INT NOT NULL, position INT NOT NULL, UNIQUE INDEX product_taxon_idx (product_id, taxon_id), INDEX IDX_169C6CD94584665A (product_id), INDEX IDX_169C6CD9DE13F470 (taxon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, slug VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, meta_keywords VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, meta_description VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, short_description LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_product_translation_uniq_trans (translatable_id, locale), UNIQUE INDEX UNIQ_105A9084180C698989D9B62 (locale, slug), INDEX IDX_105A9082C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_variant (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, tax_category_id INT DEFAULT NULL, shipping_category_id INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, on_hold INT NOT NULL, on_hand INT NOT NULL, tracked TINYINT(1) NOT NULL, width DOUBLE PRECISION DEFAULT NULL, height DOUBLE PRECISION DEFAULT NULL, depth DOUBLE PRECISION DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, position INT NOT NULL, shipping_required TINYINT(1) NOT NULL, version INT DEFAULT 1 NOT NULL, enabled TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_A29B52377153098 (code), INDEX IDX_A29B5234584665A (product_id), INDEX IDX_A29B5239DF894ED (tax_category_id), INDEX IDX_A29B5239E2D1A41 (shipping_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_variant_option_value (variant_id INT NOT NULL, option_value_id INT NOT NULL, INDEX IDX_76CDAFA13B69A9AF (variant_id), INDEX IDX_76CDAFA1D957CA06 (option_value_id), PRIMARY KEY(variant_id, option_value_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_product_variant_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_product_variant_translation_uniq_trans (translatable_id, locale), INDEX IDX_8DC18EDC2C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_promotion (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, priority INT NOT NULL, exclusive TINYINT(1) NOT NULL, usage_limit INT DEFAULT NULL, used INT NOT NULL, coupon_based TINYINT(1) NOT NULL, starts_at DATETIME DEFAULT NULL, ends_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, applies_to_discounted TINYINT(1) DEFAULT 1 NOT NULL, archived_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_F157396377153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_promotion_action (id INT AUTO_INCREMENT NOT NULL, promotion_id INT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, configuration LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, INDEX IDX_933D0915139DF194 (promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_promotion_channels (promotion_id INT NOT NULL, channel_id INT NOT NULL, INDEX IDX_1A044F64139DF194 (promotion_id), INDEX IDX_1A044F6472F5A1AA (channel_id), PRIMARY KEY(promotion_id, channel_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_promotion_coupon (id INT AUTO_INCREMENT NOT NULL, promotion_id INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, usage_limit INT DEFAULT NULL, used INT NOT NULL, expires_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, per_customer_usage_limit INT DEFAULT NULL, reusable_from_cancelled_orders TINYINT(1) DEFAULT 1 NOT NULL, UNIQUE INDEX UNIQ_B04EBA8577153098 (code), INDEX IDX_B04EBA85139DF194 (promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_promotion_order (order_id INT NOT NULL, promotion_id INT NOT NULL, INDEX IDX_BF9CF6FB8D9F6D38 (order_id), INDEX IDX_BF9CF6FB139DF194 (promotion_id), PRIMARY KEY(order_id, promotion_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_promotion_rule (id INT AUTO_INCREMENT NOT NULL, promotion_id INT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, configuration LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, INDEX IDX_2C188EA8139DF194 (promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_promotion_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, label VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX sylius_promotion_translation_uniq_trans (translatable_id, locale), INDEX IDX_3C7A76182C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_province (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, abbreviation VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_B5618FE477153098 (code), UNIQUE INDEX UNIQ_B5618FE4F92F3E705E237E06 (country_id, name), INDEX IDX_B5618FE4F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shipment (id INT AUTO_INCREMENT NOT NULL, method_id INT NOT NULL, order_id INT NOT NULL, state VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, tracking VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, shipped_at DATETIME DEFAULT NULL, adjustments_total INT NOT NULL, INDEX IDX_FD707B3319883967 (method_id), INDEX IDX_FD707B338D9F6D38 (order_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shipping_category (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_B1D6465277153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shipping_method (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, zone_id INT NOT NULL, tax_category_id INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, configuration LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, category_requirement INT NOT NULL, calculator VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, is_enabled TINYINT(1) NOT NULL, position INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, archived_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_5FB0EE1177153098 (code), INDEX IDX_5FB0EE1112469DE2 (category_id), INDEX IDX_5FB0EE119F2C3FAB (zone_id), INDEX IDX_5FB0EE119DF894ED (tax_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shipping_method_channels (shipping_method_id INT NOT NULL, channel_id INT NOT NULL, INDEX IDX_2D9833355F7D6850 (shipping_method_id), INDEX IDX_2D98333572F5A1AA (channel_id), PRIMARY KEY(shipping_method_id, channel_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shipping_method_rule (id INT AUTO_INCREMENT NOT NULL, shipping_method_id INT DEFAULT NULL, type VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, configuration LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, INDEX IDX_88A0EB655F7D6850 (shipping_method_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shipping_method_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX sylius_shipping_method_translation_uniq_trans (translatable_id, locale), INDEX IDX_2B37DB3D2C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shop_billing_data (id INT AUTO_INCREMENT NOT NULL, company VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, tax_id VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, country_code VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, street VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, city VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, postcode VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_shop_user (id INT AUTO_INCREMENT NOT NULL, customer_id INT NOT NULL, username VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, username_canonical VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, password VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, last_login DATETIME DEFAULT NULL, password_reset_token VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, password_requested_at DATETIME DEFAULT NULL, email_verification_token VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, verified_at DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, credentials_expire_at DATETIME DEFAULT NULL, roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, email VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, email_canonical VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, encoder_name VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, item_limit INT DEFAULT 3 NOT NULL, default_item_limit INT DEFAULT 3 NOT NULL, UNIQUE INDEX UNIQ_7C2B74809395C3F3 (customer_id), UNIQUE INDEX UNIQ_7C2B74806B7BA4B6 (password_reset_token), UNIQUE INDEX UNIQ_7C2B7480C4995C67 (email_verification_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_tax_category (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_221EB0BE77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_tax_rate (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, zone_id INT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, amount NUMERIC(10, 5) NOT NULL, included_in_price TINYINT(1) NOT NULL, calculator VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, start_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_3CD86B2E77153098 (code), INDEX IDX_3CD86B2E12469DE2 (category_id), INDEX IDX_3CD86B2E9F2C3FAB (zone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_taxon (id INT AUTO_INCREMENT NOT NULL, tree_root INT DEFAULT NULL, parent_id INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, tree_left INT NOT NULL, tree_right INT NOT NULL, tree_level INT NOT NULL, position INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, enabled TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_CFD811CA77153098 (code), INDEX IDX_CFD811CAA977936C (tree_root), INDEX IDX_CFD811CA727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_taxon_image (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, path VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, INDEX IDX_DBE52B287E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_taxon_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, slug VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, locale VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX slug_uidx (locale, slug), UNIQUE INDEX sylius_taxon_translation_uniq_trans (translatable_id, locale), INDEX IDX_1487DFCF2C2AC5D3 (translatable_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_user_oauth (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, provider VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, identifier VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, access_token TEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, refresh_token TEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX user_provider (user_id, provider), INDEX IDX_C3471B78A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_zone (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, type VARCHAR(8) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, scope VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_7BE2258E77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sylius_zone_member (id INT AUTO_INCREMENT NOT NULL, belongs_to INT DEFAULT NULL, code VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, UNIQUE INDEX UNIQ_E8B5ABF34B0E929B77153098 (belongs_to, code), INDEX IDX_E8B5ABF34B0E929B (belongs_to), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE app_item ADD CONSTRAINT FK_1A3500BEA76ED395 FOREIGN KEY (user_id) REFERENCES sylius_shop_user (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE app_item_comment ADD CONSTRAINT FK_ITEM_ID FOREIGN KEY (item_id) REFERENCES app_item (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item_limit_purchase ADD CONSTRAINT FK_240070CDA76ED395 FOREIGN KEY (user_id) REFERENCES sylius_shop_user (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE qr_code ADD CONSTRAINT FK_7D8B1FB5126F525E FOREIGN KEY (item_id) REFERENCES app_item (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_address ADD CONSTRAINT FK_B97FF0589395C3F3 FOREIGN KEY (customer_id) REFERENCES sylius_customer (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment ADD CONSTRAINT FK_ACA6E0F27BE036FC FOREIGN KEY (shipment_id) REFERENCES sylius_shipment (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment ADD CONSTRAINT FK_ACA6E0F28D9F6D38 FOREIGN KEY (order_id) REFERENCES sylius_order (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment ADD CONSTRAINT FK_ACA6E0F2E415FB15 FOREIGN KEY (order_item_id) REFERENCES sylius_order_item (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_adjustment ADD CONSTRAINT FK_ACA6E0F2F720C233 FOREIGN KEY (order_item_unit_id) REFERENCES sylius_order_item_unit (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_avatar_image ADD CONSTRAINT FK_1068A3A97E3C61F9 FOREIGN KEY (owner_id) REFERENCES sylius_admin_user (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_action ADD CONSTRAINT FK_F529624722E2CB5A FOREIGN KEY (catalog_promotion_id) REFERENCES sylius_catalog_promotion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_channels ADD CONSTRAINT FK_48E9AE7622E2CB5A FOREIGN KEY (catalog_promotion_id) REFERENCES sylius_catalog_promotion (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_channels ADD CONSTRAINT FK_48E9AE7672F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_scope ADD CONSTRAINT FK_584AA86A139DF194 FOREIGN KEY (promotion_id) REFERENCES sylius_catalog_promotion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_catalog_promotion_translation ADD CONSTRAINT FK_BA065D3C2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_catalog_promotion (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119E3101778E FOREIGN KEY (base_currency_id) REFERENCES sylius_currency (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119E743BF776 FOREIGN KEY (default_locale_id) REFERENCES sylius_locale (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119E75F20EAE FOREIGN KEY (channel_price_history_config_id) REFERENCES sylius_channel_price_history_config (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119EA978C17 FOREIGN KEY (default_tax_zone_id) REFERENCES sylius_zone (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119EB5282EDF FOREIGN KEY (shop_billing_data_id) REFERENCES sylius_shop_billing_data (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel ADD CONSTRAINT FK_16C8119EF242B1E6 FOREIGN KEY (menu_taxon_id) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_countries ADD CONSTRAINT FK_D96E51AE72F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_countries ADD CONSTRAINT FK_D96E51AEF92F3E70 FOREIGN KEY (country_id) REFERENCES sylius_country (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_currencies ADD CONSTRAINT FK_AE491F9338248176 FOREIGN KEY (currency_id) REFERENCES sylius_currency (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_currencies ADD CONSTRAINT FK_AE491F9372F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_locales ADD CONSTRAINT FK_786B7A8472F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_locales ADD CONSTRAINT FK_786B7A84E559DFD1 FOREIGN KEY (locale_id) REFERENCES sylius_locale (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_price_history_config_excluded_taxons ADD CONSTRAINT FK_77FD02A72F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel_price_history_config (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_price_history_config_excluded_taxons ADD CONSTRAINT FK_77FD02ADE13F470 FOREIGN KEY (taxon_id) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing ADD CONSTRAINT FK_7801820CA80EF684 FOREIGN KEY (product_variant_id) REFERENCES sylius_product_variant (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing_catalog_promotions ADD CONSTRAINT FK_9F52FF5122E2CB5A FOREIGN KEY (catalog_promotion_id) REFERENCES sylius_catalog_promotion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing_catalog_promotions ADD CONSTRAINT FK_9F52FF513EADFFE5 FOREIGN KEY (channel_pricing_id) REFERENCES sylius_channel_pricing (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_channel_pricing_log_entry ADD CONSTRAINT FK_77181A53EADFFE5 FOREIGN KEY (channel_pricing_id) REFERENCES sylius_channel_pricing (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_customer ADD CONSTRAINT FK_7E82D5E6BD94FB16 FOREIGN KEY (default_address_id) REFERENCES sylius_address (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_customer ADD CONSTRAINT FK_7E82D5E6D2919A68 FOREIGN KEY (customer_group_id) REFERENCES sylius_customer_group (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_exchange_rate ADD CONSTRAINT FK_5F52B852A76BEED FOREIGN KEY (source_currency) REFERENCES sylius_currency (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_exchange_rate ADD CONSTRAINT FK_5F52B85B3FD5856 FOREIGN KEY (target_currency) REFERENCES sylius_currency (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order ADD CONSTRAINT FK_6196A1F917B24436 FOREIGN KEY (promotion_coupon_id) REFERENCES sylius_promotion_coupon (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order ADD CONSTRAINT FK_6196A1F94D4CFF2B FOREIGN KEY (shipping_address_id) REFERENCES sylius_address (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order ADD CONSTRAINT FK_6196A1F972F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order ADD CONSTRAINT FK_6196A1F979D0C0E4 FOREIGN KEY (billing_address_id) REFERENCES sylius_address (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order ADD CONSTRAINT FK_6196A1F99395C3F3 FOREIGN KEY (customer_id) REFERENCES sylius_customer (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item ADD CONSTRAINT FK_77B587ED3B69A9AF FOREIGN KEY (variant_id) REFERENCES sylius_product_variant (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item ADD CONSTRAINT FK_77B587ED8D9F6D38 FOREIGN KEY (order_id) REFERENCES sylius_order (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item_unit ADD CONSTRAINT FK_82BF226E7BE036FC FOREIGN KEY (shipment_id) REFERENCES sylius_shipment (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_order_item_unit ADD CONSTRAINT FK_82BF226EE415FB15 FOREIGN KEY (order_item_id) REFERENCES sylius_order_item (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment ADD CONSTRAINT FK_D9191BD419883967 FOREIGN KEY (method_id) REFERENCES sylius_payment_method (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment ADD CONSTRAINT FK_D9191BD48D9F6D38 FOREIGN KEY (order_id) REFERENCES sylius_order (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method ADD CONSTRAINT FK_A75B0B0DF23D6140 FOREIGN KEY (gateway_config_id) REFERENCES sylius_gateway_config (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method_channels ADD CONSTRAINT FK_543AC0CC5AA1164F FOREIGN KEY (payment_method_id) REFERENCES sylius_payment_method (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method_channels ADD CONSTRAINT FK_543AC0CC72F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_payment_method_translation ADD CONSTRAINT FK_966BE3A12C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_payment_method (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_paypal_plugin_pay_pal_credentials ADD CONSTRAINT FK_C56F54AD5AA1164F FOREIGN KEY (payment_method_id) REFERENCES sylius_payment_method (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product ADD CONSTRAINT FK_677B9B74731E505 FOREIGN KEY (main_taxon_id) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association ADD CONSTRAINT FK_48E9CDAB4584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association ADD CONSTRAINT FK_48E9CDABB1E1C39 FOREIGN KEY (association_type_id) REFERENCES sylius_product_association_type (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association_product ADD CONSTRAINT FK_A427B9834584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association_product ADD CONSTRAINT FK_A427B983EFB9C8A5 FOREIGN KEY (association_id) REFERENCES sylius_product_association (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_association_type_translation ADD CONSTRAINT FK_4F618E52C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_product_association_type (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_attribute_translation ADD CONSTRAINT FK_93850EBA2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_product_attribute (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_attribute_value ADD CONSTRAINT FK_8A053E544584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_attribute_value ADD CONSTRAINT FK_8A053E54B6E62EFA FOREIGN KEY (attribute_id) REFERENCES sylius_product_attribute (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_channels ADD CONSTRAINT FK_F9EF269B4584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_channels ADD CONSTRAINT FK_F9EF269B72F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_image ADD CONSTRAINT FK_88C64B2D7E3C61F9 FOREIGN KEY (owner_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_image_product_variants ADD CONSTRAINT FK_8FFDAE8D3B69A9AF FOREIGN KEY (variant_id) REFERENCES sylius_product_variant (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_image_product_variants ADD CONSTRAINT FK_8FFDAE8D3DA5256D FOREIGN KEY (image_id) REFERENCES sylius_product_image (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_option_translation ADD CONSTRAINT FK_CBA491AD2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_product_option (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_option_value ADD CONSTRAINT FK_F7FF7D4BA7C41D6F FOREIGN KEY (option_id) REFERENCES sylius_product_option (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_option_value_translation ADD CONSTRAINT FK_8D4382DC2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_product_option_value (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_options ADD CONSTRAINT FK_2B5FF0094584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_options ADD CONSTRAINT FK_2B5FF009A7C41D6F FOREIGN KEY (option_id) REFERENCES sylius_product_option (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_review ADD CONSTRAINT FK_C7056A994584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_review ADD CONSTRAINT FK_C7056A99F675F31B FOREIGN KEY (author_id) REFERENCES sylius_customer (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_taxon ADD CONSTRAINT FK_169C6CD94584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_taxon ADD CONSTRAINT FK_169C6CD9DE13F470 FOREIGN KEY (taxon_id) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_translation ADD CONSTRAINT FK_105A9082C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant ADD CONSTRAINT FK_A29B5234584665A FOREIGN KEY (product_id) REFERENCES sylius_product (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant ADD CONSTRAINT FK_A29B5239DF894ED FOREIGN KEY (tax_category_id) REFERENCES sylius_tax_category (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant ADD CONSTRAINT FK_A29B5239E2D1A41 FOREIGN KEY (shipping_category_id) REFERENCES sylius_shipping_category (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant_option_value ADD CONSTRAINT FK_76CDAFA13B69A9AF FOREIGN KEY (variant_id) REFERENCES sylius_product_variant (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant_option_value ADD CONSTRAINT FK_76CDAFA1D957CA06 FOREIGN KEY (option_value_id) REFERENCES sylius_product_option_value (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_product_variant_translation ADD CONSTRAINT FK_8DC18EDC2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_product_variant (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_action ADD CONSTRAINT FK_933D0915139DF194 FOREIGN KEY (promotion_id) REFERENCES sylius_promotion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_channels ADD CONSTRAINT FK_1A044F64139DF194 FOREIGN KEY (promotion_id) REFERENCES sylius_promotion (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_channels ADD CONSTRAINT FK_1A044F6472F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_coupon ADD CONSTRAINT FK_B04EBA85139DF194 FOREIGN KEY (promotion_id) REFERENCES sylius_promotion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_order ADD CONSTRAINT FK_BF9CF6FB139DF194 FOREIGN KEY (promotion_id) REFERENCES sylius_promotion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_order ADD CONSTRAINT FK_BF9CF6FB8D9F6D38 FOREIGN KEY (order_id) REFERENCES sylius_order (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_rule ADD CONSTRAINT FK_2C188EA8139DF194 FOREIGN KEY (promotion_id) REFERENCES sylius_promotion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_promotion_translation ADD CONSTRAINT FK_3C7A76182C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_promotion (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_province ADD CONSTRAINT FK_B5618FE4F92F3E70 FOREIGN KEY (country_id) REFERENCES sylius_country (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipment ADD CONSTRAINT FK_FD707B3319883967 FOREIGN KEY (method_id) REFERENCES sylius_shipping_method (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipment ADD CONSTRAINT FK_FD707B338D9F6D38 FOREIGN KEY (order_id) REFERENCES sylius_order (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method ADD CONSTRAINT FK_5FB0EE1112469DE2 FOREIGN KEY (category_id) REFERENCES sylius_shipping_category (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method ADD CONSTRAINT FK_5FB0EE119DF894ED FOREIGN KEY (tax_category_id) REFERENCES sylius_tax_category (id) ON UPDATE NO ACTION ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method ADD CONSTRAINT FK_5FB0EE119F2C3FAB FOREIGN KEY (zone_id) REFERENCES sylius_zone (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_channels ADD CONSTRAINT FK_2D9833355F7D6850 FOREIGN KEY (shipping_method_id) REFERENCES sylius_shipping_method (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_channels ADD CONSTRAINT FK_2D98333572F5A1AA FOREIGN KEY (channel_id) REFERENCES sylius_channel (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_rule ADD CONSTRAINT FK_88A0EB655F7D6850 FOREIGN KEY (shipping_method_id) REFERENCES sylius_shipping_method (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shipping_method_translation ADD CONSTRAINT FK_2B37DB3D2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_shipping_method (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_shop_user ADD CONSTRAINT FK_7C2B74809395C3F3 FOREIGN KEY (customer_id) REFERENCES sylius_customer (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_tax_rate ADD CONSTRAINT FK_3CD86B2E12469DE2 FOREIGN KEY (category_id) REFERENCES sylius_tax_category (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_tax_rate ADD CONSTRAINT FK_3CD86B2E9F2C3FAB FOREIGN KEY (zone_id) REFERENCES sylius_zone (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon ADD CONSTRAINT FK_CFD811CA727ACA70 FOREIGN KEY (parent_id) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon ADD CONSTRAINT FK_CFD811CAA977936C FOREIGN KEY (tree_root) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon_image ADD CONSTRAINT FK_DBE52B287E3C61F9 FOREIGN KEY (owner_id) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_taxon_translation ADD CONSTRAINT FK_1487DFCF2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES sylius_taxon (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_user_oauth ADD CONSTRAINT FK_C3471B78A76ED395 FOREIGN KEY (user_id) REFERENCES sylius_shop_user (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sylius_zone_member ADD CONSTRAINT FK_E8B5ABF34B0E929B FOREIGN KEY (belongs_to) REFERENCES sylius_zone (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE address DROP FOREIGN KEY FK_D4E6F81A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE address
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE payment
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE `user`
        SQL);
    }
}
