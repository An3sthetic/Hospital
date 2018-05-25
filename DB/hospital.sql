-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 10:23 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `name` varchar(255) NOT NULL,
  `Dep_id` int(11) NOT NULL,
  `Head_of_the_department` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`name`, `Dep_id`, `Head_of_the_department`) VALUES
('Cardiology', 1892, 100001),
('Dental', 2247, 200002),
('Venereology', 3571, 300003),
('Medicine', 4957, 400004),
('Orthopaedics', 5816, 500005),
('Nephrology', 6548, 600006),
('Neurology', 7578, 700007),
('Gynaecology', 8297, 800008);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `dName` varchar(255) NOT NULL,
  `Essn` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `Head_of_the_department` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`dName`, `Essn`, `department`, `Head_of_the_department`) VALUES
('Jack Cameron', 100000, 1892, 100001),
('Ashton Santiago', 300004, 3571, 300003),
('Brayden Oliver', 100002, 1892, 100001),
('Helen Sarai', 800007, 8297, 800008),
('Izaiah Tristen', 800008, 8297, 800008),
('Eleanor Payton', 200003, 2247, 200002),
('Cali Nina', 600007, 6548, 600006),
('Clara Kendall', 300003, 3571, 300003),
('Eve Angie', 800009, 8297, 800008),
('Willow Makenzie', 400003, 4957, 400004),
('Arianna Kylie', 200001, 2247, 200002),
('Landen Dominick', 600006, 6548, 600006),
('Rylan Derek', 500004, 5816, 500005),
('Jaden Harrison', 300002, 3571, 300003),
('Giuliana Ashlynn', 700007, 7578, 700007),
('Sienna Parker', 600005, 6548, 600006),
('Cecilia Esther', 500005, 5816, 500005),
('Julius Phoenix', 700008, 7578, 700007),
('Emilio Lane', 700006, 7578, 700007),
('Emmanuel Weston', 400004, 4957, 400004),
('Grayson Hudson', 200002, 2247, 200002),
('Alivia Emery', 400005, 4957, 400004),
('Aubree Bella', 100001, 1892, 100001),
('Zion Elliott', 500006, 5816, 500005);

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Id` int(11) NOT NULL,
  `Department` int(11) NOT NULL,
  `Admission_Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`Name`, `Address`, `Id`, `Department`, `Admission_Date`) VALUES
('Sabrina Johanna', 'U.K.', 17894, 1892, '2015-10-12'),
('Elena Kristen', 'France', 14658, 1892, '2015-11-18'),
('Clara Lesly', 'Oman', 13546, 1892, '2015-11-14'),
('Rachael Karina', 'Russia', 14968, 1892, '2015-09-15'),
('Violet Annika', 'U.S.A', 24689, 2247, '2015-09-30'),
('Piper Hadley', 'Sweden', 26479, 2247, '2015-11-14'),
('Khloe Lilian', 'India', 21678, 2247, '2015-10-30'),
('Izabella Danika', 'Azarbaizan', 24597, 2247, '2015-07-26'),
('Addyson Sandra', 'Thailand', 34598, 3571, '2015-11-16'),
('Margaret Skyler', 'Switzerland', 39851, 3571, '2015-11-07'),
('Jacqueline Annie', 'Italy', 37986, 3571, '2015-10-21'),
('Reese Talia', 'Germany', 36984, 3571, '2015-09-29'),
('Juliana Kaylin', 'Barisal', 47859, 4957, '2015-11-11'),
('London Paola', 'Tongi', 42357, 4957, '2015-10-10'),
('Faith Julie', 'kawla', 42315, 4957, '2015-09-08'),
('Caroline Ximena', 'Sweden', 45913, 4957, '2015-09-30'),
('Keira Desiree', 'Mexico', 58213, 5816, '2015-11-10'),
('Rebecca Anastasia', 'Dhaka', 57981, 5816, '2015-10-24'),
('Kylee Kadence', 'Bhola', 51456, 5816, '2015-09-24'),
('Kennedy Michaela', 'Dubai', 54987, 5816, '2015-09-23'),
('Amy Yasmin', 'Saudi Arab', 61245, 6548, '2015-11-16'),
('Naomi Lindsay', 'Hungary', 68465, 6548, '2015-11-15'),
('Sienna Evangeline', 'Oman', 65987, 6548, '2015-10-03'),
('Skylar Hailee', 'South Africa', 63456, 6548, '2015-09-25'),
('Mariana Norah', 'Bogra', 73216, 7578, '2015-07-11'),
('Mckenna Rosa', 'Naraynganj', 76451, 7578, '2015-10-22'),
('Caitlin Anahi', 'Chittagong', 74654, 7578, '2015-09-29'),
('Adriana Hayley', 'Rajshahi', 79152, 7578, '2015-09-24'),
('Megan Janiyah', 'Khulna', 85432, 8297, '2015-07-14'),
('Jocelyn Genevieve', 'Australlia', 86458, 8297, '2015-08-24'),
('Destiny Heidi', 'hungary', 81565, 8297, '2015-08-28'),
('Brooklyn Joselyn', 'Germany', 89532, 8297, '2015-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Id` int(11) NOT NULL,
  `Physician` int(11) NOT NULL,
  `Test_name` varchar(255) NOT NULL,
  `Report_submission` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Id`, `Physician`, `Test_name`, `Report_submission`) VALUES
(14658, 100002, 'Acetylcholine Receptor (Muscle AChR) Binding Antibody, Serum', '2015-12-09'),
(26479, 200003, 'B-Cell Phenotyping Profile for Immunodeficiency and Immune Competence Assessment, Blood', '2015-12-03'),
(37986, 300002, 'CAH  Pediatric Profile 5: 17,20 Desmolase Deficiency (Androstene- dione, Cortisol, DHEA, 17-OH-Prenenolone, Progesterone, 17-Alpha- Hydroxyprogesterone, Testosterone)', '2015-12-28'),
(42357, 400003, 'Dihydrorhodamine (DHR) Flow Cytometric N-Formyl-Methionyl-Leucyl-Phenylalanine (fMLP) Test, Blood', '2015-12-10'),
(57981, 500004, 'Epstein-Barr Virus (EBV), IgG Antibody to Early Antigen, Serum', '2015-12-19'),
(61245, 600005, 'Familial Hypercholesterolemia/Autosomal Dominant Hypercholesterolemia Genetic Testing Reflex Panel', '2015-12-19'),
(73216, 700007, 'Galactose-1-Phosphate Uridyltransferase Biochemical Phenotyping, Erythrocytes', '2015-12-25'),
(86458, 800009, 'Parathyroid Hormone, Fine-Needle Aspiration Biopsy (FNAB)-Needle Wash', '2015-12-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD UNIQUE KEY `Essn` (`Essn`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD UNIQUE KEY `Id` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
