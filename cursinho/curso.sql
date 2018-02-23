CREATE DATABASE  IF NOT EXISTS `curso` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `curso`;

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `id_aluno` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_aluno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade_aluno` int(10) unsigned NOT NULL,
  `endereco_aluno` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `aluno` VALUES (1,'Ricardo Mendez','ricardo21@hotmail.com',17,'Maria Beatriz - JM',NULL,'2018-02-21 02:31:53'),(2,'Tulio Saez','tulio@gmail.com',22,'Raja Gabaglia 3120',NULL,NULL),(3,'Rodrigo Gomes','rodrigo@gmail.com',35,'Sabara 94',NULL,NULL),(4,'Marina Ferreira','marina@gmail.com',26,'Sete de Setembro',NULL,NULL),(5,'Fátima Ferreira','fatima@gmail.com',50,'Músicos 33',NULL,NULL),(6,'Gabriela Gracy','gabriela@gmail.com',22,'Músicos 33',NULL,NULL),(7,'Flavia Ferreira','flavia@gmail.com',30,'Av de alvi',NULL,NULL);

DROP TABLE IF EXISTS `aluno_disciplina`;
CREATE TABLE `aluno_disciplina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aluno_id_aluno` int(10) unsigned NOT NULL,
  `disciplina_id_disciplina` int(10) unsigned NOT NULL,
  `id_professor` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_aluno_has_disciplina_disciplina1_idx` (`disciplina_id_disciplina`),
  KEY `fk_aluno_has_disciplina_aluno_idx` (`aluno_id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `aluno_disciplina` VALUES (1,1,1,1),(2,2,1,1),(3,3,1,1),(4,4,2,6),(5,5,2,6),(6,6,2,6),(7,7,8,5),(8,1,11,1),(9,1,11,1),(10,2,11,1),(11,5,1,6),(12,1,9,1),(13,6,9,1);


DROP TABLE IF EXISTS `disciplina`;

CREATE TABLE `disciplina` (
  `id_disciplina` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao_disciplina` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `disciplina` VALUES (1,'Geografia','Matéria básica de geografica para o 5º ano.','2018-02-21 00:37:03','2018-02-21 04:08:06'),(2,'Fisica','Fisica quantica','2018-02-21 00:37:03','2018-02-21 04:07:49'),(8,'Programação','JAVA',NULL,'2018-02-21 04:16:59'),(9,'Banco de Dados','Lições basicas de BD',NULL,'2018-02-22 01:31:29'),(11,'Sistemas WEB','Nocoes de Laravel',NULL,NULL);


DROP TABLE IF EXISTS `professor`;

CREATE TABLE `professor` (
  `id_professor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_professor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_professor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade_professor` int(10) unsigned DEFAULT NULL,
  `endereco_professor` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `professor` VALUES (1,'Adelaide','adelaide@gmail.com',31,'12','2018-02-21 23:10:31'),(5,'Caio','caio@gmail.com',33,'av alvi','2018-02-20 23:58:17'),(6,'Bruna','bruna@gmail.com',33,'av alvi','2018-02-21 23:10:46');

DROP TABLE IF EXISTS `professor_disciplina`;

CREATE TABLE `professor_disciplina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `professor_id_professor` int(10) unsigned NOT NULL,
  `disciplina_id_disciplina` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `professor_disciplina` VALUES (1,1,1),(2,5,8),(3,6,2),(4,1,8),(5,1,2),(6,7,1),(7,7,2),(8,7,8),(9,1,9),(10,1,11),(11,6,1);


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

