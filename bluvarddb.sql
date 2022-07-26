-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 02:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluvarddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `dateJoined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `image`, `dateJoined`) VALUES
(1, 'admin', 'admin', '', '2022-07-17 14:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `userPic` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` text NOT NULL,
  `dateJoined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galleryimages`
--

CREATE TABLE `galleryimages` (
  `id` int(11) NOT NULL,
  `fileName` int(11) NOT NULL,
  `fileLocation` int(11) NOT NULL,
  `dateAdded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hascategory`
--

CREATE TABLE `hascategory` (
  `id` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newslettermembers`
--

CREATE TABLE `newslettermembers` (
  `id` int(11) NOT NULL,
  `fullName` text NOT NULL,
  `email` text NOT NULL,
  `dateJoined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `postcategory`
--

CREATE TABLE `postcategory` (
  `id` int(11) NOT NULL,
  `categoryName` text NOT NULL,
  `description` text NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT current_timestamp(),
  `postPic` text NOT NULL,
  `category` int(11) NOT NULL,
  `Author` int(11) NOT NULL,
  `caption` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programhasgallery`
--

CREATE TABLE `programhasgallery` (
  `id` int(11) NOT NULL,
  `programID` int(11) NOT NULL,
  `galleryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `img` text NOT NULL,
  `fbLink` text NOT NULL,
  `twitterLink` text NOT NULL,
  `InstagramLink` text NOT NULL,
  `caption` varchar(150) NOT NULL,
  `goal` text NOT NULL,
  `expectedOutcome` text NOT NULL,
  `content` text NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `emailAddress` text NOT NULL,
  `title` text NOT NULL,
  `position` text NOT NULL,
  `phone` text NOT NULL,
  `image` text NOT NULL,
  `linkeIn` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `dateJoined` datetime NOT NULL DEFAULT current_timestamp(),
  `biography` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryimages`
--
ALTER TABLE `galleryimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hascategory`
--
ALTER TABLE `hascategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `postID` (`postID`);

--
-- Indexes for table `newslettermembers`
--
ALTER TABLE `newslettermembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postcategory`
--
ALTER TABLE `postcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Author` (`Author`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `programhasgallery`
--
ALTER TABLE `programhasgallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleryID` (`galleryID`),
  ADD KEY `programID` (`programID`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
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
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleryimages`
--
ALTER TABLE `galleryimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hascategory`
--
ALTER TABLE `hascategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newslettermembers`
--
ALTER TABLE `newslettermembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postcategory`
--
ALTER TABLE `postcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programhasgallery`
--
ALTER TABLE `programhasgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hascategory`
--
ALTER TABLE `hascategory`
  ADD CONSTRAINT `hascategory_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `postcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hascategory_ibfk_2` FOREIGN KEY (`postID`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`Author`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category`) REFERENCES `postcategory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programhasgallery`
--
ALTER TABLE `programhasgallery`
  ADD CONSTRAINT `programhasgallery_ibfk_1` FOREIGN KEY (`galleryID`) REFERENCES `galleryimages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programhasgallery_ibfk_2` FOREIGN KEY (`programID`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
