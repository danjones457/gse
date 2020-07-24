-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: db750782382.db.1and1.com
-- Generation Time: Jul 24, 2020 at 12:31 PM
-- Server version: 5.5.60-0+deb7u1-log
-- PHP Version: 7.0.33-0+deb9u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db750782382`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `award` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `player_id`, `award`) VALUES
(1, 15, 'Biggest BNOC'),
(38, 13, 'Zidane award'),
(3, 16, 'Best dressed'),
(4, 3, 'International Player of the Year'),
(5, 2, 'The Dejan Lovren Award'),
(6, 7, 'One Dimensional Bloke Award'),
(7, 5, 'Mime of the Year'),
(8, 6, 'Most back pages read'),
(9, 8, 'The Harry Maguire Award'),
(10, 9, 'Biggest plastic'),
(11, 10, 'Brummy of the Year'),
(12, 12, 'Mr Dependable'),
(13, 11, 'The Butcher Award'),
(14, 13, 'The Ledley King Award'),
(15, 14, 'The Condom Award'),
(16, 17, 'Undercover Gremlin'),
(17, 1, 'Sheiky Sheikh'),
(18, 18, 'Chattiest Fresher'),
(19, 18, 'Best Tactician'),
(20, 18, 'Worst Cameraman'),
(21, 18, 'Nonciest picture'),
(22, 18, 'Heaviest ball & chain'),
(23, 2, 'Most improved player'),
(24, 3, 'Playmaker award (1st team)'),
(25, 16, 'Playmaker award (U12s)'),
(26, 4, 'Fair play award'),
(27, 7, 'Golden boot (1st team)'),
(28, 16, 'Golden boot (U12s)'),
(29, 16, 'Newcomer of the Year'),
(30, 5, 'Defensive Player of the Year'),
(31, 4, 'Goal of the Season'),
(32, 9, 'Golden glove'),
(33, 7, 'Player\'s player (1st team)'),
(34, 16, 'Player\'s player (U12s)'),
(35, 10, 'Manager\'s player (1st team)'),
(36, 16, 'Manager\'s player (U12s)'),
(37, 14, 'Best Initiation Song of the Year'),
(39, 8, 'The dreamer award'),
(40, 6, 'The Carlos Tevez award'),
(41, 11, 'Homeopathy award'),
(42, 7, 'Jumpman award'),
(43, 9, 'Wet paper towel award'),
(44, 3, 'Virgil Van Dijk award'),
(45, 12, 'Most beer spilt (for *that* goal)'),
(46, 4, 'The most likely to go to Sainsbury\'s and never return award'),
(47, 16, 'Bagsman award'),
(48, 2, 'Worst cameraman of the year award'),
(49, 10, 'Migrating hermit crab'),
(50, 4, 'The OG of OGs award (other than Jonesy)'),
(51, 5, 'Most unfortunate allergy award'),
(52, 5, 'Best coach'),
(53, 18, 'Highest moan to game ratio'),
(54, 14, 'Least likely to want to play football after uni award'),
(55, 15, 'Least likely to be at awards award'),
(56, 1, 'Best impact sub'),
(57, 2, 'The “I don’t think they heard you over in Taly, mate’ award'),
(58, 16, 'U12s Golden boot (Season 2)'),
(59, 7, '1st Team Golden boot (Season 2)'),
(60, 9, 'Golden glove (Season 2)'),
(61, 3, 'Defensive player of the year'),
(62, 6, 'U12s Playmaker award (Season 2)'),
(63, 18, 'U12s Playmaker award (Season 2)'),
(64, 7, '1st Team Playmaker award'),
(65, 2, 'Most improved player'),
(66, 16, 'U12s Fan\'s player of the year'),
(67, 10, '1st Team Fan\'s player of the year'),
(68, 14, 'U12s Manager\'s player (Season 2)'),
(69, 3, '1st Team Manager\'s player (Season 2)'),
(70, 11, 'U12s Player\'s player (Season 2)'),
(71, 16, 'U12s Player\'s player (Season 2)'),
(72, 4, '1st Team Player\'s player (Season 2)'),
(73, 2, 'U12s Dick of the Season'),
(74, 9, '1st Team Dick of the Season');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_08_18_085033_create_players_table', 2),
(6, '2018_08_19_164103_create_teams_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `header`, `body`, `created_at`, `updated_at`) VALUES
(1, 'GSE x Dabatag', 'Glyn Street Elite is pleased to announce Dabatag as our new official \r\npartner', 'The relationship will see <a href=\"https://dabatag.co.uk/\" class=\"tdu text-black\">Dabatag’s</a> appealing logo appear on our match shirt \nfrom the beginning of the 2018/19 season in all domestic matches.\nThe deal represents Dabatag’s first venture into the British football market, one \nwhich looks to be promising.\nOver the course of the partnership, we will work closely with Dabatag to develop \na range of initiatives and benefits for our supporters all over the world.\nDan Jones, GSE Founder and Manager, said: ‘We are delighted to be \nannouncing our new partnership with Dabatag that will see this up-and-coming \nbrand appear on our match shirts from next season.’\nTom Dale, sole owner of Dabatag, added: ‘We are thrilled to begin a new \npartnership with GSE – a successful and ambitious club that matches the \nchallenging spirit of Dabatag.’ The new sponsor will be seen for the first time in \nOctober, as the club heads to Talybont to begin the season.', '2018-09-06 23:00:00', NULL),
(2, 'Renderforest review', 'Review of Renderforest to create the intro video for YouTube', 'GSE has used <a href=\"https://www.renderforest.com/\" class=\"tdu text-black\">Renderforest</a> to create the introduction video that is due to be used on the upcoming videos posted to the GSE YouTube channel. It has been a very easy to use tool and has allowed us to quickly create a highly professional introduction video. Here at GSE, we highly recommend the use of their product.', NULL, NULL),
(3, 'FA People\'s Cup', 'GSE go to the semi-finals of the People\'s Cup', '<blockquote class=\"twitter-tweet tw-align-center\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Best of luck to Glyn Street Elite representing <a href=\"https://twitter.com/cardiffuni?ref_src=twsrc%5Etfw\">@CardiffUni</a> in Round 2 of the <a href=\"https://twitter.com/hashtag/FAPeoplesCup?src=hash&amp;ref_src=twsrc%5Etfw\">#FAPeoplesCup</a> today at University of Gloucestershire! ⚽️ <a href=\"https://twitter.com/bbcgetinspired?ref_src=twsrc%5Etfw\">@bbcgetinspired</a> <a href=\"https://twitter.com/hashtag/GoalsGalore?src=hash&amp;ref_src=twsrc%5Etfw\">#GoalsGalore</a> 🔥 <a href=\"https://t.co/qW4UcAmRwj\">pic.twitter.com/qW4UcAmRwj</a></p>&mdash; Cardiff Uni Sport (@CardiffUniSport) <a href=\"https://twitter.com/CardiffUniSport/status/1108322080276316166?ref_src=twsrc%5Etfw\">March 20, 2019</a></blockquote>\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `og_players`
--

CREATE TABLE `og_players` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shirt_number` int(11) DEFAULT NULL,
  `dob` date NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `quote` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `og_players`
