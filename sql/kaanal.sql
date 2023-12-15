-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 11:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaanal`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_description` varchar(1000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_description`, `flag`, `log`) VALUES
(2, '<p>Kaanal is a public charitable trust founded by the noble hearts to create health awareness and improve medical facilities in and around Chettinad. The Trust is headed by Koviloor Aadhina Sri la Sri Meyyappa Gnanadesika Swamigal as Ex-officio Chairman. Dr N. Krishnan, an eminent eye surgeon,</p>', 1, '2023-05-13 06:35:46'),
(3, '<p>Financial contributions make it possible to set aside fifty percent of services for those who cannot afford to pay. Your financial contribution towards KEH could be:</p>', 1, '2023-05-13 06:19:24'),
(4, '<p>1. 24/06/2019 - Azad matriculation school, kararkudi.<br>2. 26/06/2019 &amp; 27/06/2019 - SMS boys higher secondary school, karaikudi.<br>3. 28/06/3019 - P.N chinnaya ambalam higher secondary school, karaikudi.</p>', 1, '2023-05-13 06:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `aboutprofile`
--

CREATE TABLE `aboutprofile` (
  `aboutprofile_id` int(11) NOT NULL,
  `representatives_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `profile_description` mediumtext NOT NULL,
  `address` varchar(2000) NOT NULL,
  `videolink` varchar(1000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutprofile`
--

INSERT INTO `aboutprofile` (`aboutprofile_id`, `representatives_id`, `name`, `profile_description`, `address`, `videolink`, `flag`, `log`) VALUES
(1, 3, 'DR. N. KRISHNAN, M.S, D.O,', '<h3>HONOUR:</h3><p>“Lifetime Achievement Award” by Tamil Nadu Dr. MGR Medical University in the year 2012</p><h3>NATIVE, KOVIL</h3><p>Kottaiyur, Maathur - Mannur Pirivu</p><h3>INSPIRATION</h3><p>Motivation is what gets you started. Commitment is what keeps you going</p><p>&nbsp;</p><h3>EDUCATION:</h3><p>M.B.B.S - Stanley Medical College &amp; Hospital, Chennai, TN<br>D.O &amp; M.S – JJM Medical College, Mysore University, Devengere<br>Glaucoma Fellowship – Sankara Nethralaya, Chennai, TN<br>&nbsp;</p><h3>PROFESSIONAL EXPERIENCE:</h3><ul><li>• Medical Officer: Stanley Medical College, Chennai &amp; Joseph Eye Hospital, Tiruchirapalli, India</li><li>• Consultant: Glaucoma Service in Sankara Nethralaya, Chennai, TN, India</li><li>• Established Frontline Eye Hospital in Chennai, TN, India the year – 1994</li><li>• Consultant &amp; Director of Frontline Eye Hospital till date</li></ul><h3>FOUNDER, DIRECTOR</h3><p>Frontline Eye Hospital</p><h3>MANAGING TRUSTEE</h3><p>• Frontline Sightsaver’s Trust<br>• M.N.Family Charitable Trust<br>• Kothai Eye Bank<br>• Kaanal Koviloor Eye Hospita</p><h3>MENTORS</h3><p>• Dr.SS. Badrinath of Sankara Netralaya<br>• Dr.G Nachiar of Arvind Eye Hospital</p><h3>AWARDS</h3><p>“Life Time Achievement Award” by Tamil Nadu Dr. M.G.R Medical University in the year 2012.</p><h3>WORD OF ADVICE</h3><p>“Stick to tradition and lets maintain the core values of our Ancestors.</p><h3>COMPONENTS OF THE HOSPITAL:</h3><ul><li>• Medical &amp; Surgical Eye Care.</li><li>• Community Ophthalmology</li><li>• Community Eye Camps</li><li>• Vision Screening for School Children – Regular &amp; Special children</li><li>• Kothai Eye Bank</li><li>• Vision Rehabilitation Service</li><li>• For Low Vision, Blindness &amp; Multi-sensory impairment</li><li>• Computerised Vision Therapy</li></ul><p><br>&nbsp;</p><p>Dr. N. Krishnan... A visionary! He was born to the couple M.N. Narayanan Chettiar and Unnamalai Achi at Kottaiyur, in a family rich in tradition and principles. His schooling at De Britto, Devakottai helped to sharpen values of life &amp; discipline. During his childhood he loved science, won prizes in interschool competitions in science. Many inspired him in the field of healthcare which sow seeds of taking up a career in medicine. Dr. Krishnan did his under graduation in medicine at Stanley Medical College, Chennai.<br><br>Months after he passed out of the medical college, though his aspirations were different, his affinity towards his mother made him change his mind and choose Ophthalmology as his profession. His senior residency at Joseph Eye Hospital in Trichy and peripheral hospitals in Thuraiyur was a trend setter to become an eminent Ophthalmologist. He did his Masters in Ophthalmology at J J M Medical College, Davangare, Karnataka. He was curious in continuous learning and mastered surgical skills very soon while others were just started practising.<br><br>A meeting with Dr. SS. Badrinath, his mentor made Krishnan eschew a rare opportunity to get trained further &amp; work abroad and join Sankara Nethralaya. Krishnan did his fellowship in Glaucoma and became a consultant in Glaucoma service. He had many national &amp; international paper presentations and scientific publications to his credit which added more feathers to his cap. Icing the cake was the original research paper on the effect of Mitomycin - C and Five flurouracil (Anti cancer medications) on recalcitrant glaucoma considered meritorious at different platforms in various countries.<br><br>Well experienced Dr. Krishnan keen on serving the underprivileged, started Frontline Eye Hospital at Alwarpet, and simultaneously two satellite centres at Ambattur &amp; Karaikudi in 1994 beginning his mission to save the vision of millions of people. Krishnan’s contributions in Ophthalmology have saved several lives through his monthly free eye camps, free medical &amp; surgical camps in rural and tribal areas, vision screening which covered more than a lakh of school children, eye camps for special children.<br><br>His paper in 12th International conference on Low Vision held at Netherlands in June 2017 was well received and paved way for a training on “Cortical Visual Impairment” for a team of Eye Care professionals from Indonesia at Frontline Eye Hospital, Chennai in Oct 2017.<br><br>His one word to success is “Commitment”. But Krishnan did not stop there. The most recent, Kaanal, a new charitable trust is a continuation of his thought process conceived a way back in 1994. Dr. Krishnan the founder trustee of Kaanal formed a team of noble hearted eminent trustees, to give vision to the needy in the Karaikudi - Sivaganga region with the support extended from Koviloor Mutt.<br><br>Koviloor Eye Hospital which is of international standard will be a hallmark in eye care, research, training and rehabilitation in this part of India attracting everyone around. Krishnan’s ancestral bungalow in Kottaiyur is now a new home for several Ophthalmologists and vision care professionals.<br><br>He has no words to thank his parents who were his breath, his siblings who are nothing but his own soul, his wife and children are his strength and support. Last but not least he is immensely thankful to his frontline staff and friends of frontline.<br><br>In a profession where everything is spoken in the language of money, this doctor’s whole hearted and concrete effort to bring in a complete change is an inspiration. And he has so much more in his pockets to 044 2433 8399 fill the needy with light, by giving sigh</p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;For more details, kindly visit </strong><a href=\"www.frontlineeyehospital.org\"><strong>www.frontlineeyehospital.org</strong></a><strong>&nbsp;</strong><br><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong> &nbsp; &nbsp;<strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p><p>&nbsp;</p>', 'Director & Consultant Frontline Eye Hospital 6/40, Sriram Nagar North st, Alwarpet, Chennai – 600018, TN, India Mob: 09444037990', 'https://www.youtube.com/embed/IIltzY7PRtk', 1, '2023-05-15 13:33:19'),
(2, 2, 'jhkyuk', '<p>ghjktu</p>', 'ukuydk', 'dkuyekk', 0, '2023-05-15 12:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `abouttrust`
--

CREATE TABLE `abouttrust` (
  `abouttrust_id` int(11) NOT NULL,
  `about_description` varchar(5000) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouttrust`
--

INSERT INTO `abouttrust` (`abouttrust_id`, `about_description`, `image_url`, `flag`, `log`) VALUES
(3, '<p>The Trust is headed by Koviloor Aadhinam Sri la Sri Meyyappa Gnanadesika Swamigal as Ex-officio Chairman. Dr N. Krishnan, an eminent eye surgeon, Director – Kaanal\'s Koviloor Eye Hospital, Chennai is the Managing Trustee and Mr. K. Palaniappan, a renowned entrepreneur, Chairman - Rathna Group of Companies, Coimbatore is the Joint Managing Trustee. The Trust is ably supported by trustees and other representatives.</p><p>Koviloor Eye Hospital (KEH) will focus on economically disadvantaged groups in rural areas by providing a comprehensive eye health facility in its main hospital located in Koviloor near Karaikudi, Sivagangai District. KEH is managed by KAANAL a not-for-profit trust. KEH will serve all patients, with more than half the number of patients receiving services free of cost, regardless of the service complexity.<br>&nbsp;</p>', '', 1, '2023-05-13 08:51:36'),
(4, '<p>KEH is housed in a two storey hospital building on the main ro &nbsp;leading to Koviloor Mutt. The land has been provided by the Kovilo &nbsp;Aadhinam. KEH’s hi-tech ophthalmic operation theatre is of Internation &nbsp;Standards with state of the art equipment. KEH will ha &nbsp;in-house Ophthalmologists and visiting Super Specialty Ophthalm &nbsp;Consultants. Koviloor Mutt has gifted two and a half acres of land to the KAAN &nbsp;Trust for creating a charitable super specialty eye Hospital wi &nbsp;Vision Rehabilitation and Enhancement facilities for blindness a &nbsp;low vision at Koviloor near Karaikudi. KAANAL’s vision is a sup &nbsp;specialty eye care services research institute to be built in a phas &nbsp;manner at this site. KAANAL plans to achieve this vision with t &nbsp;help of like-minded philanthropists and Corporate Houses throu &nbsp;their CSR. Apart from Eye Care Services, the hallmark of the project will &nbsp; to identify the children born with blindness and rehabilitate th &nbsp;to have a better future.</p>', 'uploads/abouttrust/645f4e423205estructure.jpg', 1, '2023-05-13 08:45:54'),
(5, '<p>Financial contributions make it possible for us to set aside fifty percent of our services for those who cannot afford to pay. Your financial contribution towards KEH could be utilized in several ways: Eye care services for non-paying patients, training deserving eye care professionals, researching eye disease treatment strategies, or setting up new facilities.<br><br>You can choose to make a one-time contribution or pledge longterm support for a range of eye care services. As a donor, you can also specify a person or organization in whose name you wish to sponsor the chosen services. We will be happy to acknowledge your support by naming the program or facility as per your request. Please contact us and we will help you make your contribution! All donations to the trust is exempted from Income Tax.</p>', 'uploads/abouttrust/645f4e5bb14ealeft_bg.png', 1, '2023-05-13 08:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin@123', 'A'),
(2, 'settings', 'settings@123', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `appeal`
--

CREATE TABLE `appeal` (
  `appeal_id` int(11) NOT NULL,
  `appeal_description` varchar(5000) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appeal`
--

INSERT INTO `appeal` (`appeal_id`, `appeal_description`, `image_url`, `flag`, `log`) VALUES
(1, '<p>7yyyy</p>', 'uploads/appeal/11.jpg', 0, '2023-05-11 13:10:54'),
(2, '<p>Koviloor Eye Hospital (KEH), a unit of Kaanal Public Charitable trust, is providing comprehensive eye care to the economically disadvantaged groups in rural areas in and around Koviloor near Karaikudi, Sivagangai District. Medical Services, Community Outreach, Vision Rehabilitation, Education &amp; Training, Research and Eye banking are the components of the hospital. KEH, a charitable not for profit organisation serves all patients, with more than half the number of patients receiving services free of cost, regardless of the service complexity.<br><br>Koviloor Mutt has gifted two and a half acres of land to the KAANAL Trust for creating a Charitable Super Specialty Tertiary Eye Care Centre with Vision Rehabilitation &amp; Enhancement facilities for blindness and low vision at Koviloor near Karaikudi. KAANAL plans to achieve this vision with the help of like-minded philanthropists, Government &amp; Non Government Organisations and Corporate Houses through their CSR.<br><br>Financial contributions make it possible to set aside fifty percent of services for those who cannot afford to pay. Your financial contribution towards KEH could be:</p>', '', 1, '2023-05-13 09:29:37'),
(3, '<p>Additional Contributions can also be utilized in several ways:<br>• Training deserving eye care professionals<br>• Carrying out research in eye care or<br>• Setting up new facilities/Infrastructures<br>You can choose to make a one-time contribution or pledge long term support for a range of eye care services. As a donor, you can also specify a person or organization in whose name you wish to sponsor the chosen services. We will be happy to acknowledge your support by naming the program or facility as per your request. Please make your contributions by contacting us! <strong>All contributions to the trust are 80G exempted from Income Tax.</strong></p><h3>Indian Rupee Donors</h3><p>If you are interested in making larger contributions towards KAANAL\'s infrastructure or in the areas of education or research or to pledge long-term support</p>', 'uploads/appeal/645f58a083966appeal.jpg', 1, '2023-05-13 09:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `chart_id` int(11) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`chart_id`, `image_url`, `flag`, `log`) VALUES
(1, 'uploads/chart/chart1.png', 0, '2023-05-11 08:52:25'),
(2, 'uploads/chart/645f3586e508fchart1.png', 1, '2023-05-13 07:00:22'),
(3, 'uploads/chart/645f359604404chart2.png', 1, '2023-05-13 07:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `map` varchar(500) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `address`, `mobilenumber`, `email`, `map`, `flag`, `log`) VALUES
(1, 'Amman Sannathi Street,<br>\r\nKoviloor (off Madurai - Karaikudi Road),<br>\r\nKaraikudi, TamilNadu - 630 307', '+91 73395 61353', 'kaanalkeh@gmail.com', 'gilil', 1, '2023-05-13 11:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_message` varchar(500) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_message`, `flag`, `log`) VALUES
(22, 'admin', 'user@gmail.com', '9636902837', 'hai', 1, '2023-01-05 09:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `donation` varchar(2000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `donation`, `flag`, `log`) VALUES
(2, '<p>If you are interested in making larger contributions towards KAANAL\'s infrastructure or in the areas of education or research or to pledge long-term support<br><br>Please contact<br>Dr. Krishnan : +91 94440 37990.<br>Pl.K. Palaniappan : +91 98947 44444.<br>M. Renganathan : +91 98410 48707.<br><br>Currently Contributions can be made only from Indian Rupee Bank accounts.</p>', 1, '2023-05-13 10:03:00'),
(3, '<p>donation-2</p>', 0, '2023-05-13 10:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `image_url`, `flag`, `log`) VALUES
(1, 'teretet', 'uploads/event/645cba1a9e396chart2.png', 0, '2023-05-11 09:51:36'),
(2, 'teretet', 'uploads/event/645cba212a5c0chart2.png', 0, '2023-05-11 09:51:31'),
(3, '67846784687', 'uploads/event/11.jpg', 0, '2023-05-11 09:52:21'),
(4, 'Present', 'uploads/event/645f383071299eve1.jpeg', 1, '2023-05-13 07:24:15'),
(5, 'Past', 'uploads/event/645f384576db5booth2.jpg', 1, '2023-05-13 07:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner`
--

CREATE TABLE `home_banner` (
  `banner_id` int(11) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `bannertitle` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banner`
--

INSERT INTO `home_banner` (`banner_id`, `image_url`, `bannertitle`, `flag`, `log`) VALUES
(1, 'uploads/banner/ERA-LOGO_5.png', '', 0, '2023-05-10 09:20:18'),
(2, 'uploads/banner/11.jpg', '', 0, '2023-05-11 08:57:22'),
(3, 'uploads/banner/111.jpg', '', 0, '2023-05-11 08:57:43'),
(4, 'uploads/banner/11.jpg', '', 0, '2023-05-11 08:58:03'),
(5, 'uploads/banner/645f148d696c311.jpg', 'Welcome to Kaanal', 1, '2023-05-13 04:54:15'),
(6, 'uploads/banner/15.jpg', '', 1, '2023-05-13 04:40:40'),
(7, 'uploads/banner/645f149de522213.jpg', '', 1, '2023-05-13 04:39:57'),
(8, 'uploads/banner/645f14a6be6ca14.jpg', 'First surgery is being performed at Kaanal\'s Koviloor Eye Hospital today the 16 th November 2017', 1, '2023-05-13 04:53:39'),
(9, 'uploads/banner/12.jpg', '', 1, '2023-05-13 04:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_detail`
--

CREATE TABLE `hospital_detail` (
  `hospital_detail_id` int(11) NOT NULL,
  `hospital_detail_description` varchar(1000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_detail`
--

INSERT INTO `hospital_detail` (`hospital_detail_id`, `hospital_detail_description`, `flag`, `log`) VALUES
(1, '<p>hospitallll</p>', 0, '2023-05-11 05:01:03'),
(2, '<h3>OPEN HOURS</h3><ul><li>Mon - Sat : 9AM - 1PM &amp; 3PM - 7PM</li><li>Sunday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 9AM - 1PM</li></ul>', 1, '2023-05-13 05:59:04'),
(3, '<h3>APPOINTMENT</h3><p>Appointment are available, call us<br>today or book a appoinment</p><p><strong>04565- 235533</strong><br><strong>7339561353</strong></p>', 1, '2023-05-13 05:59:38'),
(4, '<h3>CLINICAL SERVICES</h3><p>1. Cornea and Anterior Segment Services.<br>2. Refractive Laser Surgery &amp; LASIK.<br>3. Ophthalmic Plastic &amp; Facial Aesthetic Surgery</p>', 1, '2023-05-13 05:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `inaugration`
--

CREATE TABLE `inaugration` (
  `inaugration_id` int(11) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inaugration`
--

INSERT INTO `inaugration` (`inaugration_id`, `image_url`, `flag`, `log`) VALUES
(1, 'uploads/inaugration/11.jpg', 0, '2023-05-11 10:11:19'),
(2, 'uploads/inaugration/645f3d48091ea1.JPG', 1, '2023-05-13 07:33:28'),
(3, 'uploads/inaugration/645f3d510b6c42.JPG', 1, '2023-05-13 07:33:37'),
(4, 'uploads/inaugration/645f3d58223e43.JPG', 1, '2023-05-13 07:33:44'),
(5, 'uploads/inaugration/645f3d608e8ba4.JPG', 1, '2023-05-13 07:33:52'),
(6, 'uploads/inaugration/645f3d68b4d175.JPG', 1, '2023-05-13 07:34:00'),
(7, 'uploads/inaugration/645f3dbb400ca6.JPG', 1, '2023-05-13 07:35:23'),
(8, 'uploads/inaugration/645f3dc4699547.jpg', 1, '2023-05-13 07:35:32'),
(9, 'uploads/inaugration/645f3dce5e2a48.JPG', 1, '2023-05-13 07:35:42'),
(10, 'uploads/inaugration/645f3ddf577719.jpg', 1, '2023-05-13 07:35:59'),
(11, 'uploads/inaugration/645f3de8f395c10.JPG', 1, '2023-05-13 07:36:08'),
(12, 'uploads/inaugration/645f3df2eaf0311.JPG', 1, '2023-05-13 07:36:18'),
(13, 'uploads/inaugration/645f3df99252b12.JPG', 1, '2023-05-13 07:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `kaanalservices`
--

CREATE TABLE `kaanalservices` (
  `kaanalservices_id` int(11) NOT NULL,
  `kaanalservicestitle_id` int(11) NOT NULL,
  `kaanalservices` varchar(10000) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kaanalservices`
--

INSERT INTO `kaanalservices` (`kaanalservices_id`, `kaanalservicestitle_id`, `kaanalservices`, `image_url`, `flag`, `log`) VALUES
(1, 2, '<p><strong>Team of Doctors</strong>: Three in-house consultants<br><br><strong>Clinical Evaluation</strong>: Comprehensive eye checkup including Refraction,Contact Lens prescription, Intra-Ocular pressure check, Anterior and Posterior segment evaluation.<br><br><strong>Management</strong> : The treatment modality consists of prescription of glasses and appropriate medical or surgical approach.<br><br><strong>Surgical treatment in General Ophtalmology mainly consists of Cataract Surgery.</strong><br><br><strong>Contact Lens Clinic</strong>: Different types of contact lenses are prescribed and dispensed with appropriate guidance &amp; teaching.<br><br><strong>Laser Correction for Refractive Error</strong>: Appropriate power check,ORB scan / Pachy - for evaluation of corneal thickness.<br><br><strong>Evaluation</strong>: All diabetic and elderly patients are thoroughly evaluated for their retinal problemss.</p>', 'uploads/kaanalservices/peppers_logo.jpeg', 0, '2023-05-16 09:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `kaanalservicestitle`
--

CREATE TABLE `kaanalservicestitle` (
  `kaanalservicestitle_id` int(11) NOT NULL,
  `kaanalservicestitle` varchar(400) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kaanalservicestitle`
--

INSERT INTO `kaanalservicestitle` (`kaanalservicestitle_id`, `kaanalservicestitle`, `flag`, `log`) VALUES
(1, 'GENERAL OPHTHALMOLOGY', 1, '2023-05-16 08:58:02'),
(2, 'GLAUCOMA SERVICE', 1, '2023-05-16 08:58:36'),
(3, 'testttt', 0, '2023-05-16 08:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `newsdescription`
--

CREATE TABLE `newsdescription` (
  `newsdescription_id` int(11) NOT NULL,
  `newstitle_id` int(11) NOT NULL,
  `newsdescription` varchar(5000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsdescription`
--

INSERT INTO `newsdescription` (`newsdescription_id`, `newstitle_id`, `newsdescription`, `flag`, `log`) VALUES
(1, 2, '<p>testtttt</p>', 1, '2023-05-12 08:57:13'),
(3, 3, '<p>test2222</p>', 1, '2023-05-12 10:37:39'),
(4, 4, '<p>Total 110 patients Seen, 10 Cataract Surgery Performed , Medicines given to 35, Glass 24</p>', 1, '2023-05-15 11:12:27'),
(5, 5, '<p>Kaanal’s Eye care awareness training session for the Primary health care workers/ sisters of MAC - ACM Trusts &amp; foundations Primary Health centres from 15 Blocks covering 100 villages in and around Chettinad area was started at Koviloor eye hospital with the Orientation program on 28 th November 2017 at 3 pm in a grand manner.<br>Nearly 50 PHW , staff nurses and their doctors attended the inaugural session. KEH’s superintendent and senior ophthalmologist Dr Jayavel explained in plain simple terms the eye care awareness and procedures to be followed at the health Centers covering the entire spectrum from Antenatal to adult age group. Signs and symptoms of eye conditions along with preventive aspects and dietary requirements were briefed.<br>The sisters participated in Q&amp;A session getting their questions answered will be trained in batches at KEH to prevent Blindness at root levels. Mr Mahadevan of the MAC - ACM trust thanked Kaanal for this training program while trustee and treasurer of Kaanal Mr. Renganathan thanked the MAC - ACM trust for the inclusion of eye care awareness at the primary health care level which will be a boon to the general public.</p>', 1, '2023-05-12 10:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `newsimage`
--

CREATE TABLE `newsimage` (
  `newsimage_id` int(11) NOT NULL,
  `newstitle_id` int(11) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsimage`
--

INSERT INTO `newsimage` (`newsimage_id`, `newstitle_id`, `image_url`, `flag`, `log`) VALUES
(1, 2, 'uploads/newsimage/11.jpg', 1, '2023-05-12 09:39:31'),
(2, 4, 'uploads/newsimage/645e1e266a31efree.jpg', 1, '2023-05-12 11:08:22'),
(3, 4, 'uploads/newsimage/645e1e39c50cbfree2.jpg', 1, '2023-05-12 11:08:41'),
(4, 5, 'uploads/newsimage/645e1e44d508als1.jpg', 1, '2023-05-12 11:08:52'),
(5, 5, 'uploads/newsimage/645e1e510c793ls2.jpg', 1, '2023-05-12 11:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `newstitle`
--

CREATE TABLE `newstitle` (
  `newstitle_id` int(11) NOT NULL,
  `newstitle` varchar(300) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newstitle`
--

INSERT INTO `newstitle` (`newstitle_id`, `newstitle`, `flag`, `log`) VALUES
(1, 'testttt', 0, '2023-05-12 06:31:31'),
(2, 'test', 0, '2023-05-12 10:51:54'),
(3, 'test-2', 0, '2023-05-12 10:51:50'),
(4, 'Koviloor Eye Camp', 1, '2023-05-12 10:52:52'),
(5, 'Kaanal’s Eye Care Awareness Training Session', 1, '2023-05-12 10:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `orangehvc`
--

CREATE TABLE `orangehvc` (
  `orangehvc_id` int(11) NOT NULL,
  `orangehvc_title` varchar(300) NOT NULL,
  `orangehvc` varchar(2000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orangehvc`
--

INSERT INTO `orangehvc` (`orangehvc_id`, `orangehvc_title`, `orangehvc`, `flag`, `log`) VALUES
(1, 'NATTARASANKOTTAI  ', '<p><strong>KAANAL ORANGE HYBRID VISION CENTRE</strong><br><strong>Arokiya Clinic,</strong><br><strong>Kannathal Kovil Backside,</strong><br><strong>Nattarasankottai , Sivagangai Dist, 630 556</strong><br><strong>Mobile No : 91500 49081</strong></p>', 1, '2023-05-13 11:43:11'),
(2, 'VALAYAPATTI', '<p><strong>KAANAL ORANGE HYBRID VISION CENTRE</strong><br><strong>Rathna Foundation,</strong><br><strong>No 31,Ariyanpati Road,</strong><br><strong>Valayapatti , Pudukottai Dist, 622 411</strong><br><strong>Mobile No : 91500 49087</strong></p>', 1, '2023-05-13 12:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `orangehvcgallery`
--

CREATE TABLE `orangehvcgallery` (
  `orangehvcgallery_id` int(11) NOT NULL,
  `orangehvc_id` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orangehvcgallery`
--

INSERT INTO `orangehvcgallery` (`orangehvcgallery_id`, `orangehvc_id`, `image_url`, `flag`, `log`) VALUES
(1, 0, 'uploads/orangehvcgallery/appeal.jpg', 0, '2023-05-15 06:40:06'),
(2, 0, 'uploads/orangehvcgallery/6461d3d1e40acpeppers_logo.jpeg', 0, '2023-05-15 06:40:22'),
(3, 2, 'uploads/orangehvcgallery/appeal1.jpg', 1, '2023-05-15 07:04:37'),
(4, 1, 'uploads/orangehvcgallery/6461eebb68808peppers_logo.jpeg', 1, '2023-05-15 08:35:07'),
(5, 1, 'uploads/orangehvcgallery/6461f49c58eafstructure.jpg', 1, '2023-05-15 09:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partners_id` int(11) NOT NULL,
  `partners_description` varchar(2000) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partners_id`, `partners_description`, `image_url`, `flag`, `log`) VALUES
(1, '<p>hbdgjtyfgjhstyj76tj</p>', 'uploads/partners/11.jpg', 0, '2023-05-12 04:30:19'),
(2, '<p><strong>MAC/ACM Trust and Foundation Kaanal Collaborate with their trust at primary level as far as eye care, Education (Awarness Creations) &amp; vision rehabilitation. This will be covering 100 villages (13 Blocks) around chettinad</strong></p>', 'uploads/partners/645f62c491ad8peppers_logo.jpeg', 1, '2023-05-13 10:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_description` varchar(1000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `profile_description`, `flag`, `log`) VALUES
(0, '<p>gfhrtjfgjnhk</p><p>&nbsp;</p>', 0, '2023-05-11 08:39:04'),
(0, '<p>First surgery is being performed at Kaanal\'s Koviloor Eye Hospital today the 16 th November 2017., With all state of art machines of international standards ., Our sincere thanks from the bottom of our heart to all for their noble gesture, that made this great moment possible. Pray the service to the public improve many folds.</p>', 1, '2023-05-13 06:50:03'),
(0, '<p>Kaanal - Rotary Orange project - The main objective of this project is to establish Hybrid Vision Centres (HVC) along with Mobile Vision Care Units (MVCU) and Advanced Mobile Vision Care Unit (AMVCU) to render primary eye care services to the urban, semi urban and rural communities. KAANAL &amp; Rotary Club joins hand in establising 8 Hybrid Vision Centers at<br>1 Nattarasankottai 2 Devakottai- Ram Nagar 3 Puduvayal 4 Tirupathur 5 Valayapati 6 Pulankurichi 7 Kelasevalpatti 8 Aranthangi</p>', 1, '2023-05-13 06:50:15'),
(0, '<h3><strong>The statistics of today’s camp at Devakottai today Camp ended by 4.00pm</strong></h3><p>Total OP:184; Catract cases identified- 35;<br>Fit for surgery- 16; Glasses- 40; Reading glass sold- 5; Medicines- 64; Referred to KEH- 27 Cases for surgery<br>on 10/12/18 at Kaanal Trust’s Koviloor Eye Hospital 16 patients.</p>', 1, '2023-05-13 06:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `rehabilitation`
--

CREATE TABLE `rehabilitation` (
  `rehabilitation_id` int(11) NOT NULL,
  `rehabilitation_description` varchar(5000) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rehabilitation`
--

INSERT INTO `rehabilitation` (`rehabilitation_id`, `rehabilitation_description`, `flag`, `log`) VALUES
(2, '<h2>REHABILITATION</h2><p>Headed by a consultant in Vision Rehabilitation - excels in identifying,assessing and rehabilitating children and adults with visual impairment and additional disabilities.<br><br><strong>Evaluation:</strong> Low vision evaluation &amp; Functional vision assessment<br><br><strong>Management:</strong> Prescription of Low vision devices, Early Intervention through Vision Stimulation activities,Training in visual skills,Special skill training, Inclusion in Regular schools,Remedial teaching,Training in visual cognition for children with multiple disabilities.<br><br>The hospital extends its vision rehabilitation services to other Institutions dealing with special children.Eye camps for the special children are also conducted in their premises on a regular basis and the children are treated free of cost.</p>', 1, '2023-05-12 11:54:10'),
(3, '<h2>INAUGURATION OF KVRC AND DENTAL CLINIC</h2><p>KVRC - Hallmark of Kaanal’s Project an unique service for the public around was inaugurated by Collector of Sivaganga. Thanks to Koviloor Swamigal and all other Trustees for sponsoring the great service .<br>Here are the few moments captured by KEH staff members:</p><p><br>&nbsp;</p>', 1, '2023-05-12 11:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `rehabilitationimage`
--

CREATE TABLE `rehabilitationimage` (
  `rehabilitationimage_id` int(11) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rehabilitationimage`
--

INSERT INTO `rehabilitationimage` (`rehabilitationimage_id`, `image_url`, `flag`, `log`) VALUES
(1, 'uploads/rehabilitationimage/645e3e841fae0inas1.jpg', 1, '2023-05-12 13:26:28'),
(2, 'uploads/rehabilitationimage/645e3e8fd566ainas2.jpg', 1, '2023-05-12 13:26:39'),
(3, 'uploads/rehabilitationimage/645e3e98e0396inas3.jpg', 1, '2023-05-12 13:26:48'),
(4, 'uploads/rehabilitationimage/645e3ea38c4e5inas4.jpg', 1, '2023-05-12 13:26:59'),
(5, 'uploads/rehabilitationimage/645e3eb05e5f7inas5.jpg', 1, '2023-05-12 13:27:12'),
(6, 'uploads/rehabilitationimage/645e3eba6e401inas7.jpg', 1, '2023-05-12 13:27:22'),
(7, 'uploads/rehabilitationimage/645e3ec468944inas6.jpg', 1, '2023-05-12 13:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `representatives_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`representatives_id`, `name`, `place`, `position`, `image_url`, `flag`, `log`) VALUES
(1, 'redeterhtrykyufl', 'ghjdtykhjlfuilfuil,ui', 'dhjdtyk65786', 'uploads/representatives/11.jpg', 0, '2023-05-11 11:36:12'),
(2, 'KOVILOOR ADHEENAM SRI LA SRI MEYYAPPA GNANA ', 'DESIGA SWAMIGAL ', 'Ex- Officio Chairman', 'uploads/representatives/645f552a3b838meyyappa_sway.jpg', 1, '2023-05-13 09:15:22'),
(3, 'Dr. N. Krishnan', 'Kottaiyur', 'Managing Trustee', 'uploads/representatives/645f55d6bcbd2dr_krishnan.jpg', 1, '2023-05-13 09:18:14'),
(4, 'THIRU RATHNA <br>PL. K. PALANIAPPAN', ' VALAYAPATTI ', 'Jt. Managing Trustee', 'uploads/representatives/645f57db0a4ebk_palaniappan.jpg', 1, '2023-05-13 09:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(500) NOT NULL,
  `service_description` varchar(1000) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_title`, `service_description`, `image_url`, `flag`, `log`) VALUES
(1, 'dsfagdghku;', '<p>asdgfqerg4glk;\'hpo\'h</p>', 'uploads/service/11.jpg', 0, '2023-05-11 09:34:20'),
(2, 'GENERAL OPHTHALMOLOGY', '<p>Comprehensive eye checkup including Refraction,Contact Lens prescription, Intra-Ocular pressure check, Anterior and Posterior segment evaluation.</p>', 'uploads/service/645f3694c4badfeatured-image-1.jpg', 1, '2023-05-13 07:04:52'),
(3, 'GLAUCOMA SERVICE', '<p>Headed by a well experienced senior consultant with 15 years of experience in the field of Glaucoma. Intra-Ocular Pressure Check,Pachymetry,Gonioscopy,Visual Field Analysis,</p>', 'uploads/service/645f36d3d16a0featured-image-2.jpg', 1, '2023-05-13 07:10:51'),
(4, 'Cornea Service', '<p>Offered by well experienced Cornea Specialist. All Corneal problems are appropriately treated. Different kinds of Corneal Transplants</p>', 'uploads/service/645f36f34b427featured-image-3.jpg', 1, '2023-05-13 07:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `image_url`, `flag`, `log`) VALUES
(1, 'uploads/testimonial/11.jpg', 0, '2023-05-11 10:18:42'),
(2, 'uploads/testimonial/645f3f3dbae63test1.jpg', 1, '2023-05-13 07:41:49'),
(3, 'uploads/testimonial/645f3f461e437test2.jpg', 1, '2023-05-13 07:41:58'),
(4, 'uploads/testimonial/645f3f4dd9467test3.jpeg', 1, '2023-05-13 07:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_link`, `flag`, `log`) VALUES
(3, 'https://www.youtube.com/embed/wlvaOTNXv5c', 1, '2023-05-13 06:38:56'),
(4, 'http://www.kaanal.com/KannalViedo.mp4', 1, '2023-05-13 06:39:03'),
(5, 'https://www.youtube.com/embed/i81vnd4w2Cs', 1, '2023-05-13 06:39:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `aboutprofile`
--
ALTER TABLE `aboutprofile`
  ADD PRIMARY KEY (`aboutprofile_id`);

--
-- Indexes for table `abouttrust`
--
ALTER TABLE `abouttrust`
  ADD PRIMARY KEY (`abouttrust_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appeal`
--
ALTER TABLE `appeal`
  ADD PRIMARY KEY (`appeal_id`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`chart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `home_banner`
--
ALTER TABLE `home_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `hospital_detail`
--
ALTER TABLE `hospital_detail`
  ADD PRIMARY KEY (`hospital_detail_id`);

--
-- Indexes for table `inaugration`
--
ALTER TABLE `inaugration`
  ADD PRIMARY KEY (`inaugration_id`);

--
-- Indexes for table `kaanalservices`
--
ALTER TABLE `kaanalservices`
  ADD PRIMARY KEY (`kaanalservices_id`);

--
-- Indexes for table `kaanalservicestitle`
--
ALTER TABLE `kaanalservicestitle`
  ADD PRIMARY KEY (`kaanalservicestitle_id`);

--
-- Indexes for table `newsdescription`
--
ALTER TABLE `newsdescription`
  ADD PRIMARY KEY (`newsdescription_id`);

--
-- Indexes for table `newsimage`
--
ALTER TABLE `newsimage`
  ADD PRIMARY KEY (`newsimage_id`);

--
-- Indexes for table `newstitle`
--
ALTER TABLE `newstitle`
  ADD PRIMARY KEY (`newstitle_id`);

--
-- Indexes for table `orangehvc`
--
ALTER TABLE `orangehvc`
  ADD PRIMARY KEY (`orangehvc_id`);

--
-- Indexes for table `orangehvcgallery`
--
ALTER TABLE `orangehvcgallery`
  ADD PRIMARY KEY (`orangehvcgallery_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partners_id`);

--
-- Indexes for table `rehabilitation`
--
ALTER TABLE `rehabilitation`
  ADD PRIMARY KEY (`rehabilitation_id`);

--
-- Indexes for table `rehabilitationimage`
--
ALTER TABLE `rehabilitationimage`
  ADD PRIMARY KEY (`rehabilitationimage_id`);

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`representatives_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutprofile`
--
ALTER TABLE `aboutprofile`
  MODIFY `aboutprofile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `abouttrust`
--
ALTER TABLE `abouttrust`
  MODIFY `abouttrust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appeal`
--
ALTER TABLE `appeal`
  MODIFY `appeal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `chart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_banner`
--
ALTER TABLE `home_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospital_detail`
--
ALTER TABLE `hospital_detail`
  MODIFY `hospital_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inaugration`
--
ALTER TABLE `inaugration`
  MODIFY `inaugration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kaanalservices`
--
ALTER TABLE `kaanalservices`
  MODIFY `kaanalservices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kaanalservicestitle`
--
ALTER TABLE `kaanalservicestitle`
  MODIFY `kaanalservicestitle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsdescription`
--
ALTER TABLE `newsdescription`
  MODIFY `newsdescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsimage`
--
ALTER TABLE `newsimage`
  MODIFY `newsimage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newstitle`
--
ALTER TABLE `newstitle`
  MODIFY `newstitle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orangehvc`
--
ALTER TABLE `orangehvc`
  MODIFY `orangehvc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orangehvcgallery`
--
ALTER TABLE `orangehvcgallery`
  MODIFY `orangehvcgallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partners_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rehabilitation`
--
ALTER TABLE `rehabilitation`
  MODIFY `rehabilitation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rehabilitationimage`
--
ALTER TABLE `rehabilitationimage`
  MODIFY `rehabilitationimage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `representatives`
--
ALTER TABLE `representatives`
  MODIFY `representatives_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
