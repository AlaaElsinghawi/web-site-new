-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 12:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library2`
--

-- --------------------------------------------------------

--
-- Table structure for table `asd`
--

CREATE TABLE `asd` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banners_name` varchar(150) NOT NULL,
  `banners_url` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banners_name`, `banners_url`, `status`, `date`, `username`) VALUES
(10, '1558273155EGYPT-RUSSIA-DIPLOMACY.jpg', 'Resource/upload/15584519011558273155EGYPT-RUSSIA-DIPLOMACY.jpg', 'active', '2019-05-21 15:18:21', 'admin'),
(11, 'hi-res-159596853_crop_north.jpg', 'Resource/upload/1558452253hi-res-159596853_crop_north.jpg', 'active', '2019-05-21 15:24:13', 'admin'),
(12, '2019-636938685833290241-329.jpg', 'Resource/upload/15584522772019-636938685833290241-329.jpg', 'active', '2019-05-21 15:24:37', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `message`) VALUES
(4, 'mohammed Hassan', 'ah1123@gamil.com', 'vbnbbhbhhhhhhhhhhhhhh'),
(5, 'Ali Mohammed', 'ah1123@gamil.com', 'asdfggvgvg'),
(7, 'Ali Mohammed', 'jwest@example.net', 'nnnnnnnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `main_setting`
--

CREATE TABLE `main_setting` (
  `id` int(11) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `site_url` varchar(2000) NOT NULL,
  `site_description` text NOT NULL,
  `site_email` varchar(150) NOT NULL,
  `site_tages` text NOT NULL,
  `site_homepanel` text NOT NULL,
  `fb` varchar(50) NOT NULL,
  `twi` varchar(50) NOT NULL,
  `youtub` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_setting`
--

INSERT INTO `main_setting` (`id`, `site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `twi`, `youtub`, `services`, `date`) VALUES
(1, 'asd', 'asd', 'asd', 'asd@asd.com', 'sssssssss', 'ddddddddd', 'fa', 'tw', 'yi', 'se', '2019-04-23 15:24:22'),
(2, 'elfajar', 'https://www.elfajer.com', 'This site show new', 'asd@asd.com', 'facebook', 'not define', 'fa', 'tw', 'yi', 'se', '2019-04-23 15:24:22'),
(3, 'A7bari', 'https://www.yallKora.com', 'contents all new sport in the world very professional web site ', 'asd@asd.com', 'sitestages', 'sitehomepanel', 'https://www.facebook.com/groups/380202725799245/', 'https://twitter.com/Yallakoranow?ref_src=twsrc%5Eg', 'https://www.youtube.com/channel/UC7N7DXktAhFpRpYb3', 'se', '2019-05-20 07:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pages_name` varchar(100) NOT NULL,
  `pages_content` text NOT NULL,
  `pages_status` varchar(11) NOT NULL,
  `pages_vistits` int(11) NOT NULL,
  `pages_types` varchar(50) DEFAULT NULL,
  `pages-date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pages_name`, `pages_content`, `pages_status`, `pages_vistits`, `pages_types`, `pages-date`, `username`) VALUES
(40, 'political', 'Display political new in middle east', 'Inactive', 0, 'news', '2019-05-19 13:19:49', 'admin'),
(55, 'Theatre', 'Display all new actress', 'active', 0, 'art', '2019-05-15 09:46:02', 'admin'),
(56, 'Health', 'Dsplay heath and good food', 'active', 0, 'news', '2019-05-19 13:22:06', 'admin'),
(58, 'technology', 'Display all new in technology company', 'active', 0, 'news', '2019-05-15 10:39:22', 'Ali Mohammed Ahmed'),
(61, 'products', 'Display price of food and drinks', 'active', 0, 'news', '2019-05-18 08:34:23', 'Ali Mohammed Ahmed'),
(62, 'Foods', 'product2product2product2product2product2product2', 'Inactive', 0, 'news', '2019-05-19 13:19:10', 'Ali Mohammed Ahmed'),
(64, 'sport local', 'Display sport local', 'active', 0, 'sport', '2019-05-21 09:26:32', 'admin'),
(66, 'political arbic world', 'Display all news plotical in arbic world', 'active', 0, 'Political', '2019-05-18 08:31:54', 'admin'),
(67, 'Cinema', 'Display all movie in world', 'active', 0, 'art', '2019-05-19 13:23:20', 'Fares mohamed'),
(68, 'sport international', 'Display all news sport international', 'active', 0, 'sport', '2019-05-21 10:51:26', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `section_status` varchar(200) NOT NULL,
  `section_location` varchar(100) NOT NULL,
  `sectiom_description` text NOT NULL,
  `section_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_name`, `section_status`, `section_location`, `sectiom_description`, `section_date`, `username`) VALUES
