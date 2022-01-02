-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 11:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(255) NOT NULL,
  `name` varchar(55) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `adhar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `name`, `contact`, `adhar`) VALUES
('', '', 9740993643, '0'),
('', '', 0, '0'),
('', '', 9740993643, '0'),
('', '', 9740993643, '0'),
('', '', 0, '0'),
('', '', 0, '1556777575757'),
('', '', 9740993643, ''),
('', '', 9740993643, '156789076787'),
('sharma11122abhi@gmail.com', 'ABHISHEK SHARMA', 9740993643, '156789076787'),
('sharma11122abhi@gmail.com', 'ABHISHEK SHARMA', 9740993643, '156789076787'),
('', 'kkr', 987654321, '765432188'),
('sharma11122abhi@gmail.com', 'ABHISHEK SHARMA', 987654321, '156789076787'),
('sharma11122abhi@gmail.com', 'ABHISHEK SHARMA', 8666878788, '156789076787'),
('sharma11122abhi@gmail.com', 'ABHISHEK SHARMA', 876543210, '8788888889999'),
('sharma11122abhi@gmail.com', 'ABHISHEK SHARMA', 8666878788, '156789076787'),
('', 'sharma', 980098790, '87877987887797'),
('sharma11122abhi@gmail.com', 'ABHISHEK SHARMA', 8666878788, '156789076787');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `f_id` int(11) NOT NULL,
  `f_number` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_from` varchar(255) NOT NULL,
  `f_to` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`f_id`, `f_number`, `f_name`, `f_from`, `f_to`, `date`, `departure`, `arrival`, `price`, `status`) VALUES
