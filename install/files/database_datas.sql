INSERT INTO `modules` (`id`, `name`, `controller_name`, `order_by`, `online`, `created`, `modules_type_id`) VALUES
(1, 'Catégories', 'categories', 3, 1, '2012-11-29 22:58:29', 2),
(2, 'Sliders', 'sliders', 4, 1, '2012-11-29 22:58:46', 2),
(3, 'Focus', 'focus', 5, 1, '2012-11-29 22:59:01', 2),
(4, 'Boutons colonne de droite', 'right_buttons', 6, 1, '2012-11-29 22:59:29', 2),
(5, 'Articles', 'posts', 8, 1, '2012-11-29 23:00:13', 4),
(6, 'Types d''aticle', 'posts_types', 9, 1, '2012-11-29 23:00:35', 4),
(7, 'Commentaires articles', 'posts_comments', 10, 1, '2012-11-29 23:01:11', 4),
(8, 'Contacts', 'contacts', 7, 1, '2012-11-29 23:06:17', 2),
(9, 'Sites Internet', 'websites', 0, 1, '2012-11-30 09:27:12', 5),
(10, 'Liste des utilisateurs', 'users', 1, 1, '2012-11-30 09:27:32', 5),
(11, 'Plugins', 'plugins', 2, 1, '2012-11-30 09:27:47', 5);

INSERT INTO `modules_types` (`id`, `name`, `order_by`, `online`, `created`, `modified`, `modified_by`) VALUES
(6, 'Plugins', 2, 1, '2012-12-03 22:39:48', '2012-12-03 22:39:48', 1),
(2, 'Contenus', 0, 1, '2012-12-01 06:38:44', '2012-12-01 06:38:44', 1),
(4, 'Actualités / Blog', 1, 1, '2012-12-01 06:39:16', '2012-12-01 06:39:16', 1),
(5, 'Paramètres', 3, 1, '2012-12-01 06:39:27', '2012-12-01 06:39:27', 1);

INSERT INTO `users` (`id`, `name`, `second_name`, `login`, `password`, `email`, `role`, `online`, `users_group_id`) VALUES
(1, 'Superadmin', 				'', 'superadmin', 		'superadmin', 		'superadmin@monsite.com', 		'admin', 			1, 1),
(2, 'Administrateur du site', 	'', 'administrateur', 	'administrateur', 	'administrateur@monsite.com', 	'website_admin', 	1, 2),
(3, 'Utilisateur du site', 		'', 'utilisateur', 		'utilisateur', 		'utilisateur@monsite.com', 		'user', 			1, 3);

INSERT INTO `users_groups` (`id`, `name`, `online`, `created`, `modified`, `created_by`, `modified_by`) VALUES
(1, 'Super administrateur', 	1, '2012-09-06 10:34:08', '2012-09-06 10:34:08', 1, 1),
(2, 'Administrateur de site', 	1, '2012-09-06 10:34:08', '2012-09-06 10:34:08', 1, 1),
(3, 'Utilisateur', 				1, '2012-09-06 10:34:08', '2012-09-06 10:34:08', 1, 1);

