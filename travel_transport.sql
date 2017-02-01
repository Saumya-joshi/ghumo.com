-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2016 at 05:02 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_promo_code`
--

CREATE TABLE `applied_promo_code` (
  `wallet_id` int(11) NOT NULL,
  `promo_code_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `associate_promo_code`
--

CREATE TABLE `associate_promo_code` (
  `wallet_id` int(11) NOT NULL,
  `promo_code_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabs`
--

CREATE TABLE `cabs` (
  `cab_id` int(11) NOT NULL,
  `cab_no` varchar(10) NOT NULL,
  `cab_name` varchar(20) NOT NULL,
  `crn_no` int(11) NOT NULL,
  `driver_name` varchar(32) NOT NULL,
  `driver_mob_no` varchar(10) NOT NULL,
  `pkup_dt_tm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabs`
--

INSERT INTO `cabs` (`cab_id`, `cab_no`, `cab_name`, `crn_no`, `driver_name`, `driver_mob_no`, `pkup_dt_tm`) VALUES
(10101, 'UP70AB3000', 'Kwid', 4421412, 'Suresh Singh Pal', '987552310', '0000-00-00 00:00:00'),
(10102, 'DL16BC0069', 'Honda City', 2154556, 'Hari Om Prakash', '9715425560', '0000-00-00 00:00:00'),
(10103, 'DL01DE1256', 'i20', 1245568, 'Ravi Varma', '9856454568', '0000-00-00 00:00:00'),
(10104, 'UP16CT6131', 'Honda City', 1545467, 'Shirish Kumar', '9985421542', '0000-00-00 00:00:00'),
(10105, 'Dl1YE0225', 'Santro', 3045232, 'Gagandeep Singh', '8860699216', '0000-00-00 00:00:00'),
(10106, 'UP14ET1789', 'Indigo', 1369079, 'Satish Pal', '9717323214', '0000-00-00 00:00:00'),
(10107, 'UP13T6044', 'Etios Liva', 1333768, 'Rahul Sharma', '9212411503', '0000-00-00 00:00:00'),
(10108, 'DL1YE3527', 'Tata Indigo', 1398125, 'Narinder Singh', '9958581580', '0000-00-00 00:00:00'),
(10109, 'UP16DT1519', 'WagonR', 1779871, 'Satwant Pratap', '9717126408', '0000-00-00 00:00:00'),
(10110, 'HR67A7516', 'Etios', 1802036, 'Jai Kumar', '7838661737', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cost_per_person`
--

CREATE TABLE `cost_per_person` (
  `flight_id` int(11) NOT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `class` varchar(10) NOT NULL,
  `person_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fb_users`
--

CREATE TABLE `fb_users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fb_users`
--

INSERT INTO `fb_users` (`id`, `oauth_provider`, `oauth_uid`, `fname`, `lname`, `email`, `gender`, `locale`, `picture`, `created`, `modified`) VALUES
(1, 'facebook', '1690623804542547', 'Priyanshu', 'Sinha', 'pksinha181@rediffmail.com', 'male', 'en_US', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xft1/v/t1.0-1/p50x50/12400519_1694207460850848_6673644359403219195_n.jpg?oh=5fdc33caf6d1ea791c19489b2693fe1a&oe=576D52FF&__gda__=1466959240_4bca1c7133410e80cc43da93c9600847', '2016-01-04 20:51:54', '2016-02-05 06:56:04'),
(2, 'facebook', '863017403818284', 'Alka', 'Sinha', 'sinha.alka437@gmail.com', 'female', 'en_US', 'https://scontent.xx.fbcdn.net/hprofile-xfa1/v/t1.0-1/p50x50/11402705_774418912678134_1510798202981917198_n.jpg?oh=393c5f47d06f238f93800b070267948a&oe=5748C4B1', '2016-01-04 21:14:36', '2016-01-10 16:48:01'),
(3, 'facebook', '952181388203086', 'Madhavi', 'Sinha', 'madhavisinha292@gmail.com', 'female', 'en_GB', 'https://scontent.xx.fbcdn.net/hprofile-xfl1/v/t1.0-1/p50x50/12072725_913821108705781_6461488918009553685_n.jpg?oh=e6e179a944fbbc0d057802b7fa6d6f14&oe=5709C77F', '2016-01-05 08:06:29', '2016-01-10 19:04:16'),
(4, 'facebook', '855200851244269', 'Sukriti', 'Sinha', 'sukritieco@gmail.com', 'female', 'en_GB', 'https://scontent.xx.fbcdn.net/hprofile-xap1/v/t1.0-1/c7.0.50.50/p50x50/12191030_825766954187659_4713397010798713079_n.jpg?oh=0763c0c1977f419cb5ec28ca12001c3a&oe=574066F4', '2016-01-10 16:53:38', '2016-01-10 16:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `fb_user_passport_link`
--

CREATE TABLE `fb_user_passport_link` (
  `user_id` int(11) NOT NULL,
  `passport_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb_user_passport_link`
--

INSERT INTO `fb_user_passport_link` (`user_id`, `passport_no`) VALUES
(1, 'GY8745');

-- --------------------------------------------------------

--
-- Table structure for table `fb_user_profile_link`
--

CREATE TABLE `fb_user_profile_link` (
  `user_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb_user_profile_link`
--

INSERT INTO `fb_user_profile_link` (`user_id`, `profile_id`) VALUES
(1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `fb_user_visa_link`
--

CREATE TABLE `fb_user_visa_link` (
  `user_id` int(11) NOT NULL,
  `visa_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_id` int(11) NOT NULL,
  `airline_number` varchar(10) NOT NULL,
  `airline_name` varchar(20) NOT NULL,
  `departure_city` varchar(20) NOT NULL,
  `arrival_city` varchar(20) NOT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `arrival_time` varchar(10) NOT NULL,
  `departure_time` varchar(10) NOT NULL,
  `seats` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_id`, `airline_number`, `airline_name`, `departure_city`, `arrival_city`, `departure_date`, `arrival_date`, `arrival_time`, `departure_time`, `seats`) VALUES
(1, '9W-827', 'Jet Airways', 'New Delhi', 'Bengaluru', '2016-02-09', '2016-02-10', '0:15(10th)', '21:25', 32),
(2, 'SG-137', 'Spicejet', 'New Delhi', 'Bengaluru', '2016-02-09', '2016-02-10', '23:10', '20:30', 17),
(3, 'UK-889', 'Vistara', 'New Delhi', 'Bengaluru', '2016-02-08', '2016-02-09', '09:10', '06:25', 0),
(4, 'I5-2227', 'Air Asia', 'New Delhi', 'Bengaluru', '2016-02-09', '2016-02-10', '20:05', '17:25', 45),
(5, 'G8-344', 'Go Air', 'New Delhi', 'Bengaluru', '2016-02-08', '2016-02-09', '7:40(9th)', '22:35', 11),
(6, 'AI-863', 'Air india', 'New Delhi', 'Bengaluru', '2016-02-09', '2016-02-10', '18:50', '13:00', 0),
(7, '9W-838', 'Jet Airways', 'Bengaluru', 'New Delhi', '2016-02-09', '2016-02-10', '0:15(10th)', '21:25', 32),
(8, 'SG-141', 'Spicejet', 'Bengaluru', 'New Delhi', '2016-02-09', '2016-02-10', '23:10', '20:30', 17),
(9, 'UK-892', 'Vistara', 'Bengaluru', 'New Delhi', '2016-02-08', '2016-02-09', '09:10', '06:25', 0),
(10, 'I5-2337', 'Air Asia', 'Bengaluru', 'New Delhi', '2016-02-09', '2016-02-10', '20:05', '17:25', 45),
(11, 'G8-324', 'Go Air', 'Bengaluru', 'New Delhi', '2016-02-08', '2016-02-09', '7:40(9th)', '22:35', 11),
(12, 'AI-813', 'Air india', 'Bengaluru', 'New Delhi', '2016-02-09', '2016-02-10', '18:50', '13:00', 0),
(13, 'AI-893', 'Air india', 'Bengaluru', 'Hyderabad', '2016-02-11', '2016-02-12', '18:50', '13:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `google_user`
--

CREATE TABLE `google_user` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gpluslink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `google_user`
--

INSERT INTO `google_user` (`id`, `oauth_provider`, `oauth_uid`, `fname`, `lname`, `email`, `gender`, `locale`, `gpluslink`, `picture`, `created`, `modified`) VALUES
(1, 'google', '104666421464497554061', 'Priyanshu', 'Sinha', 'pksinha217@gmail.com', 'male', 'en', 'https://plus.google.com/+PriyanshuSinha217', 'https://lh6.googleusercontent.com/-1gmIamxJRyg/AAAAAAAAAAI/AAAAAAAAACA/9DdL9xQlMYg/photo.jpg', '2016-01-05 10:43:08', '2016-01-25 19:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `google_user_passport_link`
--

CREATE TABLE `google_user_passport_link` (
  `user_id` int(11) NOT NULL,
  `passport_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google_user_passport_link`
--

INSERT INTO `google_user_passport_link` (`user_id`, `passport_no`) VALUES
(1, 'LKJ85214');

-- --------------------------------------------------------

--
-- Table structure for table `google_user_profile_link`
--

CREATE TABLE `google_user_profile_link` (
  `user_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google_user_profile_link`
--

INSERT INTO `google_user_profile_link` (`user_id`, `profile_id`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `google_user_visa_link`
--

CREATE TABLE `google_user_visa_link` (
  `user_id` int(11) NOT NULL,
  `visa_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `main_location` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `no_of_rooms` int(2) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `star_rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `main_location`, `address`, `check_in`, `check_out`, `no_of_rooms`, `price`, `star_rating`) VALUES
(1, 'Mohan Hotel', 'Lucknow', 'Charbagh', '2016-02-05', '2016-02-29', 150, '2640.00', 2),
(2, 'The Mapple Leaf', 'Lucknow', 'Hazratganj', '2016-02-08', '2016-03-09', 75, '3500.00', 4),
(3, 'The Grand Radient', 'Location', 'Hazratganj', '2016-02-02', '2016-03-08', 85, '3500.00', 4),
(4, 'Hotel Shelter', 'Lucknow', 'Charbagh', '2016-02-15', '2016-03-16', 120, '2419.00', 3),
(5, 'Ranjees Hotel', 'Lucknow', 'Gomti Nagar', '2016-02-09', '2016-03-15', 35, '4100.00', 4),
(6, 'Hotel Cosmos', 'Lucknow', 'Raebareli Road', '2016-02-02', '2016-03-06', 120, '2799.00', 2),
(7, 'Hotel Executive', 'Lucknow', 'Madan Mohan Malviye Marg', '2016-02-09', '2016-02-29', 250, '1775.00', 2),
(8, 'Gemini Continental', 'Lucknow', 'Hazratganj', '2016-02-03', '2016-03-15', 150, '5200.00', 4),
(9, 'Teakarees Inn', 'Lucknow', 'Ashok Marg', '2016-02-04', '2016-03-22', 145, '2000.00', 2),
(10, 'Hotel Alfa', 'Lucknow', 'Charbagh', '2016-02-08', '2016-03-07', 85, '900.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_star_rating`
--

CREATE TABLE `hotel_star_rating` (
  `hotel_id` int(11) NOT NULL,
  `star_rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `link_booking`
--

CREATE TABLE `link_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `link_hotel_facility`
--

CREATE TABLE `link_hotel_facility` (
  `hotel_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `link_hotel_room`
--

CREATE TABLE `link_hotel_room` (
  `hotel_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link_hotel_room`
--

INSERT INTO `link_hotel_room` (`hotel_id`, `room_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 3),
(3, 2),
(3, 3),
(4, 1),
(4, 3),
(5, 2),
(6, 1),
(6, 2),
(6, 3),
(7, 2),
(7, 3),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE `loan_details` (
  `loan_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `my_wallet`
--

CREATE TABLE `my_wallet` (
  `wallet_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `credit` decimal(10,2) DEFAULT NULL,
  `debit` decimal(10,2) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `txn_id` varchar(10) NOT NULL,
  `txn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_wallet`
--

INSERT INTO `my_wallet` (`wallet_id`, `amount`, `credit`, `debit`, `status`, `txn_id`, `txn_date`) VALUES
(38, '101.00', '101.00', '0.00', 'C', '3278489566', '2016-01-26 09:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `net_banking`
--

CREATE TABLE `net_banking` (
  `net_banking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_password` int(11) NOT NULL,
  `transaction_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `net_banking`
--

INSERT INTO `net_banking` (`net_banking_id`, `user_id`, `login_password`, `transaction_password`) VALUES
(61, 9522544, 1247373, 8279953),
(62, 2866965, 9814515, 2514221),
(63, 2266653, 7622134, 6851743),
(64, 5916632, 3611644, 3246833),
(65, 8466514, 1533133, 6497148),
(66, 5811466, 9478518, 2261415),
(67, 2959565, 5765391, 5812131),
(68, 6918186, 6152126, 1329733),
(69, 1495963, 1153945, 8339128),
(70, 2785591, 3463598, 3284491),
(71, 4563696, 6461638, 3354448),
(72, 6786444, 4171457, 5418755),
(73, 2462159, 1571392, 2944223),
(74, 5287194, 9267159, 9612144),
(75, 1498783, 7968296, 5942915),
(76, 3992119, 4525988, 8111454),
(77, 2357337, 4824268, 2643438),
(78, 1776237, 7516589, 2999958),
(79, 1532145, 9354839, 3957394),
(80, 2673149, 9817637, 7876111);

-- --------------------------------------------------------

--
-- Table structure for table `passport_details`
--

CREATE TABLE `passport_details` (
  `passport_no` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) DEFAULT NULL,
  `L_name` varchar(20) DEFAULT NULL,
  `pass_country` varchar(20) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passport_details`
--

INSERT INTO `passport_details` (`passport_no`, `F_name`, `M_name`, `L_name`, `pass_country`, `exp_date`) VALUES
('GY8745', 'Priyanshu', 'Kumar', '', 'Guyana', '2021-06-22'),
('LKJ85214', 'Priyanshu', '', 'Sinha', 'Iceland', '2020-06-16'),
('UP98547', 'Priyanshu', 'Kumar', 'Sinha', 'India', '2020-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `profile_information`
--

CREATE TABLE `profile_information` (
  `profile_id` int(11) NOT NULL,
  `title` varchar(5) NOT NULL,
  `F_name` varchar(32) NOT NULL,
  `M_name` varchar(32) DEFAULT NULL,
  `L_name` varchar(32) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `street_add` varchar(75) DEFAULT NULL,
  `pin_code` varchar(6) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `state` varchar(32) DEFAULT NULL,
  `home_town` varchar(32) DEFAULT NULL,
  `marietal_status` varchar(10) DEFAULT NULL,
  `anniversary_date` date DEFAULT NULL,
  `image_path` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_information`
--

INSERT INTO `profile_information` (`profile_id`, `title`, `F_name`, `M_name`, `L_name`, `email_id`, `mobile_no`, `date_of_birth`, `street_add`, `pin_code`, `city`, `country`, `state`, `home_town`, `marietal_status`, `anniversary_date`, `image_path`) VALUES
(7, 'Mr.', 'Priyanshu', '', 'Sinha', 'pksinha217@gmail.com', '8896317263', '1997-01-21', 'sector-23, noida', '201301', 'Noida', 'India', '', 'Lucknow', 'Single', '2016-01-16', NULL),
(9, 'Mr.', 'Priyanshu', '', 'Sinha', '', '9795721091', '1997-01-21', 'sector-23, noida', '201301', 'noida', 'India', 'Uttar Pradesh', 'Lucknow', 'Single', '2016-01-16', NULL),
(16, 'Ms.', 'Saumya', '', 'Joshi', 'saumest1132@gmail.com', '8009343551', '2016-01-26', 'jiit,sector-62', '201301', 'noida', 'India', 'Uttar Pradesh', 'Lucknow', 'Single', '2016-01-17', 'uploaded_image/Saumya 20151205_221256.jpg'),
(17, 'Mr.', 'Priyanshu', '', 'Sinha', 'pksinha181@rediffmail.com', '8896317263', '2016-01-13', 'sdfg', '201301', 'noida', 'India', 'Uttar Pradesh', 'lucknow', 'Single', '2016-01-25', 'uploaded_image/2015-12-12_19.17.04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promo_codes`
--

CREATE TABLE `promo_codes` (
  `promo_code_id` int(11) NOT NULL,
  `promo_Code` varchar(10) DEFAULT NULL,
  `amount_percent_off` int(11) DEFAULT NULL,
  `min_amt_req` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_codes`
--

INSERT INTO `promo_codes` (`promo_code_id`, `promo_Code`, `amount_percent_off`, `min_amt_req`) VALUES
(41, 'KNAKIAA', 49, '7481.00'),
(42, 'AAADKAA', 3, '5650.00'),
(43, 'KAK6PDA', 40, '2127.00'),
(44, 'APHAFOA', 14, '7705.00'),
(45, 'AAKPAAN', 13, '3646.00'),
(46, 'AKAKAAA', 38, '2430.00'),
(47, 'EAANKAA', 47, '9508.00'),
(48, 'AKLDAAA', 40, '3045.00'),
(49, 'AAKAKAA', 47, '3679.00'),
(50, 'AAAAAKK', 14, '9267.00'),
(51, 'AAKKAKN', 10, '1630.00'),
(52, 'AAKKANq', 26, '7314.00'),
(53, 'AKAAAKL', 39, '5329.00'),
(54, 'IAFAAAA', 19, '5907.00'),
(55, 'AAAAKAI', 14, '3245.00'),
(56, 'AAKAKDN', 10, '9264.00'),
(57, 'AKAAAAA', 25, '6347.00'),
(58, 'JKKKAAP', 42, '8102.00'),
(59, 'PAFAANA', 50, '3102.00'),
(60, 'KAAAEKA', 30, '6642.00');

-- --------------------------------------------------------

--
-- Table structure for table `quota_seats`
--

CREATE TABLE `quota_seats` (
  `quota_id` int(11) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `user_id` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `MobileNo` varchar(10) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`user_id`, `Fname`, `Lname`, `MobileNo`, `emailId`, `password`, `hash`, `status`) VALUES
(2, 'Priyanshu', 'Sinha', '9958150222', 'pksinha217@gmail.com', 'Pri2si17@123', 'fa14d4fe2f19414de3ebd9f63d5c0169', 1),
(3, 'Saumya', 'Joshi', '8826037666', 'saumest1132@gmail.com', 'Being_sammy123', 'a9a1d5317a33ae8cef33961c34144f84', 1),
(25, 'Priyanshu', 'Sinha', '9958150222', 'pksinha1997@yahoo.in', 'Pri2si17@123', '9cfdf10e8fc047a44b08ed031e1f0ed1', 1),
(42, 'Priyanshu', 'Sinha', '9958150222', 'pksinha181@rediffmail.com', 'Pri2si17@123', 'f0adc8838f4bdedde4ec2cfad0515589', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg_user_link_wallet`
--

CREATE TABLE `reg_user_link_wallet` (
  `user_id` int(11) NOT NULL,
  `wallet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user_link_wallet`
--

INSERT INTO `reg_user_link_wallet` (`user_id`, `wallet_id`) VALUES
(42, 38);

-- --------------------------------------------------------

--
-- Table structure for table `reg_user_passport_link`
--

CREATE TABLE `reg_user_passport_link` (
  `user_id` int(11) NOT NULL,
  `passport_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user_passport_link`
--

INSERT INTO `reg_user_passport_link` (`user_id`, `passport_no`) VALUES
(2, 'UP98547');

-- --------------------------------------------------------

--
-- Table structure for table `reg_user_profile_link`
--

CREATE TABLE `reg_user_profile_link` (
  `user_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user_profile_link`
--

INSERT INTO `reg_user_profile_link` (`user_id`, `profile_id`) VALUES
(3, 16),
(25, 17);

-- --------------------------------------------------------

--
-- Table structure for table `reg_user_visa_link`
--

CREATE TABLE `reg_user_visa_link` (
  `user_id` int(11) NOT NULL,
  `visa_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user_visa_link`
--

INSERT INTO `reg_user_visa_link` (`user_id`, `visa_number`) VALUES
(2, 'VI9854LKJ');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_pricee` decimal(10,2) NOT NULL,
  `room_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_pricee`, `room_type`) VALUES
(1, '2640.00', 'Executive'),
(2, '3550.00', 'Delux'),
(3, '4500.00', 'Super Delux');

-- --------------------------------------------------------

--
-- Table structure for table `running_days`
--

CREATE TABLE `running_days` (
  `day_id` int(11) NOT NULL,
  `day_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_id` int(11) NOT NULL,
  `train_name` varchar(20) NOT NULL,
  `train_no` int(5) NOT NULL,
  `departure_city` varchar(50) NOT NULL,
  `arrival_city` varchar(50) NOT NULL,
  `dep_date` date NOT NULL,
  `arr_date` date NOT NULL,
  `dep_time` varchar(10) NOT NULL,
  `arr_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_id`, `train_name`, `train_no`, `departure_city`, `arrival_city`, `dep_date`, `arr_date`, `dep_time`, `arr_time`) VALUES
(1, 'NDLS CNB Shatabdi', 12034, 'CNB', 'NDLS', '2016-02-08', '2016-02-08', '15:50', '20:50'),
(2, 'KALKA Shatabdi', 12012, 'CNB', 'NDLS', '2016-02-08', '2016-02-08', '17:45', '21:55'),
(3, 'KASHI V Express', 14258, 'CNB', 'NDLS', '2016-02-09', '2016-02-09', '11:35', '4:45'),
(4, 'BKN DEE S F Express', 12458, 'CNB', 'NDLS', '2016-02-09', '2016-02-10', '22:20', '06:10'),
(5, 'UMB INTERCITY', 14526, 'CNB', 'NDLS', '2016-02-08', '2016-02-08', '14:00', '20:55'),
(6, 'INTERCITY EXPRESS', 11452, 'CNB', 'NDLS', '2016-02-09', '2016-02-09', '6:00', '10:25'),
(7, 'SMNH JBP EXPRESS', 11463, 'CNB', 'NDLS', '2016-02-09', '2016-02-09', '9:30', '15:10'),
(8, 'PUSHPAK Express', 12534, 'CNB', 'NDLS', '2016-02-08', '2016-02-09', '8:20', '8:40'),
(9, 'MAHABODHI Express', 12398, 'CNB', 'NDLS', '2016-02-08', '2016-02-09', '12:10', '5:25'),
(10, 'LJN R GARIBRATH', 12535, 'CNB', 'NDLS', '2016-02-11', '2016-02-12', '14:25', '7:15');

-- --------------------------------------------------------

--
-- Table structure for table `train_class`
--

CREATE TABLE `train_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_class`
--

INSERT INTO `train_class` (`class_id`, `class_name`) VALUES
(1, 'Sleeper'),
(2, '2S'),
(3, 'Third AC'),
(4, 'Second AC'),
(5, 'First AC'),
(6, 'AC Chair');

-- --------------------------------------------------------

--
-- Table structure for table `train_class_link`
--

CREATE TABLE `train_class_link` (
  `train_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `class_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_class_link`
--

INSERT INTO `train_class_link` (`train_id`, `class_id`, `class_name`) VALUES
(1, 6, 'AC Chair'),
(2, 6, 'AC Chair'),
(3, 1, 'Sleeper'),
(3, 3, 'Third AC'),
(3, 4, 'Second AC'),
(3, 5, 'First AC'),
(4, 1, 'Sleeper'),
(4, 3, 'Third AC'),
(4, 4, 'Second AC'),
(5, 1, 'Sleeper'),
(6, 1, 'Sleeper'),
(7, 1, 'Sleeper'),
(7, 3, 'Third AC'),
(7, 4, 'Second AC'),
(8, 1, 'Sleeper'),
(8, 3, 'Third AC'),
(8, 4, 'Second AC'),
(8, 5, 'First AC'),
(9, 1, 'Sleeper'),
(9, 3, 'Third AC'),
(9, 4, 'Second AC'),
(9, 5, 'First AC'),
(10, 1, 'Sleeper'),
(10, 3, 'Third AC');

-- --------------------------------------------------------

--
-- Table structure for table `train_fare`
--

CREATE TABLE `train_fare` (
  `train_id` int(11) NOT NULL,
  `fare` decimal(3,2) NOT NULL,
  `class` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_quota`
--

CREATE TABLE `train_quota` (
  `quota_id` int(11) NOT NULL,
  `quota_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_quota_link`
--

CREATE TABLE `train_quota_link` (
  `train_id` int(11) NOT NULL,
  `quota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_running_days`
--

CREATE TABLE `train_running_days` (
  `train_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_seats`
--

CREATE TABLE `train_seats` (
  `train_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `seats` int(11) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_seats`
--

INSERT INTO `train_seats` (`train_id`, `class_id`, `seats`, `price`) VALUES
(1, 6, 145, '845.00'),
(2, 6, 72, '845.00'),
(3, 1, 10, '265.00'),
(3, 3, 88, '765.00'),
(3, 4, 15, '1250.00'),
(3, 5, 6, '2200.00'),
(4, 1, 32, '265.00'),
(4, 3, 18, '765.00'),
(4, 4, 2, '1250.00'),
(5, 1, 172, '265.00'),
(6, 1, 88, '265.00'),
(7, 1, 74, '265.00'),
(7, 3, 88, '765.00'),
(7, 4, 21, '1250.00'),
(8, 1, 23, '265.00'),
(8, 3, 45, '765.00'),
(8, 4, 12, '1250.00'),
(8, 5, 1, '2200.00'),
(9, 1, 32, '265.00'),
(9, 3, 20, '765.00'),
(9, 4, 12, '1250.00'),
(9, 5, 7, '2200.00'),
(10, 3, 145, '555.00'),
(10, 6, 485, '355.00');

-- --------------------------------------------------------

--
-- Table structure for table `visa_details`
--

CREATE TABLE `visa_details` (
  `visa_number` varchar(20) NOT NULL,
  `country_issued` varchar(32) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_details`
--

INSERT INTO `visa_details` (`visa_number`, `country_issued`, `expiry_date`) VALUES
('VI9854LKJ', 'Angola', '2017-06-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_promo_code`
--
ALTER TABLE `applied_promo_code`
  ADD PRIMARY KEY (`wallet_id`,`promo_code_id`),
  ADD KEY `promo_code_id` (`promo_code_id`);

--
-- Indexes for table `associate_promo_code`
--
ALTER TABLE `associate_promo_code`
  ADD PRIMARY KEY (`wallet_id`,`promo_code_id`),
  ADD KEY `promo_code_id` (`promo_code_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cabs`
--
ALTER TABLE `cabs`
  ADD PRIMARY KEY (`cab_id`);

--
-- Indexes for table `cost_per_person`
--
ALTER TABLE `cost_per_person`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `fb_users`
--
ALTER TABLE `fb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fb_user_passport_link`
--
ALTER TABLE `fb_user_passport_link`
  ADD PRIMARY KEY (`user_id`,`passport_no`),
  ADD KEY `passport_no` (`passport_no`);

--
-- Indexes for table `fb_user_profile_link`
--
ALTER TABLE `fb_user_profile_link`
  ADD PRIMARY KEY (`user_id`,`profile_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `fb_user_visa_link`
--
ALTER TABLE `fb_user_visa_link`
  ADD PRIMARY KEY (`user_id`,`visa_number`),
  ADD KEY `visa_number` (`visa_number`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `google_user`
--
ALTER TABLE `google_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_user_passport_link`
--
ALTER TABLE `google_user_passport_link`
  ADD PRIMARY KEY (`user_id`,`passport_no`),
  ADD KEY `passport_no` (`passport_no`);

--
-- Indexes for table `google_user_profile_link`
--
ALTER TABLE `google_user_profile_link`
  ADD PRIMARY KEY (`user_id`,`profile_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `google_user_visa_link`
--
ALTER TABLE `google_user_visa_link`
  ADD PRIMARY KEY (`user_id`,`visa_number`),
  ADD KEY `visa_number` (`visa_number`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_star_rating`
--
ALTER TABLE `hotel_star_rating`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `link_booking`
--
ALTER TABLE `link_booking`
  ADD PRIMARY KEY (`booking_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `link_hotel_facility`
--
ALTER TABLE `link_hotel_facility`
  ADD PRIMARY KEY (`hotel_id`,`facility_id`),
  ADD KEY `facility_id` (`facility_id`);

--
-- Indexes for table `link_hotel_room`
--
ALTER TABLE `link_hotel_room`
  ADD PRIMARY KEY (`hotel_id`,`room_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `my_wallet`
--
ALTER TABLE `my_wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- Indexes for table `net_banking`
--
ALTER TABLE `net_banking`
  ADD PRIMARY KEY (`net_banking_id`);

--
-- Indexes for table `passport_details`
--
ALTER TABLE `passport_details`
  ADD PRIMARY KEY (`passport_no`);

--
-- Indexes for table `profile_information`
--
ALTER TABLE `profile_information`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`promo_code_id`);

--
-- Indexes for table `quota_seats`
--
ALTER TABLE `quota_seats`
  ADD PRIMARY KEY (`quota_id`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reg_user_link_wallet`
--
ALTER TABLE `reg_user_link_wallet`
  ADD PRIMARY KEY (`user_id`,`wallet_id`),
  ADD KEY `wallet_id` (`wallet_id`);

--
-- Indexes for table `reg_user_passport_link`
--
ALTER TABLE `reg_user_passport_link`
  ADD PRIMARY KEY (`user_id`,`passport_no`),
  ADD KEY `passport_no` (`passport_no`);

--
-- Indexes for table `reg_user_profile_link`
--
ALTER TABLE `reg_user_profile_link`
  ADD PRIMARY KEY (`user_id`,`profile_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `reg_user_visa_link`
--
ALTER TABLE `reg_user_visa_link`
  ADD PRIMARY KEY (`user_id`,`visa_number`),
  ADD KEY `visa_number` (`visa_number`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `running_days`
--
ALTER TABLE `running_days`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `train_class`
--
ALTER TABLE `train_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `train_class_link`
--
ALTER TABLE `train_class_link`
  ADD PRIMARY KEY (`train_id`,`class_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `train_fare`
--
ALTER TABLE `train_fare`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `train_quota`
--
ALTER TABLE `train_quota`
  ADD PRIMARY KEY (`quota_id`);

--
-- Indexes for table `train_quota_link`
--
ALTER TABLE `train_quota_link`
  ADD PRIMARY KEY (`train_id`,`quota_id`),
  ADD KEY `quota_id` (`quota_id`);

--
-- Indexes for table `train_running_days`
--
ALTER TABLE `train_running_days`
  ADD PRIMARY KEY (`train_id`,`day_id`),
  ADD KEY `day_id` (`day_id`);

--
-- Indexes for table `train_seats`
--
ALTER TABLE `train_seats`
  ADD PRIMARY KEY (`train_id`,`class_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `visa_details`
--
ALTER TABLE `visa_details`
  ADD PRIMARY KEY (`visa_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cabs`
--
ALTER TABLE `cabs`
  MODIFY `cab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10111;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fb_users`
--
ALTER TABLE `fb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `google_user`
--
ALTER TABLE `google_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `my_wallet`
--
ALTER TABLE `my_wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `net_banking`
--
ALTER TABLE `net_banking`
  MODIFY `net_banking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `profile_information`
--
ALTER TABLE `profile_information`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `promo_code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied_promo_code`
--
ALTER TABLE `applied_promo_code`
  ADD CONSTRAINT `applied_promo_code_ibfk_1` FOREIGN KEY (`wallet_id`) REFERENCES `my_wallet` (`wallet_id`),
  ADD CONSTRAINT `applied_promo_code_ibfk_2` FOREIGN KEY (`promo_code_id`) REFERENCES `promo_codes` (`promo_code_id`);

--
-- Constraints for table `associate_promo_code`
--
ALTER TABLE `associate_promo_code`
  ADD CONSTRAINT `associate_promo_code_ibfk_1` FOREIGN KEY (`wallet_id`) REFERENCES `my_wallet` (`wallet_id`),
  ADD CONSTRAINT `associate_promo_code_ibfk_2` FOREIGN KEY (`promo_code_id`) REFERENCES `promo_codes` (`promo_code_id`);

--
-- Constraints for table `cost_per_person`
--
ALTER TABLE `cost_per_person`
  ADD CONSTRAINT `cost_per_person_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flights` (`flight_id`);

--
-- Constraints for table `fb_user_passport_link`
--
ALTER TABLE `fb_user_passport_link`
  ADD CONSTRAINT `fb_user_passport_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fb_users` (`id`),
  ADD CONSTRAINT `fb_user_passport_link_ibfk_2` FOREIGN KEY (`passport_no`) REFERENCES `passport_details` (`passport_no`);

--
-- Constraints for table `fb_user_profile_link`
--
ALTER TABLE `fb_user_profile_link`
  ADD CONSTRAINT `fb_user_profile_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fb_users` (`id`),
  ADD CONSTRAINT `fb_user_profile_link_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `profile_information` (`profile_id`);

--
-- Constraints for table `fb_user_visa_link`
--
ALTER TABLE `fb_user_visa_link`
  ADD CONSTRAINT `fb_user_visa_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fb_users` (`id`),
  ADD CONSTRAINT `fb_user_visa_link_ibfk_2` FOREIGN KEY (`visa_number`) REFERENCES `visa_details` (`visa_number`);

--
-- Constraints for table `google_user_passport_link`
--
ALTER TABLE `google_user_passport_link`
  ADD CONSTRAINT `google_user_passport_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `google_user` (`id`),
  ADD CONSTRAINT `google_user_passport_link_ibfk_2` FOREIGN KEY (`passport_no`) REFERENCES `passport_details` (`passport_no`);

--
-- Constraints for table `google_user_profile_link`
--
ALTER TABLE `google_user_profile_link`
  ADD CONSTRAINT `google_user_profile_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `google_user` (`id`),
  ADD CONSTRAINT `google_user_profile_link_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `profile_information` (`profile_id`);

--
-- Constraints for table `google_user_visa_link`
--
ALTER TABLE `google_user_visa_link`
  ADD CONSTRAINT `google_user_visa_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `google_user` (`id`),
  ADD CONSTRAINT `google_user_visa_link_ibfk_2` FOREIGN KEY (`visa_number`) REFERENCES `visa_details` (`visa_number`);

--
-- Constraints for table `hotel_star_rating`
--
ALTER TABLE `hotel_star_rating`
  ADD CONSTRAINT `hotel_star_rating_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`);

--
-- Constraints for table `link_booking`
--
ALTER TABLE `link_booking`
  ADD CONSTRAINT `link_booking_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `link_booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `reg_user` (`user_id`);

--
-- Constraints for table `link_hotel_facility`
--
ALTER TABLE `link_hotel_facility`
  ADD CONSTRAINT `link_hotel_facility_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`),
  ADD CONSTRAINT `link_hotel_facility_ibfk_2` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`facility_id`);

--
-- Constraints for table `link_hotel_room`
--
ALTER TABLE `link_hotel_room`
  ADD CONSTRAINT `link_hotel_room_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`),
  ADD CONSTRAINT `link_hotel_room_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD CONSTRAINT `loan_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `reg_user` (`user_id`);

--
-- Constraints for table `quota_seats`
--
ALTER TABLE `quota_seats`
  ADD CONSTRAINT `quota_seats_ibfk_1` FOREIGN KEY (`quota_id`) REFERENCES `train_quota` (`quota_id`);

--
-- Constraints for table `reg_user_link_wallet`
--
ALTER TABLE `reg_user_link_wallet`
  ADD CONSTRAINT `reg_user_link_wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `reg_user` (`user_id`),
  ADD CONSTRAINT `reg_user_link_wallet_ibfk_2` FOREIGN KEY (`wallet_id`) REFERENCES `my_wallet` (`wallet_id`);

--
-- Constraints for table `reg_user_passport_link`
--
ALTER TABLE `reg_user_passport_link`
  ADD CONSTRAINT `reg_user_passport_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `reg_user` (`user_id`),
  ADD CONSTRAINT `reg_user_passport_link_ibfk_2` FOREIGN KEY (`passport_no`) REFERENCES `passport_details` (`passport_no`),
  ADD CONSTRAINT `reg_user_passport_link_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `reg_user` (`user_id`);

--
-- Constraints for table `reg_user_profile_link`
--
ALTER TABLE `reg_user_profile_link`
  ADD CONSTRAINT `reg_user_profile_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `reg_user` (`user_id`),
  ADD CONSTRAINT `reg_user_profile_link_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `profile_information` (`profile_id`);

--
-- Constraints for table `reg_user_visa_link`
--
ALTER TABLE `reg_user_visa_link`
  ADD CONSTRAINT `reg_user_visa_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `reg_user` (`user_id`),
  ADD CONSTRAINT `reg_user_visa_link_ibfk_2` FOREIGN KEY (`visa_number`) REFERENCES `visa_details` (`visa_number`);

--
-- Constraints for table `train_class_link`
--
ALTER TABLE `train_class_link`
  ADD CONSTRAINT `train_class_link_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `train` (`train_id`),
  ADD CONSTRAINT `train_class_link_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `train_class` (`class_id`);

--
-- Constraints for table `train_fare`
--
ALTER TABLE `train_fare`
  ADD CONSTRAINT `train_fare_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `train` (`train_id`);

--
-- Constraints for table `train_quota_link`
--
ALTER TABLE `train_quota_link`
  ADD CONSTRAINT `train_quota_link_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `train` (`train_id`),
  ADD CONSTRAINT `train_quota_link_ibfk_2` FOREIGN KEY (`quota_id`) REFERENCES `train_quota` (`quota_id`);

--
-- Constraints for table `train_running_days`
--
ALTER TABLE `train_running_days`
  ADD CONSTRAINT `train_running_days_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `train` (`train_id`),
  ADD CONSTRAINT `train_running_days_ibfk_2` FOREIGN KEY (`day_id`) REFERENCES `running_days` (`day_id`);

--
-- Constraints for table `train_seats`
--
ALTER TABLE `train_seats`
  ADD CONSTRAINT `train_seats_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `train` (`train_id`),
  ADD CONSTRAINT `train_seats_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `train_class` (`class_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