(1, '', 'IndiGo', 'Pune', 'Hyderabad', '2020-01-31', '15:40:00', '20:05:00', 'Rs.6490', 'Flight is delay by 25 minutes.Arriving Soon'),
(2, '', 'AirIndia', 'Pune', 'Hyderabad', '2021-02-09', '17:40:00', '20:05:00', 'Rs.3500', 'No Delay.Arriving on time.'),
(3, '', 'SpiceJet', 'Pune', 'Hyderabad', '2021-02-20', '17:40:00', '20:05:00', 'Rs.3950', 'Reaching Destination by 10 minutes.'),
(5, '', 'IndiGo', 'Pune', 'Delhi', '2021-03-01', '17:40:00', '20:05:00', 'Rs.5500', 'Is Standing at Destination.'),
(6, '', 'GoAir', 'Pune', 'Delhi', '2021-03-19', '17:40:00', '20:05:00', 'Rs.5380', 'Arriving on time.'),
(7, '', 'AirIndia', 'Pune', 'Mumbai', '2021-03-23', '17:40:00', '20:05:00', 'Rs.3300', 'No Delay'),
(8, '', 'GoAir', 'Pune', 'Mumbai', '2021-02-28', '17:40:00', '20:05:00', 'Rs.5380', 'On time'),
(9, '', 'AirAsia', 'Pune', 'Goa', '2021-02-14', '17:40:00', '20:05:00', 'Rs.5720', 'Flight is delay by 15 minutes.Arriving Soon'),
(10, '', 'SpiceJet', 'Pune', 'Goa', '2021-04-01', '17:40:00', '20:05:00', 'Rs.3950', 'Flight is delay by 35 minutes.Arriving Soon'),
(11, '', 'AirAsia', 'Aurangabad', 'Mumbai', '2021-01-01', '17:40:00', '20:05:00', 'Rs.5720', 'Is Standing at Destination.'),
(12, '', 'IndiGo', 'Aurangabad', 'Mumbai', '2021-03-13', '17:40:00', '20:05:00', 'Rs.6490', 'Reaching Destination by 10 minutes.'),
(13, '', 'GoAir', 'Aurangabad', 'Mumbai', '2021-02-20', '17:40:00', '20:05:00', 'Rs.5380', 'Reaching Destination by 2 minutes.'),
(14, '', 'SpiceJet', 'Aurangabad', 'Pune', '2021-02-09', '17:40:00', '20:05:00', 'Rs.3950', 'On time'),
(15, '', 'AirAsia', 'Aurangabad', 'Pune', '2021-01-31', '17:40:00', '20:05:00', 'Rs.5720', 'No Delay.Arriving on time.'),
(16, '', 'AirAsia', 'Aurangabad', 'Delhi', '2021-01-31', '17:40:00', '20:05:00', 'Rs.5720', 'At Destination'),
(17, '', 'AirIndia', 'Aurangabad', 'Delhi', '2021-01-31', '17:40:00', '20:05:00', 'Rs.9594', 'Reaching soon.'),
(18, '', 'AirAsia', 'Mumbai', 'Delhi', '2021-03-01', '17:40:00', '20:05:00', 'Rs.5720', 'No Delay.Arriving on time.'),
(19, '', 'GoAir', 'Mumbai', 'Delhi', '2021-02-01', '17:40:00', '20:05:00', 'Rs.6500', 'No Delay.Arriving on time.'),
(20, '', 'IndiGo', 'Mumbai', 'Delhi', '2021-03-01', '17:40:00', '20:05:00', 'Rs.6490', 'Reaching soon.'),
(21, '', 'SpiceJet', 'Mumbai', 'Delhi', '2021-02-01', '17:40:00', '20:05:00', 'Rs.3950', 'Is Standing at Destination.'),
(22, '', 'SpiceJet', 'Mumbai', 'Pune', '2021-03-15', '17:40:00', '20:05:00', 'Rs.3950', 'Late by 20 minutes'),
(23, '', 'AirIndia', 'Mumbai', 'Pune', '2021-04-03', '17:40:00', '20:05:00', 'Rs.3900', 'Late by 20 minutes'),
(24, '', 'AirAsia India', 'Mumbai', 'Pune', '2021-01-29', '17:40:00', '20:05:00', 'Rs.6490', 'Is Standing at Destination.'),
(25, '', 'AirAsia', 'new delhi', 'Mumbai', '2021-04-03', '17:40:00', '20:05:00', 'RS.5200', 'Reaching Destination by 10 minutes.'),
(26, '', 'AirIndia', 'new delhi', 'Mumbai', '2021-01-29', '17:40:00', '20:05:00', 'Rs.9594', 'Late by 20 minutes'),
(27, '', 'SpiceJet', 'new delhi', 'Bengaluru', '2021-04-01', '17:40:00', '20:05:00', 'Rs.3950', ''),
(28, '', 'GoAir', 'new delhi', 'Bengaluru', '2021-02-02', '17:40:00', '20:05:00', 'Rs.5380', ''),
(29, '', 'IndiGo', 'new delhi', 'Goa', '2021-04-03', '17:40:00', '20:05:00', 'Rs.6490', ''),
(30, '', 'AirIndia', 'new delhi', 'Goa', '2021-04-04', '17:40:00', '20:05:00', 'Rs.4500', ''),
(31, '', 'AirAsia', 'Hydrabad', 'Pune', '2021-03-01', '17:40:00', '20:05:00', 'Rs.5720', ''),
(32, '', 'AirIndia', 'Hydrabad', 'Pune', '2021-03-02', '17:40:00', '20:05:00', 'Rs.3594', ''),
(33, '', 'IndiGo', 'Hydrabad', 'Mumbai', '2021-02-05', '17:40:00', '20:05:00', 'Rs.6490', ''),
(34, '', 'GoAir', 'Hydrabad', 'Mumbai', '2021-02-18', '17:40:00', '20:05:00', 'Rs.5380', ''),
(35, '', 'AirAsia', 'Hydrabad', 'delhi', '2021-03-22', '17:40:00', '20:05:00', 'Rs.5720', ''),
(36, '', 'SpiceJet', 'Hydrabad', 'delhi', '2021-04-12', '17:40:00', '20:05:00', 'Rs.3950', ''),
(37, '', 'AirAsia', 'Bengaluru', 'Delhi', '2021-04-15', '17:40:00', '20:05:00', 'Rs.5720', ''),
(38, '', 'SpiceJet', 'Bengaluru', 'Delhi', '0000-00-00', '17:40:00', '20:05:00', 'Rs.3950', ''),
(39, '', 'SpiceJet', 'Bengaluru', 'Delhi', '2021-04-15', '17:40:00', '20:05:00', 'Rs.3950', ''),
(40, '', 'AirAsia', 'Bengaluru', 'Goa', '2021-02-18', '17:40:00', '20:05:00', 'Rs.5720', ''),
(41, '', 'IndiGo', 'Bengaluru', 'Goa', '2021-05-01', '17:40:00', '20:05:00', 'Rs.6490', ''),
(42, '', 'AirAsia', 'Goa', 'Pune', '2021-02-18', '17:40:00', '20:05:00', '5720', ''),
(43, '', 'AirIndia', 'Goa', 'Pune', '2021-04-20', '17:40:00', '20:05:00', '9594', ''),
(44, '', 'IndiGo', 'Goa', 'Pune', '2021-03-01', '17:40:00', '20:05:00', '6490', ''),
(45, '', 'SpiceJet', 'Goa', 'Pune', '2021-04-20', '17:40:00', '20:05:00', '3950', ''),
(46, '', 'GoAir', 'Goa', 'Pune', '2021-05-02', '17:40:00', '20:05:00', '5380', ''),
(47, '', 'air india', 'beed', 'aurangabad', '2021-02-14', '00:00:00', '00:00:00', 'Rs.3300', ''),
(48, '', 'Indio-go', 'Patna', 'Bangalore', '2021-03-29', '12:30:00', '03:10:20', 'Rs.5500', ''),
(49, '', 'Indigo', 'patna', 'Bangalore', '2021-05-02', '02:30:00', '05:00:00', 'Rs.4500', ''),
(50, '', 'AirAsia', 'Patna', 'Bangalore', '2021-03-29', '05:00:00', '07:30:00', 'Rs.4300', ''),
(51, '', 'Indigo', 'Patna', 'Bangalore', '2021-02-02', '02:30:00', '05:00:00', 'Rs.5000', ''),
(52, '', 'Indigo', 'Patna', 'Bangalore', '2021-01-30', '08:00:00', '10:30:00', 'Rs.5000', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `con_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `con_password`) VALUES
(1, 'ravi', 'kishan', 'ravi@gmail.com', '123', '123'),
(8, 'vikram', 'sighn', 'sk@gmail.com', '18b38bcbe603c320a88ecd4c31c19f21', '18b38bcbe603c320a88ecd4c31c19f21'),
(9, 'ABHISHEK', 'SHARMA', 'sharma11122abhi@gmail.com', 'd76f3d05cc9ac98f1f9160274a39fe33', 'd76f3d05cc9ac98f1f9160274a39fe33'),
(10, 'Ram', 'G', 'ramghumaliya10@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661'),
(11, 'Ram', 'G', 'ramghumaliya10@gmail.com', 'e1faffb3e614e6c2fba74296962386b7', 'e1faffb3e614e6c2fba74296962386b7'),
(12, 'Ram', 'G', 'ram@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661'),
(13, 'Ram', 'G', 'londheamar143@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661'),
(14, 'sid', 'kumar', 'sid@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
