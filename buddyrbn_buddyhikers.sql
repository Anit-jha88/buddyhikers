-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2025 at 10:57 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buddyrbn_buddyhikers`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `image`) VALUES
(3, 'banner 2', 'uploads/1708810394_home3-banner-img2.jpg'),
(4, 'Banner 3', 'uploads/1729507570_g.php'),
(5, 'Mm', 'uploads/1726286541_IMG_20240124_093055_723.jpg'),
(6, 'Rafting Expedition ', 'uploads/1728459271_WhatsApp Image 2024-10-09 at 13.02.41_92764868.jpg'),
(7, 'srinagar watersports ', 'uploads/1728459432_WhatsApp Image 2024-10-09 at 13.02.42_1a8fd6e3.jpg'),
(8, 'hwkwr', 'uploads/1744733161_phpfm.php');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(11) NOT NULL,
  `commonid` int(11) NOT NULL,
  `date_range` varchar(255) NOT NULL,
  `availity` varchar(255) NOT NULL,
  `batchesfor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `commonid`, `date_range`, `availity`, `batchesfor`) VALUES
(15, 18, '17-Feb To 20-Feb', 'Available', ''),
(16, 18, '17-Feb To 21-Feb', 'Available', ''),
(21, 20, '17-Feb To 20-Feb', 'Full', ''),
(22, 20, '17-Feb To 21-Feb', 'Full', ''),
(27, 21, '17-Feb To 20-Feb', 'Available', ''),
(28, 21, '17-Feb To 21-Feb', 'Full', ''),
(44, 17, '17-Feb To 20-Feb', 'Available', 'Track'),
(45, 17, '17-Feb To 21-Feb', 'Full', 'Track'),
(54, 22, '17-Feb To 20-Feb', 'Available', 'Track'),
(55, 22, '18-Feb To 22-Feb', 'Full', 'Track'),
(56, 23, '17-Feb To 20-Feb', 'Available', 'Track'),
(57, 23, '17-Feb To 21-Feb', 'Full', 'Track'),
(60, 24, '31-03-2024', 'Full', 'Track'),
(61, 24, '05-04-2024', 'Available', 'Track'),
(81, 29, '', 'Available', 'Track'),
(82, 30, 'asdasd', 'Available', 'Track'),
(108, 20, '17-Feb To 20-Feb', 'Available', 'Backpacking'),
(123, 19, 'On Booking', 'Available', 'Caravantours'),
(149, 28, '15 Aug to 18Aug', 'Available', 'Track'),
(170, 32, 'On Booking', 'Available', 'Caravantours'),
(178, 18, '14 Feb to17 Feb', 'Available', 'Watersports'),
(179, 18, '13 march to 16 March', 'Available', 'Watersports'),
(180, 18, '18 April to 21 April', 'Available', 'Watersports'),
(181, 25, '13 march to 17 march 2025', 'Available', 'Track'),
(182, 25, '29 march to 2 April 2025', 'Available', 'Track'),
(183, 25, '14 April to 18 April 2025', 'Available', 'Track'),
(184, 25, '18 April to 22 April', 'Available', 'Track'),
(185, 25, '10 May to 14 May ', 'Available', 'Track'),
(186, 25, '', 'Available', 'Track'),
(187, 26, '13 march to 17 march 2025', 'Available', 'Track'),
(188, 26, '29 March to 2 April 2025', 'Available', 'Track'),
(189, 26, '18 April to 22 April 2025', 'Available', 'Track'),
(190, 27, '12 July to 18  July 2025', 'Available', 'Track'),
(191, 31, '22 Jun to 26 Jun 2025', 'Available', 'Track');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `meta_field` text,
  `meta_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`meta_field`, `meta_value`) VALUES
('mobile', '(+91) 123 456 7890'),
('email', 'info@royalenterprises.com'),
('facebook', 'https://facebook.com/profile'),
('twitter', '#'),
('linkin', '#'),
('address', '<p><strong>Above Dominos Pizza,</strong>K.R.Puram, Bangalore - 560036</p>'),
('heading', 'We offer the most complete house renovating services in the country\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `includeandexclude`
--

CREATE TABLE `includeandexclude` (
  `id` int(11) NOT NULL,
  `commonid` int(11) NOT NULL,
  `included` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excluded` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `includeandexcludefor` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `includeandexclude`
--

INSERT INTO `includeandexclude` (`id`, `commonid`, `included`, `excluded`, `includeandexcludefor`) VALUES
(2, 30, 'sdsad', 'dddd', 'Track'),
(3, 30, 'sadsad', 'sadasd', 'Track'),
(36, 20, 'Meal As Per Hotel Plan And Drinks Free Too.', 'AC Will Not Be Functional On Hills Or Slopes.', 'Backpacking'),
(37, 20, 'Return Airport And Round Trip Transfers.', 'Any Other Service Not Mentioned', 'Backpacking'),
(68, 19, 'Return Airport And Round Trip Transfers.', 'AC Will Not Be Functional On Hills Or Slopes.', 'Caravantours'),
(69, 19, 'Accommodation On Twin Sharing Basis.', 'Any Other Service Not Mentioned', 'Caravantours'),
(113, 28, 'food, stay, forest permit, trek leader', 'personal expense', 'Track'),
(125, 32, '', '', 'Caravantours'),
(129, 18, '', '  Any kind of personal expenses.  Personal Toiletries  Insurance. ', 'Watersports'),
(130, 18, 'Accommodation hotel/Tents / 2 sharing Basis /', 'Any Other Service Not Mentioned', 'Watersports'),
(131, 25, ' Accommodation. (Home stay,Rest house,tents (2 Sharing Basis). ⛺ Sleeping Bag, Mattress, Inner,tents,Toilet Tent, Kitchen Tent etc. ', '', 'Track'),
(132, 25, '', '', 'Track'),
(133, 25, 'Accommodation On Twin Sharing Basis.', '', 'Track'),
(134, 26, 'Meals: veg only - Breakfast, lunch & dinner', 'Transport back and forth from Rishikesh to Tugashi', 'Track'),
(135, 26, 'Experienced Trek Leader, Professional Guides and a very supportive staff', 'Any kind of personal expense', 'Track'),
(136, 26, 'Forest permits', 'Personal porter/mule charges', 'Track'),
(137, 26, 'Medical Amenities - First aid kits, oxymeters, oxygen cylinders', 'Cost of Evacuation in case of emergency', 'Track'),
(138, 26, 'Sanitised and Hygienic campsite, Dome Tents, and sleeping bag ', 'Personal travel insurance', 'Track'),
(139, 26, '', 'Single tent supplements (optional at extra cost)', 'Track'),
(140, 27, 'Accommodation. (Home stay,Rest house,tents (2 Sharing Basis).', 'Any kind of personal expenses.', 'Track'),
(141, 27, 'Sleeping Bag, Mattress, Inner,tents,Toilet Tent, Kitchen Tent etc.', 'Personal Toiletries', 'Track'),
(142, 27, 'All Meals while on trek & (Veg, Egg).', 'Insurance.', 'Track'),
(143, 27, 'Refreshments, Soup Tea etc.', 'Anything not specifically mentioned under the head ', 'Track'),
(144, 27, 'First Aid kit.', 'Meals during Travel.', 'Track'),
(145, 27, 'Iner line & forest Permits.& technical equipments.', 'Any cost arising due to bad weather, Road block, Political Issue, Local  Issue, Natural Calamities.', 'Track'),
(146, 27, 'Trek Leader, Guide, cook and supporting staff.', 'Porter to carry personal luggage, will Charges Extra. ', 'Track'),
(147, 31, 'Accommodation (4 nights in tent stay on sharing basis)', 'Unscheduled stay due to road blocks etc.', 'Track'),
(148, 31, 'Meals while on trek (hygienic vegetarian food) which included breakfast, packed lunch and dinner', 'Rucksack with a rain cover (50 to 60 liters)', 'Track'),
(149, 31, 'Qualified & experienced trek guide', 'Day Sack with rain cover (30 to 40 liters)', 'Track');

