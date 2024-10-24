-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: web
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.24.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asset_containers`
--

DROP TABLE IF EXISTS `asset_containers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asset_containers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `asset_containers_handle_unique` (`handle`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asset_containers`
--

LOCK TABLES `asset_containers` WRITE;
/*!40000 ALTER TABLE `asset_containers` DISABLE KEYS */;
INSERT INTO `asset_containers` VALUES (1,'assets','Assets','public','{\"allow_moving\": true, \"search_index\": null, \"warm_presets\": null, \"allow_uploads\": true, \"source_preset\": null, \"allow_renaming\": true, \"create_folders\": true, \"allow_downloading\": true}','2023-09-17 07:13:20','2023-09-17 07:13:20');
/*!40000 ALTER TABLE `asset_containers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assets_meta`
--

DROP TABLE IF EXISTS `assets_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assets_meta` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `assets_meta_handle_index` (`handle`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets_meta`
--

LOCK TABLES `assets_meta` WRITE;
/*!40000 ALTER TABLE `assets_meta` DISABLE KEYS */;
INSERT INTO `assets_meta` VALUES (7,'assets::./.meta/avatar.png.yaml','{\"data\": [], \"size\": 8637389, \"width\": 2511, \"height\": 2511, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1694988328}','2023-09-17 22:05:28','2023-09-17 22:05:28'),(20,'assets::./.meta/pt---lm-semestrielle-ps-juillet-decembre-23.pdf.yaml','{\"data\": [], \"size\": 4305191, \"width\": null, \"height\": null, \"duration\": null, \"mime_type\": \"application/pdf\", \"last_modified\": 1708431495}','2024-02-20 12:18:15','2024-02-20 12:18:15'),(21,'assets::./.meta/imagem.PNG.yaml','{\"data\": {\"alt\": \"Relatório Semestral (Julho - Dezembro 2023)  - PROJETO PARTICIP’ACTION – INOVAÇÃO\"}, \"size\": 297866, \"width\": 802, \"height\": 603, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1708431917}','2024-02-20 12:25:17','2024-02-20 12:39:59'),(22,'assets::./.meta/pt---lm-semestrielle-ps-juillet-decembre-23-1708432726.pdf.yaml','{\"data\": [], \"size\": 4305191, \"width\": null, \"height\": null, \"duration\": null, \"mime_type\": \"application/pdf\", \"last_modified\": 1708432726}','2024-02-20 12:38:46','2024-02-20 12:38:46'),(23,'assets::./.meta/imagem-1708432739.PNG.yaml','{\"data\": {\"alt\": \"Relatório Semestral (Julho - Dezembro 2023)  - PROJETO PARTICIP’ACTION – INOVAÇÃO\"}, \"size\": 297866, \"width\": 802, \"height\": 603, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1708432739}','2024-02-20 12:38:59','2024-02-20 12:39:37'),(24,'assets::./.meta/banner-do-canal-youtube(4).png.yaml','{\"data\": [], \"size\": 2679420, \"width\": 2560, \"height\": 1440, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1709196739}','2024-02-29 08:52:19','2024-02-29 08:52:19'),(25,'assets::./.meta/whatsapp-image-2024-03-01-at-12.04.18.jpeg.yaml','{\"data\": [], \"size\": 114790, \"width\": 1600, \"height\": 1200, \"duration\": null, \"mime_type\": \"image/jpeg\", \"last_modified\": 1709291167}','2024-03-01 11:06:07','2024-03-01 11:06:07'),(26,'assets::./.meta/whatsapp-image-2024-03-01-at-12.04.22-(1).jpeg.yaml','{\"data\": [], \"size\": 133891, \"width\": 1600, \"height\": 1200, \"duration\": null, \"mime_type\": \"image/jpeg\", \"last_modified\": 1709291168}','2024-03-01 11:06:08','2024-03-01 11:06:08'),(27,'assets::./.meta/logo-canal-without-bg-(3).png.yaml','{\"data\": [], \"size\": 85336, \"width\": 400, \"height\": 258, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1709293822}','2024-03-01 11:50:22','2024-03-01 11:50:22'),(28,'assets::./.meta/podcast-1-final-thumbnail.jpg.yaml','{\"data\": [], \"size\": 213317, \"width\": 1920, \"height\": 1080, \"duration\": null, \"mime_type\": \"image/jpeg\", \"last_modified\": 1712664721}','2024-04-09 12:12:01','2024-04-09 12:12:01'),(29,'assets::./.meta/micro-projectos.png.yaml','{\"data\": [], \"size\": 4479366, \"width\": 2000, \"height\": 1600, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1715934045}','2024-05-17 06:20:45','2024-05-17 06:20:45'),(30,'assets::./.meta/familia-muave-thumbnail.jpg.yaml','{\"data\": [], \"size\": 278081, \"width\": 1920, \"height\": 1080, \"duration\": null, \"mime_type\": \"image/jpeg\", \"last_modified\": 1716903716}','2024-05-28 11:41:56','2024-05-28 11:41:56'),(31,'assets::./.meta/design-sem-nome-(2).png.yaml','{\"data\": [], \"size\": 14992303, \"width\": 6912, \"height\": 3456, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1718803686}','2024-06-19 11:28:06','2024-06-19 11:28:06'),(32,'assets::./.meta/2-podcast---baymoz-thumbnail.jpg.yaml','{\"data\": [], \"size\": 222133, \"width\": 1920, \"height\": 1080, \"duration\": null, \"mime_type\": \"image/jpeg\", \"last_modified\": 1718981657}','2024-06-21 12:54:17','2024-06-21 12:54:17'),(33,'assets::./.meta/2-podcast---baymoz-thumbnail-1718981736.jpg.yaml','{\"data\": [], \"size\": 222133, \"width\": 1920, \"height\": 1080, \"duration\": null, \"mime_type\": \"image/jpeg\", \"last_modified\": 1718981736}','2024-06-21 12:55:36','2024-06-21 12:55:36'),(34,'assets::./.meta/screenshot-from-2024-10-16-09-36-58.png.yaml','{\"data\": [], \"size\": 399659, \"width\": 699, \"height\": 568, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729417456}','2024-10-20 07:44:16','2024-10-20 07:44:16'),(35,'assets::./.meta/screenshot-from-2024-10-16-09-36-58-1729417472.png.yaml','{\"data\": [], \"size\": 399659, \"width\": 699, \"height\": 568, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729417472}','2024-10-20 07:44:32','2024-10-20 07:44:32'),(36,'assets::./.meta/screenshot-from-2024-10-16-16-47-36.png.yaml','{\"data\": [], \"size\": 433165, \"width\": 931, \"height\": 796, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729428081}','2024-10-20 10:41:21','2024-10-20 10:41:21'),(37,'assets::./.meta/screenshot-from-2024-10-13-17-13-41.png.yaml','{\"data\": [], \"size\": 580480, \"width\": 838, \"height\": 664, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729442374}','2024-10-20 14:39:34','2024-10-20 14:39:34'),(38,'assets::./.meta/screenshot-from-2024-10-16-09-36-58-1729443018.png.yaml','{\"data\": [], \"size\": 399659, \"width\": 699, \"height\": 568, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729443018}','2024-10-20 14:50:18','2024-10-20 14:50:18'),(39,'assets::./.meta/screenshot-from-2024-10-13-17-13-41-1729443333.png.yaml','{\"data\": [], \"size\": 580480, \"width\": 838, \"height\": 664, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729443333}','2024-10-20 14:55:33','2024-10-20 14:55:33'),(40,'assets::./.meta/screenshot-from-2024-10-16-16-47-59.png.yaml','{\"data\": [], \"size\": 809676, \"width\": 907, \"height\": 993, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729446474}','2024-10-20 15:47:54','2024-10-20 15:47:54'),(41,'assets::./.meta/screenshot-from-2024-10-13-13-32-19.png.yaml','{\"data\": [], \"size\": 51490, \"width\": 1092, \"height\": 653, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729446486}','2024-10-20 15:48:06','2024-10-20 15:48:06'),(42,'assets::./.meta/screenshot-from-2024-10-12-21-54-45.png.yaml','{\"data\": [], \"size\": 860145, \"width\": 1836, \"height\": 852, \"duration\": null, \"mime_type\": \"image/png\", \"last_modified\": 1729446496}','2024-10-20 15:48:16','2024-10-20 15:48:16');
/*!40000 ALTER TABLE `assets_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blueprints`
--

DROP TABLE IF EXISTS `blueprints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blueprints` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blueprints_handle_namespace_unique` (`handle`,`namespace`),
  KEY `blueprints_namespace_index` (`namespace`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blueprints`
--

LOCK TABLES `blueprints` WRITE;
/*!40000 ALTER TABLE `blueprints` DISABLE KEYS */;
INSERT INTO `blueprints` VALUES (1,NULL,'default','{\"fields\": [{\"field\": {\"type\": \"markdown\", \"display\": \"Content\", \"localizable\": true}, \"handle\": \"content\"}]}','2023-09-14 21:02:34',NULL),(2,'collections.events','event','{\"tabs\": {\"main\": {\"__count\": 0, \"display\": \"Main\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"text\", \"required\": true, \"validate\": [\"required\"]}, \"handle\": \"title\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"list\", \"type\": \"assets\", \"display\": \"Cover\", \"listable\": \"hidden\", \"restrict\": false, \"validate\": [\"image\"], \"container\": \"assets\", \"max_files\": 1, \"visibility\": \"visible\", \"hide_display\": false, \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"cover\"}, {\"field\": {\"icon\": \"text\", \"type\": \"text\", \"antlers\": false, \"display\": \"Location\", \"listable\": \"hidden\", \"input_type\": \"text\", \"visibility\": \"visible\", \"placeholder\": \"Location\", \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"location\"}, {\"field\": {\"icon\": \"bard\", \"type\": \"bard\", \"inline\": false, \"antlers\": false, \"buttons\": [\"h2\", \"h3\", \"bold\", \"italic\", \"unorderedlist\", \"orderedlist\", \"removeformat\", \"quote\", \"anchor\", \"image\", \"table\"], \"display\": \"Event Description\", \"collapse\": false, \"listable\": \"hidden\", \"previews\": true, \"validate\": [\"required\"], \"save_html\": true, \"fullscreen\": true, \"visibility\": \"visible\", \"word_count\": true, \"placeholder\": \"Event description\", \"allow_source\": true, \"hide_display\": false, \"reading_time\": true, \"target_blank\": true, \"toolbar_mode\": \"fixed\", \"link_noopener\": false, \"link_noreferrer\": false, \"smart_typography\": false, \"enable_input_rules\": true, \"enable_paste_rules\": true, \"remove_empty_nodes\": false, \"instructions_position\": \"above\", \"always_show_set_button\": false}, \"handle\": \"event_description\"}, {\"field\": {\"icon\": \"date\", \"mode\": \"single\", \"rows\": 1, \"type\": \"date\", \"inline\": false, \"columns\": 1, \"display\": \"Start date\", \"listable\": \"hidden\", \"validate\": [\"required\"], \"full_width\": false, \"visibility\": \"visible\", \"hide_display\": false, \"time_enabled\": true, \"time_seconds_enabled\": false, \"instructions_position\": \"above\"}, \"handle\": \"start_date\"}, {\"field\": {\"icon\": \"date\", \"mode\": \"single\", \"rows\": 1, \"type\": \"date\", \"inline\": false, \"columns\": 1, \"display\": \"End date\", \"listable\": \"hidden\", \"validate\": [\"required\", \"after:start_date\"], \"full_width\": false, \"visibility\": \"visible\", \"hide_display\": false, \"time_enabled\": true, \"time_seconds_enabled\": false, \"instructions_position\": \"above\"}, \"handle\": \"end_date\"}], \"__count\": 0}]}, \"sidebar\": {\"__count\": 1, \"display\": \"Sidebar\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"slug\", \"localizable\": true}, \"handle\": \"slug\"}], \"__count\": 0}]}}, \"title\": \"Event\"}','2023-09-17 07:12:31','2023-09-17 11:58:20'),(3,'collections.articles','article','{\"tabs\": {\"main\": {\"__count\": 0, \"display\": \"Principal\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"text\", \"required\": true, \"validate\": [\"required\"]}, \"handle\": \"title\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"list\", \"type\": \"assets\", \"display\": \"Cover\", \"listable\": \"hidden\", \"restrict\": false, \"validate\": [\"required\"], \"container\": \"assets\", \"max_files\": 1, \"visibility\": \"visible\", \"hide_display\": false, \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"cover\"}, {\"field\": {\"icon\": \"textarea\", \"type\": \"textarea\", \"antlers\": false, \"display\": \"Short description\", \"listable\": \"hidden\", \"visibility\": \"visible\", \"placeholder\": \"Breve descrição da actividade\", \"hide_display\": false, \"instructions\": \"Breve resumo da actividade\", \"character_limit\": \"5000\", \"instructions_position\": \"above\"}, \"handle\": \"short_description\"}, {\"field\": {\"icon\": \"video\", \"type\": \"video\", \"display\": \"Vídeo\", \"listable\": true, \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Video em formato de arquivo ou URL\", \"instructions_position\": \"above\"}, \"handle\": \"video_field\"}, {\"field\": {\"icon\": \"text\", \"type\": \"text\", \"antlers\": false, \"display\": \"Location\", \"listable\": \"hidden\", \"validate\": [\"required\"], \"input_type\": \"text\", \"visibility\": \"visible\", \"placeholder\": \"Local onde realizou-se a actividade\", \"hide_display\": false, \"instructions\": \"Local onde realizou-se a actividade\", \"instructions_position\": \"above\"}, \"handle\": \"location\"}, {\"field\": {\"icon\": \"link\", \"type\": \"link\", \"display\": \"Files\", \"listable\": true, \"container\": \"assets\", \"visibility\": \"visible\", \"collections\": [\"articles\"], \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"files\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"list\", \"type\": \"assets\", \"display\": \"Gallery\", \"listable\": \"hidden\", \"restrict\": false, \"container\": \"assets\", \"max_files\": 10, \"min_files\": 1, \"visibility\": \"visible\", \"hide_display\": false, \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"gallery\"}, {\"field\": {\"icon\": \"replicator\", \"sets\": {\"new_set_group\": {\"icon\": null, \"sets\": {\"section\": {\"icon\": \"media-news-paper\", \"fields\": [{\"field\": {\"icon\": \"text\", \"type\": \"text\", \"antlers\": false, \"display\": \"title\", \"listable\": \"hidden\", \"validate\": [\"required\"], \"input_type\": \"text\", \"visibility\": \"visible\", \"placeholder\": \"Títolo\", \"hide_display\": false, \"instructions\": \"Títolo\", \"instructions_position\": \"above\"}, \"handle\": \"title\"}, {\"field\": {\"icon\": \"textarea\", \"type\": \"textarea\", \"antlers\": false, \"display\": \"Content\", \"listable\": \"hidden\", \"validate\": [\"required\"], \"visibility\": \"visible\", \"placeholder\": \"Conteúdo da secção\", \"hide_display\": false, \"instructions\": \"Conteúdo da secção\", \"character_limit\": \"5000\", \"instructions_position\": \"above\"}, \"handle\": \"content\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"list\", \"type\": \"assets\", \"display\": \"Image\", \"listable\": \"hidden\", \"restrict\": false, \"validate\": [\"required\"], \"container\": \"assets\", \"max_files\": 1, \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Foto da secção\", \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"image\"}], \"display\": \"Section\", \"instructions\": null}}, \"display\": \"New Set Group\", \"instructions\": null}}, \"type\": \"replicator\", \"display\": \"Sections\", \"collapse\": false, \"listable\": \"hidden\", \"max_sets\": 10, \"previews\": true, \"fullscreen\": true, \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Secções da actividade ou paragrafos relacionados a actividade.\", \"instructions_position\": \"above\"}, \"handle\": \"sections\"}, {\"field\": {\"icon\": \"date\", \"mode\": \"single\", \"rows\": 1, \"type\": \"date\", \"inline\": false, \"columns\": 1, \"display\": \"Post date\", \"listable\": \"hidden\", \"full_width\": false, \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Data da postagem\", \"time_enabled\": false, \"time_seconds_enabled\": false, \"instructions_position\": \"above\"}, \"handle\": \"post_date\"}], \"__count\": 0}]}, \"sidebar\": {\"__count\": 1, \"display\": \"Sidebar\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"slug\", \"localizable\": true}, \"handle\": \"slug\"}, {\"field\": {\"icon\": \"taxonomy\", \"mode\": \"default\", \"type\": \"terms\", \"create\": true, \"display\": \"Category\", \"listable\": true, \"max_items\": 1, \"taxonomies\": [\"categories\"], \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Tipo de actividade a postar, como por exemplo fotos de um evento na qual o sumburero participou.\", \"instructions_position\": \"above\"}, \"handle\": \"category\"}], \"__count\": 0}]}}, \"title\": \"Article\"}','2023-09-17 12:34:36','2024-03-01 11:52:38'),(4,'forms','contact_us','{\"tabs\": {\"main\": {\"__count\": 0, \"display\": \"Principal\", \"sections\": [{\"fields\": [{\"field\": {\"icon\": \"text\", \"type\": \"text\", \"antlers\": false, \"display\": \"Nome\", \"listable\": \"hidden\", \"validate\": [\"required\"], \"input_type\": \"text\", \"visibility\": \"visible\", \"placeholder\": \"Nome\", \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"nome\"}, {\"field\": {\"icon\": \"text\", \"type\": \"text\", \"antlers\": false, \"display\": \"Email\", \"listable\": \"hidden\", \"validate\": [\"nullable\", \"email\"], \"input_type\": \"text\", \"visibility\": \"visible\", \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"email\"}, {\"field\": {\"icon\": \"text\", \"type\": \"text\", \"antlers\": false, \"display\": \"Contacto\", \"listable\": \"hidden\", \"validate\": [\"nullable\"], \"input_type\": \"text\", \"visibility\": \"visible\", \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"contacto\"}, {\"field\": {\"icon\": \"textarea\", \"type\": \"textarea\", \"antlers\": false, \"display\": \"Mensagem\", \"listable\": \"hidden\", \"validate\": [\"required\"], \"visibility\": \"visible\", \"placeholder\": \"Mensagem\", \"hide_display\": false, \"instructions\": \"Mensagem\", \"instructions_position\": \"above\"}, \"handle\": \"mensagem\"}], \"__count\": 0}]}}}','2023-09-17 21:52:20','2023-09-17 21:52:25'),(5,'collections.success_histories','success_history','{\"tabs\": {\"main\": {\"__count\": 0, \"display\": \"Principal\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"text\", \"antlers\": false, \"display\": \"Name\", \"listable\": \"hidden\", \"required\": true, \"validate\": [\"required\"], \"input_type\": \"text\", \"visibility\": \"visible\", \"placeholder\": \"Nome\", \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"title\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"list\", \"type\": \"assets\", \"display\": \"Image\", \"listable\": \"hidden\", \"restrict\": false, \"validate\": [\"image\"], \"container\": \"assets\", \"max_files\": 1, \"visibility\": \"visible\", \"hide_display\": false, \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"image\"}, {\"field\": {\"icon\": \"bard\", \"type\": \"bard\", \"inline\": false, \"antlers\": false, \"buttons\": [\"h2\", \"h3\", \"bold\", \"italic\", \"unorderedlist\", \"orderedlist\", \"removeformat\", \"quote\", \"anchor\", \"image\", \"table\"], \"display\": \"Content\", \"collapse\": false, \"listable\": \"hidden\", \"previews\": true, \"validate\": [\"required\"], \"save_html\": true, \"fullscreen\": true, \"visibility\": \"visible\", \"word_count\": true, \"allow_source\": true, \"hide_display\": false, \"reading_time\": false, \"target_blank\": false, \"toolbar_mode\": \"fixed\", \"link_noopener\": false, \"link_noreferrer\": false, \"smart_typography\": false, \"enable_input_rules\": true, \"enable_paste_rules\": true, \"remove_empty_nodes\": false, \"instructions_position\": \"above\", \"always_show_set_button\": false}, \"handle\": \"content\"}, {\"field\": {\"icon\": \"date\", \"mode\": \"single\", \"rows\": 1, \"type\": \"date\", \"inline\": false, \"columns\": 1, \"display\": \"History date\", \"listable\": \"hidden\", \"full_width\": false, \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Data da publicação da história de vida\", \"time_enabled\": false, \"time_seconds_enabled\": false, \"instructions_position\": \"above\"}, \"handle\": \"history_date\"}], \"__count\": 0}]}, \"sidebar\": {\"__count\": 1, \"display\": \"Sidebar\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"slug\", \"localizable\": true}, \"handle\": \"slug\"}], \"__count\": 0}]}}, \"title\": \"Success History\"}','2023-09-17 22:05:04','2023-09-17 22:26:56'),(6,'collections.articles','link','{\"tabs\": {\"main\": {\"__count\": 0, \"sections\": [{\"fields\": [{\"field\": {\"type\": \"text\"}, \"handle\": \"title\"}, {\"field\": {\"type\": \"link\", \"required\": true}, \"handle\": \"redirect\"}], \"__count\": 0}]}}, \"title\": \"Link\"}','2024-02-20 13:06:55','2024-02-20 13:06:55'),(8,'collections.articles','video','{\"tabs\": {\"main\": {\"__count\": 0, \"display\": \"Principal\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"text\", \"required\": true, \"validate\": [\"required\"]}, \"handle\": \"title\"}, {\"field\": {\"icon\": \"textarea\", \"type\": \"textarea\", \"antlers\": false, \"display\": \"Short description\", \"listable\": \"hidden\", \"visibility\": \"visible\", \"placeholder\": \"Breve descrição\", \"hide_display\": false, \"instructions\": \"Breve descrição\", \"instructions_position\": \"above\"}, \"handle\": \"short_description\"}, {\"field\": {\"icon\": \"video\", \"type\": \"video\", \"display\": \"Video\", \"listable\": \"hidden\", \"visibility\": \"visible\", \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"video\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"grid\", \"type\": \"assets\", \"display\": \"Gallery\", \"listable\": \"hidden\", \"restrict\": false, \"container\": \"assets\", \"max_files\": 10, \"min_files\": 1, \"visibility\": \"visible\", \"hide_display\": false, \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"gallery\"}, {\"field\": {\"icon\": \"date\", \"mode\": \"single\", \"rows\": 1, \"type\": \"date\", \"inline\": false, \"columns\": 1, \"display\": \"Post date\", \"listable\": \"hidden\", \"full_width\": false, \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Data da postagem\", \"time_enabled\": false, \"time_seconds_enabled\": false, \"instructions_position\": \"above\"}, \"handle\": \"post_date\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"list\", \"type\": \"assets\", \"display\": \"Caver\", \"listable\": \"hidden\", \"restrict\": false, \"container\": \"assets\", \"visibility\": \"visible\", \"hide_display\": false, \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"caver\"}], \"__count\": 0}]}, \"sidebar\": {\"__count\": 1, \"display\": \"Sidebar\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"slug\", \"localizable\": true}, \"handle\": \"slug\"}, {\"field\": {\"icon\": \"taxonomy\", \"mode\": \"default\", \"type\": \"terms\", \"create\": true, \"display\": \"Category\", \"listable\": true, \"max_items\": 1, \"taxonomies\": [\"categories\"], \"visibility\": \"visible\", \"hide_display\": false, \"instructions\": \"Tipo de actividade a postar, como por exemplo fotos de um evento na qual o sumburero participou.\", \"instructions_position\": \"above\"}, \"handle\": \"category\"}], \"__count\": 0}]}}, \"title\": \"Vídeo\"}','2024-03-01 12:01:00','2024-03-01 12:18:13'),(9,'collections.intervention','intervention','{\"tabs\": {\"main\": {\"__count\": 0, \"display\": \"Principal\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"text\", \"required\": true, \"validate\": [\"required\"]}, \"handle\": \"title\"}, {\"field\": {\"icon\": \"assets\", \"mode\": \"list\", \"type\": \"assets\", \"display\": \"image\", \"listable\": \"hidden\", \"restrict\": false, \"container\": \"assets\", \"max_files\": 1, \"min_files\": 1, \"visibility\": \"visible\", \"hide_display\": false, \"show_set_alt\": true, \"allow_uploads\": true, \"show_filename\": true, \"instructions_position\": \"above\"}, \"handle\": \"image\"}, {\"field\": {\"icon\": \"textarea\", \"type\": \"textarea\", \"antlers\": false, \"display\": \"Description\", \"listable\": \"hidden\", \"visibility\": \"visible\", \"hide_display\": false, \"instructions_position\": \"above\"}, \"handle\": \"description\"}, {\"field\": {\"icon\": \"bard\", \"type\": \"bard\", \"inline\": false, \"antlers\": false, \"buttons\": [\"h2\", \"h3\", \"bold\", \"italic\", \"unorderedlist\", \"orderedlist\", \"removeformat\", \"quote\", \"anchor\", \"image\", \"table\"], \"display\": \"Content\", \"collapse\": false, \"listable\": \"hidden\", \"previews\": true, \"save_html\": true, \"fullscreen\": true, \"visibility\": \"visible\", \"word_count\": false, \"allow_source\": true, \"hide_display\": false, \"reading_time\": false, \"target_blank\": false, \"toolbar_mode\": \"fixed\", \"link_noopener\": false, \"link_noreferrer\": false, \"smart_typography\": false, \"enable_input_rules\": true, \"enable_paste_rules\": true, \"remove_empty_nodes\": false, \"instructions_position\": \"above\", \"always_show_set_button\": false}, \"handle\": \"content\"}], \"__count\": 0}]}, \"sidebar\": {\"__count\": 1, \"display\": \"Sidebar\", \"sections\": [{\"fields\": [{\"field\": {\"type\": \"slug\", \"localizable\": true}, \"handle\": \"slug\"}], \"__count\": 0}]}}, \"title\": \"Intervention\"}','2024-10-20 14:28:00','2024-10-20 15:31:15'),(10,'collections.intervention','link','{\"tabs\": {\"main\": {\"__count\": 0, \"sections\": [{\"fields\": [{\"field\": {\"type\": \"text\"}, \"handle\": \"title\"}, {\"field\": {\"type\": \"link\", \"required\": true}, \"handle\": \"redirect\"}], \"__count\": 0}]}}, \"title\": \"Link\"}','2024-10-20 14:36:48','2024-10-20 14:36:48');
/*!40000 ALTER TABLE `blueprints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `collections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collections_handle_unique` (`handle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collections`
--

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;
INSERT INTO `collections` VALUES (1,'events','Events','{\"dated\": false, \"mount\": null, \"sites\": null, \"slugs\": true, \"inject\": [], \"layout\": null, \"routes\": [], \"sort_dir\": null, \"template\": null, \"propagate\": false, \"revisions\": false, \"structure\": null, \"sort_field\": null, \"taxonomies\": [], \"search_index\": null, \"title_formats\": [], \"default_status\": true, \"origin_behavior\": \"select\", \"preview_targets\": [{\"label\": \"Entry\", \"format\": \"{permalink}\", \"refresh\": true}], \"past_date_behavior\": \"public\", \"future_date_behavior\": \"private\"}','2023-09-17 07:06:59','2023-09-17 07:06:59'),(2,'articles','Articles','{\"dated\": false, \"mount\": null, \"sites\": null, \"slugs\": true, \"inject\": [], \"layout\": \"layout\", \"routes\": null, \"sort_dir\": \"asc\", \"template\": \"articles/show\", \"propagate\": false, \"revisions\": false, \"structure\": null, \"sort_field\": null, \"taxonomies\": [], \"search_index\": null, \"title_formats\": [], \"default_status\": true, \"origin_behavior\": \"select\", \"preview_targets\": [{\"id\": \"8gbgsC0z\", \"label\": \"Entry\", \"format\": \"{permalink}\", \"refresh\": true}], \"past_date_behavior\": \"public\", \"future_date_behavior\": \"private\"}','2023-09-17 12:02:47','2024-02-20 13:39:50'),(3,'success_histories','Success Histories','{\"dated\": false, \"mount\": null, \"sites\": null, \"slugs\": true, \"inject\": [], \"layout\": null, \"routes\": [], \"sort_dir\": null, \"template\": null, \"propagate\": false, \"revisions\": false, \"structure\": null, \"sort_field\": null, \"taxonomies\": [], \"search_index\": null, \"title_formats\": [], \"default_status\": true, \"origin_behavior\": \"select\", \"preview_targets\": [{\"label\": \"Entry\", \"format\": \"{permalink}\", \"refresh\": true}], \"past_date_behavior\": \"public\", \"future_date_behavior\": \"private\"}','2023-09-17 22:01:54','2023-09-17 22:01:54'),(4,'intervention','Interventions','{\"dated\": false, \"mount\": null, \"sites\": null, \"slugs\": true, \"inject\": [], \"layout\": \"layout\", \"routes\": null, \"sort_dir\": \"asc\", \"template\": \"interventions/show\", \"propagate\": false, \"revisions\": false, \"structure\": null, \"sort_field\": null, \"taxonomies\": [], \"search_index\": null, \"title_formats\": [], \"default_status\": true, \"origin_behavior\": \"select\", \"preview_targets\": [{\"id\": \"UHQiSOeV\", \"label\": \"Entry\", \"format\": \"{permalink}\", \"refresh\": true}], \"past_date_behavior\": \"public\", \"future_date_behavior\": \"private\"}','2024-10-20 14:26:09','2024-10-20 14:36:48');
/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entries`
--

DROP TABLE IF EXISTS `entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `site` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_id` bigint unsigned DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int DEFAULT NULL,
  `collection` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blueprint` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entries_site_index` (`site`),
  KEY `entries_origin_id_index` (`origin_id`),
  KEY `entries_uri_index` (`uri`),
  KEY `entries_order_index` (`order`),
  KEY `entries_collection_index` (`collection`),
  KEY `entries_blueprint_index` (`blueprint`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entries`
--

LOCK TABLES `entries` WRITE;
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
INSERT INTO `entries` VALUES (49,'default',NULL,1,'published','feminicidio',NULL,NULL,NULL,'intervention','intervention','{\"image\": \"screenshot-from-2024-10-13-17-13-41-1729443333.png\", \"title\": \"Feminicídio\", \"content\": \"<p>Direiros humanos das mulheres</p>\", \"updated_by\": 1, \"description\": \"Direiros humanos das mulheres\"}','2024-10-21 06:27:37','2024-10-21 06:27:37'),(50,'default',NULL,1,'published','feminicidio-em-mocambique-uma-realidade-alarmante-e-persistente',NULL,NULL,NULL,'articles','article','{\"cover\": \"screenshot-from-2024-10-13-17-13-41.png\", \"files\": null, \"title\": \"Feminicídio em Moçambique: Uma Realidade Alarmante e Persistente\", \"gallery\": [\"screenshot-from-2024-10-13-17-13-41-1729443333.png\", \"screenshot-from-2024-10-13-17-13-41.png\"], \"category\": null, \"location\": \"Esturo\", \"sections\": [], \"post_date\": \"2024-10-01\", \"updated_by\": 1, \"video_field\": null, \"short_description\": \"O feminicídio em Moçambique representa uma grave violação dos direitos humanos, afetando milhares de mulheres e refletindo uma cultura enraizada de violência de gênero. Este artigo explora a realidade desse crime, suas causas e as medidas necessárias para combatê-lo.\"}','2024-10-21 06:31:53','2024-10-21 06:31:53'),(51,'default',NULL,1,'published','apresentacao-de-actividades-sobre-o-estudo-de-feminicidio',NULL,NULL,NULL,'events','event','{\"cover\": \"screenshot-from-2024-10-13-17-13-41.png\", \"title\": \"Apresentação de actividades sobre o estudo de feminicídio\", \"end_date\": \"2024-10-29 15:30\", \"location\": \"Beira Terrace\", \"start_date\": \"2024-10-29 08:30\", \"updated_by\": 1, \"event_description\": \"<p>Apresentção do estudo que sera efectuado pelas duas instituições do ensino superior...</p>\"}','2024-10-21 06:36:28','2024-10-21 06:36:28'),(52,'default',NULL,1,'published','helto',NULL,NULL,NULL,'success_histories','success_history','{\"image\": \"screenshot-from-2024-10-13-17-13-41.png\", \"title\": \"Helton\", \"content\": \"<p><strong>Short Description:</strong><br>O feminicídio em Moçambique representa uma grave violação dos direitos humanos, afetando milhares de mulheres e refletindo uma cultura enraizada de violência de gênero. Este artigo explora a realidade desse crime, suas causas e as medidas necessárias para combatê-lo.</p>\", \"updated_by\": 1, \"history_date\": \"2024-10-21\"}','2024-10-21 06:38:02','2024-10-21 06:38:02');
/*!40000 ALTER TABLE `entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fieldsets`
--

DROP TABLE IF EXISTS `fieldsets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fieldsets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fieldsets_handle_unique` (`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fieldsets`
--

LOCK TABLES `fieldsets` WRITE;
/*!40000 ALTER TABLE `fieldsets` DISABLE KEYS */;
/*!40000 ALTER TABLE `fieldsets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_submissions`
--

DROP TABLE IF EXISTS `form_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `form_submissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `form_id` bigint unsigned NOT NULL,
  `data` json DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `form_submissions_form_id_created_at_unique` (`form_id`,`created_at`),
  KEY `form_submissions_form_id_index` (`form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=466 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_submissions`
--

LOCK TABLES `form_submissions` WRITE;
/*!40000 ALTER TABLE `form_submissions` DISABLE KEYS */;
INSERT INTO `form_submissions` VALUES (464,1,'{\"date\": \"2024-10-20T15:03:13.008815Z\", \"nome\": \"Cama casal\", \"email\": \"admin2@tecdiary.com\", \"_token\": \"cj8yBu1V87VshaTXA5InYQc6oPD2mmnnqIqrKXuB\", \"contacto\": \"847607095\", \"mensagem\": \"dewde\"}','2024-10-20 13:03:13.008815','2024-10-20 13:03:13.018985'),(465,1,'{\"date\": \"2024-10-21T08:39:53.241218Z\", \"nome\": \"Beira\", \"email\": \"nelsonmutane@gmail.com\", \"_token\": \"yE2wFB5Y8VHEvDnNbVOXHK4IqsbTjYk4LcbotTRG\", \"contacto\": \"847607095\", \"mensagem\": \"Short Description:\\r\\nO feminicídio em Moçambique representa uma grave violação dos direitos humanos, afetando milhares de mulheres e refletindo uma cultura enraizada de violência de gênero. Este artigo explora a realidade desse crime, suas causas e as medidas necessárias para combatê-lo.\"}','2024-10-21 06:39:53.241218','2024-10-21 06:39:53.244889');
/*!40000 ALTER TABLE `form_submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `forms_handle_unique` (`handle`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forms`
--

LOCK TABLES `forms` WRITE;
/*!40000 ALTER TABLE `forms` DISABLE KEYS */;
INSERT INTO `forms` VALUES (1,'contact_us','Contact us','{\"email\": [], \"store\": true, \"honeypot\": \"honeypot\"}','2023-09-17 21:49:42','2023-09-17 21:49:54');
/*!40000 ALTER TABLE `forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `global_set_variables`
--

DROP TABLE IF EXISTS `global_set_variables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `global_set_variables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `global_set_variables_handle_index` (`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_set_variables`
--

LOCK TABLES `global_set_variables` WRITE;
/*!40000 ALTER TABLE `global_set_variables` DISABLE KEYS */;
/*!40000 ALTER TABLE `global_set_variables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `global_sets`
--

DROP TABLE IF EXISTS `global_sets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `global_sets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `global_sets_handle_unique` (`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `global_sets`
--

LOCK TABLES `global_sets` WRITE;
/*!40000 ALTER TABLE `global_sets` DISABLE KEYS */;
/*!40000 ALTER TABLE `global_sets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_user`
--

DROP TABLE IF EXISTS `group_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `group_user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `group_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_user`
--

LOCK TABLES `group_user` WRITE;
/*!40000 ALTER TABLE `group_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_09_14_205919_create_taxonomies_table',1),(6,'2023_09_14_205920_create_terms_table',1),(7,'2023_09_14_205921_create_globals_table',1),(8,'2023_09_14_205922_create_global_variables_table',1),(9,'2023_09_14_205923_create_navigations_table',1),(10,'2023_09_14_205924_create_navigation_trees_table',1),(11,'2023_09_14_205925_create_collections_table',1),(12,'2023_09_14_205926_create_blueprints_table',1),(13,'2023_09_14_205927_create_fieldsets_table',1),(14,'2023_09_14_205928_create_forms_table',1),(15,'2023_09_14_205929_create_form_submissions_table',1),(16,'2023_09_14_205930_create_asset_containers_table',1),(17,'2023_09_14_205931_create_asset_table',1),(18,'2023_09_14_205932_create_revisions_table',1),(19,'2023_09_14_205948_create_entries_table',1),(20,'2023_09_14_210910_statamic_auth_tables',1),(21,'2023_09_19_221232_create_seo_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navigations`
--

DROP TABLE IF EXISTS `navigations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navigations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `navigations_handle_unique` (`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navigations`
--

LOCK TABLES `navigations` WRITE;
/*!40000 ALTER TABLE `navigations` DISABLE KEYS */;
/*!40000 ALTER TABLE `navigations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_activation_tokens`
--

DROP TABLE IF EXISTS `password_activation_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_activation_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_activation_tokens_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_activation_tokens`
--

LOCK TABLES `password_activation_tokens` WRITE;
/*!40000 ALTER TABLE `password_activation_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_activation_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `revisions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attributes` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `revisions_key_created_at_unique` (`key`,`created_at`),
  KEY `revisions_action_index` (`action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `role_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seo` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robots` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seo_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxonomies`
--

DROP TABLE IF EXISTS `taxonomies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taxonomies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sites` json DEFAULT NULL,
  `settings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `taxonomies_handle_unique` (`handle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxonomies`
--

LOCK TABLES `taxonomies` WRITE;
/*!40000 ALTER TABLE `taxonomies` DISABLE KEYS */;
INSERT INTO `taxonomies` VALUES (2,'categories','Categories','[\"default\"]','{\"revisions\": false, \"preview_targets\": [{\"label\": \"Term\", \"format\": \"{permalink}\", \"refresh\": true}]}','2023-09-17 12:43:04','2023-09-17 12:43:04');
/*!40000 ALTER TABLE `taxonomies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taxonomy_terms`
--

DROP TABLE IF EXISTS `taxonomy_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taxonomy_terms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `site` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxonomy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `taxonomy_terms_slug_taxonomy_site_unique` (`slug`,`taxonomy`,`site`),
  KEY `taxonomy_terms_site_index` (`site`),
  KEY `taxonomy_terms_uri_index` (`uri`),
  KEY `taxonomy_terms_taxonomy_index` (`taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taxonomy_terms`
--

LOCK TABLES `taxonomy_terms` WRITE;
/*!40000 ALTER TABLE `taxonomy_terms` DISABLE KEYS */;
INSERT INTO `taxonomy_terms` VALUES (1,'default','evento','/categories/evento','categories','{\"title\": \"Evento\", \"content\": \"Actividade relacionada a um evento realizado ou que sumburero participou.\", \"blueprint\": \"category\", \"updated_at\": 1694954639, \"updated_by\": 1}','2023-09-17 12:43:59','2023-09-17 12:43:59'),(2,'default','actividade','/categories/actividade','categories','{\"title\": \"Actividade\", \"content\": \"Actividade\", \"blueprint\": \"category\", \"updated_at\": 1694954655, \"updated_by\": 1}','2023-09-17 12:44:15','2023-09-17 12:44:15'),(4,'default','projecto','/categories/projecto','categories','{\"title\": \"Projecto\", \"content\": \"Projecto\", \"blueprint\": \"category\", \"updated_at\": 1729449286, \"updated_by\": 1}','2024-10-20 16:34:46','2024-10-20 16:34:46');
/*!40000 ALTER TABLE `taxonomy_terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trees`
--

DROP TABLE IF EXISTS `trees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `handle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tree` json DEFAULT NULL,
  `settings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trees_handle_type_locale_unique` (`handle`,`type`,`locale`),
  KEY `trees_type_index` (`type`),
  KEY `trees_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trees`
--

LOCK TABLES `trees` WRITE;
/*!40000 ALTER TABLE `trees` DISABLE KEYS */;
/*!40000 ALTER TABLE `trees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `super` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferences` json DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sumburero administrador','administrator@sumburero.org',NULL,'$2y$10$xbm/6uMzXCohT2SyISKGqujLQghGWzL8EAf8mtpClHoblu1R1m07y','RXl1mGSyRuLuq8aMHYZlP8lwdZc5zVgwaDWn4wKxzrUjyVRkS2ApMgVUTnSb','2023-09-14 21:09:56','2024-10-20 14:55:27',1,NULL,'{\"nav\": {\"tools\": {\"tools::addons\": \"@hide\", \"tools::updates\": \"@hide\", \"tools::utilities\": \"@hide\"}, \"content\": {\"items\": {\"content::globals\": \"@hide\", \"content::navigation\": \"@hide\", \"content::taxonomies\": \"@hide\", \"content::collections\": \"@inherit\", \"content::collections::events\": \"@move\", \"content::collections::articles\": \"@move\", \"content::taxonomies::categories\": \"@move\", \"content::collections::interventions\": \"@move\", \"content::collections::success_histories\": \"@move\"}, \"reorder\": true}, \"top_level\": {\"top_level::dashboard\": \"@hide\"}}, \"forms\": {\"contact_us\": {\"columns\": [\"nome\", \"email\", \"contacto\", \"datestamp\", \"mensagem\"], \"per_page\": 100}}, \"start_page\": \"collections/articles\", \"collections\": {\"events\": {\"columns\": [\"cover\", \"title\", \"location\", \"event_description\", \"slug\", \"status\"]}, \"articles\": {\"columns\": [\"title\", \"slug\", \"category\", \"status\", \"post_date\"]}, \"intervention\": {\"after_save\": \"continue_editing\"}, \"success_histories\": {\"columns\": [\"image\", \"title\", \"history_date\", \"status\"]}}}','2024-10-21 19:10:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-24 14:29:25
