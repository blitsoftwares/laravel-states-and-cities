
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code_iso2` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_iso3` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_phone` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `countries` (`id`,`code_iso2`,`code_iso3`,`name`,`code_phone`,`lang`,`created_at`,`updated_at`) VALUES (1,'BR','BRA','Brazil','+55','pt-br','2017-12-03 17:20:11','2017-12-03 17:20:11');
