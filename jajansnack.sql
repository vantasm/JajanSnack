-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 04:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jajansnack`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_user`
--

CREATE TABLE `address_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `reciever_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciever_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address_user`
--

INSERT INTO `address_user` (`id`, `user_id`, `reciever_name`, `reciever_phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chris', '(+62)82213105577', 'Jalan Apa Aja yang penting sama kamu', NULL, NULL),
(4, 1, 'sayalagi', '(+62) 82213105577', 'Saya lagi saya lagi', NULL, NULL),
(5, 1, 'Arjuna', '+6282213105577', 'asdasd', '2022-01-14 06:08:17', '2022-01-14 06:08:17'),
(8, 1, 'asd', '+6282213105577', 'yok bisa', '2022-01-14 06:12:30', '2022-01-14 06:12:30'),
(9, 1, 'Ayo', '+6282213105577', 'Terus Fokus', '2022-01-14 06:16:09', '2022-01-14 06:16:09'),
(10, 1, 'Delvin', '081029310290', 'Binusunib', '2022-01-15 00:48:53', '2022-01-15 00:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transactions`
--

CREATE TABLE `detail_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transactions`
--

INSERT INTO `detail_transactions` (`id`, `product_id`, `transaction_id`, `quantity`, `total_price`, `created_at`, `updated_at`, `address`) VALUES
(1, 1, 1, 1, 20000, '2022-01-15 08:18:48', '2022-01-15 08:18:48', ''),
(3, 6, 2, 1, 15000, '2022-01-15 08:30:36', '2022-01-15 08:30:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_01_06_153906_create_products_table', 1),
(4, '2022_01_06_162855_create_users_table', 1),
(5, '2022_01_06_163712_create_transactions_table', 1),
(6, '2022_01_06_163912_create_detail_transactions_table', 1),
(7, '2022_01_09_150515_create_wishlist', 1),
(8, '2022_01_14_071624_update_transaction_address', 1),
(9, '2022_01_14_075012_create_address_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `discount` int(11) NOT NULL,
  `product_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/snack_default_picture.png',
  `after_price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `rating`, `discount`, `product_picture`, `after_price`, `description`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bourbon Demon Slayer', 29, 20000, 4.50, 20, 'images/snacks/bourbon_demon_slayer.jpg', 16000, 'The \"Petit\" series, which was launched in 1996 from three types. To commemorate the 25th anniversary, a limited-time package product featuring the character of the anime \"Demon Slayer\". The lineup includes \"pillars\" such as Sumijiro, Zeni, Inosuke, Purgatory Anjuro, Kocho Shinobu, and Yoshiyuki Tomioka, and demons such as Inouza.\r\n', 'Biscuits', 0, NULL, '2022-01-15 08:18:48'),
(2, 'Cheetos Bagel & Cheese', 20, 30000, 4.50, 20, 'images/snacks/cheetos_bagel_cheese.jpg', 24000, 'Sweet, and salty flavor packed into crunchy, cheesy snacks. CHEETOS® Bagel & Cheese Flavored Snacks are full of flavor and made with real cheese.', 'Chips', 0, NULL, NULL),
(3, 'Chitato Kerak Telor', 40, 15000, 4.20, 20, 'images/snacks/chitato_kerak_telor.jpg', 12000, 'Potato snack from Chitato made with the taste of traditional DKI Jakarta food, as a form of celebration of DKI Jakarta\' anniversary. The savory taste of the egg crust, suitable as a snack in your spare time', 'Chips', 0, NULL, NULL),
(4, 'Doritos Wasabi', 5, 20000, 4.00, 30, 'images/snacks/doritos_wasabi.jfif', 14000, 'Combine the tooth-rattling crunch of Doritos Tortilla Chips with the spicy, bold flavor of wasabi, and you’ve got an unstoppably delicious snack. Grab a bag and stock up on the bold taste of Doritos Wasabi Tortilla Chips to snack on and amuse friends at your next party. This large bag is the perfect size for mega snack fests!', 'Chips', 0, NULL, NULL),
(5, 'Irvins Salted Egg Trio', 25, 25000, 4.10, 20, 'images/snacks/irvins_salted_egg.jpg', 20000, 'A combination of all three signature Salted Egg Snacks, each pouch contains a mix of our ', 'Chips', 0, NULL, NULL),
(6, 'Kitkat CheeseCake', 49, 15000, 4.80, 20, 'images/snacks/Kitkat_Cheese_cake.jpg', 12000, 'Cheesecake in a form of KitKat', 'Chocolate', 0, NULL, '2022-01-15 08:30:36'),
(7, 'Kitkat Peach Mint', 50, 15000, 4.70, 20, 'images/snacks/kitkat_peach_mint.jpeg', 12000, 'Kitkat mixed with peach and mint flavor', 'Chocolate', 0, NULL, '2022-01-15 08:30:30'),
(8, 'Lays Grilled Cheese and Tomato Soup', 20, 25000, 4.50, 20, 'images/snacks/lays_grilled.jpg', 20000, 'Exciting new grilled cheese and tomato soup flavor.', 'Chips', 0, NULL, NULL),
(9, 'Cheeseburger McD x Oreo', 15, 30000, 4.20, 20, 'images/snacks/oreo_mcd.jpg', 24000, 'McDonald\'s cheeseburger in Oreo', 'Biscuits', 0, NULL, NULL),
(10, 'Mickey Mouse Oreo', 5, 30000, 4.20, 20, 'images/snacks/Oreo_mickey_mouse.jpg', 24000, 'Oreo collaboration with Disney\'s Mickey Mouse', 'Biscuits', 0, NULL, NULL),
(11, 'Pocky Colourful', 35, 20000, 4.00, 20, 'images/snacks/pocky_colourful.jpg', 16000, 'Glico Pocky Colorful Limited Edition cream biscuit with lemon flavor with a sprinkling of colorful sugar, surprise flavor, a taste that you never expected before.', 'Biscuits', 0, NULL, NULL),
(12, 'Pocky Sakura', 35, 20000, 4.00, 20, 'images/snacks/pocky_sakura.jfif', 16000, 'Limited Edition Pocky Sakura brings you the taste of Spring in your favourite Pocky biscuit stick! Savour the taste of smooth, creamy Sakura-flavoured chocolate that comes in a soft pink colour inspired by the beautiful Japanese Sakura flower. Let us try Pocky Sakura and feel Japanese culture!', 'Biscuits', 0, NULL, NULL),
(13, 'Pringles Baconator', 5, 25000, 4.00, 20, 'images/snacks/pringles_baconator_flavor.jfif', 20000, 'When you’re craving all the flavors of a Wendy’s® Baconator in a one bite Pringles crisp. Each Pringles Baconator crisp tastes like a *half-pound of fresh, never frozen beef, American cheese, six strips of crispy Applewood smoked bacon, ketchup, and mayo. The only thing missing is the Frosty®', 'Chips', 0, NULL, NULL),
(14, 'Pringles London Style Fish & Chips', 5, 25000, 4.30, 20, 'images/snacks/pringles_london.jpg', 20000, 'New from Pringles “Passport Flavors” product line is one of the most classic foods from the U.K., Fish, and Chips! Fish & Chips, a traditional British dish, is packed with seafood flavor that is familiar to people around the world. These chips have the perfect balance of tartar sauce and saltiness makes them a great snack. It is also a perfect snack for drinks!', 'Chips', 0, NULL, NULL),
(15, 'Long Sakeru Gummy', 35, 15000, 4.30, 20, 'images/snacks/sakeru_gummy.jfif', 12000, 'You might recognize this candy from the famous Long Long Man commercial! These gummies are unique in that they are almost cheese string-like! Just pull strips off and nibble to your hearts content! This infamously long gummy is grape flavor, just like the ones in those famous commercials! Length: 40 cm.', 'Candy', 0, NULL, NULL),
(16, 'Tokyo Banana x KitKat', 35, 20000, 4.30, 20, 'images/snacks/tokyo_banana_kitkat.png', 16000, 'TOKYO BANANA and KITKAT: two legendary sweets come together for the first time.Tokyo Banana’s distinctively delicate banana flavor, enrobed in KITKAT chocolate. Moist, yet crispy. Each bar is embossed with a cute banana motif. Renewed with the same great taste! But with less sugar*. One more break with an easy-to-eat size! *Soy milk okara powder and whole milk powder were used instead of reduced sugar.', 'Chocolate', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proof_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `transaction_date`, `total_price`, `status`, `proof_payment`, `created_at`, `updated_at`, `address`) VALUES
(1, 1, '2022-01-15', 20000, 'checkout', '', '2022-01-15 08:17:49', '2022-01-15 08:19:07', ''),
(2, 1, '2022-01-15', 12000, 'cart', '', '2022-01-15 08:19:33', '2022-01-15 08:30:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tony', 'tony@tony.com', '$2y$10$cK5SVKTS0UsfwDwufniIf.DdfiQAC8ei/Q.dohqUE3WwTaot/xFxy', 0, '2022-01-10 23:10:45', '2022-01-10 23:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_user`
--
ALTER TABLE `address_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_user`
--
ALTER TABLE `address_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
