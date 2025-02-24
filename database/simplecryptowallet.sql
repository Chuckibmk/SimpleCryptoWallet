-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2023 at 05:09 AM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poolwallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `pwd`) VALUES
(1, 'IBMK', '25d55ad283aa400af464c76d713c07ad', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `network` varchar(50) NOT NULL,
  `coin` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `amount` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `status` enum('pending','true','false') NOT NULL,
  `time` varchar(50) NOT NULL,
  `last_updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `uid`, `network`, `coin`, `logo`, `amount`, `value`, `status`, `time`, `last_updated`) VALUES
(4, '1', 'BNB', 'USDT', 'images/usdt.png', '300', '300', 'pending', '1675439926', '1678719042'),
(5, '1', 'BNB', 'BNB', 'images/bnb.png', '2.3', '703.87', 'pending', '1675440135', '1678718304'),
(6, '1', 'MATIC', 'MATIC', 'images/matic-token.png', '300', '346.28', 'pending', '1675440207', '1678718304'),
(8, '1', 'ETH', 'ETH', 'images/eth_logo.svg', '0.12695211', '1826.46', 'pending', '1675440260', '1680561386'),
(9, '1', 'BNB', 'BUSD', 'images/busd-logo.png', '841', '841', 'pending', '1676757422', '1678718304'),
(10, '1', 'BTC', 'BTC', 'logos/bitcoin.png', '999.96484975', '1000', 'pending', '1680562610', '1680562671');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `message` text NOT NULL,
  `topic` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `uid`, `message`, `topic`, `time`) VALUES
(1, 1, 'You are welcomed to Pool Wallet, time to take you financial life under your control', 'Welcome To Pool Wallet.', 1675114129),
(2, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675114319),
(3, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675120856),
(4, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675158692),
(5, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675161137),
(6, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675166579),
(7, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675167391),
(8, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675168243),
(9, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675168451),
(10, 1, 'Login Attempted from IP Address: 41.190.30.251. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675168470),
(11, 1, 'Login Attempted from IP Address: 41.190.2.1. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675285722),
(12, 1, 'Login Attempted from IP Address: 41.190.30.246. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675370206),
(13, 1, 'Login Attempted from IP Address: 41.190.30.246. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675419896),
(14, 1, 'Login Attempted from IP Address: 41.190.30.246. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675439076),
(15, 1, 'Login Attempted from IP Address: 41.190.30.128. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675503425),
(16, 1, 'Login Attempted from IP Address: 41.190.30.128. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675503431),
(17, 1, 'Login Attempted from IP Address: 41.190.30.239. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675516832),
(18, 1, 'Login Attempted from IP Address: 41.190.30.239. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1675524469),
(19, 1, 'Login Attempted from IP Address: 41.190.30.140. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676744876),
(20, 1, 'Login Attempted from IP Address: 41.190.30.140. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676756181),
(21, 1, 'Login Attempted from IP Address: 41.190.30.140. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676763666),
(22, 1, 'Login Attempted from IP Address: 41.190.30.85. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676824996),
(23, 1, 'Login Attempted from IP Address: 41.190.30.85. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676829171),
(24, 1, 'Login Attempted from IP Address: 41.190.2.45. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676843402),
(25, 1, 'Login Attempted from IP Address: 41.190.2.45. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676891201),
(26, 1, 'Login Attempted from IP Address: 41.190.30.34. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676915885),
(27, 1, 'Login Attempted from IP Address: 41.190.30.119. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676984391),
(28, 1, 'Login Attempted from IP Address: 41.190.3.77. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1676987595),
(29, 1, 'Pending ETH Transaction of : 0.91, was recieved on: 2023-02-21 15:00:16', 'Pending Transaction', 1676988016),
(30, 1, 'Pending ETH Transaction of : 0.1, was recieved on: 2023-02-21 15:06:04', 'Pending Transaction', 1676988364),
(31, 1, 'Pending ETH Transaction of : 0.1, was recieved on: 2023-02-21 15:09:46', 'Pending Transaction', 1676988586),
(32, 1, 'Pending ETH Transaction of : 0.1, was recieved on: 2023-02-21 15:34:56', 'Pending Transaction', 1676990096),
(33, 1, 'Pending ETH Transaction of : 0.1, was recieved on: 2023-02-21 15:38:24', 'Pending Transaction', 1676990304),
(34, 1, 'Pending ETH Transaction of : 0.1, was recieved on: 2023-02-21 15:40:10', 'Pending Transaction', 1676990410),
(35, 1, 'Login Attempted from IP Address: 41.190.2.192. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1677009066),
(36, 1, 'Pending ETH Transaction of : 0.1, was recieved on: 2023-02-21 20:51:44', 'Pending Transaction', 1677009104),
(37, 1, 'Pending ETH Transaction of : 0.1, was recieved on: 2023-02-21 20:53:21', 'Pending Transaction', 1677009201),
(38, 1, 'Pending ETH Transaction of : 0.18, was recieved on: 2023-02-21 20:55:06', 'Pending Transaction', 1677009306),
(39, 2, 'You are welcomed to Pool Wallet, time to take you financial life under your control', 'Welcome To Pool Wallet.', 1677699777),
(40, 2, 'Login Attempted from IP Address: 197.210.85.125. Location: Abuja, FCT, Nigeria', 'NEW LOGIN ALERT', 1677699891),
(41, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678524676),
(42, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678524768),
(43, 1, 'Pending ETH Transaction of : 0.4, was recieved on: 2023-03-11 09:55:25', 'Pending Transaction', 1678524925),
(44, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678525609),
(45, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678525713),
(46, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678525993),
(47, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678526077),
(48, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678541709),
(49, 1, 'Login Attempted from IP Address: 41.190.30.236. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678546161),
(50, 1, 'Login Attempted from IP Address: 41.190.3.49. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678556357),
(51, 1, 'Login Attempted from IP Address: 41.190.2.244. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678711783),
(52, 1, 'Send Transaction was Declined. This may be due to various reasons, ie: Low gas fee, High Network traffic. Please Contact our support team for further enquiries', 'Send Transaction Failed', 1678714851),
(53, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:10:53', 'Send Transaction Successful', 1678716653),
(54, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:11:41', 'Send Transaction Successful', 1678716701),
(55, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:18:49', 'Send Transaction Successful', 1678717129),
(56, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:27:45', 'Send Transaction Successful', 1678717665),
(57, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:32:14', 'Send Transaction Successful', 1678717934),
(58, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:38:24', 'Send Transaction Successful', 1678718304),
(59, 1, 'Login Attempted from IP Address: 41.190.2.244. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678718714),
(60, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:47:36', 'Send Transaction Successful', 1678718856),
(61, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:53:13', 'Send Transaction Successful', 1678719193),
(62, 1, 'Send Transaction Of : 0.4, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-03-13 14:54:39', 'Send Transaction Successful', 1678719279),
(63, 1, 'Login Attempted from IP Address: 41.190.30.74. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1678758965),
(64, 1, 'Login Attempted from IP Address: 41.190.2.6. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1679560502),
(65, 1, 'Login Attempted from IP Address: 41.190.3.230. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1679664721),
(66, 1, 'Account Password has been changed successfully', 'Password Change Successful', 1679666054),
(67, 1, 'Network requested successfully', 'Network Request Successful', 1679667736),
(68, 1, 'Network requested successfully', 'Network Request Successful', 1679667757),
(69, 1, 'Network requested successfully', 'Network Request Successful', 1679667834),
(70, 1, 'Login Attempted from IP Address: 41.190.3.230. Location: Lagos, Lagos, Nigeria', 'NEW LOGIN ALERT', 1679671044),
(71, 1, 'Account Password has been changed successfully', 'Password Change Successful', 1680093057),
(72, 3, 'You are welcomed to Pool Wallet, time to take you financial life under your control', 'Welcome To Pool Wallet.', 1680560624),
(73, 1, 'Pending ETH Transaction of : 0.98304789, was recieved on: 2023-04-03 23:32:49', 'Pending Transaction', 1680561169),
(74, 1, 'Send Transaction Of : 0.98304789, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-04-03 22:36:26', 'Send Transaction Successful', 1680561386),
(75, 1, 'Network requested successfully', 'Network Request Successful', 1680562525),
(76, 1, 'Pending BTC Transaction of : 0.03515025, was recieved on: 2023-04-03 23:57:42', 'Pending Transaction', 1680562662),
(77, 1, 'Send Transaction Of : 0.03515025, With Trans ID: , was successful and funds sent to Wallet. Was Approved on: 2023-04-03 22:57:51', 'Send Transaction Successful', 1680562671),
(78, 4, 'You are welcomed to Pool Wallet, time to take you financial life under your control', 'Welcome To Pool Wallet.', 1682094517),
(79, 1, 'Network requested successfully', 'Network Request Successful', 1683467417),
(80, 5, 'You are welcomed to Pool Wallet, time to take you financial life under your control', 'Welcome To Pool Wallet.', 1685145645);

-- --------------------------------------------------------

--
-- Table structure for table `renet`
--

CREATE TABLE `renet` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `symbol` varchar(256) NOT NULL,
  `time` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renet`
--

INSERT INTO `renet` (`id`, `uid`, `name`, `symbol`, `time`) VALUES
(1, 1, 'Bitcoin', 'BTC', '1679667834'),
(2, 1, 'BTC', 'btc', '1680562525'),
(3, 1, 'BTC', 'B', '1683467417');

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `trans_id` varchar(256) NOT NULL,
  `network` varchar(50) NOT NULL,
  `coin` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `dolval` varchar(256) NOT NULL,
  `gasfee` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `status` enum('pending','true','false') NOT NULL,
  `time` varchar(50) NOT NULL,
  `last_updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`id`, `uid`, `trans_id`, `network`, `coin`, `amount`, `dolval`, `gasfee`, `address`, `status`, `time`, `last_updated`) VALUES
(5, 1, '', 'BTC', 'BTC', '0.03515025', '', '', '1PsREGshEASH8n583uLT1BGXuLLV39ek2o', 'true', '1680562662', '1680562662');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ev` tinyint(1) NOT NULL DEFAULT '0',
  `email_ver` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet_address` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `private_key` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seed_phrase` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `walletid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `ev`, `email_ver`, `password`, `pass`, `wallet_address`, `private_key`, `seed_phrase`, `walletid`, `access`, `created_at`) VALUES
(1, 'IBMK', 'tsartobnrys@gmail.com', 1, '1fc76b5f0876ab1a8c7ef978ba68e2b2', '25d55ad283aa400af464c76d713c07ad', '12345678', '0xB283623beCB6E7A90b75D2B350e8a8DD9E1795D4', '0x6f69315d061b541906c1eb9d8dac5ad8dfa93d84060936893da01cf450d8a3de', 'eye supply truth employ parade child carpet valve option stairs gym program', 'PW90400114', '0', 1675114123),

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `logo` text NOT NULL,
  `name` varchar(256) NOT NULL,
  `network` varchar(50) NOT NULL,
  `explorer` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `uid`, `logo`, `name`, `network`, `explorer`, `address`, `last_updated`) VALUES
(1, 1, 'logos/eth.png', 'Ethereum', 'ETH', 'https://etherscan.io/', '', 1680031703),
(2, 1, 'logos/bnb.png', 'BNB Smart Chain', 'BNB', 'https://bscscan.com/', '', 1680031718),
(3, 1, 'logos/polygon.png', 'Polygon', 'MATIC', 'https://polygonscan.com/', '', 1680031733),
(4, 0, '/images/eth_logo.svg', '', 'ETH', '', '', 1680560677),
(5, 1, 'logos/bitcoin.png', 'Bitcoin', 'BTC', 'https://bitcoinblockexplorers.com/', '', 1680562567),
(6, 0, '/images/eth_logo.svg', '', 'ETH', '', '', 1682094559),
(7, 0, '/images/eth_logo.svg', '', 'ETH', '', '', 1685145874);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renet`
--
ALTER TABLE `renet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
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
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `renet`
--
ALTER TABLE `renet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
