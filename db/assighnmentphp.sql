-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2016 at 11:01 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assighnmentphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `first` text NOT NULL,
  `surname` text NOT NULL,
  `age` text NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `experience` text NOT NULL,
  `position` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `first`, `surname`, `age`, `address`, `gender`, `experience`, `position`, `image`) VALUES
(13, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	', '', '			  	      		                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'ww', 'ronda.jpg'),
(14, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	', '', '			  	      		                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'Bakker', 'ronda.jpg'),
(15, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	', '', '			  	      		                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'Butcher', 'ronda.jpg'),
(16, 'Conor', 'Mcgregor', '23', '	  	      		  	      	fake\r\n	  	      \r\n	  	', 'male', '			  	      		                shop\r\n		 \r\n			  	      	\r\n	  	', 'Gardener', 'mcgregor.png'),
(17, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	', '', '			  	      		                	                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'Developer', 'ronda.jpg'),
(18, 'Andrew', 'Connolly', '21', '	  	      	113 WestPoint\r\n	  	      \r\n	  	', 'male', '			  	      	Barman\r\n		 \r\n			  	      	\r\n	  	', 'Developer', 'default.png'),
(19, 'Andrew', 'Connolly', '21', '	  	      	32 west Village Galway\r\n	  	      \r\n	  	      \r\n	  	', 'male', '			  	      		                Barman\r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'Dog walker', 'mcgregor.png'),
(20, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	', '', '			  	      		                	                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'Cook', 'ronda.jpg'),
(21, 'Conor', 'Mcgregor', '23', '	  	      		  	      	fake\r\n	  	      \r\n	  	', 'male', '			  	      		                shop\r\n		 \r\n			  	      	\r\n	  	', 'UFC 200', 'mcgregor.png'),
(22, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	', '', '			  	      		                	                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'UFC 200', 'ronda.jpg'),
(23, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	', '', '			  	      		                	                	                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n			  	      	\r\n	  	', 'Reporter', '404.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(11) NOT NULL,
  `first` text NOT NULL,
  `surname` text NOT NULL,
  `age` text NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `experience` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `first`, `surname`, `age`, `address`, `gender`, `experience`, `image`) VALUES
(4, 'Joe', 'Bloggs', '23', 'fake', 'Male', 'shop', 'default.png'),
(6, 'Conor', 'Mcgregor', '23', '	  	      	fake\r\n	  	      ', 'male', '	                shop\r\n		 ', 'mcgregor.png'),
(7, 'Ronda', 'Rousey', '23', '	  	      		  	      		  	      		  	      		  	      		  	      		  	      	Venice Beach 	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      \r\n	  	      ', '', '	                	                	                	                	                	                	                Strikeforce champ\r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 \r\n		 ', '404.jpg'),
(8, 'Joe', 'VanZant', '23', 'fake', 'Male', 'shop', 'default.png'),
(9, 'Joe', 'Bloggs', '23', 'N/A', 'N/A', 'N/a', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `created` int(11) NOT NULL,
  `expires` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `position`, `location`, `created`, `expires`, `user`, `text`) VALUES
(33, 'ii', 'ii', 1460913733, 1460913973, 'Ryan', ''),
(34, 'ww', 'ww', 1460921538, 1460921778, 'Ryan', ''),
(40, 'Butcher', 'Bunsen', 1461162521, 1461162600, 'Ryan', ''),
(41, 'Builder', 'Swords', 1461162816, 1451610000, 'John', ''),
(43, 'Developer', 'Lucan', 1461344986, 1461345600, 'Ryan', ''),
(44, 'Director', 'France', 1461426927, 1461427080, 'Ryan', ''),
(45, 'Dog walker', 'Dalkey , Dublin', 1461427216, 1461427320, 'Ryan', ''),
(46, 'Cook', 'Westport', 1461631206, 1461631380, 'Ryan', ''),
(47, 'UFC 200', 'Vegas', 1461689307, 1461689640, 'Ryan', ''),
(48, 'Reporter', 'Dublin', 1461781341, 1461781500, 'Ryan', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `user` text NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `text`, `user`, `timestamp`) VALUES
(3, 'Willy bum bum', 'Ryan', 1459806660),
(4, 'caaf', 'Ryan', 1460042419),
(5, 'After APP', 'Ryan', 1460219800),
(6, 'Jimmy', 'Ryan', 1460493528),
(8, 'h', 'John', 1460496437),
(9, 'gyyyg', 'hhxsh', 1460497009),
(10, 'bhbh', 'hh', 1460497147),
(11, 'njbjb', 'Bloggs', 1460497980),
(12, ' zx b', 'Ryan', 1461341400),
(13, 'Cvs are uptodate', 'Ryan', 1461423276),
(14, 'HEllo all', 'Ryan', 1461775521);

-- --------------------------------------------------------

--
-- Table structure for table `privatemessags`
--

CREATE TABLE `privatemessags` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `user` text NOT NULL,
  `reciver` text NOT NULL,
  `timestamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privatemessags`
--

INSERT INTO `privatemessags` (`id`, `text`, `user`, `reciver`, `timestamp`) VALUES
(4, 'RRR', 'Ryan', '6', '1460511857'),
(5, 'Greg', 'Ryan', '7', '1460548625'),
(6, 'WHAT', 'Ryan', '7', '1460548832'),
(7, 'HEY EE', 'Ryan', '11', '1460564437'),
(9, 'HEy TIS IS A TEST', 'Ryan', '7', '1461188185'),
(12, 'Good job', 'Ryan', '7', '1461627560'),
(13, 'OUT of 200', 'Ryan', '6', '1461685658'),
(14, 'Hi ROnda good day', 'Ryan', '7', '1461775549');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gpa` decimal(10,0) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first`, `surname`, `age`, `gpa`, `status`) VALUES
(4, 'Joe', 'Bloggs', 32, '2', 'unemployed'),
(6, 'Conor', 'Mcgregor', 23, '4', 'employed'),
(7, 'Ronda', 'Rousey', 23, '4', 'employed'),
(8, 'Paige', 'VanZant', 23, '4', 'unemployed'),
(9, 'Eoin', 'Connolly', 23, '3', 'unemployed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'Andrew', '$2y$10$t7XLb0PC9zQPA/MG7.OWC.oyadyuP3t7W2yooaCqYjFWXZJEta3wa', 1),
(2, 'joe', '$2y$10$pqBbUN93dP5xvvoXSAJL5eqZIvp1gFXVHiodXrcySLqs6Fh1YWn/K', 3),
(3, 'Ryan', '$2y$10$mwZf/TLnriKdOmN7yswVjOFMZtLdWrBfLCPvvFeVQJMkwwtc0PMK2', 2),
(4, 'joey', '$2y$10$dPQmqzuWbETgF29zs.ApSOonMTb0MfQBBvNDr6Rg6rWaUMzWFWCiC', 1),
(6, 'Notorious', '$2y$10$AOeXDo6Fs5zZ7XRbp2kg0.l7otkr5uJXzczuOWxUCS4XAHneFjrh6', 1),
(7, 'Rowdy', '$2y$10$OPOPub0Ql/u9LvQmgBjuzeYNWW/5NVCdiJDedT/g.ono/pay3a2Vi', 1),
(8, 'shotgun', '$2y$10$eNfZyPb/Dc5PXa6Casg3auIhDCpdJAXYTWTkkyZs/X9dLpkXv0F.m', 1),
(9, 'EC94', '$2y$10$PKWBlVBhbyA4QIRzm5KlyOmXTq3e1/DEm8gTNgVo29LXDPQeXJlU6', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privatemessags`
--
ALTER TABLE `privatemessags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `privatemessags`
--
ALTER TABLE `privatemessags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
