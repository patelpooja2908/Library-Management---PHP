-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 07:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `password`, `username`, `email`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `bookTitle` varchar(150) NOT NULL,
  `author` varchar(60) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `bookCopies` varchar(10) NOT NULL,
  `publisherName` varchar(60) NOT NULL,
  `available` varchar(10) NOT NULL,
  `categories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `bookTitle`, `author`, `ISBN`, `bookCopies`, `publisherName`, `available`, `categories`) VALUES
(1, 'The Joy Of PHP', 'Alan Forbes', '987', '5', '2015', 'YES', 'PHP'),
(2, 'C# 6.0 and the .NET 4.6 Framework', 'Andrew Troelsen and Philip Japikse', '12', '5', '2018', 'YES', 'ASP.NET');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrowId` int(11) NOT NULL,
  `memberName` varchar(255) NOT NULL,
  `rollNo` varchar(30) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `borrowDate` varchar(20) NOT NULL,
  `returnDate` varchar(20) NOT NULL,
  `bookId` int(2) NOT NULL,
  `fine` varchar(100) NOT NULL,
  `borrowStatus` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrowId`, `memberName`, `rollNo`, `bookName`, `borrowDate`, `returnDate`, `bookId`, `fine`, `borrowStatus`) VALUES
(1, 'Tej Patel', 'IU2083830024', 'The Joy Of PHP', '2023-04-01', '2023-04-03', 1, 'Paid', ''),
(2, 'Tej Patel', 'IU2083830024', 'C# 6.0 and the .NET 4.6 Framework', '2023-04-01', '2023-04-03', 2, 'Paid', ''),
(3, 'Tej Patel', 'IU2083830024', 'The Joy Of PHP', '2023-04-02', '2023-04-04', 1, '120', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `book_categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `book_categories`) VALUES
(2, 'PHP'),
(3, 'ASP.NET');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `librarianId` int(100) NOT NULL,
  `libName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarianId`, `libName`, `username`, `password`, `email`) VALUES
(1, 'Bhaktiraj Jadeja', 'bhaktiraj', 'bhaktiraj', 'bhaktiraj@gmail.com'),
(2, 'Darshan Patel', 'darshanpatel', 'darshan', 'darshanpatel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` int(11) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(60) NOT NULL,
  `dept` varchar(60) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `roll_no`, `password`, `username`, `email`, `dept`, `phoneNumber`, `name`) VALUES
(1, 'IU2083830024', 'tej', 'tejpatel', 'tej@gmail.com', 'MscIt', '0147852369', 'Tej Patel'),
(2, 'IU2082820055', 'pooja', 'poojapatel', 'pooja@gmail.com', 'BCA', '0123456789', 'Pooja Patel'),
(3, 'IU2082820019', 'het', 'hetpatel', 'het@gmail.com', 'BCA', '0123456789', 'Het Patel'),
(4, 'test12', 'test', 'test', 'test@gmail.com', 'test', '0147852369', 'test'),
(5, 'test2', 'test2', 'test2', 'test2@gmail.com', 'bca', '1024578693', 'test2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrowId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`librarianId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `librarianId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
