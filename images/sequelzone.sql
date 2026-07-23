-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2025 at 05:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sequelzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `mime_type` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` bigint(20) UNSIGNED NOT NULL,
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `alt_text` varchar(255) DEFAULT NULL,
  `uploaded_by` bigint(20) UNSIGNED NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `filename`, `title`, `description`, `file_path`, `file_url`, `mime_type`, `file_type`, `file_size`, `metadata`, `alt_text`, `uploaded_by`, `is_public`, `created_at`, `updated_at`) VALUES
(4, 'image (3).png', 'image (3)', NULL, 'uploads/2025/10/image-3-2025-10-01-09-53-24.png', 'http://127.0.0.1:8000/storage/uploads/2025/10/image-3-2025-10-01-09-53-24.png', 'image/png', 'image', 68340, '{\"width\":1350,\"height\":559}', NULL, 1, 1, '2025-10-01 04:23:24', '2025-10-16 03:09:58'),
(6, 'Audit Planning 1.png', 'Audit Planning 1', NULL, 'uploads/2025/10/audit-planning-1-2025-10-12-18-25-07.png', 'http://127.0.0.1:8000/storage/uploads/2025/10/audit-planning-1-2025-10-12-18-25-07.png', 'image/png', 'image', 25182, '{\"width\":446,\"height\":306}', NULL, 1, 1, '2025-10-12 12:55:07', '2025-10-16 03:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `description`, `location`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Main Navigation', 'main-navigation', 'Primary navigation menu for the website', NULL, '2025-10-01 03:22:10', '2025-10-01 03:22:10', 'active'),
(2, 'Footer Menu', 'footer-menu', 'Menu for footer links', NULL, '2025-10-01 03:22:10', '2025-10-01 03:22:10', 'active'),
(3, 'Categories Menu', 'categories-menu', 'Menu showing post categories', NULL, '2025-10-01 03:22:10', '2025-10-01 03:22:10', 'active'),
(4, 'Cynthia Marshall', 'cynthia-marshall', 'Assumenda ad odit ea', 'footer', '2025-10-01 04:09:21', '2025-10-01 04:09:21', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('post','page','post_category','page_category','custom') NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `object_id` bigint(20) UNSIGNED DEFAULT NULL,
  `object_type` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `type`, `url`, `object_id`, `object_type`, `parent_id`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'Home', 'custom', '/', NULL, NULL, NULL, 1, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(2, 1, 'Posts', 'custom', '/posts', NULL, NULL, NULL, 2, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(3, 1, 'Pages', 'custom', '/pages', NULL, NULL, NULL, 3, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(4, 1, 'About Us', 'page', NULL, 1, 'page', NULL, 4, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(5, 1, 'Contact', 'page', NULL, 2, 'page', NULL, 5, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(6, 2, 'Privacy Policy', 'page', NULL, 3, 'page', NULL, 1, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(7, 2, 'Terms of Service', 'page', NULL, 4, 'page', NULL, 2, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(8, 2, 'FAQ', 'page', NULL, 5, 'page', NULL, 3, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(9, 3, 'Laravel', 'post_category', NULL, 4, 'post_category', NULL, 1, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(10, 3, 'News', 'post_category', NULL, 5, 'post_category', NULL, 2, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(11, 3, 'Programming', 'post_category', NULL, 2, 'post_category', NULL, 3, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(12, 3, 'Technology', 'post_category', NULL, 1, 'post_category', NULL, 4, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(13, 3, 'Tutorial', 'post_category', NULL, 6, 'post_category', NULL, 5, '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(14, 3, 'Web Development', 'post_category', NULL, 3, 'post_category', NULL, 6, '2025-10-01 03:22:10', '2025-10-01 03:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_01_01_000000_create_users_table', 1),
(3, '2024_01_01_000001_create_post_categories_table', 1),
(4, '2024_01_01_000002_create_posts_table', 1),
(5, '2024_01_01_000003_create_post_category_post_table', 1),
(6, '2024_01_01_000004_create_page_categories_table', 1),
(7, '2024_01_01_000005_create_pages_table', 1),
(8, '2024_01_01_000006_create_page_category_page_table', 1),
(9, '2024_01_01_000007_create_menus_table', 1),
(10, '2024_01_01_000008_create_menu_items_table', 1),
(11, '2025_09_26_054905_add_template_field_to_pages_table', 1),
(12, '2025_09_26_054910_add_template_field_to_pages_table', 1),
(13, '2025_09_26_121238_add_location_column_to_menus_table', 1),
(14, '2025_09_29_055653_add_description_and_custom_fields_to_posts_table', 1),
(15, '2025_09_30_063528_add_location_and_status_to_menus_table', 1),
(16, '2025_09_30_090411_create_media_table', 1),
(17, '2025_10_01_114106_create_contacts_table', 2),
(18, '2025_10_06_041148_add_meta_fields_to_posts_table', 3),
(19, '2025_10_06_041155_add_meta_fields_to_posts_table', 3),
(20, '2025_10_07_000000_create_post_user_table', 4),
(22, '2025_10_07_115225_add_profile_image_to_users_table', 5),
(23, '2025_10_14_112609_add_faq_fields_to_pages_table', 5),
(24, '2025_10_18_053442_add_meta_keywords_to_posts_table', 6),
(25, '2025_10_22_060328_add_faq_fields_to_posts_table', 7),
(26, '2025_10_24_071522_add_intro_section_to_pages_table', 8),
(27, '2025_10_24_083713_add_services_section_to_pages_table', 9),
(28, '2025_10_24_090540_add_report_components_to_pages_table', 10),
(29, '2025_10_24_092826_add_procedure_steps_to_pages_table', 11),
(30, '2025_10_24_094743_add_checklist_items_to_pages_table', 12),
(31, '2025_10_24_094755_add_checklist_items_to_pages_table', 12),
(32, '2025_10_24_100257_add_benefits_section_to_pages_table', 13),
(33, '2025_10_24_100305_add_benefits_section_to_pages_table', 13),
(34, '2025_10_24_103436_add_partner_services_section_to_pages_table', 14),
(35, '2025_10_28_110222_add_hero_section_to_pages_table', 15),
(36, '2025_10_28_111152_add_what_section_to_pages_table', 16),
(37, '2025_10_28_112631_add_what_additional_content_to_pages_table', 17),
(38, '2025_10_28_113033_add_applicability_section_to_pages_table', 18),
(39, '2025_10_28_113555_add_services_note_to_pages_table', 19),
(40, '2025_10_28_114136_add_report_format_header_to_pages_table', 20),
(41, '2025_10_28_114642_add_report_components_note_to_pages_table', 21),
(42, '2025_10_28_115009_add_procedure_header_to_pages_table', 22),
(43, '2025_10_28_115542_add_checklist_header_to_pages_table', 23),
(44, '2025_10_28_115819_add_checklist_note_to_pages_table', 24),
(45, '2025_10_28_120132_add_challenges_section_to_pages_table', 25),
(46, '2025_10_28_120928_add_fees_section_to_pages_table', 26),
(47, '2025_10_28_121459_add_time_taken_section_to_pages_table', 27),
(48, '2025_10_28_122130_add_benefits_header_to_pages_table', 28),
(49, '2025_10_29_072356_add_benefits_header_image_to_pages_table', 29),
(50, '2025_10_29_083526_add_fees_comparison_section_to_pages_table', 30),
(51, '2025_10_29_091246_add_time_taken_note_to_pages_table', 31),
(52, '2025_10_29_091727_add_benefits_note_to_pages_table', 32),
(53, '2025_10_29_093137_add_title_and_description_to_partner_services_section', 33),
(55, '2025_10_29_094114_add_note_to_partner_services_section', 34),
(56, '2025_10_29_095003_add_conclusion_and_partnership_sections_to_pages', 35),
(57, '2025_10_29_100022_add_company_registration_section_to_pages', 36),
(58, '2025_10_31_063606_create_noc_registrations_table', 37),
(59, '2025_10_31_000001_create_testimonials_table', 38),
(60, '2025_10_31_000002_add_video_to_testimonials_table', 39),
(61, '2025_11_03_052939_add_whatsapp_number_to_noc_registrations_table', 40);

-- --------------------------------------------------------

--
-- Table structure for table `noc_registrations`
--

CREATE TABLE `noc_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_owner_name` varchar(255) NOT NULL,
  `property_address` text NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `authorized_person_name` varchar(255) NOT NULL,
  `owner_director_partner` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `bill_type` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `noc_sign_date` date NOT NULL,
  `whatsapp_number` varchar(10) DEFAULT NULL,
  `owner_name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `faq_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `faq_title` varchar(255) DEFAULT NULL,
  `faq_subtitle` text DEFAULT NULL,
  `faq_items` longtext DEFAULT NULL COMMENT 'JSON data for FAQ items',
  `intro_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `intro_title` varchar(255) DEFAULT NULL,
  `intro_content` text DEFAULT NULL,
  `hero_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_benefits` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`hero_benefits`)),
  `hero_button_text` varchar(255) DEFAULT NULL,
  `hero_button_link` varchar(255) DEFAULT NULL,
  `hero_video_text` varchar(255) DEFAULT NULL,
  `hero_video_link` varchar(255) DEFAULT NULL,
  `hero_document_text` varchar(255) DEFAULT NULL,
  `hero_document_link` varchar(255) DEFAULT NULL,
  `what_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `what_title` varchar(255) DEFAULT NULL,
  `what_content` text DEFAULT NULL,
  `what_image` varchar(255) DEFAULT NULL,
  `what_additional_content` text DEFAULT NULL,
  `applicability_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `applicability_title` varchar(255) DEFAULT NULL,
  `applicability_content` text DEFAULT NULL,
  `services_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `services_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services_items`)),
  `services_note` text DEFAULT NULL,
  `report_components_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `report_components_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`report_components_items`)),
  `report_format_title` varchar(255) DEFAULT NULL,
  `report_format_description` text DEFAULT NULL,
  `report_format_button1_text` varchar(255) DEFAULT NULL,
  `report_format_button1_link` varchar(255) DEFAULT NULL,
  `report_format_button2_text` varchar(255) DEFAULT NULL,
  `report_format_button2_link` varchar(255) DEFAULT NULL,
  `report_components_note` text DEFAULT NULL,
  `procedure_steps_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `procedure_steps_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`procedure_steps_items`)),
  `procedure_header_title` varchar(255) DEFAULT NULL,
  `procedure_header_description` text DEFAULT NULL,
  `procedure_header_button1_text` varchar(255) DEFAULT NULL,
  `procedure_header_button1_link` varchar(255) DEFAULT NULL,
  `procedure_header_button2_text` varchar(255) DEFAULT NULL,
  `procedure_header_button2_link` varchar(255) DEFAULT NULL,
  `checklist_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `checklist_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`checklist_items`)),
  `checklist_note` text DEFAULT NULL,
  `challenges_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `challenges_title` varchar(255) DEFAULT NULL,
  `challenges_description` text DEFAULT NULL,
  `challenges_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`challenges_items`)),
  `challenges_note` text DEFAULT NULL,
  `fees_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `fees_title` varchar(255) DEFAULT NULL,
  `fees_description` text DEFAULT NULL,
  `fees_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`fees_items`)),
  `fees_note` text DEFAULT NULL,
  `time_taken_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `time_taken_title` varchar(255) DEFAULT NULL,
  `time_taken_content` text DEFAULT NULL,
  `time_taken_note` text DEFAULT NULL,
  `checklist_header_title` varchar(255) DEFAULT NULL,
  `checklist_header_description` text DEFAULT NULL,
  `checklist_header_button1_text` varchar(255) DEFAULT NULL,
  `checklist_header_button1_link` varchar(255) DEFAULT NULL,
  `checklist_header_button2_text` varchar(255) DEFAULT NULL,
  `checklist_header_button2_link` varchar(255) DEFAULT NULL,
  `benefits_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `fees_comparison_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `fees_comparison_title` varchar(255) DEFAULT NULL,
  `fees_comparison_subtitle` text DEFAULT NULL,
  `fees_comparison_rows` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`fees_comparison_rows`)),
  `fees_comparison_note` text DEFAULT NULL,
  `benefits_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`benefits_items`)),
  `benefits_note` text DEFAULT NULL,
  `partner_services_title` varchar(255) DEFAULT NULL,
  `partner_services_description` text DEFAULT NULL,
  `benefits_header_title` varchar(255) DEFAULT NULL,
  `benefits_header_description` text DEFAULT NULL,
  `benefits_header_button1_text` varchar(255) DEFAULT NULL,
  `benefits_header_button1_link` varchar(255) DEFAULT NULL,
  `benefits_header_button2_text` varchar(255) DEFAULT NULL,
  `benefits_header_button2_link` varchar(255) DEFAULT NULL,
  `benefits_header_image` varchar(255) DEFAULT NULL,
  `partner_services_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `partner_services_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`partner_services_items`)),
  `partner_services_note` text DEFAULT NULL,
  `conclusion_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `conclusion_title` varchar(255) DEFAULT NULL,
  `conclusion_content` text DEFAULT NULL,
  `partnership_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `partnership_image` varchar(255) DEFAULT NULL,
  `partnership_title` varchar(255) DEFAULT NULL,
  `partnership_services` varchar(255) DEFAULT NULL,
  `partnership_button_text` varchar(255) DEFAULT NULL,
  `partnership_button_link` varchar(255) DEFAULT NULL,
  `company_registration_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `company_registration_title` varchar(255) DEFAULT NULL,
  `company_registration_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`company_registration_items`)),
  `excerpt` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `template` varchar(255) NOT NULL DEFAULT 'default',
  `status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `faq_enabled`, `faq_title`, `faq_subtitle`, `faq_items`, `intro_enabled`, `intro_title`, `intro_content`, `hero_enabled`, `hero_title`, `hero_benefits`, `hero_button_text`, `hero_button_link`, `hero_video_text`, `hero_video_link`, `hero_document_text`, `hero_document_link`, `what_enabled`, `what_title`, `what_content`, `what_image`, `what_additional_content`, `applicability_enabled`, `applicability_title`, `applicability_content`, `services_enabled`, `services_items`, `services_note`, `report_components_enabled`, `report_components_items`, `report_format_title`, `report_format_description`, `report_format_button1_text`, `report_format_button1_link`, `report_format_button2_text`, `report_format_button2_link`, `report_components_note`, `procedure_steps_enabled`, `procedure_steps_items`, `procedure_header_title`, `procedure_header_description`, `procedure_header_button1_text`, `procedure_header_button1_link`, `procedure_header_button2_text`, `procedure_header_button2_link`, `checklist_enabled`, `checklist_items`, `checklist_note`, `challenges_enabled`, `challenges_title`, `challenges_description`, `challenges_items`, `challenges_note`, `fees_enabled`, `fees_title`, `fees_description`, `fees_items`, `fees_note`, `time_taken_enabled`, `time_taken_title`, `time_taken_content`, `time_taken_note`, `checklist_header_title`, `checklist_header_description`, `checklist_header_button1_text`, `checklist_header_button1_link`, `checklist_header_button2_text`, `checklist_header_button2_link`, `benefits_enabled`, `fees_comparison_enabled`, `fees_comparison_title`, `fees_comparison_subtitle`, `fees_comparison_rows`, `fees_comparison_note`, `benefits_items`, `benefits_note`, `partner_services_title`, `partner_services_description`, `benefits_header_title`, `benefits_header_description`, `benefits_header_button1_text`, `benefits_header_button1_link`, `benefits_header_button2_text`, `benefits_header_button2_link`, `benefits_header_image`, `partner_services_enabled`, `partner_services_items`, `partner_services_note`, `conclusion_enabled`, `conclusion_title`, `conclusion_content`, `partnership_enabled`, `partnership_image`, `partnership_title`, `partnership_services`, `partnership_button_text`, `partnership_button_link`, `company_registration_enabled`, `company_registration_title`, `company_registration_items`, `excerpt`, `featured_image`, `sort_order`, `template`, `status`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About Us', 'about-us', '<h2>About Our SequelZone Laravel CMS</h2><p>Our SequelZone Laravel CMS combines the best features of SequelZone with the power and elegance of the Laravel framework.</p><p>We built this CMS to provide:</p><ul><li>Easy content management</li><li>Flexible menu system</li><li>Robust user management</li><li>Clean, modern interface</li><li>Developer-friendly architecture</li></ul><p>Whether you\'re a blogger, business owner, or developer, our CMS provides the tools you need to create and manage your website content effectively.</p>', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, 'default', 'published', '2025-10-01 03:22:10', '2025-10-01 03:22:10', '2025-10-01 03:22:10', NULL),
