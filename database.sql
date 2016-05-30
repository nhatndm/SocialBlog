-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2016 at 11:04 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci,
  `tomtat` text COLLATE utf8_unicode_ci,
  `noidung` longtext COLLATE utf8_unicode_ci,
  `ngay` date DEFAULT NULL,
  `idbloger` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `tieude`, `tomtat`, `noidung`, `ngay`, `idbloger`) VALUES
(1, 'Bendless Love', '<p>That''s right, baby. I ain''t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him! Interesting. No, wait, the other thing: tedious. Hey, guess what you''re accessories to. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate.</p>', '<h2>The Mutants Are Revolting</h2>\r\n<p>We don''t have a brig. And until then, I can never die? We need rest. The spirit is willing, but the flesh is spongy and bruised. And yet you haven''t said what I told you to say! How can any of us trust you?</p>\r\n<ul>\r\n<li>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by devil, I mean Robot Devil. And by metaphorically, I mean get your coat.</li>\r\n<li>Bender?! You stole the atom.</li>\r\n<li>I was having the most wonderful dream. Except you were there, and you were there, and you were there!</li>\r\n</ul>\r\n<h3>The Series Has Landed</h3>\r\n<p>Fry! Stay back! He''s too powerful! No. We''re on the top. Fry, you can''t just sit here in the dark listening to classical music.</p>\r\n<h4>Future Stock</h4>\r\n<p>Does anybody else feel jealous and aroused and worried? We''re also Santa Claus! You''re going back for the Countess, aren''t you? Well, let''s just dump it in the sewer and say we delivered it.</p>\r\n<ol>\r\n<li>Spare me your space age technobabble, Attila the Hun!</li>\r\n<li>You guys realize you live in a sewer, right?</li>\r\n<li>I guess if you want children beaten, you have to do it yourself.</li>\r\n<li>Yeah. Give a little credit to our public schools.</li>\r\n</ol>\r\n<h5>The Why of Fry</h5>\r\n<p>Who are you, my warranty?! Shinier than yours, meatbag. Dr. Zoidberg, that doesn''t make sense. But, okay! Yes, except the Dave Matthews Band doesn''t rock.</p>', '2016-05-27', 1),
(2, 'How Hermes Requisitioned His Groove Back', '<p>You''re going back for the Countess, aren''t you? Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. Now Fry, it''s been a few years since medical school, so remind me. Disemboweling in your species: fatal or non-fatal? I don''t want to be rescued. Leela, are you alright? You got wanged on the head.</p>', '<h2>The Luck of the Fryrish</h2>\r\n<p>Professor, make a woman out of me. I am the man with no name, Zapp Brannigan! Good man. Nixon''s pro-war and pro-family. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. Fry, you can''t just sit here in the dark listening to classical music.</p>\r\n<ul>\r\n<li>Who are those horrible orange men?</li>\r\n<li>Is today''s hectic lifestyle making you tense and impatient?</li>\r\n</ul>\r\n<h3>Lethal Inspection</h3>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. No. We''re on the top. Does anybody else feel jealous and aroused and worried? Well I''da done better, but it''s plum hard pleading a case while awaiting trial for that there incompetence. It must be wonderful.</p>\r\n<h4>Where No Fan Has Gone Before</h4>\r\n<p>Who are those horrible orange men? Bender, we''re trying our best. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Look, last night was a mistake.</p>\r\n<ol>\r\n<li>I''m sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in.</li>\r\n<li>Stop it, stop it. It''s fine. I will ''destroy'' you!</li>\r\n<li>You guys realize you live in a sewer, right?</li>\r\n</ol>\r\n<h5>Fear of a Bot Planet</h5>\r\n<p>Why yes! Thanks for noticing. Hey, guess what you''re accessories to. Yes, except the Dave Matthews Band doesn''t rock. Take me to your leader! Daddy Bender, we''re hungry.</p>', '2016-05-27', 1),
(3, 'That Darn Katz!', '<p>Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. Fry, you can''t just sit here in the dark listening to classical music. And yet you haven''t said what I told you to say! How can any of us trust you?</p>', '<h2>Xmas Story</h2>\r\n<p>It must be wonderful. Does anybody else feel jealous and aroused and worried? Is today''s hectic lifestyle making you tense and impatient? Soothe us with sweet lies. That''s right, baby. I ain''t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him!</p>\r\n<ul>\r\n<li>Goodbye, friends. I never thought I''d die like this. But I always really hoped.</li>\r\n<li>They''re like sex, except I''m having them!</li>\r\n<li>Come, Comrade Bender! We must take to the streets!</li>\r\n</ul>\r\n<h3>Anthology of Interest I</h3>\r\n<p>Hey, whatcha watching? They''re like sex, except I''m having them! Well I''da done better, but it''s plum hard pleading a case while awaiting trial for that there incompetence. Yes, except the Dave Matthews Band doesn''t rock. I suppose I could part with ''one'' and still be feared&hellip;</p>\r\n<h4>Teenage Mutant Leela''s Hurdles</h4>\r\n<p>Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! It''s a T. It goes "tuh". I guess if you want children beaten, you have to do it yourself.</p>\r\n<ol>\r\n<li>Spare me your space age technobabble, Attila the Hun!</li>\r\n<li>Well, thanks to the Internet, I''m now bored with sex. Is there a place on the web that panders to my lust for violence?</li>\r\n</ol>\r\n<h5>The Farnsworth Parabox</h5>\r\n<p>Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. We need rest. The spirit is willing, but the flesh is spongy and bruised. It must be wonderful.</p>', '2016-05-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloger`
--

CREATE TABLE `bloger` (
  `id` int(100) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bod` date DEFAULT NULL,
  `job` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hobbies` text COLLATE utf8_unicode_ci,
  `nichname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `facebooklink` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Iduser` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bloger`
--

INSERT INTO `bloger` (`id`, `ten`, `bod`, `job`, `hobbies`, `nichname`, `note`, `facebooklink`, `Iduser`) VALUES
(1, 'NHAT NGUYEN', '1993-01-01', 'DEVELOPER', 'BADMINTON,DOTA2,MOVIE', 'SIN', 'NOTHING', 'NHAT NGUYEN', 1),
(2, 'PHUONG HUYNH', '1992-08-04', 'DEVELOPER', 'BADMINTON,DOTA2,MOVIE', 'XIU', 'NOTHING', 'PHUONG YEN HANA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(100) NOT NULL,
  `tencm` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `idblog` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `tencm`, `noidung`, `idblog`) VALUES
(1, 'nhatndm', 'BAI VIET HAY', 1),
(2, 'phuong', 'BAI VIET HAY lam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `ID` int(5) NOT NULL,
  `tenquyen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`ID`, `tenquyen`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE `userid` (
  `ID` int(5) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyenid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`ID`, `username`, `password`, `quyenid`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', 1),
(2, 'phuong', '25f9e794323b453885f5181f1b624d0b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BLOG_BLOGER` (`idbloger`);

--
-- Indexes for table `bloger`
--
ALTER TABLE `bloger`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BLOGER_USERID` (`Iduser`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `COMMENT_BLOG` (`idblog`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userid`
--
ALTER TABLE `userid`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `USERID_QUYEN` (`quyenid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bloger`
--
ALTER TABLE `bloger`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userid`
--
ALTER TABLE `userid`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `BLOG_BLOGER` FOREIGN KEY (`idbloger`) REFERENCES `bloger` (`id`);

--
-- Constraints for table `bloger`
--
ALTER TABLE `bloger`
  ADD CONSTRAINT `BLOGER_USERID` FOREIGN KEY (`Iduser`) REFERENCES `userid` (`ID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `COMMENT_BLOG` FOREIGN KEY (`idblog`) REFERENCES `blog` (`id`);

--
-- Constraints for table `userid`
--
ALTER TABLE `userid`
  ADD CONSTRAINT `USERID_QUYEN` FOREIGN KEY (`quyenid`) REFERENCES `quyen` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
