-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 09:21 AM
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
-- Database: `homeservice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `login_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'adminkajall');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tb`
--

CREATE TABLE `assets_tb` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_dop` date NOT NULL,
  `p_avil` int(11) NOT NULL,
  `p_total` int(11) NOT NULL,
  `p_og_cost` int(11) NOT NULL,
  `p_sell_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets_tb`
--

INSERT INTO `assets_tb` (`p_id`, `p_name`, `p_dop`, `p_avil`, `p_total`, `p_og_cost`, `p_sell_price`) VALUES
(5, 'Pipe Wrenches (Small, Medium, Large)', '2025-03-07', 5, 10, 500, 700),
(6, 'Plumber’s Tape (Teflon)	', '2025-03-01', 20, 30, 50, 100),
(7, 'Water Pressure Tester	', '2025-03-04', 3, 6, 800, 1200),
(8, 'Pipe Fittings (Elbows, Tees)	', '2025-02-14', 25, 40, 30, 70),
(9, 'Toilet Repair Kit (Flapper, Fill Valve)', '2025-03-06', 5, 12, 400, 750),
(10, 'Tape Measure	', '2025-02-03', 10, 20, 100, 250),
(11, 'Drill Machine	', '2025-02-23', 5, 10, 1200, 1800),
(12, 'Hose Pipe	', '2025-03-07', 12, 25, 200, 400),
(13, 'Pipe Cutter	', '2025-03-07', 6, 15, 450, 800),
(14, 'Plumbing Gloves	', '2025-02-26', 15, 30, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `assign_work`
--

CREATE TABLE `assign_work` (
  `req_id` int(11) NOT NULL,
  `req_info` varchar(255) DEFAULT NULL,
  `req_desc` text DEFAULT NULL,
  `req_name` varchar(100) DEFAULT NULL,
  `req_add1` varchar(255) DEFAULT NULL,
  `req_add2` varchar(255) DEFAULT NULL,
  `req_city` varchar(100) DEFAULT NULL,
  `req_state` varchar(100) DEFAULT NULL,
  `req_zip` varchar(20) DEFAULT NULL,
  `req_email` varchar(100) DEFAULT NULL,
  `req_mobile` varchar(15) DEFAULT NULL,
  `assign_date` date DEFAULT NULL,
  `assign_tech` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assign_work`
--

INSERT INTO `assign_work` (`req_id`, `req_info`, `req_desc`, `req_name`, `req_add1`, `req_add2`, `req_city`, `req_state`, `req_zip`, `req_email`, `req_mobile`, `assign_date`, `assign_tech`) VALUES
(1, 'AC Repair', NULL, 'John Doe', NULL, '123 Main Street', 'Delhi', NULL, NULL, NULL, '9876543210', '2024-04-06', 'Zahir Khan'),
(40, 'maintenance', 'Maintenance of the bedroom', 'Kunjan Waghela', '703/A Gopal Krishna Soc', 'Carter Road No 3', 'Mumbai', 'Maharashtra', '400066', 'kunjanpwc@gmail.com', '7506550486', '2025-04-21', 'kajal'),
(44, 'Carpentry', 'Carpet Cleaning', 'kajal parmar', '21 floor 2101', 'k bulding borivali east', 'mumbai', 'maharastra', '400066', 'parmarkajal047@gmail.com', '2345643212345', '2025-04-06', 'kajal'),
(45, 'Home Deep Cleaning', 'home cleaning ', 'kajal parmar', 'kbulding borivali mumbai', 'maharastra', 'mumbai', 'Maharashtra', '0', 'parmarkajal@gmail.com', '7506550486', '2025-05-29', 'kajal');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_add` varchar(100) NOT NULL,
  `c_prod_name` varchar(100) NOT NULL,
  `c_prod_qty` int(11) NOT NULL,
  `c_prod_price` int(11) NOT NULL,
  `c_total_prod` int(11) NOT NULL,
  `c_prod_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`c_id`, `c_name`, `c_add`, `c_prod_name`, `c_prod_qty`, `c_prod_price`, `c_total_prod`, `c_prod_date`) VALUES
(1, 'keyboard', 'mumbai', '', 2, 400, 800, '2024-12-04'),
(2, 'keybord', 'mumbai', '', 1, 500, 500, '2024-12-04'),
(3, 'keybord', 'mumbai', '', 2, 500, 1000, '2024-12-04'),
(4, 'kjal', 'mumbai', 'keybord', 2, 500, 1000, '2024-12-04'),
(5, 'vishal', 'Goregaon, Mumbai', 'Toilet Repair Kit (Flapper, Fill Valve)', 1, 750, 750, '2025-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `login_request`
--

CREATE TABLE `login_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_request`
--

INSERT INTO `login_request` (`id`, `name`, `email`, `password`) VALUES
(2, ' kajall', 'parmarkajal047@gmail.com', 'kajal'),
(3, 'parmar', 'kajalparmar@gmail.com', 'kajalkajal'),
(4, 'kpp', 'kp@gmail.com', 'kp1233'),
(5, 'new', 'new@gmail.com', 'new123'),
(6, 'kajal', 'kajal@gmail.com', 'kajal'),
(9, 'kj', 'k@gmail.com', 'kajal'),
(10, 'Kunjan Waghela', 'kunjanpwc@gmail.com', 'kunj2114'),
(11, 'kajal', 'kajalllll@gmail.com', 'kajal'),
(12, 'kajal', 'kajal1@gmail.com', 'kajal12');

-- --------------------------------------------------------

--
-- Table structure for table `submit_request`
--

CREATE TABLE `submit_request` (
  `req_id` int(11) NOT NULL,
  `req_info` text NOT NULL,
  `req_desc` text NOT NULL,
  `req_name` varchar(100) NOT NULL,
  `req_add1` text NOT NULL,
  `req_add2` text NOT NULL,
  `req_city` varchar(100) NOT NULL,
  `req_state` varchar(100) NOT NULL,
  `req_zip` int(11) NOT NULL,
  `req_email` varchar(100) NOT NULL,
  `req_mobile` bigint(20) NOT NULL,
  `req_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_request`
--

INSERT INTO `submit_request` (`req_id`, `req_info`, `req_desc`, `req_name`, `req_add1`, `req_add2`, `req_city`, `req_state`, `req_zip`, `req_email`, `req_mobile`, `req_date`) VALUES
(37, 'Pool/Spa Cleaning', 'for garden', 'kajal', '12', 'xyz', 'mumbai', 'maharastra', 266644, 'khkjkja@gmail.com', 5392544739, '2025-03-09'),
(38, 'Pest Control', 'pest control', 'kajal parmar', 'kbulding borivali mumbai', 'maharastra', 'mumbai', 'Maharashtra', 400066, 'parmarkajal@gmail.com', 7506550486, '2025-02-22'),
(40, 'maintenance', 'Maintenance of the bedroom', 'Kunjan Waghela', '703/A Gopal Krishna Soc', 'Carter Road No 3', 'Mumbai', 'Maharashtra', 400066, 'kunjanpwc@gmail.com', 7506550486, '2004-11-29'),
(41, 'Pest Control Services', 'Pest Control Services', 'kajal', '123', 'ej', 'mumbai', 'Maharashtra', 400066, 'parmarkajal@gmail.com', 7506550486, '2025-04-06'),
(42, 'laptop repair', 'laptop', 'kajal parmar', 'kbulding borivali mumbai', 'maharastra', 'mumbai', 'Maharashtra', 400066, 'parmarkajal@gmail.com', 7506550486, '2025-04-06'),
(43, 'Carpet Cleaning', 'Carpet Cleaning', 'kajal parmar', 'kbulding borivali mumbai', 'maharastra', 'mumbai', 'Maharashtra', 400066, 'parmarkajal@gmail.com', 7506550486, '2025-04-24'),
(44, 'Carpentry', 'Carpet Cleaning', 'kajal parmar', '21 floor 2101', 'k bulding borivali east', 'mumbai', 'maharastra', 400066, 'parmarkajal047@gmail.com', 2345643212345, '2025-04-06'),
(45, 'Home Deep Cleaning', 'home cleaning ', 'kajal parmar', 'kbulding borivali mumbai', 'maharastra', 'mumbai', 'Maharashtra', 0, 'parmarkajal@gmail.com', 7506550486, '2025-05-28'),
(46, 'Carpentry', 'carpentry', 'kajal', '21/2101', 'swayambhu gaudevi bulding borivali , mumbai', 'Mumbai', 'Maharashtra', 400066, 'kp@gmail.com', 9172340516, '2025-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`id`, `name`, `city`, `mobile`, `email`) VALUES
(2, 'kajal ', 'mumbai', 7506550486, 'parmarkajal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `assets_tb`
--
ALTER TABLE `assets_tb`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `assign_work`
--
ALTER TABLE `assign_work`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login_request`
--
ALTER TABLE `login_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_request`
--
ALTER TABLE `submit_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets_tb`
--
ALTER TABLE `assets_tb`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_request`
--
ALTER TABLE `login_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `submit_request`
--
ALTER TABLE `submit_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
