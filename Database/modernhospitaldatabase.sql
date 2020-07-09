-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 12:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modernhospitaldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabin`
--

CREATE TABLE `cabin` (
  `id` int(11) NOT NULL,
  `hosCabinName` varchar(50) NOT NULL,
  `hosLocation` varchar(50) NOT NULL,
  `hosCabinClass` varchar(50) NOT NULL,
  `hosCabinStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabin`
--

INSERT INTO `cabin` (`id`, `hosCabinName`, `hosLocation`, `hosCabinClass`, `hosCabinStatus`) VALUES
(2, 'C-2', '1st Floor', '2nd Class', 'Free'),
(3, 'C-1', '2nd Floor', '1st Class', 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `d_blood` varchar(10) NOT NULL,
  `d_date_of_birth` varchar(255) NOT NULL,
  `d_gender` varchar(10) NOT NULL,
  `d_father_name` varchar(25) NOT NULL,
  `d_mother_name` varchar(25) NOT NULL,
  `d_phone_number` varchar(15) NOT NULL,
  `dRegistrationid` varchar(50) NOT NULL,
  `d_nid_no` varchar(20) NOT NULL,
  `d_specialty` varchar(255) NOT NULL,
  `d_licence_no` varchar(225) NOT NULL,
  `dPractiseRoom` varchar(255) NOT NULL,
  `dCategory` varchar(255) NOT NULL,
  `d_remarks` varchar(500) NOT NULL,
  `d_joining_date` varchar(20) NOT NULL,
  `dVillage` varchar(255) NOT NULL,
  `dPostOffice` varchar(255) NOT NULL,
  `dThana` varchar(255) NOT NULL,
  `dUpagilla` varchar(255) NOT NULL,
  `dDistrict` varchar(255) NOT NULL,
  `dStatus` varchar(50) NOT NULL,
  `creatingTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `d_name`, `d_blood`, `d_date_of_birth`, `d_gender`, `d_father_name`, `d_mother_name`, `d_phone_number`, `dRegistrationid`, `d_nid_no`, `d_specialty`, `d_licence_no`, `dPractiseRoom`, `dCategory`, `d_remarks`, `d_joining_date`, `dVillage`, `dPostOffice`, `dThana`, `dUpagilla`, `dDistrict`, `dStatus`, `creatingTime`) VALUES
