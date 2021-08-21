-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 09:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sender`, `receiver`, `balance`) VALUES
(1, 'soumya nagbandi', 'sharat', 1),
(2, 'vennela kotha', 'sharat', 2000),
(3, 'Hrushikesh', 'soumya nagbandi', 2000),
(4, 'supriya', 'vennela kotha', 50),
(5, 'Hrushikesh', 'soumya nagbandi', 2000),
(6, 'poojitha', 'NAGABANDI', 4000),
(7, 'Vyshnavi', 'Harsha', 2),
(8, 'soumya nagbandi', 'naveena', 10000),
(9, 'soumyasree', 'Harsha', 1000),
(10, 'smr', 'Harsha', 2000),
(11, 'misra', 'sharat', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `Balance`) VALUES
(2, 'nagabandisoumyasree24047@gmail.com', 'soumya nagbandi', 11552),
(3, 'kothavennela@gmail.com', 'vennela kotha', 8200),
(4, 'shaistafatima@gmail.com', 'shaist fatima', 3000),
(5, 'Hrushikeshadupa@gmail.com', 'Hrushikesh', 19000),
(6, 'vyshnavimalluru@gmail.com', 'Vyshnavi', 11998),
(7, 'poojithanagilla@gmail.com', 'poojitha', 7000),
(11, 'sujalapalleboina@gmail.com', 'Sujala', 10000),
(13, 'supriya@gamil.com', 'supriya', 11950),
(16, 'kushal@gmail.com', 'kushal', 10000),
(17, 'sharat@gmail.com', 'sharat', 26489),
(19, 'naveena@gmail.com', 'naveena', 50002),
(20, 'harsha@gamil.com', 'Harsha', 26002),
(24, 'sandhya@gmail.com', 'sandhya', 4000),
(27, 'teja@gmail.com', 'teja', 2000),
(30, 'deliveryboy1@gmail.com', 'deliveryboy1', 30000),
(32, 'nagabandisoumyasree24047@gmail.com', 'NAGABANDI', 5000),
(33, 'nagabandisoumyasree24047@gmail.com', 'NAGABANDI', 1000),
(34, 'saisirupa@gmail.com', 'saisirupa', 3000),
(35, 'akshaya@gmail.com', 'akshaya', 5000),
(36, 'manjula@gmail.com', 'manjula', 6000),
(37, 'sm@gmail.com', 'soumya', 20000),
(38, 'smr@gmail.com', 'soumyasree', 3000),
(39, 'smry@gamil.com', 'smr', 54000),
(40, 'misra@gmail.com', 'misra', 18800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