-- --------------------------------------------------------

--
-- Table structure for table `Inquiries`
--

CREATE TABLE `Inquiries` (
  `id` int(11) NOT NULL,
  `fname` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lookingfor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `msg` text COLLATE utf8_unicode_ci NOT NULL,
  `all_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Inquiries`
--

INSERT INTO `Inquiries` (`id`, `fname`, `lname`, `email`, `phone`, `lookingfor`, `msg`, `all_date`) VALUES
(4, 'MKS', 'Technosoft', 'tassks103@gmail.com', '8553281855', 'Treks', 'aaaaaaaaaaaaa', '2024-03-05 20:30:36'),
(13, 'Manoj', 'Kumar', 'manojgkumarg63@gmail.com', '7503025157', 'Stay', '', '2024-04-05 07:49:08'),
(14, 'Jasmine ', 'Sajwan ', 'jasminesajwan123@gmail.com', '6397660966', 'Watersports', 'I want to experience rafting as I never had . What is the price range for rafting from Srinagar to rishikesh.. ', '2024-04-09 15:45:52'),
(15, 'Priyanshu', 'Rajput', 'pr6419509@gmail.com', '7078530490', 'Watersports', '', '2024-04-15 15:30:39'),
(16, 'Ashish ', 'Dubey', 'testashish2010@gmail.com', '9654239948', 'Stay', '', '2024-04-15 15:41:46'),
(17, 'MANOJ', 'PANDEY', 'MANOJPANDEYFD@GMAIL.COM', '9015444308', 'Watersports', '', '2024-04-29 12:47:12'),
(18, 'Rajkumar ', 'Sinha ', 'Sinharaj1507@gmail.com', '9819609066', 'Stay', 'Wish to stay from 15th till 18 May 2024', '2024-05-02 03:04:06'),
(19, 'Manoj', 'pandey', 'Manojpandeyfd@gmail.com', '9015444308', 'Watersports', '', '2024-05-10 11:04:16'),
(20, 'Nowshad', 'A', 'abd.nsd@gmail.com', '8880599080', 'Stay', 'Need one night stay', '2024-05-10 14:21:39'),
(21, 'Manash', 'Rawat', 'rawatmanas43@gmail.com', '9068085745', 'Rentals', 'Hloo', '2024-05-14 12:30:36'),
(22, 'Manash', 'Rawat', 'rawatmanas43@gmail.com', '9068085745', 'Treks', 'Plesssss suggest some small bujet ', '2024-05-14 12:33:34'),
(23, 'Sachin', 'Gs', 'gs.sachin@gmail.com', '9481459327', 'Stay', 'We 12adults and 5 Kids we want 6 tents for 1 day 27th May -28th May', '2024-05-16 04:02:41'),
(24, 'PAVAN', 'MACHAVARAPU', 'pavan.2521@gmail.com', '7837834305', 'Stay', 'I NEED 1  ROOM FOR 14 TH TO 16 JUNE FOR TWO PEOPLE', '2024-06-10 06:50:52'),
(25, 'Mansi', 'Vyas', 'mehervyas85@gmail.com', '8154089043', 'Treks', 'Looking forward to challenge my limits', '2024-07-25 18:23:04'),
(26, 'Abhijeet', 'Singh', 'abhijeetsinghchauhan777@gmail.com', '9131162946', 'Treks', '', '2024-07-26 05:57:26'),
(27, '', '', '', '', '', '', '2024-08-07 09:47:27'),
(28, 'Varun', 'Singh', 'varunkishorr@gmail.com', '9833733408', 'Treks', '', '2024-08-18 04:50:17'),
(29, 'Abeer', 'Nigam ', 'emailabeer@gmail.com', '7738077101', 'Watersports', '', '2024-08-24 07:51:27'),
(30, 'Sayan', 'Das', 'sayan.das20037@gmail.com', '6291359257', 'Treks', 'I am a 21 years old boy, I want to do my 1st trek on Himalayas on December end, so Kauri Pass I thought I should do, or it can change, can you share your dates and suggest any other trek?', '2024-08-25 07:46:57'),
(31, 'Swastika ', 'Ghosh ', 'swastikag04@gmail.com', '9748603818', 'Treks', '', '2024-09-11 16:47:47'),
(32, 'Sima', 'Guhathakurta', 'simaguhathakurta7@gmail.com', '9830069270', 'Stay', '30 th October at Badrinath... for two people a room with washroom.... available to book?....if yes then tarrif please ', '2024-09-14 19:00:27'),
(33, 'Aniket', 'Sharma', 'aniket.iiml@gmail.com', '7838419791', 'Treks', 'Looking for a medium difficult trek 5-6 days in Nov 2024', '2024-09-23 15:53:50'),
(34, 'Anita2014', 'Rau', 'princess.dach@recodz.com', '7401167718', 'Stay', '', '2024-09-27 08:31:15'),
(36, 'Dariana', 'Rau', 'princess.dach@recodz.com', '7401167718', 'Caravan Tours', '', '2024-09-27 08:31:56'),
(37, 'princess.dach@recodz.com', 'Rau', 'ghowell00@yahoo.com', '7401167718', 'Rentals', '', '2024-09-27 08:32:18'),
(42, 'Pattie2009', 'Wintheiser', 'paolo_schoen61@recodz.com', '7401167718', 'Treks', '', '2024-09-27 08:37:38'),
(43, 'Ashok', 'Choudhary ', 'ashok_rudra122@yahoo.co.in', '9652771023', 'Treks', 'Looking for any 5 day trek moderate to difficult', '2024-09-29 08:34:45'),
(45, 'Anshika', 'Kala', 'kalaanshika6@gmail.com', '7060934665', 'Treks', '', '2024-10-29 13:43:39'),
(46, 'Kushal', 'Patel ', 'kushalpatel025@gmail.com', '8109969882', 'Treks', 'I m interested in Kuari pass trek ', '2024-11-01 18:37:01'),
(47, 'Sudipta', 'Dad', 'sudiptad349@gmail.com', '8617217451', 'Treks', 'I need the details of kuari pass trek', '2024-11-03 07:58:34'),
(48, 'Inderjit', 'Bhalla', 'bhallainderjit@gmail.com', '6043779156', 'Stay', '', '2024-11-19 23:11:36'),
(49, 'Zeel', 'Parmar ', 'zealparmar8@gmail.com', '7226976248', 'Treks', '', '2024-12-11 18:00:32'),
(50, 'Shashank', 'Dubey', 'dubeyji.shashank89@gmail.com', '9582867363', 'Treks', 'Kuari pass trek for family ', '2025-01-27 14:22:28'),
(51, 'Sarveswara Reddy', 'Goluguri ', 'sarveswara.g@gmail.com', '9490802', 'Stay', '', '2025-02-03 17:52:51'),
(52, 'kushal', 'yadav', 'kushalyadav2601@gmail.com', '9079360140', 'Treks', '', '2025-03-03 20:46:30'),
(53, 'MITHI', 'DEY', 'mithidey252003@gmail.com', '6289387547', 'Treks', '', '2025-03-06 07:21:28'),
(54, 'Shankaran', 'Srinivasan', 'shankarta100@gmail.com', '9769883581', 'Stay', 'May 15th to May 26. We are a  group of around  10 Adults. Looking for closer to Saraswati River. I am assuming Mana Village. Our requirement is (1) Non Smoking (2) Kitchen/Gas/Stove for cooking.', '2025-03-08 09:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `Itinerary`
--

CREATE TABLE `Itinerary` (
  `id` int(11) NOT NULL,
  `commonid` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `Itineraryfor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Itinerary`
--

INSERT INTO `Itinerary` (`id`, `commonid`, `activity`, `description`, `Itineraryfor`) VALUES
(29, 21, 'Departure', 'Arrive Cairo airport, welcome greeting by our representative who will assist you and provide transfers to your Hotel in Cairo. (the clients will inform us about their arrival time minimum 7 days before)', 'Track'),
(30, 21, 'Adventure', 'Arrive Cairo airport, welcome greeting by our representative who will assist you and provide transfers to your Hotel in Cairo. (the clients will inform us about their arrival time minimum 7 days before)', 'Track'),
(49, 17, ' Departure', 'Arrive Cairo airport, welcome greeting by our representative who will assist you and provide tra nsfers to your Hotel in Cairo. (the clients will inform us about their arrival time minimum 7 days before)', 'Track'),
(50, 17, 'Adventure Beggins', 'Arrive Cairo airport, welcome greeting by our representative who will assist you and provide tra nsfers to your Hotel in Cairo. (the clients will inform us about their arrival time minimum 7 days before)', 'Track'),
(51, 17, 'Historical Tour', 'Arrive Cairo airport, welcome greeting by our representative who will assist you and provide tra nsfers to your Hotel in Cairo. (the clients will inform us about their arrival time minimum 7 days before)', 'Track'),
(62, 22, 'Departure', 'Arrive Cairo airport, welcome greeting by our representative who will assist you and provide tra nsfers to your Hotel in Cairo. (the clients will inform us about their arrival time minimum 7 days before)', 'Track'),
(63, 22, 'Departure and ', 'Arrive Cairo airport, welcome greeting by our representative who will assist you and provide tra nsfers to your Hotel in Cairo. (the clients will inform us about their arrival time minimum 7 days before)', 'Track'),
(64, 23, 'Departure', 'hfds fjdhs hfksdah kfhsdak hjfksdajhf skadj hfsdakjf hsdkjf hasdkjfhdskf sdhfsadkjfh', 'Track'),
(68, 24, 'day 1', 'guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z  guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z  guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z', 'Track'),
(69, 24, 'day 2', 'guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z  guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z  guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z', 'Track'),
(70, 24, 'day 3', 'guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z  guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z  guijoksxkasl,zx z guijoksxkasl,zx z guijoksxkasl,zx z', 'Track'),
(119, 29, '', '', 'Track'),
(120, 30, 'ssds', 'sdasd', 'Track'),
(181, 20, 'AsaS', 'as', 'Backpacking'),
(182, 20, 'aS', 'AssAS', 'Backpacking'),
(224, 19, 'Day 1', 'Arrival & Nature Exploration\r\nMorning: Departure from Rishikesh and travel to the chosen campsite./Khirsu village\r\nSet up camp and settle into the surroundings.\r\nAfternoon:Lunch at the campsite.\r\nExplore nearby nature trails, go for a hike, or simply relax in nature.\r\nEvening Gather around a campfire, cook dinner together, and share stories.\r\nStargazing session.', 'Caravantours'),
(225, 19, 'Day 2', 'dventure & Sightseeing\r\nMorning Breakfast at the campsite.\r\nPlan an adventure activity such as jungle walk\r\nAfternoon:Picnic lunch at a scenic spot\r\nVisit local attractions or landmarks nearby./(Dharidevi temple)\r\nEvening Return to the campsite for a barbecue dinner.\r\nPlay games or have a group activity.', 'Caravantours'),
(226, 19, 'Day 3', 'Relaxation & Departure\r\n\r\nMorning Leisurely breakfast and packing up camp.\r\nLast-minute nature walk or relaxation.\r\nAfternoon:Check-out from the campsite and begin the journey back home.\r\nOptional stop at a local café or market for lunch.\r\nEvening Arrive back Rishikesh, unpack, and reminisce about the trip', 'Caravantours'),
(296, 28, 'Day 1', 'Day 1: Rishikesh to Raithal\r\nMorning:\r\nDepart from Rishikesh early in the morning, .\r\nTravel through scenic routes via Uttarkashi, taking breaks for breakfast and short sightseeing.\r\n\r\nEvening\r\nExplore Raithal village, interact with locals, and enjoy the surrounding views.\r\nDinner and overnight stay in Raithal', 'Track'),
(297, 28, 'Day2', 'Morning:\r\nEarly breakfast and start the trek to Dayara Bugyal (approx. 8 km, 3-4 hours).\r\nReach Dayara Bugyal and participate in the Butter Festival (Anduri Utsav).\r\nEnjoy cultural performances, local food, and festivities.\r\nEvening:\r\nStay Dinner under the stars and overnight stay.', 'Track'),
(298, 28, 'Day 3', 'Day 3: Dayara Bugyal to Harsil\r\nBreakfast at the campsite.\r\nTrek back to Raithal.\r\nDepart for Harsil (approx. 2.5-3 hours drive).\r\nArrive in Harsil by early afternoon.\r\nExplore Harsil village, known for its apple orchards and beautiful landscapes.\r\nVisit the nearby Wilson Cottage and enjoy a walk along the Bhagirathi River.\r\nDinner and overnight stay in Harsil.\r\n', 'Track'),
(299, 28, 'Day4', 'Day 4: Harsil to Rishikesh\r\nEarly breakfast and departure from Harsil.\r\nArrive in Rishikesh by late afternoon/early evening.\r\nTrip concludes in Rishikesh.', 'Track'),
(318, 32, 'Day 1', 'Rishikesh to Joshimath\r\n\r\nStart your journey from Rishikesh towards Joshimath early in the morning.\r\nEn route, enjoy the scenic beauty and stop at Devprayag, the confluence of rivers Alaknanda and Bhagirathi, forming the Ganges.\r\nContinue your journey towards Rudraprayag, another confluence of rivers Alaknanda and Mandakini.\r\nProceed towards Chamoli, known for its picturesque landscapes and lush greenery.\r\nArrive at Joshimath and check into your accommodation for the night.\r\nOvernight stay in Joshimath.\r\n', 'Caravantours'),
(319, 32, 'Day 2', 'joshimath to Niti Valley\r\n\r\nAfter breakfast, start your journey towards Niti Valley, known for its untouched natural beauty and serene environment.\r\nEn route, visit Tapovan, a scenic spot known for its hot springs and spiritual significance.\r\nContinue towards Gamshali, a small village known for its beautiful surroundings.\r\nReach Niti Village by evening and set up your caravan for a night of camping under the starlit sky.\r\nNight caravanning in Niti Valley.\r\n', 'Caravantours'),
(320, 32, 'Day 3', 'Niti Valley to Rishikesh\r\n\r\nWake up early to witness the breathtaking sunrise over the mountains.\r\nAfter breakfast, start your journey back towards Rishikesh.\r\nEn route, enjoy the scenic drive and stop at picturesque spots for photography.\r\nReach Rishikesh by evening, concluding your memorable caravan tour of Niti Valley.\r\nEnjoy your caravan tour and the beautiful landscapes of Niti Valley!', 'Caravantours'),
(326, 18, 'Day 1', 'Rishikesh to Srinagar camp\r\n', 'Watersports'),
(327, 18, 'Day 2', 'Rafting from Srinagar to Devprayag. Night stay at Devprayag.\r\n', 'Watersports'),
(328, 18, 'DAY 3', 'Rafting from Devprayag to Kodiyala. Night stay at Kodiyala.', 'Watersports'),
(329, 18, 'Day 4', 'Rafting from Kodiyala to Rishikesh. \r\n', 'Watersports'),
(330, 25, 'day 1', 'Arrival at Buddy Hikers (Tugashi Village, Joshimath)\r\n\r\n\r\n09 am - Departure from Rishikesh\r\n\r\n07 pm - Arrival at Tugashi base camp\r\n\r\n07 pm to 09 pm - Meet & Greet + Dinner at Buddy Hikers', 'Track'),
(331, 25, 'Day 2', 'Move from Tugashi to Gulling\r\n\r\n\r\n07 am  - Morning tea\r\n\r\n08:30 am - Breakfast at Buddy Hikers\r\n\r\n09:30 am - Trek towards Gulling - 3km - 2 hrs\r\n\r\n01 pm to 02 pm - Lunch at Gulling base camp\r\n\r\n02 pm to 04 pm - Rest/Sightseeing\r\n\r\n04 pm to 05 pm - Survival training session\r\n\r\n05:30 pm - Evening Tea/Soup\r\n\r\n07:30 pm - Camping & Dinner at Gulling base camp', 'Track'),
(332, 25, 'Day 3', 'Move from Gulling to Khulara base\r\n\r\n\r\n07 am - Morning tea\r\n\r\n09 am - Breakfast at Gulling base camp\r\n\r\n10 am - Trek towards Khulara base camp - 4 km - 3 hrs\r\n\r\n01 pm to 02 pm - Lunch at Khulara base\r\n\r\n02 pm to 04 pm - Rest/Sightseeing\r\n\r\n04 pm to 05 pm - Jungle walk, navigation and plant identification\r\n\r\n05:30 pm - Evening Tea/Soup\r\n\r\n07:30 pm - Camping & Dinner at Khulara base camp\r\n', 'Track'),
(333, 25, 'Day 4', 'Khulara to Kuari Pass summit\r\n\r\n\r\n04 am - Morning tea\r\n\r\n05 am to 08 am - Trek towards Kuari Pass summit - 4 km - 3 hrs\r\n\r\n08 am - Summit of Kuari Pass\r\n\r\n09 am to 10 am - Breakfast at Kuari Pass\r\n\r\n10 am to 01 pm - Move back towards Khulara base camp\r\n\r\n01 pm to 02 pm - Lunch at Khulara base camp\r\n\r\n02 pm - Move back towards Tugashi village\r\n\r\n07 pm to 10 pm - Bonfire, experience sharing and dinner', 'Track'),
(334, 25, 'Day 5', '07 am - Morning tea\r\n\r\n08:30 am - Breakfast at Buddy Hikers\r\n\r\n12 pm - Return to Rishikesh', 'Track'),
(335, 26, 'Day 1', '<strong>Arrival at Buddy Hikers (Tugashi Village, Joshimath)</strong><br />\r\n\r\n<strong>How to reach - </strong><br />\r\n\r\nParticipants must arrive at Rishikesh by 07 am.<br />\r\n\r\nNearest Airport - Jolly Grant - 30 mins to Rishikesh<br />\r\nNearest Railway station - Rishikesh Railway station<br />\r\nNearest Bus stop - Rishikesh ISBT<br /><br />\r\n\r\n\r\nPickup point for CLAW Expedition trekkers - Natraj Chowk<br />\r\n\r\nRishikesh to Tugashi village is a 266 km journey by road. It takes approximately 09 hrs to reach Tugashi base camp. Participants will travel by either a Tempo traveller which costs Rs 12000/vehicle or 5-6 seaters which costs Rs 8000/vehicle. Transport will be arranged at sharp 09 am from Rishikesh.<br />\r\n\r\n09 am - Departure from Rishikesh<br />\r\n07 pm - Arrival at Tugashi base camp<br />\r\n07 pm to 09 pm - Meet & Greet + Dinner at Buddy Hikers<br />\r\n\r\n09:00 AM<br />\r\nDeparture from Rishikesh<br />\r\n\r\n07:00 PM<br />\r\nArrival at Tugashi base camp<br />\r\n\r\n07:00 PM to 09:00 PM<br />\r\nMeet & Greet + Dinner at Buddy Hikers', 'Track'),
(336, 26, 'Day 2', '<strong>Move from Tugashi to Gulling</strong><br />\r\n\r\n07:00 AM<br />\r\nMorning tea<br />\r\n\r\n08:30 AM<br />\r\nBreakfast at Buddy Hikers<br />\r\n\r\n09:30 AM<br />\r\nTrek towards Gulling - 3 KM - 2 hrs<br />\r\n\r\n01:00 PM to 02:00 PM<br />\r\nLunch at Gulling base camp<br />\r\n\r\n02:00 PM to 04:00 PM<br />\r\nRest / Sightseeing<br />\r\n\r\n04:00 PM to 05:00 PM<br />\r\nSurvival training session<br />\r\n\r\n05:30 PM <br />\r\nEvening Tea / Soup<br />\r\n\r\n07:30 PM<br />\r\nCamping & Dinner at Gulling base camp', 'Track'),
(337, 26, 'Day 3 ', '<strong>Move from Gulling to Khulara Base</strong><br />\r\n\r\n07:00 AM<br />\r\nMorning tea<br />\r\n\r\n09:00 AM<br />\r\nBreakfast at Gulling base camp<br />\r\n\r\n10:00 AM<br />\r\nTrek towards Khulara base camp - 4 KM - 3 hrs<br />\r\n\r\n01:00 PM to 02:00 PM<br />\r\nLunch at Khulara base<br />\r\n\r\n02:00 PM to 04:00 PM<br />\r\nRest / Sightseeing<br />\r\n\r\n04:00 PM to 05:00 PM<br />\r\nJungle walk, navigation and plant identification<br />\r\n\r\n05:30 PM <br />\r\nEvening Tea / Soup<br />\r\n\r\n07:30 PM<br />\r\nCamping & Dinner at Khulara base camp', 'Track'),
(338, 26, 'Day 4', '<strong>Khulara to Pangarchulla Peak Summit</strong><br />\r\n\r\n04:00 AM<br />\r\nMorning tea<br />\r\n\r\n05:00 AM to 08:00 AM<br />\r\nTrek towards Pangarchulla summit - 4 KM - 3 hrs<br />\r\n\r\n08:00 AM<br />\r\nSummit of Pangarchulla Peak<br />\r\n\r\n09:00 AM to 10:00 AM<br />\r\nBreakfast at Pangarchulla Peak<br />\r\n\r\n10:00 AM to 01:00 PM<br />\r\nMove towards Khulara base camp<br />\r\n\r\n01:00 PM to 02:00 PM<br />\r\nLunch at Khulara base camp<br />\r\n\r\n02:00 PM<br />\r\nMove towards Tugashi village<br />\r\n\r\n07:00 PM to 10:00 PM<br />\r\nBonfire, experience sharing and dinner', 'Track'),
(339, 26, 'Day 5', '07:00 AM<br />\r\nMorning tea<br />\r\n\r\n08:30 AM<br />\r\nBreakfast at Buddy Hikers<br />\r\n\r\n12:00 PM<br />\r\nReturn to Rishikesh<br />', 'Track'),
(340, 27, 'Day 1', 'Arrive rishikesh to buddyhikers camp tugashi', 'Track'),
(341, 27, 'Day 2', 'Buddyhikers camp to dronagiri village  ', 'Track'),
(342, 27, 'Day 3', 'Dronagiri village  to Longatulli bace camp', 'Track'),
(343, 27, 'Day 4', 'Bace camp to rishikund & Bhaghni glacier & back', 'Track'),
(344, 27, 'Day 5', 'Bace camp to Dronagiri village', 'Track'),
(345, 27, 'Day 6', 'Dronagiri village to Buddyhikers stay, camp fire/ Bone', 'Track'),
(346, 27, 'Day 7', 'Buddyhikers stay to Rishikesh', 'Track'),
(347, 31, 'Day 1', 'Trek from Badrinath to Laxmivan 10 Km Overnight tent stay, Lunch, dinner provided.', 'Track'),
(348, 31, 'Day 2', 'Trek from Laxmivan to Chakrateerth 9 Km. Tent stay, Breakfast, Pack lunch and dinner provided.', 'Track'),
(349, 31, 'Day 3 ', 'Trek from Chakrateerth to Satopanth and Back 10 Km Overnight stay in tents (Breakfast, Lunch and dinner)', 'Track'),
(350, 31, 'Day 4', 'Trek from Chakrateerth to Laxmivan 9 km down. Tent Stay (Breakfast, Pack Lunch and Dinner)', 'Track'),
(351, 31, 'Day 5', 'Trek from Laxmivan to Badrinath 10 Km\r\nTrek cost - Rs.15,000.00 Per Person, including govt. fee etc.  (Badrinath to Badrinath Trek and accommodation in Badrinath will not be provided. \r\n(Breakfast, lunch and dinner, tea, soup, Juice and snacks will be provided during trek)\r\n (Breakfast, lunch and dinner, tea, soup, Juice and snacks will be provided during trek)', 'Track');

-- --------------------------------------------------------

--
-- Table structure for table `nearbyplaces`
--

CREATE TABLE `nearbyplaces` (
  `id` int(11) NOT NULL,
  `stayid` int(11) NOT NULL,
  `nearbyplaces` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nearbyplaces`
--

INSERT INTO `nearbyplaces` (`id`, `stayid`, `nearbyplaces`) VALUES
(7, 3, 'Outdoor Swimming Pool'),
(8, 3, 'Free WiFi'),
(9, 3, 'Airport Shuttle'),
(10, 3, 'Family Rooms'),
(11, 3, 'Restaurant'),
(12, 4, 'zX'),
(14, 5, 'gjhgjgjhgjhg'),
(15, 6, 'hg jhg jhgj gjhgj gj jhgj hg jg jgj g'),
(16, 6, 'hg jhg jhgj gjhgj gj jhgj hg jg jgj g'),
(17, 6, 'hg jhg jhgj gjhgj gj jhgj hg jg jgj g'),
(18, 6, 'hg jhg jhgj gjhgj gj jhgj hg jg jgj g'),
(67, 7, 'Mana Village'),
(68, 7, 'Vadudhara Fall'),
(69, 7, 'Satopanth Trek'),
(70, 7, 'Mana Pass-'),
(71, 7, 'Charanpaduka'),
(89, 8, 'Rishikesh'),
(90, 8, 'Jungle trek'),
(91, 8, 'caravanning place  '),
(92, 8, 'Rishikesh'),
(93, 8, 'jolly grant Airport'),
(94, 8, 'Dehradun'),
(96, 10, 'Rishikesh / Dehradun'),
(97, 9, 'auli joshimath'),
(98, 9, 'NITI valley');

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

CREATE TABLE `stay` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `overviewcontent` text NOT NULL,
  `starting_price` varchar(255) NOT NULL,
  `cross_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stay`
--

INSERT INTO `stay` (`id`, `title`, `address`, `distance`, `image1`, `image2`, `image3`, `image4`, `image5`, `overviewcontent`, `starting_price`, `cross_price`) VALUES
(7, 'Buddy Hikers stay Badrinath', 'mana road Badrinath', '1,5km from Badrinath temple ', 'uploads/1711886536_IMG_20230607_112157_783.jpg', 'uploads/1711886536_IMG_20230607_112157_722.jpg', 'uploads/1711886827_IMG_20230607_112157_579.jpg', 'uploads/1711886827_IMG_20230607_112157_681.jpg', 'uploads/1711886827_IMG_20230601_171709_751.jpg', 'Buddy Hikers Stay is located on the road to Badrinath Dham. It is about 1.5 kilometers from Badrinath Ji and also at a distance of 1.5 kilometers from the Mana village. It is situated in a peaceful area away from the crowds.\r\nThe neighborhood of Buddy Hikers Stay offers a range of attractions:', '2400/', '3000/'),
(9, 'Buddy Hikers stay tugashi', 'tugashi village PIN : 246483 joshimath', '14km from Joshimath', 'uploads/1721194325_IMG-20221019-WA0018.jpg', 'uploads/1721194325_IMG-20221019-WA0021.jpg', 'uploads/1721194325_IMG-20221019-WA0023.jpg', 'uploads/1721194325_IMG-20221019-WA0024.jpg', 'uploads/1721194325_IMG-20221019-WA0025.jpg', '', '1500/', '2500/'),
(10, 'Buddy Hikers Farm House', 'sahastradhara Dehradun', '14 km from Dehradun', 'uploads/1726111858_farmhouse.jpg', 'uploads/1726111858_WhatsApp Image 2024-09-04 at 09.03.56_2bba3104.jpg', 'uploads/1726111858_WhatsApp Image 2024-09-04 at 09.04.01_4b8b9dca.jpg', 'uploads/1726111858_room.jpg', 'uploads/1726111858_WhatsApp Image 2024-09-04 at 09.04.00_a4b0ff87.jpg', 'Buddy Hikers farmhouse is the perfect destination for those seeking a peaceful retreat or planning a special celebration. \r\n', '2700/', '3500/');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'buddyhikers'),
(2, 'address', 'Philippines'),
(3, 'contact', '+1234567890'),
(4, 'email', 'info@sample.com'),
(6, 'short_name', 'buddyhikers'),
(9, 'logo', 'uploads/1716646140_zz.html'),
(11, 'welcome_message', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dapibus arcu, ullamcorper viverra felis. Aenean in diam at ligula interdum laoreet. Mauris quis purus maximus, scelerisque lacus non, malesuada sapien. '),
(12, 'banner', 'uploads/1716646080_zz.html');

-- --------------------------------------------------------

--
-- Table structure for table `treks`
--

CREATE TABLE `treks` (
  `id` int(11) NOT NULL,
  `treksname` varchar(255) NOT NULL,
  `pickup_drop` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `altitude` varchar(255) NOT NULL,
  `trek_length` varchar(255) NOT NULL,
  `starting_price` varchar(255) NOT NULL,
  `cross_price` varchar(255) NOT NULL,
  `persontotal` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `overviewcontent` text NOT NULL,
  `postcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treks`
--

INSERT INTO `treks` (`id`, `treksname`, `pickup_drop`, `duration`, `difficulty`, `altitude`, `trek_length`, `starting_price`, `cross_price`, `persontotal`, `image1`, `image2`, `image3`, `image4`, `image5`, `overviewcontent`, `postcategory`) VALUES
(18, 'WHITE  WATER EXPIDITION ', 'Rishikesh', '4 Days ', 'grade 2,3,4 Rapids ', '', '107 km', '21000', '25000', '15', 'uploads/1711705687_water sports1.jpg', 'uploads/1711705580_IMG_20240120_225145_212.jpg', 'uploads/1711705580_IMG_20240120_225145_480.jpg', 'uploads/1711705580_IMG_20240124_093055_198.jpg', 'uploads/1711705580_IMG_20240124_093055_503.jpg', '', 'Watersports'),
(19, 'Rishikesh -Devparyag-Pauri-khirshu-', 'rishikesh', '2 Night 3 Days', 'Easy ', '12100 Ft.', '540', '12000', '15000', '4', 'uploads/1711772952_caravan.jpg', 'uploads/1711772952_WhatsApp Image 2024-03-17 at 16.46.29_fcde4aab.jpg', 'uploads/1711772952_WhatsApp Image 2024-03-17 at 16.46.29_c685e060.jpg', 'uploads/1711772952_WhatsApp Image 2024-03-17 at 16.46.31_dd26c6e8.jpg', 'uploads/1711772952_WhatsApp Image 2024-03-17 at 16.46.30_7849490e.jpg', 'PACKAGE INCLUSIONS:\r\n\r\nDiesel\r\nToll taxes\r\nMCD Taxes\r\nState taxes\r\nPublic/Monument paid parking’s (Not Airport/Railways)\r\nDriver\r\nOTHER INCLUSIONS:\r\n-1 bath with RV commode.\r\n-Hot water services 20 L\r\n-Fresh water 200L\r\n-Sleeps & sits 4\r\n-Double gas stove – 2 cans\r\n-Gas heater – 1 can\r\n-Utensils/Cookware/ Crockery/ Cutlery/ Dustbin bags.\r\n-Condiments / Maggi Packs .\r\n-90 L fridge\r\n-25 L OTG\r\n-Driver\r\n-winch\r\n-Fire extinguishers / Fire blankets/Fire ball extinguishers.\r\n-Pillows/ Bed Sheets 1 /Blankets/ Cushions.\r\n-Portable table/camping chairs/Outdoor Shower Tent\r\n-Outdoor shower with hot water services\r\n-Tent with sleeping bags for trek\r\n-3 exterior flood lights\r\n-Picnic Table recessed in vehicle\r\n-600 watt solar panels/200ah 48 v lithium/shore power accessible\r\n\r\nEXCLUSIONS:-\r\nENSURENCE \r\nMeals\r\nPaid parking if any used.(Private property/airport/railway)\r\nRefilling of resources – water & electricity\r\nAny other state pickup charges start @ 90 INR / km\r\nRental per day is excluding 18% GST.\r\n\r\nANYTHING NOT MENTIONED IN INCLUSIONS\r\nCancellation Policy:\r\nMore than 15 days from the date of  actual travel  –  INR 1000 deducted\r\nLess than 15 days but more than 7 days of actual  travel  – 50% of actual changes deducted\r\nLess than 7 days of actual travel – 100% of actual charges deducted.\r\n*Rental documents to be signed by Customer/Rental company/Driver before trip starts.\r\n-any cost arising due to Bad weather ,Road block, Political issue, Local issue, Natural calamities ', 'Caravantours'),
(20, 'sdsad1', 'asd', '4 Days', 'Easy to Moderate', 'fsd', '22 Km.', '570', '800', '15', 'uploads/1710596362_package-01.jpg', '', '', '', '', 'A', 'Backpacking'),
(25, 'KUARI PASS TREK', 'Rishikesh', '5 Days', 'moderate', '12400', '24 km', '9999', '11999', '10', 'uploads/1721194652_IMG_20240105_191121_488.jpg', 'uploads/1721194652_IMG_20230226_095539_690.jpg', 'uploads/1721194652_IMG_20231229_101332_330.jpg', 'uploads/1711704239_IMG_20231229_101332_403.jpg', 'uploads/1721194652_IMG_20231229_101332_527.jpg', 'Kuari Pass Winter Trek\r\nWelcome to Buddy hikers Winter Treks - the beginning of unforgettable trails.\r\n\r\nLocated in the depths of Garhwal Himalayas and nestled on the western rim of Nanda Devi Biosphere Reserve is Kuari Pass, the only trekkable mountain pass in the winters with its summit located at an altitude of 12,500 ft. \r\n\r\nKuari Pass trek is one of the most sought after treks in the winter season. A trek that enchants any mountain lover with its mesmerising views of the mighty Himalayan Mountain peaks, thick, dense and ancient forests with their healing energies, and exotic wildlife interactions along the trail. Whether you are a beginner getting comfortable with the cold breeze of the mountains or a pro looking to explore the depths of your limits, Kuari Pass has something to offer to everyone.\r\n\r\nAnd to top it off, you will be led and guided by a team of elite SF veterans from the Indian Armed Forces. An opportunity to learn from battle hardened adventurers and walk shoulder to shoulder with them, to explore your limits, and your true potential.', 'Track'),
(26, 'Pangarchulla  sumit ', 'Rishikesh', '5 Days', 'modirate', '15000 ft', '24', '9999', '11999', 'Max 15 ', 'uploads/1711711970_pangurchulla.jpg', '', '', '', '', '<strong>Pangarchulla Peak Trek</strong><br />\r\n\r\nLocated in the depths of Garhwal Himalayas and nestled on the western rim of Nanda Devi Biosphere Reserve is the Pangarchulla peak, also ‘The Chimney Peak’ with its summit located at an altitude of 15000 ft. <br />\r\n\r\nPangarchulla trek is one of the most sought after treks from Dec to Feb. A trek that enchants any mountain lover with its mesmerising views of the mighty Himalayan Mountain peaks, thick, dense and ancient forests with their healing energies, and exotic wildlife interactions along the trail. Whether you are a beginner getting comfortable with the cold breeze of the mountains or a pro looking to explore the depths of your limits, Pangachulla peak has something to offer to everyone. <br />\r\n\r\nAnd to top it off, you will be led and guided by a team of elite SF veterans from the Indian Armed Forces. An opportunity to learn from battle hardened adventurers and walk shoulder to shoulder with them, to explore your limits, and your true potential. <br /><br />\r\n\r\n<strong>Trek Preparations - </strong><br />\r\n\r\nFollowing Items are mandatory to carry<br />\r\n\r\n<strong>Basic Gear</strong><br />\r\nBackpack (60 - 70 ltr) - Must have comfortable shoulder straps, frame and backpack cover.<br />\r\nWaterproof trekking shoes that are high ankle and have a good grip<br />\r\n\r\n<strong>Clothing</strong><br />\r\nSynthetic/waterproof track pants - 2 ; T shirts (full sleeve) - 3<br />\r\nFleece jacket - 1 ; Woollen sweater - 1<br />\r\nWindproof jacket - 1 ; Heavy jacket - 1<br />\r\nThermal inners - 1 pair ; Cotton socks - 3 pair ; Woollen socks - 2 pair<br />\r\nWoollen cap - 1 ; Waterproof hand gloves - 2 pair<br />\r\n\r\n<strong>Personal utilities</strong><br />\r\nSun cap - 1 ; Head torch - 1<br />\r\nSun protection cream - 1 <br />\r\nSun glasses (Dark with side cover & UV protection) - 1<br />\r\nOne litre water bottle - 2<br />\r\nLip balm / cold cream - 1<br />\r\nToiletries - As required<br />\r\nQuick dry towel - 1<br />\r\nPersonal medical kit - As required<br />\r\nWalking stick - At least one\r\n\r\n', 'Track'),
(27, 'Bagini Glacier ', 'Rishikesh', '6 Night 7 Days ', 'Moderate to Difficult ', '15200 ft', '48km ', '19999/', '27000', '10', 'uploads/1711712175_WhatsApp Image 2024-03-29 at 16.47.02_db3338f7.jpg', 'uploads/1711769049_WhatsApp Image 2024-03-30 at 08.35.19_af3ab48e.jpg', 'uploads/1711769049_WhatsApp Image 2024-03-30 at 08.37.40_17c9393e.jpg', 'uploads/1711769049_WhatsApp Image 2024-03-30 at 08.37.39_4d291713.jpg', 'uploads/1711769049_WhatsApp Image 2024-03-30 at 08.35.18_53edefee.jpg', 'Bagini Glacier is proudly seated at an altitude of 14,816 feet in the Garhwal Himalayas. It starts near the base of Trishul and Changabang peaks and flows northwards from here. Being adorned inside the Nanda Devi National Park, the trek offers enchanting views of the placid environs. This trek also gives you the opportunity to feast your eyes on the mighty  Hardeol peak, Dunagiri, Changa Banga and Kalanka peaks too.', 'Track'),
(28, 'Dayara Bugyal', 'Rishikesh', '4night 5Days ', 'Easy', '11000', '16km', '9999/', '11999/', '10', 'uploads/1711712348_WhatsApp Image 2024-03-29 at 16.48.02_427ebd6c.jpg', 'uploads/1722233899_butter fes.jpg', 'uploads/1722233899_butter fes pic2.jpg', 'uploads/1722233899_butter fes 3.jpg', 'uploads/1722233899_butter fes 4.jpg', 'The Butter Festival, also known as Anduri Utsav, will be held on August 16, 2024, in Dayara Bugyal. This traditional festival celebrates the richness of the harvest season, where locals and visitors engage in playful activities, dance, and cultural performances, all while smearing each other with butter and buttermilk.  ', 'Track'),
(31, 'Satopanth Lake Trek', 'Badrinath To Badrinath', '5 Nights and 6 Days', 'Moderate to Difficult ', '4600 meters', '50 kms', '15,000', '18,000', '15,', 'uploads/1712552312_image1.jpeg', 'uploads/1712552312_image2.jpeg', '', '', '', 'Satopanth Tal is an untouched glacier lake at an altitude of 15100 ft. With the shape of a triangle, it is hidden amidst the majestic Garhwal region. <br />\r\n\r\nSatopanth Lake has a very rich history. It is considered to be a religious place for the locals. It is believed that the trimurthis(triple deity of the divinity in Hinduism), Brahma, Vishnu, Maheswara meditated on its three corners. \r\nSome articles say that at the end of the Mahabharata, Pandavas took the route from Mana village to reach the steps to heaven which is on the Swargarohini glacier via Satopanth Tal.<br /><br />\r\n\r\n<strong>SATOPANTH LAKE TREK / SRI BADRINATH DARSHAN</strong><br />\r\nRegion: Chamoli Garhwal, Uttarakhand<br />\r\nDuration: 4 Nights and 5 Days (Badrinath To Badrinath)<br />\r\nMax altitude: 4600 meters<br />\r\nApprox trekking: 50 kms<br />\r\nTour Price – <br />\r\nFrom Badrinath To Badrinath Rs. 15,000 /- per person (6 + Pax)<br />\r\n\r\nSatopanth Tal is a glacial lake in the Chamoli district of Uttarakhand which is 26 kms from Badrinath. It is located in the midst of snow-capped peaks at an altitude of 4600 m above sea-level. It is believed that on its three corners meditated the holy trio – Brahma, Vishnu and Mahesh. The lake, considered to be of religious significance to the local residents of Mana Village, popularly known as “The last village of India”, is 3 kms ahead of Badrinath.<br />\r\nThis holy triangular shaped lake has a perimeter of 1 km. The snow covered Himalayan peaks of Neelkanth (21638 feet), Satopanth (23026 feet), Swargarohini (20507 feet), Chaukhamba (23419 feet), and Balakun (20040 feet) looms over the waters of the glacial lake. The trek starts from Badrinath and stretches on the right bank of Alaknanda River,  after 3km trek on reaching Mata Murti Temple,  we can see the famous Mana village at another side of Alaknanda river as well as Keshav Prayag (Confluence of Saraswati & Alaknanda), the trail goes through the lush green Vasundhara valley where one can see the Vasudhara falls.<br />\r\nIt is believed that after the war of Mahabharata the Pandavas came to Satopanth valley, in search of peace and on the way to Satopanth, all four brothers Bheema, Arjuna, Nakul & Sahadev died along with Draupadi. Yudhisthira, the eldest of Pandavas could reach to Satopanth and from Swargarohini, he ascended to heaven alive.<br /><br />\r\n\r\n<strong>WHEN SHOULD I GO?</strong><br />\r\nThe Satopanth Tal trek can be done only during the months of may and October except monsoon. After that the trail is blocked due to extreme weather conditions.<br /><br />\r\n<strong>WHAT IS THE LEVEL OF FITNESS REQUIRED?</strong><br />\r\nThe difficulty level of this trek is moderate thus, if you want to do this trek, your fitness level must be quite good and you must have habit of exercising and walking.<br />\r\nSATOPANTH / SWARGAROHINI TREK (Badrinath To Badrinath ) (4 Nights and 5 Day)', 'Track'),
(32, 'NITI VALLEY ', 'Rishikesh', '2 Night 3 Days', 'moderate', '12000 feet', '700 km', '11999/PP', '15000/PP', '3', 'uploads/1729507626_g.php', 'uploads/1712577448_WhatsApp Image 2024-04-08 at 17.01.40_67b859cd.jpg', 'uploads/1712577448_WhatsApp Image 2024-04-08 at 17.00.54_ef6f10e5.jpg', 'uploads/1712577448_WhatsApp Image 2024-04-08 at 17.00.16_c9a0358b.jpg', 'uploads/1712577448_WhatsApp Image 2024-04-08 at 17.02.30_5fd5738b.jpg', 'Caravanning in Niti Valley is a unique and adventurous experience. The valley is known for its stunning landscapes, remote location, and serene environment, making it an ideal destination for nature lovers and adventure enthusiasts. Here are some key points to consider for your caravan tour of Niti Valley:\r\nThis vehicle can accommodate 4ADULTS / 2ADULTS +3 KIDS.\r\n\r\nThis Rental Package is calculated based on the running Kms of the vehicle with the following conditions for advance payment:\r\n\r\na) Charged @INR 76.27 per Km\r\nb) With  a minimum of 2 Nights / 3 Days as the basic condition with this mode of operation.\r\nc) A minimum of 250 Kms / Day would be charged X Number of Days booked\r\nOnce the booking is done online, a security deposit of INR 8000 (Refundable) has to be deposited separately with the rental company.\r\n\r\nThe account will be settled at the end of the trip after final meter reading and the security deposit released within 5 days of return date after  thorough inspection of the vehicle for damages to be paid directly to the rental company.\r\n\r\nPACKAGE INCLUSIONS:\r\n\r\nDiesel\r\nToll taxes\r\nMCD Taxes\r\nState taxes\r\nPublic/Monument paid parking’s (Not Airport/Railways)\r\nDriver\r\nOTHER INCLUSIONS:\r\n-1 bath with RV commode.\r\n-Hot water services 20 L\r\n-Fresh water 200L\r\n-Sleeps & sits 4\r\n-Double gas stove – 2 cans\r\n-Gas heater – 1 can\r\n-Utensils/Cookware/ Crockery/ Cutlery/ Dustbin bags.\r\n-Condiments / Maggi Packs .\r\n-90 L fridge\r\n-25 L OTG\r\n- winch\r\n-Driver\r\n-Fire extinguishers / Fire blankets/Fire ball extinguishers.\r\n-Pillows/ Bed Sheets 1 /Blankets/ Cushions.\r\n-Portable table/camping chairs/Outdoor Shower Tent\r\n-Outdoor shower with hot water services\r\n-Tent with sleeping bags for trek\r\n-3 exterior flood lights\r\n-Picnic Table recessed in vehicle\r\n-600 watt solar panels/200ah 48 v lithium/shore power accessible\r\n\r\nEXCLUSIONS:\r\nInsurance\r\nMeals\r\nPaid parking if any used.(Private property/airport/railway)\r\nRefilling of resources – water & electricity\r\nAny other state pickup charges start @ 90 INR / km\r\nRental per day is excluding 18% GST.\r\n\r\nANYTHING NOT MENTIONED IN INCLUSIONS\r\nCancellation Policy:\r\nMore than 15 days from the date of  actual travel  –  INR 1000 deducted\r\nLess than 15 days but more than 7 days of actual  travel  – 50% of actual changes deducted\r\nLess than 7 days of actual travel – 100% of actual charges deducted.\r\n*Rental documents to be signed by Customer/Rental company/Driver before trip starts.\r\n_ any cost arising due to Bed weather  Road block, Political issue .Local issue ,Natural calamities \r\n\r\n', 'Caravantours');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `date_added`, `date_updated`) VALUES
(1, 'buddyhikers', 'Admin', 'admin', 'f5e8dfdd810c2e984c97a99040caeb6a', 'uploads/1722056460_IMG_20240124_093055_632.jpg', NULL, '2021-01-20 14:02:37', '2024-07-27 10:31:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `includeandexclude`
--
ALTER TABLE `includeandexclude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Inquiries`
--
ALTER TABLE `Inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Itinerary`
--
ALTER TABLE `Itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearbyplaces`
--
ALTER TABLE `nearbyplaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treks`
--
ALTER TABLE `treks`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `includeandexclude`
--
ALTER TABLE `includeandexclude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `Inquiries`
--
ALTER TABLE `Inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `Itinerary`
--
ALTER TABLE `Itinerary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;

--
-- AUTO_INCREMENT for table `nearbyplaces`
--
ALTER TABLE `nearbyplaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `stay`
--
ALTER TABLE `stay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `treks`
--
ALTER TABLE `treks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
