-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 01:35 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt_orders`
--

CREATE TABLE `adopt_orders` (
  `orderId` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `shippingAddress` text DEFAULT NULL,
  `permanentAddress` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `catId` varchar(255) DEFAULT NULL,
  `catName` varchar(255) DEFAULT NULL,
  `catPrice` decimal(7,2) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adopt_orders`
--

INSERT INTO `adopt_orders` (`orderId`, `userName`, `userEmail`, `shippingAddress`, `permanentAddress`, `city`, `pincode`, `catId`, `catName`, `catPrice`, `created_at`, `status`) VALUES
(55, 'ankita mane', 'maneankita2122@gmail.com', 'at post dhebewadi karad satara', 'at post dhebewadi,gandhinagar,opp mgvk  karad satara', 'karad', '415104', '12', 'Persion Cat', 10000.00, '2024-03-19', 'Pending'),
(56, 'dipali gavas', 'dipaligavas2122@gmail.com', 'at post malkapur karad satara', 'at post malkapur,DMS,karad satara', 'karad', '415110', '16', 'British Shorthair Cat', 11000.00, '2024-03-19', 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `adregistration`
--

CREATE TABLE `adregistration` (
  `Id` int(50) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adregistration`
--

INSERT INTO `adregistration` (`Id`, `adminname`, `email`, `password`, `date`) VALUES
(4, 'sayali yadav', 'sayaliyadav2122@gmail.com', 'sayali13', '2024-03-18 14:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `cat_prov`
--

CREATE TABLE `cat_prov` (
  `id` int(11) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `pet_description` text NOT NULL,
  `pet_age` varchar(11) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `pet_image` varchar(255) NOT NULL,
  `donation_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_prov`
--

INSERT INTO `cat_prov` (`id`, `parent_name`, `pet_breed`, `contact_number`, `pet_description`, `pet_age`, `price`, `pet_image`, `donation_date`) VALUES
(8, 'sayali yadav', 'Bengal Tiger', '8010985799', '<p>This cat is one of the popular Indian cats known for its striking \r\n                appearance with grey spots that resembles a leopard and golden eyes. This active\r\n                 and playful breed \r\n                requires mental and physical stimulation to stay happy and healthy.\r\n                This cat is one of the popular Indian cats known for its striking \r\n                appearance with grey spots that resembles a leopard and golden eyes. This active\r\n                 and playful breed \r\n                requires mental and physical stimulation to stay happy and healthy.', '1 year', 10000.00, 'uploads/bengal cat.webp', '2024-03-17'),
(9, 'nita ekhande', 'Siamese Cat', '8055665904', 'Perhaps one of the most distinctive breeds, Siamese cats are most often cream-colored with\r\n                 grey-brown paws and icy blue eyes. Everything about Siamese is a bit pointier than other breeds,\r\n                  from the large, triangular ears to their delicate paws. They’ll often have the same grey-brown coloring on their ears and face. \r\n                Siamese cats are now bred to come in different colors and patterns. ', '1.5 years', 10000.00, 'uploads/Siamese-1.jpg', '2024-03-17'),
(10, 'ankita mane', 'Maine_Coon', '8432932973', 'Maine Coons have relatively large bodies and lush, heavy coats. They’re muscular, sturdy, \r\n                and simultaneously regal in stature. Their large eyes, significant paws, and high cheekbones distinguish\r\n                 them from other cat breeds.\r\n\r\n                When it comes to personality, these cats toe a line of wanting to be near their humans and needing their \r\n                own space. They have a reputation for being undeniably attentive and may follow family members around. ', '2 years', 15000.00, 'uploads/Maine_Coon-1.jpg', '2024-03-17'),
(11, 'sanika thorat', 'Indian Cat', '8624032696', 'Indian cats are lovable members of different types of families and are known for their courage, intelligence,\r\n                 curiosity, and affection. Indie cats are often adopted from shelters or streets \r\n                and require a thorough medical check-up before leaving for their forever home.', '1 year', 9000.00, 'uploads/indian cat.jpg', '2024-03-17'),
(13, 'pournima patil', 'Ragdoll', '9096309147', 'Ragdolls are one of the largest breeds of domestic cats. They are known for their striking blue eyes, \r\n                semi-longhair coat, and placid temperament. Ragdolls are often referred to as “dog-like cats” because\r\n                 of their tendency to follow people around, \r\n                their ease at being physically handled, and their relative lack of aggression', '1 year', 10500.00, 'uploads/regdoll.webp', '2024-03-17'),
(15, 'sagar bakal', 'Bombay Cat', '8765478324', 'Bombay cats are medium-sized cats with a muscular build, known for their jet-black coat, copper or golden eyes, \r\n                and sweet, gentle disposition. \r\n                They are often referred to as “parlor panthers” because of their striking resemblance to black panthers.', '1.2 year', 12000.00, 'uploads/Bombay Cat.webp', '2024-03-17'),
(17, 'sayali mane', 'himalayin cat', '8057465374', 'The Himalayan cat is a crossbreed between a Persian cat and a Siamese cat. They are known for their\r\n                \r\n                blue almond-shaped eyes, long fur, and color points like the Siamese. Himalayans are calm, gentle, \r\n                and love to be pampered.', '1 years ', 10000.00, 'uploads/himalayan cat.webp', '2024-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `dog_adopt_orders`
--

CREATE TABLE `dog_adopt_orders` (
  `order_id` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `shippingAddress` varchar(255) DEFAULT NULL,
  `permanentAddress` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `dogId` varchar(255) DEFAULT NULL,
  `dogName` varchar(255) DEFAULT NULL,
  `dogPrice` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dog_adopt_orders`
--

INSERT INTO `dog_adopt_orders` (`order_id`, `userName`, `userEmail`, `shippingAddress`, `permanentAddress`, `city`, `pincode`, `dogId`, `dogName`, `dogPrice`, `created_at`, `status`) VALUES
(19, 'nikhil ekhande', 'nikhilekhande2122@gmail.com', 'at post vaduj,tal khatav', 'at post vaduj,oppo sai garaage,khatav', 'vaduj', '415134', '13', 'Catahoula Leopard Dog', 18000.00, '2024-03-19 09:44:55', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `dog_prov`
--

CREATE TABLE `dog_prov` (
  `id` int(11) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `contact_number` decimal(10,0) NOT NULL,
  `pet_description` varchar(255) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `pet_age` varchar(50) NOT NULL,
  `pet_image` varchar(255) NOT NULL,
  `donation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dog_prov`
--

INSERT INTO `dog_prov` (`id`, `parent_name`, `pet_breed`, `contact_number`, `pet_description`, `price`, `pet_age`, `pet_image`, `donation_date`) VALUES
(10, 'sayali yadav', 'Appenzeller Sennenhund', 9876584637, 'There are many reasons to want a guard dog: for personal protection, to keep your property safe or as a living doorbell for when a visitor arrives. \r\n            Unfortunately, guard dogs often get a bad reputation for being vicious or dangerous, but that', 20000.00, '1 year', 'uploads/d1.jpg', '2024-03-17'),
(11, 'nita ekhande', 'Australian Shepherd', 9844837687, 'The medium-sized Aussie is both beautiful and brave. Most at home on a ranch or in a rodeo, these dogs are natural herders and will take any opportunity to\r\n             get other animals (or even kids) in line. What\'s more, they make energetic playmates ', 20000.00, '1.5 years year', 'uploads/d2.jpg', '2024-03-17'),
(14, 'amruta satpe', 'German Shepherd', 7685496235, 'German Shepherds are one of the most common breeds for police dogs, but they\'re just as popular as pets.\r\n             They\'ll protect your house from intruders and are so loyal that they will form a strong bond with you. ', 18000.00, '2years ', 'uploads/d5.jpg', '2024-03-17'),
(15, 'priti desai', 'Indian Dog', 987543276, 'It is a medium-sized dog of square to slightly rectangular build and short coat. The dog has a double coat, a coarse upper coat, and a soft undercoat.\r\n             The most commonly observed colours are browns, ranging from dark to reddish-brown, with or', 9000.00, '1 year', 'uploads/indian dog.jpeg', '2024-03-17'),
(16, 'punam yadav', 'Boxer Dog', 8790658754, 'The Boxer is a medium to large, short-haired dog breed of mastiff-type, developed in Germany. The coat is smooth and tight-fitting; colors\r\n             are fawn, brindled, or white, with or without white markings. Boxers have broad, short skulls, have a ', 10000.00, '1 year', 'uploads/boxer dog.jpg', '2024-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(22, 'sahil patil', 'sahilpatil@gmail.com', '8010985799', 'can i join you as a provider', '2024-03-19 09:39:43'),
(24, 'neha yadav', 'nehayadav@gmail.com', '8967545651', 'Hi..I unable to dignose disease..Can i Call You\r\n', '2024-03-19 09:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `prov_registration`
--

CREATE TABLE `prov_registration` (
  `Id` int(50) NOT NULL,
  `providername` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prov_registration`
--

INSERT INTO `prov_registration` (`Id`, `providername`, `email`, `password`, `date`) VALUES
(1, 'sayali yadav', 'sayaliyadav2122@gmail.com', 'sayali123', '2024-03-18'),
(2, 'nita ekhande', 'ekhandeneeta@gmail.com', 'nita123', '2024-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` decimal(14,2) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `username`, `email`, `mobileno`, `password`, `date`) VALUES
(69, 'apeksha yadav', 'apekshayadav311@gmail.com', 7887542006.00, 'apeksha123', '2024-03-18 13:08:18'),
(70, 'shivam yadav', 'shivamyadav11@gmail.com', 7887542006.00, 'shivam123', '2024-03-18 13:08:18'),
(71, 'maya yadav', 'mayayadav27011988@gmail.com', 9096309147.00, 'maya123', '2024-03-18 13:10:45'),
(72, 'ankita mane', 'ankitamane@gmail.com', 8432932973.00, 'ankita123', '2024-03-18 15:05:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt_orders`
--
ALTER TABLE `adopt_orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `adregistration`
--
ALTER TABLE `adregistration`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cat_prov`
--
ALTER TABLE `cat_prov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog_adopt_orders`
--
ALTER TABLE `dog_adopt_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `dog_prov`
--
ALTER TABLE `dog_prov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prov_registration`
--
ALTER TABLE `prov_registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt_orders`
--
ALTER TABLE `adopt_orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `adregistration`
--
ALTER TABLE `adregistration`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cat_prov`
--
ALTER TABLE `cat_prov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dog_adopt_orders`
--
ALTER TABLE `dog_adopt_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dog_prov`
--
ALTER TABLE `dog_prov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `prov_registration`
--
ALTER TABLE `prov_registration`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