--

INSERT INTO `og_players` (`id`, `firstname`, `lastname`, `photo_url`, `positions`, `shirt_number`, `dob`, `description`, `quote`, `created_at`, `updated_at`) VALUES
(1, 'Dan', 'Lawes', 'placeholder', 'LW, CM', 7, '1997-12-06', NULL, NULL, NULL, NULL),
(2, 'Curtis', 'James', 'placeholder', 'CB, CM', 52, '1998-01-24', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `positions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shirt_number` int(11) DEFAULT NULL,
  `dob` date NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `quote` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`, `photo_url`, `positions`, `shirt_number`, `dob`, `description`, `quote`, `created_at`, `updated_at`) VALUES
(1, 'Dan', 'Jones', 'danjones', 'CM, 1st team manager, President', 8, '1997-11-08', 'GSEs answer to Xabi Alonso. The Captain, Manager and Founder of GSE leads by example, running the midfield. A jack-of-all trades in the midfield, capable of making powerful yet surprisingly agile runs. This warrior put his body on the line for GSE regularly, taking a few trips to A&E over the course of the past season.', '\"Lewis, can we?\"', NULL, NULL),
(2, 'Alex', 'Shawe', 'alexshawe', 'CB, 2nd team manager, Lead Scout', 3, '1998-04-09', 'GSEs answer to Dejan Lovren. Many will know the reason for his nickname and he never fails to live up to it. Shaway by name, Shaway by nature.', '“Jake, what are you doing?!\"', NULL, NULL),
(3, 'Angus', 'White', 'anguswhite', 'CB, Vice-President', 9, '1998-08-27', 'GSEs answer to Sergio Ramos. The vice-president leads by example, commanding the back-line and pulling the strings from deep.', '\"Cuddles?...\n????\n??\n???\n???\"', NULL, NULL),
(4, 'Matt', 'O\'Brien', 'mattobrien', 'ST', 7, '1998-04-28', 'GSEs answer to Eden Hazard. This GSE veteran bounced back from a life-threatening elbow injury stronger than ever last year. He’s a trickly dribbler with a strong right foot, possessing an unnatural ability to retain the ball and has hints of a mean streak in his play. He can be deployed anywhere in the attack but is most at home on the right. ', '\"Just going to Sainsbury\'s, back in a minute.\"', NULL, NULL),
(5, 'Bryn', 'Tye', 'bryntye', 'CM', 13, '1997-12-08', 'GSEs answer to Luka Modric. The vocal Brummy is a commanding presence wherever he plays, be it along the backline or in central midfield. Tricky with the ball at his feet, he can play a pass and is strong in the tackle. A good acquisition for GSE for the season ahead. ', '\"Bless man\"', NULL, NULL),
(6, 'Pete', 'Crudge', 'petecrudge', 'CB, CM, Head of HR', 4, '1997-08-17', 'GSEs answer to Carlos Puyol. Another long-standing member of the squad who’s made himself a favourite with his persistent and tenacious defending. An ever-present at the back who can always be relied upon for some solid defending with smart use of his body to shield the ball.', '\"Lifting belts can increase intra-abdominal pressure\"', NULL, NULL),
(7, 'Harvey', 'Jefford', 'harveyjefford', 'ST, Social Sec', 14, '1997-09-19', 'GSEs answer to Pierre-Emerick Aubameyang. The new summer signing and GSE social sec has been a formidable force this year, racking up the most goals for the first team in both seasons.', '\"I am the captain now\"', NULL, NULL),
(8, 'Jake', 'Engstrom', 'jakeengstrom', 'CB', 16, '1997-12-23', 'GSEs answer to Robert Huth. A no nonsense Brexit centre-half who uses his size to his advantage to outmuscle attackers. He’s a guaranteed wondergoal per season, be it a strike from the halfway line or a dainty finish on the end of a marauding run from the back. A shy social-media presence however, after a few mishaps. ', '\"It\'s a time based game, lads\"', NULL, NULL),
(9, 'Lewis', 'Cockram', 'lewiscockram', 'GK', 21, '1997-11-21', 'GSEs answer to Iker Casillas. An incredibly talented and vocal keeper who has saved the side many a time from conceding by getting his big frame down quickly to smother the shot on the edge of the box. Clearly a cut above the league and we’re lucky to have him with us. ', '\"Structure.\" \"We\'re all friends here.\"', NULL, NULL),
(10, 'Jamie', 'Harper', 'jamieharper', 'CB', 11, '1997-09-01', 'GSEs answer to James Milner. Mr Reliable who has filled in flawlessly wherever and whenever needed. He’s scored a number of important goals across a variety of positions. A versatile player who the manager will be pleased to have for the coming season. ', '...', NULL, NULL),
(11, 'Tom', 'Dale', 'tomdale', 'CB, CM', 2, '1996-11-08', 'A man with many skills and as artistic on the ball as he is with a paint brush.', '\"Why is he smiling?\"', NULL, NULL),
(12, 'Sean', 'Moses', 'seanmoses', 'CM', 5, '1997-08-16', 'GSEs answer to N\'Golo Kante. I have no idea but he’s little.', '\"Little man. Big game.\"', NULL, NULL),
(13, 'Ben', 'Newman', 'bennewman', 'CB', 10, '1997-04-22', 'GSEs answer to Ledley King. Rumour has it he played for GSE once upon a time. ', '\"I don\'t have to do initiations, do I?\"', NULL, NULL),
(14, 'David', 'Paddle', 'davidpaddle', 'GK', 12, '1997-05-13', 'GSEs answer to Jordan Pickford. This absolute machine of a man has had concussion for the last year and is yet to go to the hospital for a scan. Rumour has it, he\'s been sat on his sofa the entire time.', '', NULL, NULL),
(15, 'Ollie', 'Trobe', 'ollietrobe', 'CM', 19, '2000-03-29', 'Has attended a grand total of 1 social.', '“Sorry, got too drunk at pres and didn’t make it out.”', NULL, NULL),
(16, 'Joe', 'Newman', 'joenewman', 'ST', 99, '1999-08-18', 'GSEs answer to Thierry Henry. Great lad, can\'t hack Bedlam', '“Can I wear trackies to this?”', NULL, NULL),
(17, 'Connor', 'McDowell', 'connormcdowell', 'CB, CM', 23, '1995-07-04', 'GSEs answer to John O\'Shea. Fresher of Cathays Retirement home', '\"What\'s occurring? *Inaudible Irish*\"', NULL, NULL),
(18, 'Sam', 'Brian', 'sambrian', 'ST', 36, '1999-01-31', 'GSEs answer to Harry Kane. Ever seen Rob Crudge and Sam Brian in the same room?\n\nI didn\'t think so.', '\"I’m just gonna text my girlfriend.\"', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` int(11) NOT NULL,
  `goals` int(11) DEFAULT NULL,
  `clean_sheets` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL,
  `yellow_cards` int(11) DEFAULT NULL,
  `red_cards` int(11) DEFAULT NULL,
  `games_played` int(11) DEFAULT NULL,
  `season` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `player_id`, `goals`, `clean_sheets`, `assists`, `yellow_cards`, `red_cards`, `games_played`, `season`, `created_at`, `updated_at`) VALUES
