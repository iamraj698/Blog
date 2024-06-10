-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 09:20 AM
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
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$xNLU.HnTEw..oYzgjFmt0OAx7Fr.kTb7Uzo0eDkVL6HUG99ieD2LG');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `posted_by` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `posted_by`) VALUES
(2, 'first', 'DescriptionWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-SydneDescriptionWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-SydneDescriptionWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydne', 1),
(3, 'third', 'The standard Lorem Ipsum passage, used since the 1500s\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 5),
(4, '4th', 'The standard Lorem Ipsum passage, used since the 1500s\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\r\n\r\nSection 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 translation by H. Rackham\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n\r\n1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\n', 5),
(5, 'TEST ', 'Description fnkjhfd jhfjg bjbdf beurhrrrrrrrrrrrrrrrr rwwwwwwwwwe rrrrrrrrg ggggggggggw wwwwwwwwwwwwwww ttttt trww werkwjnr mawekbn dmwnrkwerkws  ffkener ', 1),
(6, 'Checking', 'gggggggggggggggggggggggggggggggggg aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm sssssssssssssssssssssssssssssssssss wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww ssssssssssssssssssssssss', 1),
(7, 'dwde', 'Descriptidffron', 8),
(8, 'flhgdfn', 'Description wwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww.', 8),
(9, '', '<h1 style=\"text-align:center;\">Title</h1><h2><strong>How to Install Ckeditor</strong></h2><p><span style=\"background-color:rgb(230,230,77);\">### The Impact of Technology on Modern Education</span></p><p style=\"text-align:justify;\"><span style=\"background-color:rgb(230,230,77);\">Technology has revolutionized modern education, transforming how stud</span>ent<mark class=\"marker-yellow\">s learn and teachers </mark>instruct. The integration of digital tools in the classroom has facilitated a more interactive and engaging learning experience. For instance, multimedia presentations and educational software cater to diverse learning styles, enhancing comprehension and retention. Online resources and e-books have also expanded access to information, allowing students to delve deeper into subjects and learn at their own pace.</p><p style=\"text-align:justify;\">Furthermore, technology has enabled distance learning, breaking geographical barriers and providing education to remote and underserved areas. Platforms like Zoom and Google Classroom have become integral during events like the COVID-19 pandemic, ensuring continuity in education despite physical school closures. These tools have also fostered collaboration among students through virtual group projects and discussions, promoting teamwork and communication skills.</p><p style=\"text-align:justify;\">However, the digital divide remains a significant challenge, with unequal access to technology hindering educational equity. Addressing this gap is crucial to ensure all students benefit from technological advancements. Additionally, the over-reliance on technology can lead to issues such as decreased attention spans and reduced face-to-face interactions, highlighting the need for a balanced approach.</p><p style=\"text-align:justify;\">In conclusion, while technology has greatly enhanced modern education, it is essential to address its challenges to maximize its benefits and ensure inclusive and effective learning for all.</p><h3>Click Here for <a href=\"http://www.google.com/\"><u>GOOGLE</u></a></h3><p style=\"margin-left:0px;\"><span style=\"background-color:transparent;color:inherit;\">Paragraph</span></p>', 1),
(10, '', '<h1>&nbsp;</h1><p>&nbsp;</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike`
--

CREATE TABLE `like_dislike` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `like_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like_dislike`
--

INSERT INTO `like_dislike` (`id`, `post_id`, `user_id`, `like_type`) VALUES
(1, 2, 8, NULL),
(2, 2, 1, 'like'),
(3, 2, 6, NULL),
(4, 3, 6, 'like'),
(5, 2, 5, 'like'),
(6, 3, 5, 'like'),
(7, 7, 5, 'like'),
(8, 8, 5, 'like'),
(9, 4, 5, 'like'),
(10, 5, 5, 'like'),
(11, 2, 7, NULL),
(12, 3, 1, 'like'),
(13, 5, 1, 'like'),
(14, 8, 1, 'like'),
(15, 9, 1, 'like'),
(16, 10, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_pic`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'profile/blue-ship-with-green-top-that-says-seagulls-side.jpg', 'Raj ', 'raj@gmail.com', '$2y$10$hZ5tsq7bKa/R5z78.txDb.Z53EdmbAmP.7Qasv2fVAFpEVTZJZeM.', '$2y$10$W7Hfywe5clDVU298JJ7CXOMQh44iNfmpDvwxniYux9h44nm0tezeG'),
(5, 'profile/2150648049.jpg', 'rakesh', 'rakesh@gmail.com', '$2y$10$TaOQD1928ChVW3i5xS9DUO1eRgkBG3Un5Y9fPZl6uZsjDccCQSure', '$2y$10$80jrR05qPnDUSML0pJiQ2OnOUJF1TuD/Bep5pil.eQaIEaKpcT8cq'),
(6, 'profile/unnamed.png', 'Tony', 'tony@gmail.com', '$2y$10$9mrEczADyudll/zv3HnEQujlc1rJNvpo4mVZMn83iAlVWko1wQJMG', '$2y$10$2zgp7w4T2WVVHRSPqmPZeOO2TCrtFdg0ttQu5e2dlFRny47VKXyhq'),
(7, 'profile/powersector (1).jpg', 'sarat', 'sarat@gmail.com', '$2y$10$3QTFBMc8MXlxhpsWj8WGWO1qDdXnVi/3NIaz623Pq9NsCVIB2sKzq', '$2y$10$bzE0duPxPv5dPayfocgy9eJqsaVFtqQK7Gx.SZkY3rYiSyYAhhByq'),
(8, NULL, 'ramesh', 'ramesh@gmail.com', '$2y$10$9fcTKL0h5LfwT1dP2CFjR.f0pjKyWxrU6pvN4g4Or15zZAZGm7FjW', '$2y$10$bYHYj5e3Hu9egKa3RCuBBuG6EwPb6nm4lvTtV4pWVMG60yR/pa2P6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posted_by` (`posted_by`);

--
-- Indexes for table `like_dislike`
--
ALTER TABLE `like_dislike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `like_dislike`
--
ALTER TABLE `like_dislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`posted_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `like_dislike`
--
ALTER TABLE `like_dislike`
  ADD CONSTRAINT `like_dislike_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `like_dislike_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
