-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 09:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `film` varchar(128) NOT NULL,
  `cinema` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `time` varchar(128) NOT NULL,
  `seats` varchar(4) NOT NULL,
  `image` varchar(64) NOT NULL,
  `bcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `film`, `cinema`, `date`, `time`, `seats`, `image`, `bcode`) VALUES
(25, 'sam', 'The Avenger', 'BTC XXI', '2021-06-01', '15:05', 'A3', 'Avenger.jpg', 47091546),
(26, 'sam', 'Kingsman', 'BTC XXI', '2021-06-01', '15:35', 'A6', 'Kingsman.jpg', 32631936);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `film` varchar(128) NOT NULL,
  `cinema` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `time` varchar(128) NOT NULL,
  `harga` int(10) NOT NULL,
  `seats` varchar(4) NOT NULL,
  `code` int(8) NOT NULL,
  `image` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `film`, `cinema`, `date`, `time`, `harga`, `seats`, `code`, `image`) VALUES
(1, 'sam', 'The Mentalist', 'XXI Trans Studio ', '2021-06-01', '12:15', 40000, 'A3', 66614545, 'mentalist.jpg'),
(2, 'sam', 'Mortal Kombat', 'XXI Trans Studio ', '2021-06-01', '12:15', 40000, 'B5', 66654213, 'MortalKombat.jpg'),
(3, 'adam', 'Mortal Kombat', 'XXI Trans Studio ', '2021-06-01', '12:15', 40000, 'C7', 66654214, 'MortalKombat.jpg'),
(5, 'adam', 'The Mentalist', 'Trans Studio Mall XXI', '2021-06-01', '12:15', 40000, 'A1', 54388295, 'mentalist.jpg'),
(6, 'RAIHAN N SETIAWAN', 'Keluarga Cemara', 'BTC XXI', '2021-06-17', '15:35', 40000, 'G8', 79208787, 'Cemara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'RAIHAN N SETIAWAN', 'raihan@raihan.com', 'profile.jpg', '$2y$10$ERXIxgQnAnh1Kja1C6gpWOaFMMyFl/lXVMIF2N7XZVfk8vTaAOM0G', 2, 1, 1620723565),
(2, 'tes', 'tes@tes.com', 'default.jpg', '$2y$10$hMox47ZUQ8oH93L0272OqehUlxilYcYAH7mcAqtkqruB4LVctlzLK', 2, 1, 1620723945),
(3, 'tes123', 'tes1@tes.com', 'default.jpg', '$2y$10$h0EWwu72M0cw7EDxLEdPhemllnHybVrm31/ciiFM1jO/xiA7PwCfe', 2, 1, 1620808241),
(4, 'admin', 'admin@admin.com', 'default.jpg', '$2y$10$FvXArl7ob3uHefvu4Nk9x.UBmFWOJzIBf6cimIeSLEuYiQqtUaRiW', 1, 1, 1621070107),
(5, 'Raihan Setiawan', 'raihannsetiawan@gmail.com', 'default.jpg', '$2y$10$cKUUkwekGpi3EYREmVZPVOOnEE8zVZebuItCpxosN1E4vuHhwAWZ6', 2, 1, 1621071849),
(6, 'modul13', 'modul13@gmail.com', 'default.jpg', '$2y$10$RVcmZAvRFPPQk0SKquWxrecHI6ibTJUokg3fCQl6l/zwZwIRWDhmC', 2, 1, 1623142655),
(7, 'sam', 'sam@sam.com', 'default.jpg', '$2y$10$RpNnKcmlG3S6wiCoCUWZje/TI.jXY5rkjPKLd07gLd2O0JGUV3Q7W', 2, 1, 1623309678),
(8, 'adam', 'adam@adam.com', 'default.jpg', '$2y$10$xsS/VTWVkmd1vkwlRj7WNOrbBl0mSrH50JjgaJ5LBgZ0GUlXYCLG6', 2, 1, 1623310710);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(6, 1, 3),
(9, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Menu'),
(5, 'Transaction');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/index', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'SubMenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 5, 'Book', 'book/', 'fas fa-fw fa-calendar-check', 1),
(9, 5, 'Payment', 'book/payment', 'fas fa-fw fa-money-bill', 1),
(10, 5, 'Invoice', 'book/invoice', 'fas fa-fw fa-receipt', 1),
(11, 1, 'Report', 'admin/report', 'fas fa-fw fa-clipboard-list', 1),
(12, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