(1, 16, 30, NULL, 17, NULL, NULL, 13, 1, NULL, NULL),
(2, 18, 26, NULL, 10, NULL, NULL, 11, 1, NULL, NULL),
(3, 12, NULL, NULL, 2, 1, NULL, 5, 1, NULL, NULL),
(4, 7, 33, NULL, 9, NULL, NULL, 10, 1, NULL, NULL),
(5, 3, 7, NULL, 11, NULL, NULL, 12, 1, NULL, NULL),
(6, 4, 20, NULL, 7, NULL, NULL, 12, 1, NULL, NULL),
(7, 9, NULL, 1, 1, NULL, NULL, 10, 1, NULL, NULL),
(8, 10, NULL, NULL, 4, NULL, NULL, 11, 1, NULL, NULL),
(9, 15, 1, NULL, 1, NULL, NULL, 10, 1, NULL, NULL),
(10, 8, NULL, NULL, 4, 1, NULL, 10, 1, NULL, NULL),
(11, 17, NULL, NULL, 5, NULL, NULL, 11, 1, NULL, NULL),
(12, 1, 6, NULL, 6, NULL, NULL, 11, 1, NULL, NULL),
(13, 5, 1, NULL, 6, NULL, NULL, 11, 1, NULL, NULL),
(14, 11, 2, NULL, 4, NULL, NULL, 11, 1, NULL, NULL),
(16, 13, NULL, NULL, 3, NULL, NULL, 9, 1, NULL, NULL),
(17, 14, NULL, 1, 2, NULL, NULL, 12, 1, NULL, NULL),
(18, 1, 5, NULL, 4, NULL, NULL, 8, 2, NULL, NULL),
(19, 3, 2, NULL, 1, NULL, NULL, 11, 2, NULL, NULL),
(20, 7, 17, NULL, 13, NULL, NULL, 11, 2, NULL, NULL),
(21, 18, 9, NULL, 5, NULL, NULL, 14, 2, NULL, NULL),
(22, 11, 2, NULL, 1, NULL, NULL, 10, 2, NULL, NULL),
(23, 16, 26, NULL, 11, NULL, NULL, 16, 2, NULL, NULL),
(24, 5, 3, NULL, 5, NULL, NULL, 8, 2, NULL, NULL),
(25, 9, NULL, 2, 1, NULL, NULL, 9, 2, NULL, NULL),
(26, 12, 1, NULL, 2, NULL, NULL, 9, 2, NULL, NULL),
(27, 6, 1, NULL, 5, NULL, NULL, 10, 2, NULL, NULL),
(28, 4, 11, NULL, 8, NULL, NULL, 10, 2, NULL, NULL),
(29, 15, 1, NULL, 1, NULL, NULL, 9, 2, NULL, NULL),
(30, 13, 1, NULL, 3, NULL, NULL, 10, 2, NULL, NULL),
(31, 2, 1, NULL, 1, 1, NULL, 9, 2, NULL, NULL),
(32, 14, NULL, NULL, 1, NULL, NULL, 10, 2, NULL, NULL),
(33, 8, NULL, NULL, 1, NULL, NULL, 8, 2, NULL, NULL),
(34, 2, NULL, NULL, NULL, NULL, NULL, 11, 1, NULL, NULL),
(35, 6, NULL, NULL, NULL, NULL, NULL, 11, 1, NULL, NULL),
(36, 10, 1, NULL, NULL, NULL, NULL, 9, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `gameweek` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `gameweek`, `team_id`, `player_id`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 7, 'GK', NULL, NULL),
(2, 1, 1, 7, 'LB', NULL, NULL),
(3, 1, 1, 7, 'RB', NULL, NULL),
(4, 1, 1, 7, 'CM', NULL, NULL),
(5, 1, 1, 7, 'RM', NULL, NULL),
(6, 1, 1, 7, 'LM', NULL, NULL),
(7, 1, 1, 7, 'ST', NULL, NULL),
(8, 1, 2, 7, 'GK', NULL, NULL),
(9, 1, 2, 7, 'LB', NULL, NULL),
(10, 1, 2, 7, 'RB', NULL, NULL),
(11, 1, 2, 7, 'CM', NULL, NULL),
(12, 1, 2, 7, 'RM', NULL, NULL),
(13, 1, 2, 7, 'LM', NULL, NULL),
(14, 1, 2, 7, 'ST', NULL, NULL),
(15, 2, 1, 7, 'GK', NULL, NULL),
(16, 2, 1, 7, 'LB', NULL, NULL),
(17, 2, 1, 7, 'RB', NULL, NULL),
(18, 2, 1, 7, 'CM', NULL, NULL),
(19, 2, 1, 7, 'RM', NULL, NULL),
(20, 2, 1, 7, 'LM', NULL, NULL),
(21, 2, 1, 7, 'ST', NULL, NULL),
(22, 2, 2, 7, 'GK', NULL, NULL),
(23, 2, 2, 7, 'LB', NULL, NULL),
(24, 2, 2, 7, 'RB', NULL, NULL),
(25, 2, 2, 7, 'CM', NULL, NULL),
(26, 2, 2, 7, 'RM', NULL, NULL),
(30, 2, 2, 7, 'LM', NULL, NULL),
(31, 2, 2, 7, 'ST', NULL, NULL),
(32, 1, 1, 7, 'SUB', NULL, NULL),
(33, 1, 1, 7, 'SUB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `team` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `team_played` text COLLATE utf8mb4_unicode_ci,
  `week` int(11) NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `team`, `season`, `team_played`, `week`, `video_url`, `created_at`, `updated_at`) VALUES