INSERT INTO `users_groups_websites` (`users_group_id`, `website_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

INSERT INTO `templates` (`id`, `name`, `layout`, `code`, `color`, `online`, `created`) VALUES
(1, 'Bronze', 'frontoffice', 'bronze', '5e4b52', 1, '2012-01-06 03:00:21'),
(2, 'Brown', 'frontoffice', 'brown', '665a55', 1, '2012-01-06 03:00:38'),
(3, 'Business Green', 'frontoffice', 'businessgreen', '587358', 1, '2012-01-06 03:00:53'),
(4, 'Business Purple', 'frontoffice', 'businesspurple', '4a3f5b', 1, '2012-01-06 03:01:09'),
(5, 'Business Teal', 'frontoffice', 'businessteal', '598d82', 1, '2012-01-06 03:01:24'),
(6, 'Coral Blue', 'frontoffice', 'coralblue', '5cc7ca', 1, '2012-01-06 03:01:58'),
(7, 'Crimson', 'frontoffice', 'crimson', '6a0f0f', 1, '2012-01-06 03:03:04'),
(8, 'Dark', 'frontoffice', 'dark', '292929', 1, '2012-01-06 03:03:44'),
(9, 'Deep Purple', 'frontoffice', 'deeppurple', '3c3c52', 1, '2012-01-06 03:04:09'),
(10, 'Dentist Green', 'frontoffice', 'dentistgreen', '9db29d', 1, '2012-01-06 03:04:45'),
(11, 'Friendly Grey', 'frontoffice', 'friendlygrey', '95a7a3', 1, '2012-01-06 03:05:13'),
(12, 'Funky Pink', 'frontoffice', 'funkypink', 'c867c4', 1, '2012-01-06 03:05:35'),
(13, 'Funky Purple', 'frontoffice', 'funkypurple', '926ccb', 1, '2012-01-06 03:05:58'),
(14, 'Gold', 'frontoffice', 'gold', 'b37731', 1, '2012-01-06 03:06:14'),
(15, 'Hospital Green', 'frontoffice', 'hospitalgreen', '75aa87', 1, '2012-01-06 03:06:41'),
(16, 'Intense Pink', 'frontoffice', 'intensepink', 'dc66a7', 1, '2012-01-06 03:07:04'),
(17, 'Navy Blue', 'frontoffice', 'navyblue', '3d4c54', 1, '2012-01-06 03:07:33'),
(18, 'Neon Blue', 'frontoffice', 'neonblue', '15a3d7', 1, '2012-01-06 03:07:58'),
(19, 'Ocean Blue', 'frontoffice', 'oceanblue', '2c4a59', 1, '2012-01-06 03:08:21'),
(20, 'Olive', 'frontoffice', 'olive', '73744f', 1, '2012-01-06 03:08:37'),
(21, 'Orange', 'frontoffice', 'orange', 'e17e4b', 1, '2012-01-06 03:08:56'),
(22, 'Pink Panther', 'frontoffice', 'pinkpanther', 'bf7bc7', 1, '2012-01-06 03:09:18'),
(23, 'Purple', 'frontoffice', 'pornopurple', '8752d6', 1, '2012-01-06 03:09:47'),
(24, 'Red', 'frontoffice', 'red', '9e2b2b', 1, '2012-01-06 03:10:02'),
(25, 'Sea Blue', 'frontoffice', 'seablue', '236c92', 1, '2012-01-06 03:10:24'),
(26, 'Selen', 'frontoffice', 'selen', 'c5ca19', 1, '2012-01-06 03:10:49'),
(27, 'Soft Blue', 'frontoffice', 'softblue', '056fa5', 1, '2012-01-06 03:11:12'),
(28, 'Soft Green', 'frontoffice', 'softgreen', '90a850', 1, '2012-01-06 03:11:34'),
(29, 'Soft Purple', 'frontoffice', 'softpurple', '6b6bc5', 1, '2012-01-06 03:11:56'),
(30, 'Soft Teal', 'frontoffice', 'softteal', '92c9bd', 1, '2012-01-06 03:12:25'),
(31, 'Yellow', 'frontoffice', 'yellow', 'edc72e', 1, '2012-01-06 03:13:26'),
(32, 'Brown / Orange', 'frontoffice', 'brownorange', '665a55', 1, '2012-01-06 03:00:38'),
(33, 'Orange People', 'frontoffice', 'orangepeople', 'ca5835', 1, '2012-02-24 16:10:18'),
(34, 'Neon Blue V2', 'frontoffice', 'neonblue_v2', '15a3d7', 1, '2012-01-06 03:07:58'),
(35, 'Pink&Dark', 'frontoffice', 'pinkanddark', 'e6436c', 1, '2012-01-06 03:07:58'),
(36, 'Brown Gimmick', 'frontoffice', 'brownorangegimmick', 'e17e4b', 1, '2012-01-06 03:00:38'),
(37, 'Dark V2', 'frontoffice', 'dark_v2', '292929', 1, '2012-01-06 03:03:44');