(1, 'John Cena', 'AB+', '05 - 07 - 1980', 'Male', 'X', 'X', '1231321', 'd-1', '123124141321314', 'Neurologists', 'doc1123123se', 'room-12', 'Permanent', 'Dentist, BDS', '05 - 07 - 2019 ', 'A', 'B', 'C', 'D', 'E', 'Active', '2020-07-05 04:59:30'),
(2, 'Batista', 'O+', '05 - 07 - 1978', 'Male', 'X', 'X', '1231321', 'd-2', '123124752', 'Cardiologists', 'doc4645646ae', 'room-13', 'Visiting', 'BDS', '05 - 07 - 2019 ', 'F', 'G', 'H', 'I', 'J', 'Inactive', '2020-07-05 05:16:56'),
(3, 'Aj Styles', 'B+', '05 - 07 - 1971', 'Others', 'X', 'X', '1231321', 'd-3', '123124141321314', 'Cardiologists', 'doc1123123seaww', 'room-12', 'Visiting', 'MBBS', '05 - 06 - 2019', 'A', 'B', 'C', 'D', 'E', 'Active', '2020-07-05 06:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `n_name` varchar(30) NOT NULL,
  `n_blood_group` varchar(10) NOT NULL,
  `n_date_of_birth` varchar(50) NOT NULL,
  `n_gender` varchar(10) NOT NULL,
  `n_father_name` varchar(30) NOT NULL,
  `n_mother_name` varchar(30) NOT NULL,
  `n_phone_number` varchar(15) NOT NULL,
  `nRegiNo` varchar(50) NOT NULL,
  `n_nid_no` varchar(20) NOT NULL,
  `nurse_type` varchar(20) NOT NULL,
  `n_joining_date` varchar(50) NOT NULL,
  `nAppointRoom` varchar(50) NOT NULL,
  `nurse_shift` varchar(20) NOT NULL,
  `n_remarks` varchar(500) NOT NULL,
  `nVillage` varchar(255) NOT NULL,
  `nPostOffice` varchar(255) NOT NULL,
  `nThana` varchar(255) NOT NULL,
  `nUpazilla` varchar(255) NOT NULL,
  `nDistrict` varchar(255) NOT NULL,
  `nStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `n_name`, `n_blood_group`, `n_date_of_birth`, `n_gender`, `n_father_name`, `n_mother_name`, `n_phone_number`, `nRegiNo`, `n_nid_no`, `nurse_type`, `n_joining_date`, `nAppointRoom`, `nurse_shift`, `n_remarks`, `nVillage`, `nPostOffice`, `nThana`, `nUpazilla`, `nDistrict`, `nStatus`) VALUES
(1, 'Aj Lee', 'O-', '12-12-1990', 'Male', 'X', 'X', '6456456', 'n-1', '45544646', 'Head Nurse', '12-12-2010', 'rm-08', 'Day', 'Rabiul', 'A', 'B', 'C', 'D', 'E', 'Active'),
(2, 'Aj Lee2', 'A+', '12-12-1990', 'Male', 'X', 'X', '6456456', 'n-2', '45544646', 'Head Nurse', '12-12-2010', 'rm-08', 'Day', 'Rabi', 'A', 'B', 'C', 'D', 'E', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(50) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pAge` varchar(255) NOT NULL,
  `pBloodGroup` varchar(255) NOT NULL,
  `pSex` varchar(255) NOT NULL,
  `pCareOf` varchar(255) NOT NULL,
  `pMotherName` varchar(255) DEFAULT NULL,
  `pPhoneNo` varchar(255) NOT NULL,
  `pVillage` varchar(255) NOT NULL,
  `pPostOffice` varchar(255) NOT NULL,
  `pThana` varchar(255) NOT NULL,
  `pUpagilla` varchar(255) NOT NULL,
  `pDistrict` varchar(255) NOT NULL,
  `regiNo` varchar(50) NOT NULL,
  `pRefferedDoctor` varchar(255) NOT NULL,
  `pDateTimeAdmission` timestamp NULL DEFAULT current_timestamp(),
  `pCabinNo` varchar(50) NOT NULL,
  `pWordNo` varchar(50) NOT NULL,
  `pBedNo` varchar(50) NOT NULL,
  `pReleaseDate` varchar(50) DEFAULT NULL,
  `pRemarks` varchar(510) NOT NULL,
  `patientstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `pName`, `pAge`, `pBloodGroup`, `pSex`, `pCareOf`, `pMotherName`, `pPhoneNo`, `pVillage`, `pPostOffice`, `pThana`, `pUpagilla`, `pDistrict`, `regiNo`, `pRefferedDoctor`, `pDateTimeAdmission`, `pCabinNo`, `pWordNo`, `pBedNo`, `pReleaseDate`, `pRemarks`, `patientstatus`) VALUES
(14, 'Rabiul', '30', 'B+', '', 'x', 'x', '65465123', 'x', '', 'x', 'x', 'x', 'r-1', 'Doctor A', '2020-07-02 22:44:29', 'x', 'x', 'x', NULL, '', 'Active'),
(15, 'Tanvir', '25', 'B+', 'Male', 'x', 'x', '6465432', 'Coloni', '', 'Bogra', 'Bogra', 'Bogra', 'r-2', 'Doctor B', '2020-07-03 06:09:00', 'c-1', 'w-2', 'b-3', NULL, '', 'Active'),
(16, 'Rabiul2', '30', 'B+', 'Male', 'x', 'x', '65465123', 'z', '', 'z', 'z', 'z', 'r-3', 'D2', '2020-07-03 06:48:36', 'c-1', 'w-1', 'b-1', NULL, '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patientadpayment`
--

CREATE TABLE `patientadpayment` (
  `id` int(11) NOT NULL,
  `regiNo` varchar(50) NOT NULL,
  `pDepositMoney` varchar(255) NOT NULL,
  `pAdPaymentDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientadpayment`
--

INSERT INTO `patientadpayment` (`id`, `regiNo`, `pDepositMoney`, `pAdPaymentDate`) VALUES
(3, '', '200', '2020-07-03 05:33:16'),
(4, '', '200', '2020-07-03 05:35:37'),
(5, '', '200', '2020-07-03 05:35:52'),
(6, '', '200', '2020-07-03 05:38:11'),
(7, '', '200', '2020-07-03 05:38:54'),
(8, 'r-1', '200', '2020-07-03 05:39:33'),
(9, 'r-1', '200', '2020-07-03 05:40:49'),
(10, 'r-1', '200', '2020-07-03 05:41:31'),
(11, 'r-1', '300', '2020-07-03 05:45:08'),
(13, 'r-2', '300', '2020-07-03 06:09:27'),
(14, 'r-2', '100', '2020-07-03 06:09:47'),
(16, 'r-3', '100', '2020-07-03 07:41:43'),
(18, 'r-1', '100', '2020-07-05 19:04:00'),
(19, '', '50', '2020-07-07 18:08:29'),
(20, '', '50', '2020-07-07 18:08:49'),
(21, 'r-1', '50', '2020-07-07 18:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `sProfession` varchar(255) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_date_of_birth` varchar(50) NOT NULL,
  `sPhoneNo` varchar(255) NOT NULL,
  `s_father_name` varchar(30) NOT NULL,
  `s_mother_name` varchar(30) NOT NULL,
  `s_blood` varchar(10) NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `sRegiNo` varchar(50) NOT NULL,
  `s_nid_number` varchar(20) NOT NULL,
  `s_joining_date` varchar(50) NOT NULL,
  `stuff_shift` varchar(20) NOT NULL,
  `s_remarks` varchar(500) NOT NULL,
  `sVillage` varchar(255) NOT NULL,
  `sPostOffice` varchar(255) NOT NULL,
  `sThana` varchar(255) NOT NULL,
  `sUpazilla` varchar(255) NOT NULL,
  `sDistrict` varchar(255) NOT NULL,
  `sStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `sProfession`, `s_name`, `s_date_of_birth`, `sPhoneNo`, `s_father_name`, `s_mother_name`, `s_blood`, `s_gender`, `sRegiNo`, `s_nid_number`, `s_joining_date`, `stuff_shift`, `s_remarks`, `sVillage`, `sPostOffice`, `sThana`, `sUpazilla`, `sDistrict`, `sStatus`) VALUES
(4, 'Word Boy', 'Miz', '09 - 07 - 2020 ', '14634564', 'X', 'X', 'B-', 'Female', 's-1', '', '09 - 07 - 2020 ', 'Night', 'Rabiul', 'X', 'Y', 'Z', 'W', 'W', 'Inactive'),
(5, 'Manager', 'Miz2', '09 - 07 - 2020 ', '14634564', 'X', 'X', 'A+', 'Female', 's-2', '13214324', '09 - 07 - 2020 ', 'Day', 'Rabi', 'X', 'Y', 'Z', 'V', 'W', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `id` int(11) NOT NULL,
  `hosWordName` varchar(50) NOT NULL,
  `hosWordBed` varchar(50) NOT NULL,
  `hosWordLocation` varchar(50) NOT NULL,
  `hosWordClass` varchar(50) NOT NULL,
  `hosWordStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`id`, `hosWordName`, `hosWordBed`, `hosWordLocation`, `hosWordClass`, `hosWordStatus`) VALUES
(2, 'w-2', 'Bed-2', '2nd Floor', 'Economic', 'Free'),
(3, 'w-1', 'Bed-1', '1st Floor', 'General', 'Free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabin`
--
ALTER TABLE `cabin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientadpayment`
--
ALTER TABLE `patientadpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabin`
--
ALTER TABLE `cabin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patientadpayment`
--
ALTER TABLE `patientadpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