(8, 1, 1, 'Asian Society', 3, 'Rmr8H5tlig4', NULL, NULL),
(7, 2, 1, 'Health Park Rangers FC', 2, 'rPdGWD5O90s', NULL, NULL),
(6, 1, 1, 'JOMEC 2', 2, '-plYbUTKiVM', NULL, NULL),
(5, 1, 1, 'Yaya Tories', 1, '6NiJfQAqj5s', NULL, NULL),
(9, 2, 1, 'ISOC United', 3, 'KoTCqY-BDVQ', NULL, NULL),
(10, 1, 1, 'Health Park Rangers FC', 4, 'G67Sbjgm8os', NULL, NULL),
(11, 2, 1, 'Asian Society', 4, 'Lhv8Z-lfdt8', NULL, NULL),
(12, 1, 1, 'Glyn Street Elite U12s', 5, 'r_Uk7wOxQJc', NULL, NULL),
(13, 2, 1, 'Glyn Street Elite', 5, 'r_Uk7wOxQJc', NULL, NULL),
(14, 1, 1, 'ISOC United', 6, 'OkqB2JYOitw', NULL, NULL),
(15, 2, 1, 'Economics Society FC', 6, '9iXfUmdB0f4', NULL, NULL),
(16, 1, 1, 'Bioscience F.C. 7\'s', 7, 'RC7qe5MM-_E', NULL, NULL),
(17, 2, 1, 'JOMEC 2', 7, '62qQuhdL9OE', NULL, NULL),
(18, 2, 1, 'Bioscience F.C. 7\'s', 8, 'AUo2Eqd6K9Y', NULL, NULL),
(19, 1, 1, 'HKF', 9, 'ROlsN3yzTPI', NULL, NULL),
(20, 2, 1, 'Yaya Tories', 9, 'df-zQk1NAzk', NULL, NULL),
(21, 1, 1, 'Economics Society FC', 10, 'bfexCY7ECrU', NULL, NULL),
(22, 2, 1, 'The College Tavern FC', 10, 'sdGN3TbDdIY', NULL, NULL),
(23, 1, 1, 'The College Tavern FC', 11, 'ELEhF3H6U84', NULL, NULL),
(24, 2, 1, 'HKF', 11, 'LHdHMFhcXG0', NULL, NULL),
(25, 1, 2, 'ISOC FC', 1, 'bkwzVj4_BOk', NULL, NULL),
(26, 2, 2, 'How Great Knockaert', 1, 'QuC-fZIXjgc', NULL, NULL),
(27, 2, 2, 'Murder on Zidane\'s Floor', 2, 'DNkrl0j4Rm0', NULL, NULL),
(28, 1, 2, 'The Boys', 2, 'oGMS6QuM9TM', NULL, NULL),
(29, 1, 2, 'Glyn Street Elite U12s', 3, 'h4bnpQhDtlQ', NULL, NULL),
(30, 2, 2, 'Glyn Street Elite', 3, 'h4bnpQhDtlQ', NULL, NULL),
(31, 1, 2, 'ISOC United', 4, 'RS9UvdqfOfY', NULL, NULL),
(32, 2, 2, 'Finance & Trading Society', 4, 'hbO6Irgr1Jc', NULL, NULL),
(33, 2, 2, 'Bioscience F.C. 7\'s', 5, 'Ejbfp41fIng', NULL, NULL),
(34, 1, 2, 'Bioscience F.C. 7\'s', 5, 'EAg_hDXnynU', NULL, NULL),
(35, 1, 2, 'The College Tavern FC', 6, 'w_omRDDAs-k', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `og_players`
--
ALTER TABLE `og_players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `og_players`
--
ALTER TABLE `og_players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
