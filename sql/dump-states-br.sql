
CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `ibge` int(11) NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (1,1,12,'AC','Acre','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (2,1,27,'AL','Alagoas','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (3,1,16,'AP','Amapá','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (4,1,13,'AM','Amazonas','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (5,1,29,'BA','Bahia','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (6,1,23,'CE','Ceará','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (7,1,53,'DF','Distrito Federal','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (8,1,32,'ES','Espírito Santo','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (9,1,52,'GO','Goiás','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (10,1,21,'MA','Maranhão','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (11,1,51,'MT','Mato Grosso','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (12,1,50,'MS','Mato Grosso do Sul','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (13,1,31,'MG','Minas Gerais','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (14,1,15,'PA','Pará','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (15,1,25,'PB','Paraíba','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (16,1,41,'PR','Paraná','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (17,1,26,'PE','Pernambuco','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (18,1,22,'PI','Piauí','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (19,1,33,'RJ','Rio de Janeiro','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (20,1,24,'RN','Rio Grande do Norte','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (21,1,43,'RS','Rio Grande do Sul','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (22,1,11,'RO','Rondônia','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (23,1,14,'RR','Roraima','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (24,1,42,'SC','Santa Catarina','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (25,1,35,'SP','São Paulo','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (26,1,28,'SE','Sergipe','2017-12-03 17:20:11','2017-12-03 17:20:11');
INSERT INTO `states` (`id`,`country_id`,`ibge`,`code`,`name`,`created_at`,`updated_at`) VALUES (27,1,17,'TO','Tocantins','2017-12-03 17:20:11','2017-12-03 17:20:11');