(2, 'Contact Us', 'contact-us', '<h2>Get in Touch</h2><p>We\'d love to hear from you! Contact us using the information below:</p><div class=\"row\"><div class=\"col-md-6\"><h4>Email</h4><p>info@wplaravel.com<br>support@wplaravel.com</p><h4>Phone</h4><p>+1 (555) 123-4567</p></div><div class=\"col-md-6\"><h4>Address</h4><p>123 Laravel Street<br>Framework City, FC 12345<br>United States</p></div></div><p>You can also follow us on social media for updates and news.</p>', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, 'default', 'published', '2025-10-01 03:22:10', '2025-10-01 03:22:10', '2025-10-29 05:23:31', '2025-10-29 05:23:31'),
(3, 'Privacy Policy', 'privacy-policy', '<h2>Privacy Policy</h2><p>This Privacy Policy describes how we collect, use, and protect your personal information when you use our SequelZone Laravel CMS.</p><h3>Information We Collect</h3><p>We may collect the following types of information:</p><ul><li>Personal identification information (name, email address, etc.)</li><li>Usage data and analytics</li><li>Cookies and tracking technologies</li></ul><h3>How We Use Your Information</h3><p>We use the collected information to:</p><ul><li>Provide and maintain our service</li><li>Improve user experience</li><li>Send important notifications</li><li>Comply with legal obligations</li></ul><h3>Data Protection</h3><p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p><p>For more information about our privacy practices, please contact us.</p>', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, 'default', 'published', '2025-10-01 03:22:10', '2025-10-01 03:22:10', '2025-10-29 05:23:31', '2025-10-29 05:23:31'),
(4, 'Terms of Service', 'terms-of-service', '<h2>Terms of Service</h2><p>By using our SequelZone Laravel CMS, you agree to comply with and be bound by the following terms and conditions.</p><h3>Use of Service</h3><p>You may use our CMS for lawful purposes only. You agree not to:</p><ul><li>Violate any applicable laws or regulations</li><li>Infringe on intellectual property rights</li><li>Distribute malicious software</li><li>Interfere with service operation</li></ul><h3>User Content</h3><p>You are responsible for all content you create, upload, or share through our CMS. You retain ownership of your content but grant us a license to use it as necessary to provide our services.</p><h3>Limitation of Liability</h3><p>Our service is provided \"as is\" without warranties. We are not liable for any damages arising from your use of the CMS.</p><p>These terms may be updated periodically. Continued use constitutes acceptance of any changes.</p>', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, 'default', 'published', '2025-10-01 03:22:10', '2025-10-01 03:22:10', '2025-10-29 05:23:31', '2025-10-29 05:23:31'),
(5, 'FAQ', 'faq', '<h2>Frequently Asked Questions</h2><h3>What is SequelZone Laravel CMS?</h3><p>SequelZone Laravel CMS is a content management system that combines the user-friendly interface of SequelZone with the robust architecture of the Laravel framework.</p><h3>How do I create a new post?</h3><p>To create a new post, log into the admin panel and navigate to Posts > Add New Post. Fill in the title, content, and other details, then publish your post.</p><h3>Can I customize the appearance?</h3><p>Yes, you can customize menus, categories, and content structure through the admin panel. Advanced customization requires modifying the Laravel views and styles.</p><h3>Is it SEO-friendly?</h3><p>Yes, the CMS includes features like custom slugs, meta descriptions, and clean URLs to help with search engine optimization.</p><h3>How do I manage users?</h3><p>User management is handled through Laravel\'s built-in authentication system. Administrators can manage user roles and permissions.</p><h3>Can I upload images?</h3><p>Yes, the CMS supports image uploads for featured images and content. Files are stored securely and served efficiently.</p>', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, 'default', 'published', '2025-10-01 03:22:10', '2025-10-01 03:22:10', '2025-10-01 03:22:10', NULL),
(6, 'Est voluptatem nobi', 'est-voluptatem-nobi', 'Non possimus occaec', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Proident quas labor', NULL, 70, 'hellotem', 'published', '2012-04-13 01:09:00', '2025-10-01 04:10:20', '2025-10-01 04:13:22', NULL),
(7, 'Quo sapiente aut neq', 'Sed omnis eveniet s', 'Esse sequi et rem e', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Quas vel velit quae', NULL, 25, 'default', 'published', '2011-11-21 19:20:00', '2025-10-01 04:14:35', '2025-10-01 04:14:35', NULL),
(8, 'Suscipit qui laboris', 'suscipit-qui-laboris', 'Harum quaerat mollit', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Tempore placeat vo', NULL, 83, 'boby', 'published', '2020-09-10 13:43:00', '2025-10-01 04:17:18', '2025-10-01 04:17:18', NULL),
(9, 'Pariatur Ut corpori', 'pariatur-ut-corpori', 'Deserunt consequatur', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Nobis amet non est', NULL, 13, 'default', 'published', '1971-03-26 01:08:00', '2025-10-01 04:18:00', '2025-10-01 04:18:00', NULL),
(10, 'Eaque quis esse cons', 'eaque-quis-esse-cons', 'Accusamus cupiditate', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Illum occaecat eius', NULL, 18, 'contact', 'published', '2022-09-16 08:42:00', '2025-10-01 04:21:57', '2025-10-01 04:21:57', NULL),
(11, 'Nulla pariatur Et n', 'nulla-pariatur-et-n', 'Dolor harum nisi qua', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Nihil doloribus in u', NULL, 5, 'hellotem', 'published', '1998-10-09 00:04:00', '2025-10-01 04:42:36', '2025-10-29 05:17:58', '2025-10-29 05:17:58'),
(12, 'Est mollit est quae', 'est-mollit-est-quae', 'Dolorem nisi tenetur', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Consequatur animi a', NULL, 5, 'default', 'published', '2001-11-18 08:01:00', '2025-10-14 05:47:15', '2025-10-14 05:47:15', NULL),
(13, 'Exercitationem qui d', 'exercitationem-qui-d', 'Sint exercitationem', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Voluptas perferendis', NULL, 18, 'test2', 'published', '1971-10-14 01:34:00', '2025-10-14 05:59:14', '2025-10-14 05:59:14', NULL),
(14, 'Ut magna velit dict', 'ut-magna-velit-dict', 'Nisi rerum vero rem', 1, 'Ut sed adipisci et i', 'Perspiciatis sit h', '[{\"question\":\"Ex dicta ab temporib\",\"answer\":\"Ut qui et temporibus\"},{\"question\":\"Neque sunt nisi qui\",\"answer\":\"Et quaerat consectet\"},{\"question\":\"Consectetur dolorem\",\"answer\":\"In illo deserunt off\"},{\"question\":\"Est beatae voluptate\",\"answer\":\"Aute ad similique et\"},{\"question\":\"Voluptatibus dolor d\",\"answer\":\"Cillum quaerat alias\"},{\"question\":\"Voluptatem ex vel so\",\"answer\":\"Nesciunt magni earu\"},{\"question\":\"Consectetur officia\",\"answer\":\"Commodi accusamus oc\"}]', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Animi iste modi ad', NULL, 84, 'default', 'published', '1977-07-26 16:00:00', '2025-10-14 06:03:00', '2025-10-14 06:20:13', NULL),
(15, 'Sit excepturi modi d', 'sit-excepturi-modi-d', 'Nihil officia ut con', 1, 'Aut aliquip assumend', 'Corporis temporibus', '[{\"question\":\"Aliquid atque tempor\",\"answer\":\"Reiciendis quibusdam\"},{\"question\":\"Non vel sit est lab\",\"answer\":\"Explicabo Ut totam\"},{\"question\":\"Reiciendis dolor exe\",\"answer\":\"Ut aliquid distincti\"},{\"question\":\"Et sit dolores cons\",\"answer\":\"Architecto excepteur\"},{\"question\":\"Voluptatem ea qui l\",\"answer\":\"Quibusdam dolorem qu\"},{\"question\":\"Quod sapiente corrup\",\"answer\":\"Perspiciatis except\"},{\"question\":\"Dolor velit ex cum u\",\"answer\":\"Enim quisquam ut sin\"},{\"question\":\"Sapiente autem aliqu\",\"answer\":\"Minus dolores sequi\"},{\"question\":\"In illo quo eos qui\",\"answer\":\"Quidem est laudanti\"}]', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Sed consequat Volup', NULL, 92, 'default', 'published', '2020-02-22 12:23:00', '2025-10-14 06:14:33', '2025-10-14 06:19:10', NULL),
(16, 'In excepturi dolores', 'in-excepturi-dolores', 'Incididunt explicabo', 1, 'Frequently Asked Questions', 'Adipisci aut commodi', '[{\"question\":\"Et impedit vel sapi\",\"answer\":\"Molestiae distinctio\"},{\"question\":\"Aliquam dolor consec\",\"answer\":\"Et rem minima quibus\"},{\"question\":\"Incididunt qui in re\",\"answer\":\"Placeat ab quibusda\"},{\"question\":\"Cillum et incidunt\",\"answer\":\"Voluptatem velit ita\"},{\"question\":\"Saepe excepturi offi\",\"answer\":\"Ad dolores nostrud o\"}]', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Veniam cupiditate r', NULL, 68, 'default', 'published', '1986-09-06 14:22:00', '2025-10-14 06:21:08', '2025-10-14 06:22:01', NULL),
(17, 'Quia pariatur Excep', 'quia-pariatur-excep', 'Quas et fugit iste', 0, 'Ab ex cupidatat enim', 'Aliqua Dolores non', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Consequuntur occaeca', NULL, 68, 'default', 'published', '2001-03-06 04:12:00', '2025-10-23 05:43:51', '2025-10-23 05:43:51', NULL),
(18, 'Nihil labore ipsa o', 'nihil-labore-ipsa-o', 'Qui odio laboriosam', 1, 'Consectetur consecte two', 'Delectus et velit e', '[{\"question\":\"Est cupiditate quia\",\"answer\":\"Laborum dolorum saep\"},{\"question\":\"Sapiente tenetur lor\",\"answer\":\"Earum doloribus cons\"},{\"question\":\"Culpa rerum blanditi\",\"answer\":\"Rerum quia eum volup\"}]', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Quisquam necessitati', NULL, 9, 'default', 'published', '1977-01-06 15:55:00', '2025-10-24 00:56:28', '2025-10-24 00:57:07', NULL),
(19, 'Explicabo Nobis rep', 'explicabo-nobis-rep', 'Veniam fugiat neque', 1, 'Libero do veritatis', 'Voluptas veniam vit', '[{\"question\":\"Labore corporis ulla\",\"answer\":\"Omnis rerum cum natu\"},{\"question\":\"Eligendi eiusmod vit\",\"answer\":\"In impedit totam qu\"},{\"question\":\"Dolor et nemo incidu\",\"answer\":\"Eiusmod repudiandae\"}]', 1, 'Quia adipisicing cum', 'Labore ut occaecat n', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Sit dolores dolore n', NULL, 85, 'default', 'published', '1975-05-01 04:06:00', '2025-10-24 01:55:15', '2025-10-24 01:55:15', NULL),
(20, 'Exercitation beatae', 'exercitation-beatae', 'Incididunt quos quia', 1, 'Nam assumenda dolore', 'Vitae nulla ipsa qu', '[{\"question\":\"k\",\"answer\":\"kkn\"}]', 1, 'Necessitatibus est', 'Autem vero quis aute', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Iusto voluptate itaq\",\"description\":\"In unde labore quaer\",\"image\":\"images\\/services\\/1761296116_0_iusto-voluptate-itaq.png\"}]', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Iusto qui nobis dist', NULL, 46, 'default', 'published', '1988-12-03 05:07:00', '2025-10-24 03:15:49', '2025-10-24 03:25:16', NULL),
(21, 'Commodi tempore nonv', 'commodi-tempore-nonv', 'Nisi dolorum volupta', 1, 'In quo Nam dolor dol', 'Exercitationem exerc', '[{\"question\":\"Laborum Quo fugiat\",\"answer\":\"Voluptates consectet\"}]', 1, 'Dolor rerum vitae si', 'Quo suscipit dolorem', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Iusto voluptate itaq\",\"description\":\"gbv\",\"image\":\"images\\/services\\/1761296485_0_iusto-voluptate-itaq.png\"},{\"title\":\"nnj\",\"description\":\"mn\",\"image\":\"images\\/services\\/1761296530_1_nnj.png\"}]', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Consectetur est pla', NULL, 95, 'default', 'published', '2018-08-03 14:53:00', '2025-10-24 03:26:47', '2025-10-24 03:32:10', NULL),
(22, 'Et qui illum sunt mv', 'et-qui-illum-sunt-mv', 'Quam ex eiusmod mole', 1, 'Et delectus facere', 'Nostrum laborum Ver', '[{\"question\":\"Rem quo irure aute o\",\"answer\":\"Debitis aut molestia\"}]', 1, 'Totam voluptatum fac', 'Nobis corrupti opti', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Ea labore odio irure\",\"description\":\"Aut natus ullamco au\",\"image\":\"images\\/services\\/1761297730_0_iusto-voluptate-itaq.png\"}]', NULL, 1, '[{\"title\":\"Quia aspernatur numq\",\"description\":\"knnj\",\"image\":\"images\\/report-components\\/1761297854_0_quia-aspernatur-numq.png\"},{\"title\":\"nnj\",\"description\":\"bn nj\",\"image\":\"images\\/report-components\\/1761297951_1_nnj.png\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Quis veniam molesti', NULL, 20, 'default', 'published', '2013-01-06 13:21:00', '2025-10-24 03:52:10', '2025-10-24 03:55:51', NULL),
(23, 'Do ex rerum molestia njfnvn', 'do-ex-rerum-molestia-njfnvn', 'Doloremque autem dic', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Voluptatibus ipsum o\",\"answer\":\"NJN\"}]', 1, 'Esse qui saepe assu', 'Ea autem et saepe et', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Reprehenderit in no\",\"description\":\"Voluptatibus iste ve\",\"image\":\"images\\/services\\/1761299120_0_reprehenderit-in-no.png\"}]', NULL, 1, '[{\"title\":\"Dolores aliquam quos\",\"description\":\"Aut deleniti qui ips\",\"image\":\"images\\/report-components\\/1761299120_0_dolores-aliquam-quos.png\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"Ullam et obcaecati i\",\"description\":\"Sit voluptatem reru\",\"image\":\"images\\/procedure-steps\\/1761299120_0_ullam-et-obcaecati-i.png\",\"alignment\":\"left\"},{\"step_number\":\"STEP 2\",\"title\":\"N MJN\",\"description\":\"NJN J\",\"image\":\"images\\/procedure-steps\\/1761299120_1_n-mjn.png\",\"alignment\":\"right\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Voluptatibus recusan', NULL, 56, 'default', 'published', '2006-03-15 11:29:00', '2025-10-24 04:15:20', '2025-10-24 04:15:20', NULL),
(24, 'Nulla et dolorum ad gbff', 'nulla-et-dolorum-ad-gbff', 'Aspernatur et repreh', 1, 'Veritatis et aliqua', 'Ullam reprehenderit', '[{\"question\":\"Sunt et est pariatu\",\"answer\":\"Deserunt quidem ut i\"}]', 1, 'Dolorem nemo fugiat', 'Enim quaerat tempor', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Maxime voluptatum te\",\"description\":\"Id labore ut et eaq\",\"image\":\"images\\/services\\/1761300000_0_iusto-voluptate-itaq.png\"}]', NULL, 1, '[{\"title\":\"Pariatur Voluptatem\",\"description\":\"Magnam voluptate omn\",\"image\":\"images\\/report-components\\/1761300000_0_quia-aspernatur-numq.png\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"Est eligendi nulla c\",\"description\":\"Voluptatem corrupti\",\"image\":\"images\\/procedure-steps\\/1761300000_0_ullam-et-obcaecati-i.png\",\"alignment\":\"right\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"<span class=\\\"fw-semibold\\\" style=\\\"color: #ff6600;\\\">highlighted text<\\/span> to highlight important words.\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Est qui cumque vitae', NULL, 28, 'default', 'published', '1991-03-21 03:27:00', '2025-10-24 04:30:00', '2025-10-24 04:31:00', NULL),
(25, 'Et sit beatae incidvv', 'et-sit-beatae-incidvv', 'Rerum enim sapiente', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"gvsfv\",\"answer\":\"dfvdfdvcf\"}]', 1, 'Veritatis et proiden', 'Consequatur amet qu', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Veniam perferendis\",\"description\":\"Dolores minim magni\",\"image\":\"images\\/services\\/1761301926_0_veniam-perferendis.png\"}]', NULL, 1, '[{\"title\":\"Dolores aliquam quos\",\"description\":\"vfc\",\"image\":\"images\\/report-components\\/1761301926_0_dolores-aliquam-quos.png\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"vcfv\",\"description\":\"vdf\",\"image\":\"images\\/procedure-steps\\/1761301926_0_vcfv.png\",\"alignment\":\"left\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"<span class=\\\"fw-semibold\\\" style=\\\"color: #ff6600;\\\">highlighted text<\\/span> to highlight important words.\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"vfv\",\"description\":\"gvdf\",\"icon\":\"images\\/benefits\\/1761301926_0_vfv.png\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Possimus quaerat nu', NULL, 46, 'default', 'published', '2006-08-26 21:38:00', '2025-10-24 05:02:06', '2025-10-29 05:23:12', '2025-10-29 05:23:12'),
(26, 'Natus reprehenderit v', 'natus-reprehenderit-v', 'Doloribus vel aspern', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Sunt ab ea officia i\",\"answer\":\"vcfv\"}]', 1, 'Dolore consequatur', 'Sed corrupti nostru', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Officia mollit accus\",\"description\":\"Aliqua Voluptatem s\",\"image\":\"images\\/services\\/1761303269_0_officia-mollit-accus.png\"}]', NULL, 1, '[{\"title\":\"Quia aspernatur numq\",\"description\":\"cdfv\",\"image\":\"images\\/report-components\\/1761303269_0_quia-aspernatur-numq.png\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"vd\",\"description\":\"vf\",\"image\":\"images\\/procedure-steps\\/1761303269_0_vd.png\",\"alignment\":\"left\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"Eum architecto minim\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"Exercitationem iusto\",\"description\":\"Et quos totam non mo\",\"icon\":\"images\\/benefits\\/1761303269_0_exercitationem-iusto.png\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"title\":\"Architecto nesciunt\",\"description\":\"Sunt sequi in quis\",\"icon\":\"images\\/partner-services\\/1761303269_0_architecto-nesciunt.png\"}]', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Quam voluptates eum', NULL, 60, 'portfolio', 'published', '2008-03-08 10:51:00', '2025-10-24 05:24:29', '2025-10-29 05:23:12', '2025-10-29 05:23:12'),
(27, 'about-us ddgg', 'about-us-ddgg', '<div class=\"card my-4 shadow\">\r\n    <div class=\"card-header bg-primary text-white\">\r\n        <h5 class=\"mb-0\"><i class=\"bi bi-info-circle\"></i> Card Title</h5>\r\n    </div>\r\n    <div class=\"card-body\">\r\n        <p class=\"card-text\">Card content goes here. Perfect for highlighting important information, testimonials, or call-out boxes.</p>\r\n        <a href=\"#\" class=\"btn btn-outline-primary\">Learn More</a>\r\n    </div>\r\n</div>Laboriosam illum e', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Consectetur sunt su\",\"answer\":\"vcc\"}]', 1, 'Porro velit veritati', 'Sit ratione dolorem', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Fugiat in non esse\",\"description\":\"Nostrud quis volupta\",\"image\":\"\"}]', NULL, 1, '[{\"title\":\"Dolores aliquam quos\",\"description\":\"mhgfd\",\"image\":\"\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"Facere esse volupta\",\"description\":\"Veniam ex dolorum n\",\"image\":\"images\\/procedure-steps\\/1761305785_0_facere-esse-volupta.png\",\"alignment\":\"right\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"Nulla ut animi pari\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"vfv\",\"description\":\"dvcxx\",\"icon\":null}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"title\":\"Illo voluptas saepe\",\"description\":\"Incididunt ad fugiat\",\"icon\":null}]', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Nulla tenetur ration', NULL, 79, 'hello', 'published', '2007-06-08 09:28:00', '2025-10-24 06:06:25', '2025-10-29 05:14:44', '2025-10-29 05:14:44'),
(28, 'Hello', 'hello', 'vf', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Voluptatibus ipsum o\",\"answer\":\"vffv\"}]', 1, 'vf', 'vf', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"v\",\"description\":\"v\",\"image\":\"\"}]', NULL, 1, '[{\"title\":\"hbhh\",\"description\":\"v\",\"image\":\"\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"Tempore illum anim\",\"description\":\"vfv\",\"image\":\"\",\"alignment\":\"left\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"<span class=\\\"fw-semibold\\\" style=\\\"color: #ff6600;\\\">highlighted text<\\/span> to highlight important words.\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"Exercitationem iusto\",\"description\":\"vfv\",\"icon\":null}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"title\":\"Dolor possimus sequ\",\"description\":\"vf\",\"icon\":null}]', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'vf', NULL, 0, 'default', 'published', '2025-10-28 04:21:00', '2025-10-27 22:51:55', '2025-10-29 05:14:30', '2025-10-29 05:14:30'),
(29, 'Quia dolore exceptur', 'quia-dolore-exceptur', 'Fugiat sit non dolor', 1, 'Sit et qui reprehend', 'Lorem ex sint debit', '[{\"question\":\"Voluptatibus ipsum o\",\"answer\":\"cc\"}]', 1, 'Porro velit veritati', 'fv', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"Debitis ut qui ex do\",\"description\":\"Molestiae ipsum ab i\",\"image\":\"\"}]', NULL, 1, '[{\"title\":\"Ea omnis aliquid in\",\"description\":\"Est non non aliquip\",\"image\":\"\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"v\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"Exercitationem iusto\",\"description\":\"c\",\"icon\":null}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"title\":\"Dolor possimus sequ\",\"description\":\"c\",\"icon\":null}]', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Optio qui libero ex', NULL, 38, 'default', 'published', '1993-01-11 16:15:00', '2025-10-27 22:58:59', '2025-10-29 05:15:04', '2025-10-29 05:15:04'),
(30, 'Provident ut dolore d', 'provident-ut-dolore-d', 'Adipisicing laborum', 0, 'Et laboriosam simil', 'Corporis aliquid ut', NULL, 1, 'Ea vel non commodi e', 'Et est nisi in accus', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"Minima dolor vero in\",\"description\":\"Iure commodi qui adi\",\"icon\":null}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"title\":\"Sequi aut ab volupta\",\"description\":\"Sed obcaecati autem\",\"icon\":null}]', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Qui irure nostrud ev', NULL, 38, 'default', 'published', '1984-11-03 12:09:00', '2025-10-27 23:08:49', '2025-10-27 23:14:44', NULL),
(31, 'Hello world', 'hello-world', 'vccc', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Consectetur sunt su\",\"answer\":\"vcx\"}]', 1, 'Totam voluptatum fac', 'vcc', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"kjjkj\",\"description\":\"vvc\",\"image\":\"\"}]', NULL, 1, '[{\"title\":\"vc\",\"description\":\"vvcx\",\"image\":\"\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"vvcdv\",\"description\":\"vccv\",\"image\":\"\",\"alignment\":\"left\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"vcv\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"Optio consectetur a\",\"description\":\"ccv\",\"icon\":null}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"title\":\"Veniam enim et enim\",\"description\":\"vcx\",\"icon\":null}]', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'vcc', NULL, 0, 'portfolio', 'published', '2025-10-27 23:27:00', '2025-10-27 23:17:48', '2025-10-28 00:56:08', NULL),
(32, 'Test Pagehellp', 'boby', 'cxc ksdjfnv', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Et impedit vel sapi\",\"answer\":\"c\"}]', 1, 'Placeat non invento', 'vc', 1, 'Officia eum quos obc', '[\"Voluptatem Expedita\"]', 'Laborum ad ut dolor', 'https://www.pythonindia.in/', 'Dolores sint reprehe', 'https://www.pythonindia.in/', 'Aliqua Velit Nam p', 'https://www.pythonindia.in/', 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, '[{\"title\":\"cx\",\"description\":\"cc\",\"image\":\"\"}]', NULL, 1, '[{\"title\":\"cc\",\"description\":\"cc\",\"image\":\"\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"step_number\":\"STEP 1\",\"title\":\"ccd\",\"description\":\"cdc\",\"image\":\"\",\"alignment\":\"left\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"text\":\"c\"}]', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '[{\"title\":\"Reprehenderit dolor\",\"description\":\"c\",\"icon\":null}]', NULL, 'Patron Accounting: Your Stock Audit Partner in India', 'Patron Accounting offers specialized stock audit services across India, leveraging years of experience in statutory, internal, and sector-specific audits. Our team provides:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '[{\"title\":\"Veniam enim et enim\",\"description\":\"c\",\"icon\":null}]', 'With Patron Accounting, clients receive more than just compliance; they gain actionable insights to optimize inventory management, enhance profitability, and strengthen corporate governance.', 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'cc', NULL, 0, 'default', 'published', '2025-10-27 23:29:00', '2025-10-27 23:30:18', '2025-11-04 22:36:44', NULL),
(33, 'Similique sit sint mghvbnn', 'similique-sit-sint-mghvbnn', 'Placeat et reprehen', 1, 'Et magnam quia reici', 'Sunt sed aliquam eos', '[{\"question\":\"Vel aliqua Quia dol\",\"answer\":\"Corporis quis a ut l\"}]', 1, 'In aliquid placeat', 'Ut ut sequi et corpo', 1, 'Cum laborum Sint es', '[\"Anim illo in vero au\"]', 'Et iste eaque ad qua', 'Dolorem dolor nostru', 'Lorem cupiditate ab', 'Impedit quis suscip', 'Cum praesentium ut i', 'Praesentium omnis do', 1, 'Laborum Quia vitae', 'Delectus illo conse', 'images/what-section/1761722036_what_similique-sit-sint-mghvb.jpg', 'Eos est nemo labori', 1, 'Esse eligendi iusto', 'Sequi autem perferen', 1, '[{\"title\":\"Amet provident iur\",\"description\":\"Dolorem harum labore\",\"image\":\"images\\/services\\/1761720402_0_hello-world.png\"}]', 'Iste quidem rem quia', 1, '[{\"title\":\"Excepteur modi dolor\",\"description\":\"Dolorem dolores tene\",\"image\":\"images\\/report-components\\/1761720402_0_hello-world.jpg\"}]', 'Atque commodi velit', 'Corporis occaecat ve', 'Dolorem tempore sun', 'Nisi aut odit eum pr', 'Mollitia qui sed nul', 'Dolores veniam amet', 'Id elit delectus i', 1, '[{\"step_number\":\"101\",\"title\":\"Odit enim enim volup\",\"description\":\"Quas in sunt aut min\",\"image\":\"images\\/procedure-steps\\/1761720402_0_hello-world.png\",\"alignment\":\"right\"}]', 'Reprehenderit quia', 'Accusamus quaerat vi', 'Et mollitia totam nu', 'Non voluptatem quia', 'Facilis mollitia sed', 'Laborum aliquam quo', 1, '[{\"text\":\"Pariatur Ut distinc\"}]', 'Vitae cupidatat aliq', 1, 'Velit deserunt ab no', 'Dolorum quia animi', '[{\"challenge\":\"Perferendis corrupti\",\"solution\":\"Nostrum corrupti re\"}]', 'Sint consequat Vel', 1, 'Molestiae expedita v', 'Voluptate voluptatem', '[{\"component\":\"Magna deserunt repud\",\"cost\":\"56000\"},{\"component\":\"hELLOVMJN\",\"cost\":\"30000\"}]', 'Voluptatem doloribus', 1, 'Laudantium ab at ve', 'Aut et et autem ipsa', NULL, 'Et vero quibusdam fa', 'Culpa perferendis fu', 'Similique explicabo', 'Ipsam consequatur nu', 'Dolor quo enim sit c', 'Et omnis autem est s', 1, 1, 'Hello world', 'Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world', '[{\"feature\":\"Hello worldHello worldHello worldHello world\",\"stock_audit\":\"Hello worldHello world\",\"internal_control\":\"Hello worldHello world\"}]', 'Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world', '[{\"title\":\"Hello world\",\"description\":\"Hello world\",\"icon\":\"images\\/benefits\\/1761720402_0_hello-world.png\"}]', NULL, 'Patron Accounting: Your Stock Audit Partner in India fghfnbcfd', 'Patron Accounting offers specialized stock audit services across India, leveraging years of experience in statutory, internal, and sector-specific audits. Our team provides:', 'Hello world Hello world Hello world', 'hjgfd', 'Hello world', 'https://www.pythonindia.in/', 'Hello world', 'https://www.pythonindia.in/', 'images/benefits-header/1761722916_benefits_header_similique-sit-sint-mghvb.png', 1, '[{\"title\":\"Odit non illum recu\",\"description\":\"Sit in quo enim ea\",\"icon\":\"images\\/partner-services\\/1761720402_0_hello-world.png\"}]', 'With Patron Accounting, clients receive more than just compliance; they gain actionable insights to optimize inventory management, enhance profitability, and strengthen corporate governance.', 1, 'Conclusion hELLO', 'Stock Audit is more than a compliance exercise — it is a strategic tool for reducing losses, improving efficiency, and building trust with regulators and lenders. Whether you are a retail store, manufacturer, or borrower with bank exposure, timely audits can protect and grow your business. Partner with Patron Accounting today to schedule your professional stock audit.', 1, 'images/partnership/1761731919_partnership_similique-sit-sint-mghvb.jpg', 'Your one-stop partner for Business Registration', 'Accounting • Tax • Audit • Compliance', 'Let\'s grow together!', '#contact', 1, 'Company Registration Customised by States and Cities', '[{\"title\":\"hELLO\",\"link\":\"https:\\/\\/www.pythonindia.in\\/\"},{\"title\":\"Company Registration Customised by States and Cities\",\"link\":\"https:\\/\\/www.pythonindia.in\\/\"}]', 'Cum totam quidem asp', NULL, 49, 'registration', 'published', '2021-02-25 13:56:00', '2025-10-29 01:16:42', '2025-11-03 05:04:26', '2025-11-03 05:04:26'),
(34, 'Unde perferendis sin june', 'unde-perferendis-sin-june', 'Omnis dolores veniam', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world\",\"answer\":\"Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world\"},{\"question\":\"Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world\",\"answer\":\"Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world\"}]', 1, 'Necessitatibus est', 'df', 1, 'Ut delectus ducimus', '[\"Voluptatem Expedita\"]', 'Cum et architecto in', 'Praesentium sapiente', 'Delectus qui magnam', 'Quia eu eum sit qui', 'Aliqua Velit Nam p', 'Ullam officia ut ex', 1, 'Possimus ipsa dolo', 'Eum et tempore ut l', NULL, 'Magnam consequatur', 1, 'vc', 'vc', 1, '[{\"title\":\"Exercitation dolorem\",\"description\":\"Est magna mollit ut\",\"image\":\"\"}]', 'Incidunt recusandae', 1, '[{\"title\":\"Quia aspernatur numq\",\"description\":\"df\",\"image\":\"\"}]', 'Hello world', 'vdf', 'vcfv', 'https://www.pythonindia.in/', 'vfv', 'https://www.pythonindia.in/', 'fdf', 1, '[{\"step_number\":\"STEP 1\",\"title\":\"Mollitia qui placeat\",\"description\":\"Officia sit id sit d\",\"image\":\"\",\"alignment\":\"right\"}]', 'Nostrum praesentium', 'Et sit reprehenderi', 'Qui aut doloribus ut', 'Nostrum sed et volup', 'Non omnis quidem min', 'Sit quasi et animi', 1, '[{\"text\":\"Dolorem aliquid quia\"}]', 'Sint perspiciatis i', 1, 'Rerum nesciunt erro', 'Minima pariatur Est', '[{\"challenge\":\"Est lorem eum cillum\",\"solution\":\"Consequatur consequa\"}]', 'Est corrupti esse', 1, 'Placeat accusantium', 'Maxime placeat ad v', '[{\"component\":\"Voluptates magna rec\",\"cost\":\"Rerum molestiae ut a\"}]', 'Sapiente vel mollit', 1, 'Quis natus est dolor', 'Omnis deserunt eveni', NULL, 'Amet deserunt magni', 'Accusantium placeat', 'Neque laboriosam qu', 'Doloribus consectetu', 'Et non pariatur Ame', 'Ab voluptatibus opti', 1, 1, 'Hello world', 'fdfvcf', '[{\"feature\":\"Hello worldHello worldHello worldHello world\",\"stock_audit\":\"Hello worldHello world\",\"internal_control\":\"Hello worldHello world\"},{\"feature\":\"Hello worldHello worldHello worldHello world\",\"stock_audit\":\"Hello worldHello worldHello worldHello world\",\"internal_control\":\"Hello worldHello worldHello worldHello world\"}]', 'Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world', '[{\"title\":\"Perspiciatis esse n\",\"description\":\"Id laborum Error su\",\"icon\":null}]', 'Facilis eos sit quo', 'Laboriosam nesciunt', 'Adipisicing fugit p', 'Veniam nulla assume', 'Cupidatat commodi nu', 'Odit magnam veniam', 'Perspiciatis labore', 'Maiores ut voluptatu', 'Totam dolores non ve', NULL, 1, '[{\"title\":\"Placeat dolorem nem\",\"description\":\"Tempor animi cupidi\",\"icon\":null}]', 'Neque quia culpa qu', 1, 'Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world', 'Stock Audit is more than a compliance exercise — it is a strategic tool for reducing losses, improving efficiency, and building trust with regulators and lenders. Whether you are a retail store, manufacturer, or borrower with bank exposure, timely audits can protect and grow your business. Partner with Patron Accounting today to schedule your professional stock audit.', 1, NULL, 'Nulla et deleniti in', 'Dolorem eius sequi a', 'Quia quo est et non', 'Blanditiis deleniti', 1, 'Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world', '[{\"title\":\"Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world\",\"link\":\"Hello worldHello worldHello worldHello worldHello worldHello worldHello worldHello world\"}]', 'Ut consequatur numq', NULL, 52, 'default', 'published', '1991-05-21 20:48:00', '2025-10-29 05:06:28', '2025-11-03 05:04:26', '2025-11-03 05:04:26');
INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `faq_enabled`, `faq_title`, `faq_subtitle`, `faq_items`, `intro_enabled`, `intro_title`, `intro_content`, `hero_enabled`, `hero_title`, `hero_benefits`, `hero_button_text`, `hero_button_link`, `hero_video_text`, `hero_video_link`, `hero_document_text`, `hero_document_link`, `what_enabled`, `what_title`, `what_content`, `what_image`, `what_additional_content`, `applicability_enabled`, `applicability_title`, `applicability_content`, `services_enabled`, `services_items`, `services_note`, `report_components_enabled`, `report_components_items`, `report_format_title`, `report_format_description`, `report_format_button1_text`, `report_format_button1_link`, `report_format_button2_text`, `report_format_button2_link`, `report_components_note`, `procedure_steps_enabled`, `procedure_steps_items`, `procedure_header_title`, `procedure_header_description`, `procedure_header_button1_text`, `procedure_header_button1_link`, `procedure_header_button2_text`, `procedure_header_button2_link`, `checklist_enabled`, `checklist_items`, `checklist_note`, `challenges_enabled`, `challenges_title`, `challenges_description`, `challenges_items`, `challenges_note`, `fees_enabled`, `fees_title`, `fees_description`, `fees_items`, `fees_note`, `time_taken_enabled`, `time_taken_title`, `time_taken_content`, `time_taken_note`, `checklist_header_title`, `checklist_header_description`, `checklist_header_button1_text`, `checklist_header_button1_link`, `checklist_header_button2_text`, `checklist_header_button2_link`, `benefits_enabled`, `fees_comparison_enabled`, `fees_comparison_title`, `fees_comparison_subtitle`, `fees_comparison_rows`, `fees_comparison_note`, `benefits_items`, `benefits_note`, `partner_services_title`, `partner_services_description`, `benefits_header_title`, `benefits_header_description`, `benefits_header_button1_text`, `benefits_header_button1_link`, `benefits_header_button2_text`, `benefits_header_button2_link`, `benefits_header_image`, `partner_services_enabled`, `partner_services_items`, `partner_services_note`, `conclusion_enabled`, `conclusion_title`, `conclusion_content`, `partnership_enabled`, `partnership_image`, `partnership_title`, `partnership_services`, `partnership_button_text`, `partnership_button_link`, `company_registration_enabled`, `company_registration_title`, `company_registration_items`, `excerpt`, `featured_image`, `sort_order`, `template`, `status`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(35, 'Alias iusto iste in ffvccc  mmmmm mjkkkkkkk', 'alias-iusto-iste-in-ffvccc-mmmmm-mjkkkkkkk', 'Consectetur incididu', 0, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', NULL, 0, NULL, NULL, 1, 'Cum laborum Sint es', '[\"Anim illo in vero au\",\"Anim illo in vero au\",\"Sunt rerum sed natu\"]', 'Pariatur Vitae est', 'https://www.pythonindia.in/', 'Lorem cupiditate ab', 'https://www.pythonindia.in/', 'Qui voluptatum qui a', 'https://www.pythonindia.in/', 0, NULL, NULL, NULL, 'Sunt velit quis volu', 1, 'Esse eligendi iusto', 'fff', 0, NULL, 'Nobis optio earum q', 0, NULL, 'Inventore consequatu', 'Hic voluptatibus inc', 'Voluptas eaque magna', 'Sit voluptatem aut', 'Consequat Aut asper', 'Dolor dignissimos ma', 'Quibusdam quo libero', 0, NULL, 'Voluptatem Duis fac', 'Qui obcaecati iure i', 'Aliquid harum offici', 'Facere aliquid eu di', 'Placeat sint amet', 'Nobis et illum et e', 0, NULL, 'Tenetur in voluptate', 0, 'Dolore in saepe recu', 'Fugiat pariatur Nul', NULL, NULL, 0, 'Molestiae expedita v', 'vc', NULL, NULL, 0, NULL, NULL, NULL, 'Minima aut sit exerc', 'Ullam in et commodo', 'Non iure provident', 'Dolorum sint nesciun', 'Vel molestias at dol', 'Sed iste dolorem ab', 0, 0, NULL, NULL, NULL, NULL, NULL, 'Ut officia non eaque', NULL, NULL, 'Hello world Hello world Hello world', 'gffv', 'Odit magnam veniam', 'https://www.pythonindia.in/', 'Maiores ut voluptatu', 'https://www.pythonindia.in/', NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Explicabo Reiciendi', NULL, 91, 'registration', 'published', '2022-06-20 22:32:00', '2025-10-31 01:23:11', '2025-10-31 03:50:52', NULL),
(36, 'registration', 'registration', 'dfsf', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'ffdvc', NULL, 0, 'registration', 'published', '2025-10-31 02:01:00', '2025-10-31 02:01:46', '2025-10-31 04:57:12', NULL),
(37, 'Hello- world', 'hello-worlduytrtyy', 'Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello Hello world hello', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Hello', NULL, 0, 'registration', 'published', '2025-10-31 05:37:00', '2025-10-31 05:37:52', '2025-11-04 22:36:06', NULL),
(38, 'about-us', 'about-us-new', 'Quidem harum reicien', 0, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Eveniet ut vitae ar', NULL, 22, 'about', 'published', '1978-06-03 00:21:00', '2025-11-06 03:43:04', '2025-11-06 03:43:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Main Pages', 'main-pages', 'Important website pages', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(2, 'Legal', 'legal', 'Legal pages and policies', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(3, 'Help', 'help', 'Help and support pages', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(4, 'Company', 'company', 'Company information pages', '2025-10-01 03:22:10', '2025-10-01 03:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `page_category_page`
--

CREATE TABLE `page_category_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `page_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_category_page`
--

INSERT INTO `page_category_page` (`id`, `page_id`, `page_category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 4, 2, NULL, NULL),
(5, 5, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `faq_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `faq_title` varchar(255) DEFAULT NULL,
  `faq_subtitle` text DEFAULT NULL,
  `faq_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`faq_items`)),
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `excerpt` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `custom_field_1` varchar(255) DEFAULT NULL,
  `custom_field_2` varchar(255) DEFAULT NULL,
  `custom_field_3` varchar(255) DEFAULT NULL,
  `custom_field_4` varchar(255) DEFAULT NULL,
  `custom_field_5` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `meta_title`, `meta_description`, `meta_keywords`, `faq_enabled`, `faq_title`, `faq_subtitle`, `faq_items`, `slug`, `content`, `excerpt`, `description`, `custom_field_1`, `custom_field_2`, `custom_field_3`, `custom_field_4`, `custom_field_5`, `featured_image`, `status`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Welcome to SequelZone LLP', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'welcome-to-sequelzone-llp', '<p>Welcome to your new SequelZone-like CMS built with Laravel! This is your first post. You can edit or delete it to get started with your content.</p><p>This CMS provides all the essential features you need:</p><ul><li>Posts and Pages management</li><li>Categories for both posts and pages</li><li>Menu management</li><li>User authentication</li><li>File uploads</li><li>Admin dashboard</li></ul><p>Start creating amazing content!</p>', 'Welcome to your new SequelZone-like CMS built with Laravel framework. Start creating amazing content today!', NULL, NULL, NULL, NULL, NULL, NULL, 'posts/welcome-to-sequelzone-llp-featured-2025-10-01-08-52-10.png', 'published', '2025-10-01 03:22:00', '2025-10-01 03:22:10', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(2, 'Getting Started with Laravel', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'getting-started-with-laravel', '<p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.</p><p>Laravel takes the pain out of development by easing common tasks used in many web projects, such as:</p><ul><li>Simple, fast routing engine</li><li>Powerful dependency injection container</li><li>Multiple back-ends for session and cache storage</li><li>Expressive, intuitive database ORM</li><li>Database agnostic schema migrations</li><li>Robust background job processing</li><li>Real-time event broadcasting</li></ul>', 'Learn the basics of Laravel framework and start building amazing web applications.', NULL, NULL, NULL, NULL, NULL, NULL, 'posts/getting-started-with-laravel-featured-2025-10-01-08-52-10.png', 'published', '2025-09-30 03:22:00', '2025-10-01 03:22:10', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(3, 'Building a CMS with Laravel', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'building-a-cms-with-laravel', '<p>Creating a content management system with Laravel is straightforward thanks to its powerful features and elegant syntax.</p><p>In this tutorial, we will cover:</p><ol><li>Setting up the database structure</li><li>Creating models and relationships</li><li>Building controllers for CRUD operations</li><li>Creating views with Blade templates</li><li>Implementing authentication</li><li>Adding file upload functionality</li></ol><p>By the end of this tutorial, you will have a fully functional CMS similar to SequelZone.</p>', 'Learn how to build a complete content management system using Laravel framework.', NULL, NULL, NULL, NULL, NULL, NULL, 'posts/building-a-cms-with-laravel-featured-2025-10-01-08-52-10.png', 'published', '2025-09-29 03:22:00', '2025-10-01 03:22:10', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(4, 'Laravel vs Other PHP Frameworks', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'laravel-vs-other-php-frameworks', '<p>Laravel has become one of the most popular PHP frameworks. But how does it compare to other frameworks like CodeIgniter, Symfony, or Zend?</p><p>Here are some key advantages of Laravel:</p><ul><li>Elegant syntax and readable code</li><li>Built-in ORM (Eloquent)</li><li>Artisan command line tool</li><li>Comprehensive testing features</li><li>Active community and ecosystem</li><li>Regular updates and LTS versions</li></ul><p>While other frameworks have their strengths, Laravel provides the best balance of features, performance, and developer experience.</p>', 'Compare Laravel with other popular PHP frameworks and understand why Laravel is the preferred choice.', NULL, NULL, NULL, NULL, NULL, NULL, 'posts/9dxKF9KRije3DKUpne44bNcUJwg79ouM7T9j5xPY.jpg', 'published', '2025-10-01 04:46:00', '2025-10-01 03:22:10', '2025-10-08 06:04:08', '2025-10-08 06:04:08'),
(5, 'Advanced Laravel Features', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'advanced-laravel-features', '<p>Laravel offers many advanced features that make it stand out from other frameworks:</p><h3>Eloquent ORM</h3><p>Laravel\'s Eloquent ORM provides a beautiful, simple ActiveRecord implementation for working with your database.</p><h3>Artisan CLI</h3><p>Artisan is the command-line interface included with Laravel. It provides helpful commands for development.</p><h3>Blade Templates</h3><p>Blade is Laravel\'s templating engine that allows you to use plain PHP in your views.</p><h3>Queue System</h3><p>Laravel provides a unified queue API across various queue backends.</p>', 'Explore the advanced features that make Laravel a powerful framework for web development.', NULL, NULL, NULL, NULL, NULL, NULL, 'posts/advanced-laravel-features-featured-2025-10-01-08-52-10.png', 'published', '2025-09-28 03:22:00', '2025-10-01 03:22:10', '2025-10-16 03:09:58', NULL),
(6, 'Occaecat fuga Neque', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'occaecat-fuga-neque', 'Dicta neque qui dolo', 'Sint itaque odio ali', 'Sunt laborum Ea te', 'Molestiae dolore ut', 'Est veniam earum s', 'Qui aut ut officia c', 'Beatae quibusdam vol', 'Molestiae minima sed', 'posts/occaecat-fuga-neque-featured-2025-10-01-09-47-45.png', 'published', '2025-10-10 02:57:07', '2025-10-01 04:17:45', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(7, 'Ipsum velit libero', 'Quo ut aut ducimus eligendi nostrum omnis magni quo impedit', 'Consequatur impedit autem id voluptas modi voluptate dolorem', NULL, 0, NULL, NULL, NULL, 'aliquid-do-non-sed-b', 'Ex est ut aut repreh', 'Et in mollitia labor', 'Neque recusandae Pa', 'Delectus nisi non p', 'Eos consectetur pos', 'Sed animi mollitia', 'Enim et iusto offici', 'Sint commodi omnis v', NULL, 'published', '2001-11-11 10:23:00', '2025-10-08 05:44:21', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(8, 'Et a eveniet aperia', 'Sit sit amet sed cupidatat consectetur assumenda unde max', 'Alias perspiciatis adipisci aut id et esse esse porro sit maxime', NULL, 0, NULL, NULL, NULL, 'corrupti-amet-volu', '<h2><span style=\"color: rgb(102, 102, 102);\">Know About</span>Our Philosophy</h2><p>Patron Accounting LLP is an accounting firm offering solutions related to company registration in India, accounting services, stock Audit, GST, TDS &amp; income tax. Our team exemplifies brilliance in distinct industries using flexible and customized solutions.</p><p><br></p><p>Meet our elite team:&nbsp;Chartered Accountants, Company Secretaries, Trademark Experts, IIM Graduates, Fellow Actuaries, and Accountants – the most favored team for accounting services and your ultimate partners in financial excellence.</p>', 'Et quis dolorem expe', 'Molestiae et dolorem', 'Reprehenderit dolor', 'Quo ex mollit quisqu', 'Neque consequatur m', 'Minim necessitatibus', 'Et occaecat non nost', 'posts/et-a-eveniet-aperia-featured-2025-10-10-08-31-50.png', 'published', '2008-05-01 17:44:00', '2025-10-10 03:01:50', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(9, 'Ipsa consectetur ip', 'Dicta qui aut cum porro officia omnis cumque', 'Ullam ex in ut voluptatem praesentium officiis vel magni officiis id accusamus amet et', NULL, 0, NULL, NULL, NULL, 'in-non-velit-magna', '<h2><span style=\"color: rgb(102, 102, 102);\">Know About</span>Our Philosophy</h2><p>Patron Accounting LLP is an accounting firm offering solutions related to company registration in India, accounting services, stock Audit, GST, TDS &amp; income tax. Our team exemplifies brilliance in distinct industries using flexible and customized solutions.</p><p><br></p><p>Meet our elite team:&nbsp;Chartered Accountants, Company Secretaries, Trademark Experts, IIM Graduates, Fellow Actuaries, and Accountants – the most favored team for accounting services and your ultimate partners in financial excellence.</p>', 'Nostrud quia quia et', 'Enim sit quos enim', 'Beatae temporibus de', 'Vel eos dolore magna', 'Dignissimos adipisic', 'Facere saepe sed qui', 'Id accusamus irure q', 'posts/ipsa-consectetur-ip-71xzo-0akyl-sx679-2025-10-16-08-42-01.jpg', 'published', '1988-08-19 10:42:00', '2025-10-16 03:12:01', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(10, 'Non enim non non eos', 'Aut in eum eius consequat Velit non veritatis nostrum sit', 'Mollitia iste sequi illo ipsa incididunt exercitationem', NULL, 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Et impedit vel sapi\",\"answer\":\"G\"},{\"question\":\"GF\",\"answer\":\"FBVC\"},{\"question\":\"GGFC\",\"answer\":\"BC\"},{\"question\":\"BVC\",\"answer\":\"GBVC\"},{\"question\":\"BVVCC\",\"answer\":\"VBV\"},{\"question\":\"VC\",\"answer\":\"GNCVC\"},{\"question\":\"NBVBVC\",\"answer\":\"BVVC\"}]', 'tempora-nihil-consec', '<h2><span style=\"background-color: rgb(255, 255, 0); color: rgb(153, 51, 255);\">Know AboutOur Philosophy</span></h2><p>Patron Accounting LLP is an accounting firm offering solutions related to company registration in India, accounting services, stock Audit, GST, TDS &amp; income tax. Our team exemplifies brilliance in distinct industries using flexible and customized solutions.</p><p><br></p><p><span style=\"color: rgba(34, 34, 34, 0.8);\">Meet our elite team:&nbsp;Chartered Accountants, Company Secretaries, Trademark Experts, IIM Graduates, Fellow Actuaries, and Accountants – the most favored team for accounting services and your ultimate partners in financial excellence.</span>Sapiente culpa enim .</p>', 'Aut facere minus cum', 'Illo ullamco laboris', 'Quam veniam et sit', 'Quia quas molestiae', 'Placeat ad incidunt', 'Nostrud quia soluta', 'Repudiandae ullamco', 'posts/non-enim-non-non-eos-image-3-2025-10-22-06-29-25.jpg', 'published', '1982-06-16 20:59:00', '2025-10-18 00:02:10', '2025-10-31 05:39:38', '2025-10-31 05:39:38'),
(11, 'Atque aut voluptate', 'Consectetur qui unde lorem exercitationem dolore quia vero', 'Nulla occaecat facilis id sunt sed perferendis sapiente ratione unde non aute repudiandae dolores dolor numquam aut possimus', 'Quia impedit ration', 1, 'Qui laborum Libero', 'Nostrum dolor offici', '[{\"question\":\"Fugiat fugiat culp\",\"answer\":\"Repudiandae rem repr\"},{\"question\":\"In sunt quia dolorem\",\"answer\":\"Similique excepturi\"},{\"question\":\"Et aliquam fugit po\",\"answer\":\"Autem laborum Sit e\"},{\"question\":\"Nam dolores eveniet\",\"answer\":\"Dolor sed nostrud es\"},{\"question\":\"Et veniam ut quibus\",\"answer\":\"Eius aut inventore m\"},{\"question\":\"Error velit voluptat\",\"answer\":\"Cupiditate blanditii\"}]', 'corporis-ut-eius-del', '<p><span style=\"color: rgba(33, 37, 41, 0.75);\">Use the rich text editor above to format your content with headings, links, images, and more.</span></p>', 'Perferendis nostrum', 'Mollit nulla repelle', 'Fugiat est nemo qui', 'Eos tenetur neque v', 'Laboris esse animi', 'Magna optio volupta', 'Ullam amet assumend', 'posts/atque-aut-voluptate-image-3-2025-10-22-06-20-28.png', 'published', '1984-11-10 23:22:00', '2025-10-22 00:50:28', '2025-10-22 00:50:28', NULL),
(12, 'Velit eius distinct', 'Amet hic est qui consequatur Assumenda dolores enim accus', 'Fugit dolores adipisci sint quo vel dolorum ut ea distinctio Id placeat inventore voluptas', 'Cum ullamco ipsa ac', 1, 'Dolore atque rerum q', 'Ad consectetur dolor', '[{\"question\":\"Voluptatibus ipsum o\",\"answer\":\"Error aut minus pari\"}]', 'ratione-vel-deserunt', '<p>Aute deserunt odio p.</p><p><br></p><p><strong class=\"ql-font-serif\" style=\"color: rgba(33, 37, 41, 0.75);\">Use the rich text editor above to format your content with headings, links, images, and more.</strong><strong class=\"ql-font-serif\">Sint, beatae sit, re.v</strong></p>', 'Possimus cupiditate', 'Blanditiis ullam dis', 'In in do iusto nulla', 'Aut accusamus magni', 'Sint nobis reiciendi', 'Harum cillum optio', 'Expedita sit nisi o', NULL, 'published', '1982-04-15 03:14:00', '2025-10-22 01:21:33', '2025-10-23 00:07:43', NULL),
(13, 'Ullamco sequi asperi', 'Ex quia nostrud quis numquam amet elit asperiores officia', 'Voluptate ipsa debitis vitae et sed et', 'Dolor incididunt bea', 1, 'Hic nulla iste minus', 'Dolores labore nulla', '[{\"question\":\"Ipsam nulla in illum\",\"answer\":\"Nostrum consequat N\"}]', 'et-rem-est-beatae-cu', '<p>Nobis qui sunt nisi .</p>', 'Incididunt voluptatu', 'Aliquip mollit archi', 'Aut sit officiis qui', 'Itaque iure consequa', 'Sunt dicta quos expe', 'Qui nihil ratione no', 'Repellendus Minim o', NULL, 'published', '1978-06-05 10:25:00', '2025-10-23 00:42:04', '2025-10-23 00:42:04', NULL),
(14, 'Est accusantium fuga', 'Aut enim voluptatibus nulla iste rerum facilis enim quod nis', 'Enim debitis quas ea tenetur voluptas est', 'Voluptatem magni ali', 1, 'Neque voluptatem vel', 'Deleniti dolor cupid', '[{\"question\":\"Accusantium id in a\",\"answer\":\"Aut id aliquip exer\"},{\"question\":\"Do aute voluptatem\",\"answer\":\"Aut voluptatem Sed\"}]', 'nihil-voluptas-ut-si', '<p>hello</p>', 'Delectus delectus', 'Et qui nemo cillum t', 'Cumque laboriosam e', 'Qui debitis voluptas', 'Distinctio Nulla im', 'Alias non recusandae', 'Cumque id ea sit sun', NULL, 'published', '2012-12-06 01:07:00', '2025-10-23 00:44:16', '2025-10-23 01:30:23', NULL),
(15, 'Magna aliquam quod d', 'Molestiae dolores distinctio Qui commodi iure sequi vel dol', 'Earum ipsam anim et laudantium', 'Libero non rem rem s', 1, 'Labore nostrud velit', 'Inventore laboris ha', '[{\"question\":\"Tempore voluptatum\",\"answer\":\"Qui non pariatur Su\"}]', 'quo-laboris-numquam', '<p>Veritatis voluptate .</p>', 'Et ipsam vitae dolor', 'Ut quidem illum min', 'Ullam facere nostrum', 'Perspiciatis velit', 'Est aut quaerat cupi', 'Magnam nobis ratione', 'Quis voluptate quis', NULL, 'published', '2019-10-08 06:14:00', '2025-10-23 01:30:37', '2025-10-23 04:45:21', NULL),
(16, 'Id reprehenderit ad', 'Quidem natus libero autem sapiente voluptatem occaecat nesci', 'Expedita lorem officiis sequi quae', 'Itaque aliqua Incid', 1, 'Tempor quibusdam dui', 'Facilis est nulla q', '[{\"question\":\"Quas magna velit ips\",\"answer\":\"Ipsam obcaecati temp\"}]', 'est-adipisicing-veni', '<p>Eligendi omnis est, .</p>', 'Do molestiae consequ', 'Nihil eiusmod soluta', 'Sint omnis dolores b', 'Aut sed doloremque v', 'Omnis maiores nesciu', 'Reprehenderit iste v', 'Est tempora molestia', NULL, 'published', '2017-04-08 04:33:00', '2025-10-23 01:30:48', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(17, 'Rerum tenetur magni', 'Hic quas aute est nobis tempor magni consequat Eius', 'Aliquam facilis nemo placeat modi minim sed deserunt autem earum aut libero tempore quia animi ducimus proident', 'Adipisci asperiores', 1, 'Enim non distinctio', 'Sit mollitia nulla m', '[{\"question\":\"Doloribus non dolor\",\"answer\":\"Dolorum enim et volu\"}]', 'et-fugit-quam-lorem', '<p>Fuga. Ipsum, quis so.</p>', 'Nostrum at soluta se', 'Minus asperiores rep', 'Sunt quo ad blandit', 'Ipsa rerum minim al', 'Consequatur Illo co', 'Aliquid vero qui lor', 'Natus reiciendis nob', NULL, 'published', '2001-10-15 15:30:00', '2025-10-23 01:31:58', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(18, 'Saepe dolores et non', 'Quia iusto consequatur Inventore officiis dolores non', 'At ratione aut reiciendis commodi quaerat expedita exercitationem laborum Necessitatibus', 'Et veniam dolore id', 1, 'Non do laborum qui e', 'Saepe omnis quia rec', '[{\"question\":\"Porro tempore simil\",\"answer\":\"Ut veritatis sint re\"}]', 'aliquid-ducimus-off', '<p>Ipsa, tempor quod su.</p>', 'Ut velit non delenit', 'Aliquid dolorum ulla', 'Voluptatibus perfere', 'Tempore quia omnis', 'Itaque voluptate non', 'Quia aut possimus m', 'Nesciunt tempora qu', NULL, 'published', '2007-08-22 14:11:00', '2025-10-23 01:36:44', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(19, 'Dolorem quam vel dol', 'Assumenda quibusdam quia accusamus impedit adipisicing exer', 'Corporis voluptatum sit ut ea harum voluptas ratione accusantium sit repellendus', 'Suscipit voluptas re', 1, 'Magni cum quo illo o', 'Quasi mollit sint et', '[{\"question\":\"Vero est optio debi\",\"answer\":\"Aute quam est facili\"}]', 'hic-proident-neque', '<p>Tempor laborum. In e.m</p>', 'Exercitationem labor', 'Vel ipsam qui non ab', 'Quibusdam non magnam', 'Sit autem qui aut qu', 'Quasi vel harum sint', 'Qui repellendus Qui', 'Officia laudantium', NULL, 'published', '2018-10-21 13:03:00', '2025-10-23 01:40:16', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(20, 'Consequuntur quaerat', 'Facilis possimus nobis fuga In modi dicta ipsum mollit op', 'Quia earum voluptatem aut fuga A enim facilis quia rem repellendus Quia ut non doloribus', 'Voluptate ut et enim', 1, 'Reiciendis autem dol', 'Eligendi rerum volup', '[{\"question\":\"Unde dolore omnis Na\",\"answer\":\"Ut est vero iusto id\"}]', 'neque-quia-atque-vit', '<p>Voluptas magna simil.njb nnj </p>', 'Neque qui officia co', 'Qui lorem sed vel ne', 'Quia consectetur su', 'In debitis quis et r', 'Et enim quos ut est', 'Odit at eius adipisi', 'Dolorem sit nihil v', NULL, 'published', '1970-03-28 05:04:00', '2025-10-23 01:41:10', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(21, 'Voluptatem itaque ip', 'Nesciunt expedita dolore rerum pariatur Ad mollitia ut ven', 'Rerum enim et officiis iste temporibus quaerat elit ut ullamco mollitia amet sed consequat Unde qui', 'Eos velit voluptate', 1, 'Dolores ullamco nece', 'Culpa esse eum sit', '[{\"question\":\"Id quis illo id sed\",\"answer\":\"Dolorem officiis per\"}]', 'culpa-facilis-ullam', '<p>Consequatur, fugiat . nm mn </p>', 'Quia in qui dolor re', 'Facere sed et ad sit', 'Nihil voluptatem Re', 'Aut veniam velit al', 'Cupiditate fugiat n', 'Nemo dolores quas cu', 'Voluptates lorem max', NULL, 'published', '2022-11-09 22:11:00', '2025-10-23 01:52:29', '2025-10-29 05:27:02', '2025-10-29 05:27:02'),
(22, 'Labore sunt illum', 'Sunt eos eos incidunt natus deserunt provident quae duis', 'In commodo beatae ipsum velit', 'Commodi incididunt s', 1, 'Amet quod velit mag', 'Autem enim ex eos vo', '[{\"question\":\"Dolore debitis moles\",\"answer\":\"Distinctio Rerum au\"}]', 'autem-voluptates-min', '<p>Anim sit sit corrupt.mbb nb</p>', 'Et quia enim cum ven', 'Laborum Ut quas dol', 'Ad ratione ab perspi', 'Praesentium delectus', 'Adipisicing minus ip', 'Nostrum aliquip dist', 'Sit quo quod dolorem', NULL, 'published', '2011-03-16 04:42:00', '2025-10-23 01:53:08', '2025-10-29 05:27:02', '2025-10-29 05:27:02'),
(23, 'Et qui quia ea totam', 'Odio rerum consequatur Totam aut dolor id quia velit asper', 'Ea voluptatem proident ut ducimus voluptas', 'Accusamus corporis s', 1, 'Anim quam est volupt', 'Tempor veniam volup', '[{\"question\":\"Laboriosam voluptat\",\"answer\":\"Qui velit culpa nisn j\"}]', 'quaerat-inventore-vo', '<p>Sed consequatur, ill.m m</p>', 'Accusamus ut numquam', 'Obcaecati exercitati', 'Qui fuga Tempora in', 'Maxime eos incididu', 'Possimus laborum E', 'Deleniti et ipsam id', 'Quia incidunt eos', NULL, 'published', '1996-03-18 00:26:00', '2025-10-23 02:02:03', '2025-10-29 05:27:02', '2025-10-29 05:27:02'),
(24, 'Rerum itaque deserunbgg', 'Natus temporibus ullamco nihil autem officiis', 'Ut distinctio Illum laborum consequatur Commodi et laboriosam magni sed', 'Dolor in voluptatem', 1, 'Duis ducimus mollit', 'Et nulla nulla non h', '[{\"question\":\"Dignissimos saepe al\",\"answer\":\"Fuga Consequatur d\"}]', 'rerum-itaque-deserunbgg', '<p>Dolores quae veniam.</p>', 'Sed culpa in quibusd', 'Recusandae Recusand', 'Est consectetur tem', 'Enim est ipsum ut a', 'Enim voluptatem eum', 'Rerum eius optio of', 'Hic tenetur ut quo i', NULL, 'published', '2010-06-06 06:54:00', '2025-10-23 02:06:25', '2025-10-29 05:27:02', '2025-10-29 05:27:02'),
(25, 'Reprehenderit totam', 'Ab rerum vel enim atque quo cillum nobis enim nobis voluptat', 'Temporibus sit a minus dolorem dignissimos minus rem explicabo', 'Est quia saepe saepe', 1, 'Fugit provident cu', 'Quas labore deserunt', '[{\"question\":\"Vel magni illum sit\",\"answer\":\"Aliquid reprehenderi\"}]', 'veritatis-a-accusamu', '<p>Sed voluptates iste .fxcv</p>', 'Aperiam quasi magni', 'Accusantium eum iust', 'Illo dolores pariatu', 'Dolores ad vel magna', 'Sunt aliquip eveniet', 'Sint qui consequatur', 'Dolor est dolorem co', NULL, 'published', '1987-09-24 22:42:00', '2025-10-23 03:04:08', '2025-10-23 03:14:17', '2025-10-23 03:14:17'),
(26, 'Sit molestiae soluta', 'Hic et quod voluptate voluptatibus tempora repudiandae exerc', 'Aute sed recusandae Non iusto minim et do eu totam quibusdam', 'Aut eligendi asperio', 1, 'Consequat Exercitat', 'Et quia sapiente nem', '[{\"question\":\"Dolor beatae soluta\",\"answer\":\"Cumque Nam sint opti\"}]', 'cumque-necessitatibu', '<p>Ullamco impedit, aut.vbvv</p>', 'Inventore dolor sunt', 'Rerum ea et corrupti', 'Quis ipsum facilis', 'Rerum nobis corporis', 'Neque ut rerum omnis', 'Quo deserunt aliquid', 'Duis et voluptatem q', NULL, 'published', '1980-08-25 17:35:00', '2025-10-23 03:56:25', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(27, 'Sit proident incidi', 'Expedita aut non nulla amet temporibus aut autem cillum vit', 'Qui et aliquam aliquam quia voluptas laboris consectetur dolorem dolore dolor nobis ipsum ullam similique irure', 'Et non expedita cupi', 1, 'Accusamus ea sunt vo', 'Ullam ut quae sunt e', '[{\"question\":\"Aliquam et atque a n\",\"answer\":\"Blanditiis est corru\"}]', 'necessitatibus-earum', '<p>Quos facilis invento.</p>', 'Culpa sint reiciend', 'Occaecat deleniti na', 'Minim ex eius et do', 'Quia nostrum totam i', 'Nostrum voluptatibus', 'Harum aut provident', 'Incididunt vitae nos', NULL, 'published', '1972-09-03 10:50:00', '2025-10-23 03:57:30', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(28, 'Nostrum aliquam consvcfcvcvc', 'Reprehenderit sed excepturi nobis non', 'Animi error odio est culpa aut enim consectetur in et cupiditate consequatur', 'Nostrud in inventore', 1, 'Sed voluptate eos ut', 'Quod minus expedita', '[{\"question\":\"Omnis ut proident s\",\"answer\":\"Adipisci tempora sed\"}]', 'nostrum-aliquam-consvcfcvcvc', '<p>Aliquam cumque ut do.cv</p>', 'Eu eligendi dolore l', 'Dolores elit volupt', 'Deserunt quis sit et', 'Dolore consectetur', 'Perspiciatis minim', 'Id temporibus nobis', 'Nostrum sed voluptat', NULL, 'published', '1971-02-10 09:43:00', '2025-10-23 03:59:46', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(29, 'Dolor sit blanditiifcdgff', 'Ex rerum quidem nulla sunt in tempore deserunt aute aut', 'Possimus consequatur dolore est aperiam', 'Incididunt voluptate', 1, 'Quisquam vitae autem', 'Qui possimus aliqui', '[{\"question\":\"Incidunt esse sunt\",\"answer\":\"Neque fugiat rem ut\"}]', 'dolor-sit-blanditiifcdgff', '<p>vfgf</p>', 'Aliqua Fugiat quae', 'Quia magni qui sed m', 'Quia nesciunt vel a', 'Enim ut elit occaec', 'Velit voluptatem rat', 'Ut modi iure eius et', 'Lorem lorem aliquid', NULL, 'published', '2012-10-03 10:17:00', '2025-10-23 04:42:44', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(30, 'Iure quod est amet', 'Est corporis elit ratione fugiat accusantium duis dicta as', 'Quos eum consequat Sunt nostrum veritatis dicta saepe quia consequatur Aut quia consequat Quam', 'Atque autem in sed f', 1, 'Consectetur nisi qu', 'Porro reprehenderit', '[{\"question\":\"Excepturi aut a id r\",\"answer\":\"Nesciunt ab nihil q\"}]', 'quod-facilis-numquam', '<p>dfc</p>', 'Laborum sed maxime m', 'Corrupti qui ipsum', 'Consequuntur ratione', 'Natus maxime ipsam o', 'Et est non pariatur', 'Adipisicing impedit', 'Harum ut ut proident', NULL, 'published', '1994-05-28 01:48:00', '2025-10-23 05:01:19', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(31, 'Dolorem ipsa ut bla', 'Et laborum mollit adipisci pariatur Qui consectetur omnis', 'Doloremque perferendis neque molestiae consequatur corporis a fugit minima cumque porro dolor quis pariatur', 'Officia velit ration', 1, 'Qui tenetur sint est', 'Quasi enim sit est e', '[{\"question\":\"Temporibus aspernatu\",\"answer\":\"Reiciendis sapiente\"}]', 'aut-ut-mollitia-veli', '<p>hello</p>', 'Reiciendis est paria', 'Consequatur fugiat', 'Dolore quae illum e', 'Asperiores et ut par', 'Tempor ipsa veniam', 'Et placeat non temp', 'Quos dignissimos do', NULL, 'published', '1979-10-11 03:34:00', '2025-10-23 05:01:45', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(32, 'Illo mollitia repreh', 'Vel incidunt quos eaque est cum quisquam provident recusa', 'Quis sint illum unde quisquam dolores vel non voluptate incidunt omnis aut cillum sint pariatur Rerum tempor voluptatem', 'Pariatur Et dicta d', 1, 'Eiusmod amet ullam', 'Et ut quia labore qu', '[{\"question\":\"Aspernatur ut ipsum\",\"answer\":\"Est laborum Sit a\"}]', 'mollit-nobis-volupta', '<p>&nbsp;csz</p>', 'Proident enim non o', 'Id consequatur quos', 'Rem neque rerum irur', 'Adipisicing vel est', 'Quae aut eos repelle', 'Et ut ab eveniet ma', 'Illum adipisicing d', NULL, 'published', '2017-10-07 12:13:00', '2025-10-23 05:06:12', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(33, 'yehh', 'bmv', 'bn', 'nb', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"fgv\",\"answer\":\"bcv\"}]', 'yehh', '<p>gfcv</p>', 'bnb', 'bmnn', 'fv', NULL, 'fbf', NULL, NULL, NULL, 'published', '2025-10-23 05:07:00', '2025-10-23 05:07:22', '2025-10-31 05:39:20', '2025-10-31 05:39:20'),
(34, 'dv', 'f', 'f', 'f', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"f\",\"answer\":\"f\"}]', 'dv', '<p>d</p>', 'v', 'vfd', 'f', NULL, NULL, NULL, 'f', NULL, 'published', '2025-10-23 05:19:14', '2025-10-23 05:19:14', '2025-10-29 05:26:49', '2025-10-29 05:26:49'),
(35, 'k', 'm', 'm', 'm', 0, NULL, NULL, NULL, 'k', '<p>n</p>', 'm', 'm', 'j', NULL, NULL, NULL, 'j', NULL, 'published', '2025-10-23 09:06:56', '2025-10-23 09:06:56', '2025-10-29 05:26:49', '2025-10-29 05:26:49'),
(36, 'b', 'n', 'h', 'j', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"b\",\"answer\":\"n\"},{\"question\":\"n\",\"answer\":\"j\"},{\"question\":\"d\",\"answer\":\"g\"}]', 'b', '<p>n</p>', 'n', 'm', 'i', NULL, 'm', NULL, NULL, NULL, 'published', '2025-10-23 09:11:00', '2025-10-23 09:11:20', '2025-10-29 05:26:49', '2025-10-29 05:26:49'),
(37, 'hk', 'Debitis sed voluptatem Sed nemo eum quis in quis', 'bjjnk', 'Accusamus corporis s', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"bjnjhnnnjihjnm\",\"answer\":\"jbbhjnmngcghjhn\"}]', 'hk', '<p>jbbjbjbjb</p>', 'jbhn', 'jbjhn', 'jbjn', NULL, 'knknjn', NULL, 'bbb', NULL, 'published', '2025-10-23 10:25:53', '2025-10-23 10:25:53', '2025-10-29 05:26:49', '2025-10-29 05:26:49'),
(38, 'Minus elit ut nemo', 'Tempora alias voluptatem laboriosam ad nobis possimus rati', 'Mollitia corporis fuga Reiciendis dolor sit animi', 'Placeat qui molesti', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Incidunt esse sunt\",\"answer\":\"v\"},{\"question\":\"Animi ex sed velit\",\"answer\":\"vv\"},{\"question\":\"Explicabo Aliquam e\",\"answer\":\"v\"}]', 'corrupti-tempor-atq', '<p>dcdfgnhmhgf</p><figure class=\"table\"><table><tbody><tr><td>Hello world</td><td>Hello world</td><td><a href=\"https://www.pythonindia.in/\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Hello world</strong></a><br><a href=\"https://www.pythonindia.in/\"><strong>https://www.pythonindia.in/</strong></a><br><br><a href=\"https://www.pythonindia.in/\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Hello world</strong></a><br><a href=\"https://www.pythonindia.in/\"><strong>https://www.pythonindia.in/</strong></a><br><br><a href=\"https://www.pythonindia.in/\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Hello world</strong></a><br><a href=\"https://www.pythonindia.in/\"><strong>https://www.pythonindia.in/</strong></a><br><br><a href=\"https://www.pythonindia.in/\" target=\"_blank\" rel=\"noopener noreferrer\"><strong>Hello world</strong></a><br><strong>https://www.pythonindia.in/</strong></td></tr><tr><td>Hello world</td><td>Hello world</td><td>Hello world</td></tr><tr><td>Hello world</td><td>Hello world</td><td>Hello world</td></tr><tr><td>Hello world</td><td>Hello world</td><td>Hello world</td></tr></tbody></table></figure>', 'Dolores elit deleni', 'Aliquip natus et ali', 'Rerum vel tempor eni', 'Est id consequatur', 'Nulla voluptate quia', 'Dolor incididunt qui', 'Anim ullam eos moll', 'posts/minus-elit-ut-nemo-image-3-2025-10-24-06-12-14.jpg', 'published', '1992-08-12 13:55:00', '2025-10-24 00:42:14', '2025-10-30 00:11:55', NULL),
(39, 'Dolorem qui qui veli', 'Et ab eaque sequi est incidunt accusamus saepe', 'Cupiditate earum alias amet fugiat aspernatur nesciunt ea velit', 'Dolorum eos quia co', 1, 'Ea iusto omnis aut p', 'Sunt ut autem volup', '[{\"question\":\"Earum amet sit lab\",\"answer\":\"Est dolor hic volup\"},{\"question\":\"Dolore vel sit aut\",\"answer\":\"Esse mollit impedit\"},{\"question\":\"Ducimus fugiat id\",\"answer\":\"Id voluptatem volupt\"},{\"question\":\"Pariatur Praesentiu\",\"answer\":\"Est perspiciatis te\"},{\"question\":\"Consequatur officia\",\"answer\":\"Reiciendis dignissim\"},{\"question\":\"Vero ab ex cupidatat\",\"answer\":\"Sapiente dignissimos\"},{\"question\":\"Dolore illum labori\",\"answer\":\"Qui deleniti quia el\"},{\"question\":\"Quam blanditiis aut\",\"answer\":\"Illum asperiores se\"},{\"question\":\"Voluptas et cillum d\",\"answer\":\"Aut voluptatem temp\"},{\"question\":\"Excepturi doloribus\",\"answer\":\"Ratione quia qui off\"},{\"question\":\"At quis sunt esse c\",\"answer\":\"Dolorem ipsam provid\"},{\"question\":\"In optio itaque con\",\"answer\":\"Repellendus Est est\"},{\"question\":\"Corporis eum nulla d\",\"answer\":\"Accusamus voluptates\"},{\"question\":\"Dolor perferendis pr\",\"answer\":\"Fuga Doloribus quo\"},{\"question\":\"Do ipsum unde et re\",\"answer\":\"Magna corporis digni\"},{\"question\":\"Veniam eveniet est\",\"answer\":\"Aspernatur molestiae\"},{\"question\":\"Eiusmod sed repudian\",\"answer\":\"Laboriosam cum eum\"},{\"question\":\"Est anim et exercita\",\"answer\":\"Est incidunt adipis\"}]', 'repudiandae-irure-qu', '<p>cvc</p>', 'Atque vel perferendi', 'Facere deserunt ulla', 'Magni est quos est m', 'Irure amet et quis', 'Dolor eligendi in er', 'Quis eos ex magnam', 'Sit nobis alias dol', 'posts/sit-reprehenderit-bath-form-2025-10-24-11-47-18.png', 'published', '1985-11-25 01:36:00', '2025-10-24 05:42:47', '2025-11-04 22:28:47', NULL),
(40, 'Alias eiusmod repreh', 'Autem doloribus quaerat corrupti amet incidunt aperiam qu', 'Quia quam illo a saepe qui dignissimos voluptas sit voluptas sed quis est provident repellendus Id deleniti', 'Do amet quia non eo', 1, 'Frequently Asked Questions', 'Have a look at the answers to the most asked questions.', '[{\"question\":\"Consectetur sunt su\",\"answer\":\"gfg\"},{\"question\":\"Et ut anim pariatur\",\"answer\":\"fg\"},{\"question\":\"Modi voluptatibus Na\",\"answer\":\"b\"},{\"question\":\"Et sit dolores cons\",\"answer\":\"fr\"},{\"question\":\"Nobis velit vero no\",\"answer\":\"gfr\"},{\"question\":\"Error velit voluptat\",\"answer\":\"f\"},{\"question\":\"Dolore illum labori\",\"answer\":\"gfg\"},{\"question\":\"Sapiente autem aliqu\",\"answer\":\"gfr\"},{\"question\":\"In illo quo eos qui\",\"answer\":\"gff\"},{\"question\":\"gfg\",\"answer\":\"gf\"},{\"question\":\"gfg\",\"answer\":\"gtg\"}]', 'magni-exercitationem', '<p>jhnbjnh</p>', 'Accusantium architec', 'Cupidatat in sint pr', 'Excepturi et quos ni', 'Minim excepteur illu', 'Dicta in vel quod co', 'Culpa incididunt es', 'A nobis voluptatem r', 'posts/alias-eiusmod-repreh-167798-1200-auto-2025-11-05-04-05-23.png', 'published', '1990-05-10 17:16:00', '2025-11-04 22:35:23', '2025-11-04 22:35:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Programming', 'programming', 'Programming tutorials and tips', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(3, 'Web Development', 'web-development', 'Web development articles and guides', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(4, 'Laravel', 'laravel', 'Laravel framework tutorials and news', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(5, 'News', 'news', 'General news and updates', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(6, 'Tutorial', 'tutorial', 'Step-by-step tutorials', '2025-10-01 03:22:10', '2025-10-01 03:22:10'),
(7, 'Amanda Garza', 'amanda-garza-2025-10-01-091602', 'Omnis cillum non fug', '2025-10-01 03:46:02', '2025-10-01 03:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `post_category_post`
--

CREATE TABLE `post_category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category_post`
--

INSERT INTO `post_category_post` (`id`, `post_id`, `post_category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, NULL),
(3, 2, 6, NULL, NULL),
(4, 2, 5, NULL, NULL),
(5, 3, 4, NULL, NULL),
(6, 4, 2, NULL, NULL),
(7, 5, 2, NULL, NULL),
(8, 5, 5, NULL, NULL),
(9, 5, 4, NULL, NULL),
(10, 1, 7, NULL, NULL),
(12, 6, 2, NULL, NULL),
(13, 6, 3, NULL, NULL),
(14, 6, 5, NULL, NULL),
(15, 7, 3, NULL, NULL),
(16, 7, 4, NULL, NULL),
(17, 7, 5, NULL, NULL),
(19, 8, 3, NULL, NULL),
(20, 8, 4, NULL, NULL),
(21, 8, 5, NULL, NULL),
(22, 9, 2, NULL, NULL),
(23, 9, 3, NULL, NULL),
(26, 9, 7, NULL, NULL),
(27, 10, 3, NULL, NULL),
(28, 10, 4, NULL, NULL),
(29, 11, 2, NULL, NULL),
(30, 11, 5, NULL, NULL),
(31, 11, 7, NULL, NULL),
(32, 12, 4, NULL, NULL),
(33, 12, 6, NULL, NULL),
(34, 13, 2, NULL, NULL),
(35, 13, 4, NULL, NULL),
(36, 13, 7, NULL, NULL),
(37, 14, 3, NULL, NULL),
(38, 14, 4, NULL, NULL),
(39, 15, 3, NULL, NULL),
(40, 15, 5, NULL, NULL),
(41, 15, 6, NULL, NULL),
(42, 15, 7, NULL, NULL),
(43, 16, 2, NULL, NULL),
(44, 17, 2, NULL, NULL),
(45, 17, 3, NULL, NULL),
(46, 17, 4, NULL, NULL),
(47, 17, 5, NULL, NULL),
(48, 17, 6, NULL, NULL),
(49, 18, 2, NULL, NULL),
(50, 18, 3, NULL, NULL),
(51, 18, 4, NULL, NULL),
(52, 18, 5, NULL, NULL),
(53, 18, 7, NULL, NULL),
(54, 19, 2, NULL, NULL),
(55, 19, 4, NULL, NULL),
(56, 19, 5, NULL, NULL),
(57, 19, 7, NULL, NULL),
(58, 20, 2, NULL, NULL),
(59, 20, 4, NULL, NULL),
(60, 20, 6, NULL, NULL),
(61, 21, 4, NULL, NULL),
(62, 21, 6, NULL, NULL),
(63, 21, 7, NULL, NULL),
(64, 22, 2, NULL, NULL),
(65, 22, 5, NULL, NULL),
(66, 23, 2, NULL, NULL),
(67, 23, 4, NULL, NULL),
(68, 25, 3, NULL, NULL),
(69, 25, 4, NULL, NULL),
(70, 25, 5, NULL, NULL),
(71, 25, 7, NULL, NULL),
(72, 26, 2, NULL, NULL),
(73, 26, 3, NULL, NULL),
(74, 26, 5, NULL, NULL),
(75, 26, 6, NULL, NULL),
(76, 27, 2, NULL, NULL),
(77, 27, 7, NULL, NULL),
(78, 28, 6, NULL, NULL),
(79, 28, 7, NULL, NULL),
(80, 29, 3, NULL, NULL),
(84, 29, 7, NULL, NULL),
(85, 24, 6, NULL, NULL),
(86, 30, 2, NULL, NULL),
(87, 30, 3, NULL, NULL),
(88, 30, 5, NULL, NULL),
(89, 30, 6, NULL, NULL),
(90, 31, 2, NULL, NULL),
(91, 31, 4, NULL, NULL),
(92, 31, 5, NULL, NULL),
(95, 32, 6, NULL, NULL),
(96, 32, 7, NULL, NULL),
(97, 33, 2, NULL, NULL),
(98, 35, 5, NULL, NULL),
(99, 35, 6, NULL, NULL),
(100, 36, 6, NULL, NULL),
(101, 38, 2, NULL, NULL),
(102, 38, 6, NULL, NULL),
(103, 39, 4, NULL, NULL),
(104, 39, 6, NULL, NULL),
(105, 39, 3, NULL, NULL),
(106, 39, 5, NULL, NULL),
(107, 39, 7, NULL, NULL),
(108, 40, 2, NULL, NULL),
(109, 40, 3, NULL, NULL),
(110, 40, 4, NULL, NULL),
(111, 40, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_user`
--

INSERT INTO `post_user` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 2, 6, NULL, NULL),
(4, 7, 3, NULL, NULL),
(6, 6, 6, NULL, NULL),
(8, 1, 5, NULL, NULL),
(9, 5, 4, NULL, NULL),
(10, 8, 6, NULL, NULL),
(11, 3, 1, NULL, NULL),
(12, 9, 4, NULL, NULL),
(13, 11, 4, NULL, NULL),
(14, 10, 6, NULL, NULL),
(15, 12, 2, NULL, NULL),
(16, 26, 4, NULL, NULL),
(17, 29, 2, NULL, NULL),
(18, 28, 4, NULL, NULL),
(19, 27, 4, NULL, NULL),
(20, 24, 4, NULL, NULL),
(21, 15, 4, NULL, NULL),
(22, 33, 4, NULL, NULL),
(23, 35, 2, NULL, NULL),
(24, 36, 2, NULL, NULL),
(25, 38, 4, NULL, NULL),
(26, 39, 4, NULL, NULL),
(27, 40, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `status` enum('published','draft') NOT NULL DEFAULT 'published',
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `company`, `content`, `rating`, `image`, `video`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES
(4, 'Rhea Wood', 'Veritatis ea praesen', 'Terrell Barton Associates', 'Pariatur Dolor susc', 1, 'testimonials/U089pUnM660Um0Q8nxqwh3ECgSQAQsJwOC38IItV.png', 'testimonials/videos/hTwbu7g2jZIDFHEASocT0jyOSTEmsXM4NE0t0ddl.mp4', 'published', 11, '2025-11-03 05:08:18', '2025-11-03 05:08:36'),
(5, 'Erica Austin', 'Explicabo Perferend', 'Jarvis Cline Trading', 'Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello Sit ea et qui ad au hello', 3, 'testimonials/8DXqNiw9KwjSvHOLs0zuOMVm4HGtBGvbveeXFvjQ.png', NULL, 'published', 5, '2025-11-03 05:08:53', '2025-11-03 06:29:37'),
(6, 'Fredericka Dickerson', 'Magni nulla quo mole', 'Bishop Hoffman Associates', 'Qui ipsam magnam ut', 5, NULL, NULL, 'published', 93, '2025-11-03 05:09:05', '2025-11-03 05:17:29'),
(7, 'Wylie Noble', 'Et porro neque est v', 'Stanley Graham LLC', 'Possimus eos vitae', 4, NULL, 'testimonials/videos/AGM8EPD92Vgd0Rw3v7eNYdKDc32RwMJet1siH7Mx.mp4', 'published', 30, '2025-11-03 05:09:58', '2025-11-03 05:13:56'),
(8, 'Jasmine Simmons', 'Nulla veniam vitae', 'Owens and Mooney Co', 'Sunt nihil corporis', 4, 'testimonials/2ZYfAqZbOy1AniGyfUAsSJ61AAQjfzKOOIUe3zAh.jpg', NULL, 'published', 59, '2025-11-03 05:55:47', '2025-11-03 05:55:47'),
(9, 'Anika Mckay', 'Non est quia dolor e', 'Workman Morton Trading', 'Adipisicing temporib', 4, 'testimonials/5pRTrlRyrsrRUfn1dAfVRNyMk3QgujizJk9vlsme.jpg', NULL, 'published', 13, '2025-11-03 05:56:01', '2025-11-03 05:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','editor','user') NOT NULL DEFAULT 'user',
  `profile_image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Boby Gautam', 'admin@wplaravel.com', '2025-10-01 03:22:09', '$2y$12$yKWc9Yg3TuOFc2zQoECesed8X3UUasA/3J3gZJwv7LGPGO.FNvSVq', 'admin', 'users/boby-gautam-profile-2025-10-01-08-52-09.jpg', 'ZdTOCMid6lgKR6YTMfL4wISbT1pKaFMm3kixr59u5uJyiBLFBI1XRZNM0oUc', '2025-10-01 03:22:09', '2025-10-16 03:09:58'),
(2, 'Editor User', 'editor@wplaravel.com', '2025-10-01 03:22:09', '$2y$12$G5clu/9OM5JJljkCeYHXjetlDGXFRZ6ioyYh30g/fh7zmRkgBhC5S', 'editor', 'users/editor-user-profile-71-grzenbll-sx679-2025-10-22-06-32-27.jpg', NULL, '2025-10-01 03:22:09', '2025-10-22 01:02:27'),
(3, 'Regular User', 'user@wplaravel.com', '2025-10-01 03:22:10', '$2y$12$fV0gTaCg8sNyr6qLZlk0eeGQwvuFKNkux.SS2za.jSgnZVM9X3Pki', 'user', 'users/regular-user-profile-71xzo-0akyl-sx679-2025-10-22-06-31-29.jpg', NULL, '2025-10-01 03:22:10', '2025-10-22 01:01:29'),
(4, 'Chloe Hayes', 'meho@mailinator.com', NULL, '$2y$12$OdujBdl2wdlKY.kXPAmMKeLxn5WZL2ZywF8t7Hu97Hd4xWfFUgui2', 'editor', 'users/chloe-hayes-profile-profile3-copy-2025-10-22-06-31-04.jpeg', NULL, '2025-10-07 06:03:17', '2025-10-22 01:01:04'),
(5, 'Wing Donovan', 'kypuradoq@mailinator.com', NULL, '$2y$12$/tjm0llhmNH4GWzMTQ.7/OAL5kTMJV4AOrWRDME0YEG.gGHZ9AjBW', 'editor', 'users/wing-donovan-profile-2025-10-07-11-33-46.jpg', NULL, '2025-10-07 06:03:46', '2025-10-16 03:09:58'),
(6, 'Edward Hill', 'gugasova@mailinator.com', NULL, '$2y$12$Ng.YR5uRQTvsszqNX.bwteMKD.vRj6Blpx4/ZT/qSS2iYT/a8nb1.', 'editor', 'users/edward-hill-profile-2025-10-07-11-57-14.jpg', NULL, '2025-10-07 06:27:14', '2025-10-16 03:09:58'),
(7, 'Galena Douglas', 'fiky@mailinator.com', NULL, '$2y$12$f6JpvLaFZxgcDaeuGT7TZ.Yh3jtN.k.d6kyMvF5G17PT84lv8h2VO', 'user', 'users/galena-douglas-profile-footer-mage-2025-10-24-11-28-22.jpg', NULL, '2025-10-24 05:58:22', '2025-10-24 05:58:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_file_type_is_public_index` (`file_type`,`is_public`),
  ADD KEY `media_uploaded_by_index` (`uploaded_by`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`),
  ADD KEY `menus_slug_index` (`slug`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_parent_id_foreign` (`parent_id`),
  ADD KEY `menu_items_menu_id_parent_id_sort_order_index` (`menu_id`,`parent_id`,`sort_order`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noc_registrations`
--
ALTER TABLE `noc_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`),
  ADD KEY `pages_status_published_at_index` (`status`,`published_at`),
  ADD KEY `pages_slug_index` (`slug`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_categories_slug_unique` (`slug`),
  ADD KEY `page_categories_slug_index` (`slug`);

--
-- Indexes for table `page_category_page`
--
ALTER TABLE `page_category_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_category_page_page_id_page_category_id_unique` (`page_id`,`page_category_id`),
  ADD KEY `page_category_page_page_category_id_foreign` (`page_category_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_status_published_at_index` (`status`,`published_at`),
  ADD KEY `posts_slug_index` (`slug`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`),
  ADD KEY `post_categories_slug_index` (`slug`);

--
-- Indexes for table `post_category_post`
--
ALTER TABLE `post_category_post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_category_post_post_id_post_category_id_unique` (`post_id`,`post_category_id`),
  ADD KEY `post_category_post_post_category_id_foreign` (`post_category_id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_user_post_id_user_id_unique` (`post_id`,`user_id`),
  ADD KEY `post_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `noc_registrations`
--
ALTER TABLE `noc_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_category_page`
--
ALTER TABLE `page_category_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_category_post`
--
ALTER TABLE `post_category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `post_user`
--
ALTER TABLE `post_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_uploaded_by_foreign` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_category_page`
--
ALTER TABLE `page_category_page`
  ADD CONSTRAINT `page_category_page_page_category_id_foreign` FOREIGN KEY (`page_category_id`) REFERENCES `page_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `page_category_page_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_category_post`
--
ALTER TABLE `post_category_post`
  ADD CONSTRAINT `post_category_post_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_user`
--
ALTER TABLE `post_user`
  ADD CONSTRAINT `post_user_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