(1, 'news', 'Active', 'body', 'adfdfdfcf												', '2019-05-18 09:28:40', 'admin'),
(2, 'art', 'Active', 'side', 'Display all news actress ', '2019-05-19 13:18:28', 'admin'),
(5, 'Political', 'Active', 'side', 'Display  Political news in arabic world', '2019-05-18 09:28:07', 'admin'),
(6, 'sport', 'Active', 'body', 'Display all news sport', '2019-05-18 16:41:30', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sub_pages`
--

CREATE TABLE `sub_pages` (
  `id` int(11) NOT NULL,
  `subpages_name` varchar(100) NOT NULL,
  `subpages_content` text NOT NULL,
  `subpages_status` varchar(50) NOT NULL,
  `subages_vistits` int(11) NOT NULL,
  `sub_pages_types` varchar(50) NOT NULL,
  `sub_pages_images` varchar(100) NOT NULL,
  `sub_pages-date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_pages`
--

INSERT INTO `sub_pages` (`id`, `subpages_name`, `subpages_content`, `subpages_status`, `subages_vistits`, `sub_pages_types`, `sub_pages_images`, `sub_pages-date`, `username`) VALUES
(2, 'C Ronaldo', 'C Ronaldo Best playe in 2015 and win award by FIFA and pallow dor goood player\r\nC Ronaldo Best playe in 2015 and win award by FIFA and pallow dor goood player\r\nC Ronaldo Best playe in 2015 and win award by FIFA and pallow dor goood player', 'active', 0, 'sport international', 'Resource/upload/1558213341agencia-efe_multimedia_3462448.multimedia.photos.13646333.file.jpg', '2019-05-18 21:02:21', 'admin'),
(5, 'Egypt legend Mohamed Aboutrika sentenced to one year in jail', 'Egypt’s legendary retired footballer Mohamed Aboutrika was sentenced to one year in jail in absentia on Monday for tax evasion.\r\n\r\nCairo misdemeanor court handed Aboutrika the verdict after he was found guilty of evading taxes on earnings of 710,000 Egyptian pounds, about $40,000, for advertisements for a soft drink and a telecom firm in 2008 and 2009.\r\n\r\nAboutrika, who is considered to be one of the most popular players in Egyptian football, has been living in exile since 2013 in Qatar working for beIN Sports TV channel after a court verdict put him on the country’s terror list, before the Court of Cassation ordered the removal of his name in July 2018', 'active', 0, 'sport local', 'Resource/upload/1558247416GettyImages-524049630-680x447.jpg', '2019-05-19 06:30:16', 'admin'),
(6, 'IPhone7+', 'smartphone verygood', 'active', 0, 'technology', 'Resource/upload/1558260274download.png', '2019-05-19 10:04:34', 'admin'),
(7, 'Leo Messi', 'Leo Messi best player in 2014Leo Messi best player in 2014Leo Messi best player in 2014Leo Messi best player in 2014Leo Messi best player in 2014Leo Messi best player in 2014Leo Messi best player in 2014', 'active', 0, 'sport international', 'Resource/upload/1558213307hi-res-159596853_crop_north.jpg', '2019-05-18 21:01:47', 'admin'),
(8, 'Mohammed Salah', 'Mohammed slah player liverpol best player in British in 2017 and reccord the wing fom FIFA and good player Mohammed slah player liverpol best player in British in 2017 and reccord the wing fom FIFA and good playerMohammed slah player liverpol best player in British in 2017 and reccord the wing fom FIFA and good playerMohammed slah player liverpol best player in British in 2017 and reccord the wing fom FIFA and good playerMohammed slah player liverpol best player in British in 2017 and reccord the wing fom FIFA and good player', 'active', 0, 'sport international', 'Resource/upload/1558213247default.jpg', '2019-05-18 21:00:47', 'admin'),
(9, 'Antoine Griezmann deal unlikely before Copa del Rey final, says Ernesto Valverde', 'Barcelona boss Ernesto Valverde has admitted Antoine Griezmann is \"a great player\" but says there will be no new Barcelona signings before next weekend’s Copa del Rey final.\r\nGriezmann revealed he would be leaving Atletico Madrid at the end of the current campaign after five years with the club.', 'active', 0, 'sport international', 'Resource/upload/1558213233skysports-antoine-griezmann_4572696.jpg', '2019-05-18 21:00:33', 'admin'),
(10, 'FA Cup final player ratings: Manchester City stars shine in 6-0 win over Watford', 'Manchester City hammered Watford 6-0 to win the FA Cup on Saturday and clinch an historic treble.\r\n\r\nHere, we assess the performers for both teams at Wembley...', 'active', 0, 'sport international', 'Resource/upload/1558213189skysports-gabriel-jesus-raheem-sterling_4672650.jpg', '2019-05-18 20:59:49', 'admin'),
(11, 'Pep Guardiola insists domestic ', 'Pep Guardiola believes Manchester Citys domestic treble is harder to achieve than winning the Champions League.\r\nCitys thumping 6-0 FA Cup final win over Watford on Saturday at Wembley went alongside their Premier League and Carabao Cup success meaning they are the first-ever mens team to win the English domestic treble', 'active', 0, 'sport international', 'Resource/upload/1558213119colin-pg-3.jpg', '2019-05-18 20:58:39', 'admin'),
(12, 'Neymar returns to PSG training 70 days after his injury', 'Paris Saint-Germain forward Neymar returned to training on Wednesday almost two and a half months since suffering a metatarsal injury in a Coupe de France match against Strasbourg on January 23.The Brazilian did not join the rest of the group on the pitches at the clubs training ground although he worked with the ball under the supervision of the teams physios', 'active', 0, 'sport international', 'Resource/upload/155821278915543069842137.jpg', '2019-05-18 20:53:09', 'admin'),
(13, 'El Hadary ordered to pay  Fifa', 'El Hadary has lost several rulings at Fifa CAS and the supreme court since walking out on Al Ahly to join Swiss club Sion in 2008\r\n\r\nThe 38-year-old goalkeeper will complete serving a four-month Fifa suspension next month\r\n\r\nEl Hadary can then play for his latest club Al-Merreikh of Sudan.\r\n\r\nHe left Al Ahly suddenly in the middle of 2008 to join Sion, with the Cairo club claiming he had breached his contract\r\n\r\nThe goalkeeper claimed Fifa regulations allowed him to make the switch\r\n\r\nAl Ahly were subsequently offered around $400,000 in compensation for the remainder of the players contract.\r\n\r\nBut the Cairo Red Devils stuck to their guns and refused to sanction the transfer.', 'active', 0, 'sport local', 'Resource/upload/1558255387_50864927_elhadarynew.jpg', '2019-05-19 08:43:07', 'admin'),
(14, 'Seven Premier League records Liverpool could break this season', 'Liverpool picked up another three points last night away at Wolves and extended their unbeaten run of 18 games this season.\r\n\r\nGoals from Mo Salah and Virgil van Dijk took the Reds four points clear of Manchester City, in a performance described by manager Jurgen Klopp as “perfect football”.\r\n\r\nWith such a strong start to the season and 20 games remaining for them in the fixture list, we took a look at Premier League records Liverpool could be on course to break…', 'active', 0, 'sport international', 'Resource/upload/1558258711Jurgen-Klopp-Liverpool1.jpg', '2019-05-19 09:38:31', 'admin'),
(15, 'Egypts Sisi follows up on construction work in several nationwide new housing projects', 'The meeting with PM Madbouly and Housing Minister El-Gazzar discussed the status of several new housing projects carried out in the New Administrative Capital, the new cities of Alamein, Mansoura, Rosetta and Upper Egypt', 'active', 0, 'political arbic world', 'Resource/upload/15583654032019-636938076846900930-690.jpg', '2019-05-20 15:16:43', 'admin'),
(16, 'Mother of iconic January 25 Revolution figure, Khaled Said, dies', 'Laila Marzouks son, Khaled Said, became the face of the 2011 Egyptian Revolution after he was tortured to death by police in June 2010', 'active', 0, 'political arbic world', 'Resource/upload/15583655622019-636938685833290241-329.jpg', '2019-05-20 15:19:22', 'admin'),
(17, 'Egypt security forces kill 12 Hasm terrorists in Giza, Cairo: Interior ministry', 'Egypts interior ministry said on Monday that police have killed 12 terrorists from the Muslim Brotherhood-affiliated Hasm group in raids on their hideouts in Giza and Cairo governorates.\r\n\r\nAccording to a ministry statement, the raids were carried out based on intelligence received by the National Security Agency that the terrorists were planning attacks upon directives from leading figures of the terrorist-designated Muslim Brotherhood abroad.\r\n\r\nThe ministry said that security forces raided one of the groups hideouts in 6 October city in Giza, which was being used to manufacture explosive devices.\r\n\r\nWhen the hideout was raided, the group opened fire against the security forces. Seven terrorists were killed in the shootout, the statement raid.', 'active', 0, 'political arbic world', 'Resource/upload/15583657222019-636939475916743705-674.jpg', '2019-05-20 15:22:02', 'admin'),
(18, 'Egypts tourism minister takes tourists from explosion-hit bus on tour of pyramids', 'Egypts Minister of Tourism Rania Al-Mashat on Sunday accompanied a group of South African tourists on a tour of the Giza Pyramids on Sunday, the ministry said.\r\nAccording to the statement, the South African tourists are members of the group of 25 tourists whose bus was hit by an explosion near the pyramids on Sunday morning.\r\n\r\nThe IED explosion shattered the glass of the bus, injuring at least 14 tourists.\r\n\r\nAl-Mashat visited the injured in El-Haram Hospital, before going to the pyramids with another group.\r\n\r\nNo group has claimed responsibility so far for the attack.\r\n\r\nThe governor of Giza Ahmed Rashed and the South African Ambassador to Egypt accompanied the tour group.', 'active', 0, 'political arbic world', 'Resource/upload/15583659212019-636939536425093132-509.jpg', '2019-05-20 15:25:21', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@yaho.com', '123456'),
(16, 'Ali Mohammed', 'Alaa Mohammed Ahmed', 'ali*@yaho+-*o.com', '4869897544'),
(17, 'wafaa mohammed', 'waffa mohammed', 'jwest@example.net', '123456987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_setting`
--
ALTER TABLE `main_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_pages`
--
ALTER TABLE `sub_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `main_setting`
--
ALTER TABLE `main_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_pages`
--
ALTER TABLE `sub_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
