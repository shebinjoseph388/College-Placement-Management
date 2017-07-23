-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2015 at 12:43 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(31, 'paul', '2015-07-20 22:18:04', 'Add School course Bac.Computer'),
(32, 'paul', '2015-07-20 22:18:16', 'Add School course Bac.Statistics'),
(33, 'paul', '2015-07-20 22:18:31', 'Add School course Chemistry'),
(34, 'paul', '2015-07-20 22:18:49', 'Add School course Electronics'),
(35, 'paul', '2015-07-20 22:18:59', 'Add School course MA'),
(36, 'paul', '2015-07-20 22:19:09', 'Add School course Economics'),
(37, 'paul', '2015-07-20 22:19:22', 'Add School course Botany'),
(38, 'paul', '2015-07-20 22:19:33', 'Add School course Zoelogy'),
(39, 'paul', '2015-07-20 22:20:00', 'Add School course BioChemistry'),
(40, 'Binu Joseph', '2015-07-22 06:08:49', 'Edited 13cs4102'),
(41, 'Abhijith K ', '2015-07-22 14:14:17', 'Edited PlacementForm'),
(42, 'Binu Joseph', '2015-07-23 06:25:56', 'Edited 13cs4112'),
(43, 'paul', '2015-07-24 14:08:01', 'Add School Year 2013-2016'),
(44, 'paul', '2015-07-24 15:53:39', 'Add School course MCA'),
(45, 'paul', '2015-07-24 15:53:46', 'Add School course MBA'),
(46, 'paul', '2015-07-24 15:53:55', 'Add School course Psychology'),
(47, 'paul', '2015-07-24 15:54:04', 'Add School course BCA'),
(48, 'paul', '2015-07-24 15:54:47', 'Add School Year 2014-2016'),
(49, 'Binu Joseph', '2015-07-24 18:28:13', 'Deleted '),
(50, 'Ashvina Kumari N', '2015-07-25 09:33:57', 'Edited PlacementForm'),
(51, 'Phebe  Beryl ', '2015-07-25 09:36:57', 'Edited PlacementForm'),
(52, 'Ganesh Ingnam ', '2015-07-25 09:42:33', 'Edited PlacementForm'),
(53, 'Shainu Thomas ', '2015-07-25 09:44:25', 'Edited PlacementForm'),
(54, 'Jiby Varghese ', '2015-07-25 09:48:20', 'Edited PlacementForm'),
(55, 'Jinu Maria ', '2015-07-25 09:52:45', 'Edited PlacementForm'),
(56, 'Thanreingam Pheiray ', '2015-07-25 10:43:55', 'Edited PlacementForm'),
(57, 'Shebin Joseph ', '2015-07-27 09:30:10', 'Edited PlacementForm'),
(58, 'Denil David ', '2015-07-27 10:21:44', 'Edited PlacementForm'),
(59, 'Abhijith K ', '2015-07-27 10:25:28', 'Edited PlacementForm'),
(60, 'Abhijith K  ', '2015-07-27 10:26:03', 'Edited PlacementForm'),
(61, 'Denil T David  ', '2015-07-27 10:35:48', 'Edited PlacementForm');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question_id` int(11) NOT NULL,
  `answer_text` varchar(100) NOT NULL,
  `choices` varchar(3) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `quiz_question_id`, `answer_text`, `choices`) VALUES
(1, 1, 'sdasf', 'A'),
(2, 1, 'fafasf', 'B'),
(3, 1, 'afasfa', 'C'),
(4, 1, 'afasfas', 'D'),
(5, 2, 'sdfsfds', 'A'),
(6, 2, 'sgsdgs', 'B'),
(7, 2, 'sgsdgs', 'C'),
(8, 2, 'sgsdgsd', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(100) NOT NULL,
  `collegeyear` int(20) DEFAULT NULL,
  `Person_in_charge` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `collegeyear`, `Person_in_charge`) VALUES
(36, 'MCA', 14, NULL),
(57, 'MBA', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_placement_overview`
--

CREATE TABLE IF NOT EXISTS `class_placement_overview` (
  `class_placement_overview_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_class_id` int(11) NOT NULL,
  `content` varchar(10000) NOT NULL,
  PRIMARY KEY (`class_placement_overview_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `class_placement_overview`
--


-- --------------------------------------------------------

--
-- Table structure for table `class_quiz`
--

CREATE TABLE IF NOT EXISTS `class_quiz` (
  `class_quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_class_id` int(11) NOT NULL,
  `quiz_time` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  PRIMARY KEY (`class_quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `class_quiz`
--

INSERT INTO `class_quiz` (`class_quiz_id`, `teacher_class_id`, `quiz_time`, `quiz_id`) VALUES
(1, 3, 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_reg`
--

CREATE TABLE IF NOT EXISTS `company_reg` (
  `company_reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(25) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `company_contact` varchar(35) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `reg_date` varchar(30) NOT NULL,
  PRIMARY KEY (`company_reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `company_reg`
--


-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', '<pre>\r\n<span style="font-size:16px"><strong>Mission</strong></span></pre>\r\n\r\n<p style="text-align:left"><span style="font-family:arial,helvetica,sans-serif; font-size:medium"><span style="font-size:large">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span>&nbsp; &nbsp;<span style="font-size:18px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; A leading institution in higher and continuing education commited to engage in quality instruction, development-oriented research sustinable lucrative economic enterprise, and responsive extension and training services through relevant academic programs to empower a human resource that responds effectively to challenges in life and acts as catalyst in the holistoic development of a humane society.&nbsp;</span></p>\r\n\r\n<p style="text-align:left">&nbsp;</p>\r\n'),
(2, 'Vision', '<pre><span style="font-size: large;"><strong>Vision</strong></span></pre>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: large;">&nbsp; Driven by its passion for continous improvement, the State College has to vigorously pursue distinction and proficieny in delivering its statutory functions to the Filipino people in the fields of education, business, agro-fishery, industrial, science and technology, through committed and competent human resource, guided by the beacon of innovation and productivity towards the heights of elevated status. </span><br /><br /></p>'),
(3, 'Contact Us', '<pre><span style="font-size: large;"><strong>Contact Us</strong></span> </pre>\r\n<p style="text-align:left"><span style="font-family:arial,helvetica,sans-serif; font-size:medium"><span style="font-size:large"><span style="font-size:18px">Prof. Sen B.Mathews <br/>Head - CPCR<br>9632815852<br/>senmathews.b@kristujayanti.com<br/>Talent Transformation Team<br/>Centre for Placement & Corporate\r\nRelations(CPCR)<br/>\r\nKristu Jayanti College of\r\nManagement & Technology<br/>\r\nBangalore - 560077<br/>\r\nEmail: placement@kristujayanti.com .&nbsp;</span></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(4, 'Footer', '<p style="text-align:center">Kristu Jayanti Placement System</p>\r\n\r\n<p style="text-align:center">All Rights Reserved &reg;2015</p>\r\n'),
(5, 'new placement', '<pre>\r\nUP COMING EVENTS</pre>\r\n\r\n<p><strong>&gt;</strong> Aptitude held by</p>\r\n\r\n<p><strong>&gt;</strong> INTERCAMPUS Placement</p>\r\n\r\n<p><strong>&gt;</strong>&nbsp;visiting google</p>\r\n\r\n<p>&gt;new placement</p>\r\n\r\n<p><strong>&gt;</strong> GoogleTech</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(6, 'Title', '<p><span style="font-family:trebuchet ms,geneva">KJC Online Placement Management System</span></p>\r\n'),
(7, 'News', '<pre>\r\n<span style="font-size:medium"><em><strong>Recent News\r\n</strong></em></span></pre>\r\n\r\n<p>&nbsp;\r\n<p style="text-align:justify">&nbsp;</p>\r\n</p>\r\n'),
(8, 'Announcements', '<pre>\r\n<span style="font-size:medium"><em><strong>Announcements</strong></em></span></pre>\r\n\r\n<p>Registered candidates certificate submission: October 9-11, 2015</p>\r\n\r\n<p>Interview: October 12- November 3, 2013</p>\r\n\r\n<p>Aptitude test on next week</p>\r\n'),
(10, 'Calendar', '<pre style="text-align:center">\r\n<span style="font-size:medium"><strong>&nbsp;New Placements..</strong></span></pre>\r\n\r\n<table align="center" cellpadding="0" cellspacing="0" style="line-height:1.6em; margin-left:auto; margin-right:auto">\r\n	<tbody>\r\n		<tr>\r\n			<td style="border-color:rgb(102, 0, 51); height:15px">New Placement</td>\r\n			<td>June 25th</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Placement for MCA by IBM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>June 10, 2015 to June 11, 2015&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Placement for MBA by COCOCOLA</p>\r\n			</td>\r\n			<td>\r\n			<p>June. 21, 2015 to June23, 2015</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Placement for BCA by HCL</p>\r\n			</td>\r\n			<td>\r\n			<p>Nov. 5, 2015</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<table cellpadding="0" cellspacing="0" style="line-height:1.6em; margin-left:auto; margin-right:auto">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="4">\r\n			<p><strong>June 5, 2013 to October 11, 2013 &ndash; Placement date</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>June 4, 2013 &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>Orientation for last year and&nbsp;Freshers</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>June 5</p>\r\n			</td>\r\n			<td>\r\n			<p>Techtalk</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>June 5</p>\r\n			</td>\r\n			<td>\r\n			<p>Selected candidates General Assembly</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>June 6,7</p>\r\n			</td>\r\n			<td>\r\n			<p>In-Service Training (Departmental)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>June 10</p>\r\n			</td>\r\n			<td>\r\n			<p>last date</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>June 19,20,21</p>\r\n			</td>\r\n			<td>\r\n			<p>Branch/Campus Visit for Administrative / Academic/Accreditation/ Concerns</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2">\r\n			<p>June</p>\r\n			</td>\r\n			<td>\r\n			<p>Club Organizations (By Discipline/Programs) by company</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Student technical test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>July</p>\r\n			</td>\r\n			<td>\r\n			<p>Aptitude test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>July 11, 12</p>\r\n			</td>\r\n			<td>\r\n			<p>Long Tests</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>August&nbsp; 8, 9</p>\r\n			</td>\r\n			<td>\r\n			<p>Aptitude final test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>August 19</p>\r\n			</td>\r\n			<td>\r\n			<p>ArawngLahi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>August 23</p>\r\n			</td>\r\n			<td>\r\n			<p>Submission of Grade Sheets for Interview</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>August</p>\r\n			</td>\r\n			<td>\r\n			<p>Recognition Program (by company)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>August 26</p>\r\n			</td>\r\n			<td>\r\n			<p>Bank test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>August 28, 29, 30</p>\r\n			</td>\r\n			<td>\r\n			<p>Sports selection</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>September 19,20</p>\r\n			</td>\r\n			<td>\r\n			<p>Long Tests</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>October 5</p>\r\n			</td>\r\n			<td>\r\n			<p>Net Exam</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>October 10, 11</p>\r\n			</td>\r\n			<td>\r\n			<p>Final Examination</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>October 12</p>\r\n			</td>\r\n			<td>\r\n			<p>Online test for SBI</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<table cellpadding="0" cellspacing="0" style="margin-left:auto; margin-right:auto">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="4">\r\n			<p><strong>Nov. 4, 2013 to March 27, 2014 &ndash; Training by company</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>November 4 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>General test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>November 19, 20, 21, 22</p>\r\n			</td>\r\n			<td>\r\n			<p>Intercollege placemnt</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>December 5, 6</p>\r\n			</td>\r\n			<td>\r\n			<p>Long Tests</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>December 19,20</p>\r\n			</td>\r\n			<td>\r\n			<p>Online test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>December 21</p>\r\n			</td>\r\n			<td>\r\n			<p>Start of Interview</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>December 25</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>December 30</p>\r\n			</td>\r\n			<td>\r\n			<p>Public test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>January 6, 2014</p>\r\n			</td>\r\n			<td>\r\n			<p>Resume Submission</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>January 9, 10</p>\r\n			</td>\r\n			<td>\r\n			<p>Placement Evaluation</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>January 29</p>\r\n			</td>\r\n			<td>\r\n			<p>Submission of Grades Sheets for Aptitude</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>February 13, 14</p>\r\n			</td>\r\n			<td>\r\n			<p>Long Tests</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>March 6, 7</p>\r\n			</td>\r\n			<td>\r\n			<p>Interview</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>March 13, 14</p>\r\n			</td>\r\n			<td>\r\n			<p>Placement talk</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>March 17, 18, 19, 20, 21</p>\r\n			</td>\r\n			<td>\r\n			<p>Recognition / Graduation Rites</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>March 27</p>\r\n			</td>\r\n			<td>\r\n			<p>Internship test</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>June 5, 2014</p>\r\n			</td>\r\n			<td>\r\n			<p>First Day of Service for SY 2014-2015</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0" style="margin-left:auto; margin-right:auto">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<p><strong>Recently selected Students</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>Department</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Jithin</p>\r\n			</td>\r\n			<td>\r\n			<p>MCA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Jinu</p>\r\n			</td>\r\n			<td>\r\n			<p>MBA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Auguestin</p>\r\n			</td>\r\n			<td>\r\n			<p>M.Com</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>shebin</td>\r\n			<td>MCA</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(11, 'Companies', '<div class="jsn-article-content" style="text-align: left;">\r\n<pre>\r\n<span style="font-size:medium"><em><strong>Visited Companies</strong></em></span></pre>\r\n\r\n<ul>\r\n	<li>IBM - 712-0848</li>\r\n	<li>Wipro - 495-5560</li>\r\n	<li>HCL - 495-4064(telefax)</li>\r\n	<li>Infosis - 495-1635</li>\r\n	<li>COCOCOLA - 495-4657(telefax)</li>\r\n	<li>TCS - 712-7272</li>\r\n	<li>CIT - 712-0670</li>\r\n	<li>SAS - 495-6017</li>\r\n	<li>ORACLE - 712-8404(telefax)</li>\r\n	<li>GOOGLE - 495-3470</li>\r\n	<li>Microsoft- 495-3767</li>\r\n	<li>Oracle - 712-6144/712-6459</li>\r\n	<li>COA - 495-5748</li>\r\n	<li>SBI - 476-1600</li>\r\n	<li>SIB - 495-4996</li>\r\n	<li>ICICI - 457-2819</li>\r\n	<li>HP - 495-5396</li>\r\n	<li>ACER - 712-8464</li>\r\n	<li>Reliance - 495-5143</li>\r\n	<li>OSA - 495-1152</li>\r\n</ul>\r\n</div>\r\n'),
(12, 'terms', '<p>Terms and Condition<br />\r\n<p style="text-align:justify">1. Students should be having better attendance throughout the academic;</p>\r\n\r\n<p style="text-align:justify">2. Registered students should follow the executives instruction.;</p>\r\n\r\n<p style="text-align:justify">3. Placement details should be having evidence.;</p>\r\n\r\n<p style="text-align:justify">4. Follow the placement criterias ;</p>\r\n\r\n<p style="text-align:justify">5. Attend the events without any delay.;</p>\r\n\r\n<p style="text-align:justify">6. Don''t try to misbahave with the system.;</p>\r\n\r\n<p style="text-align:justify">7. Companies decision will be final.</p>\r\n\r\n'),
(13, 'motto', '<p><strong><span style="color:#FFF0F5"><span style="font-family:arial,helvetica,sans-serif">CHMSC EXCELS:</span></span></strong></p>\r\n\r\n<p><strong><span style="color:#FFF0F5"><span style="font-family:arial,helvetica,sans-serif">Excellence, Competence and Educational</span></span></strong></p>\r\n\r\n<p><strong><span style="color:#FFF0F5"><span style="font-family:arial,helvetica,sans-serif">Leadership in Science and Technology</span></span></strong></p>\r\n'),
(14, 'Candidates', '<pre>\r\n<u><span style="font-size:16px"><strong>BCA\r\n\r\n</strong></span></u></pre>\r\n\r\n<p><u><span style="font-size:16px"><strong>Shebin joseph</strong></span></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt="" src="data:image/jpeg;base64,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" style="height:150px; width:150px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(31, 'MCA'),
(32, 'MBA'),
(33, 'Psychology'),
(34, 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(100) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `date_start` varchar(100) NOT NULL,
  `date_end` varchar(100) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event`
--


-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`, `uploaded_by`) VALUES
(165, 'nehadmin/uploads/4701_File_resume1.docx', '2015-07-25 09:16:30', 'Resume', 35, 3, 'Resume', 'BinuJoseph');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `collegename` varchar(100) NOT NULL,
  `person_in_charge` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Deactivated',
  `location` varchar(300) DEFAULT NULL,
  `date_register` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `collegename`, `person_in_charge`, `address`, `email`, `contact`, `username`, `password`, `status`, `location`, `date_register`) VALUES
(1, 'St.Xavier Collge,Mangalapuram', 'sen', 'sdfsdf', 'sdfdf@fgdfg.ghg', '6567756576', 'sen', '82f9cf724c4411298159792df4f1b7765de6c328', 'Activated', NULL, '2015-07-14 07:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(50) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `message_status` varchar(100) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `message_sent`
--

CREATE TABLE IF NOT EXISTS `message_sent` (
  `message_sent_id` int(11) NOT NULL AUTO_INCREMENT,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  PRIMARY KEY (`message_sent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message_sent`
--


-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_class_id` int(11) NOT NULL,
  `teacher_class_announcements_id` int(11) DEFAULT NULL,
  `placementReg_id` int(11) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `teacher_class_id`, `teacher_class_announcements_id`, `placementReg_id`, `file_id`, `notification`, `date_of_notification`, `link`) VALUES
(1, 1, NULL, 1, NULL, 'Add Placement for the company  <b>Google</b>', '2015-07-24 23:51:18', 'Apply-For-Placement'),
(2, 3, NULL, 2, NULL, 'Add Placement for the company  <b>Google</b>', '2015-07-25 00:04:45', 'Apply-For-Placement'),
(3, 3, NULL, NULL, 165, 'Add Downloadable Materials file name <b>Resume</b>', '2015-07-25 09:16:30', 'Student-Downloadable-Materials'),
(4, 3, NULL, NULL, NULL, 'Add Exam', '2015-07-25 19:42:07', 'Exam-View-List');

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE IF NOT EXISTS `notification_read` (
  `notification_read_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `student_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_read_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notification_read`
--

INSERT INTO `notification_read` (`notification_read_id`, `student_id`, `student_read`, `notification_id`) VALUES
(1, 462, 'yes', 3),
(2, 462, 'yes', 3),
(4, 456, 'yes', 4),
(5, 456, 'yes', 3),
(6, 456, 'yes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notification_read_teacher`
--

CREATE TABLE IF NOT EXISTS `notification_read_teacher` (
  `notification_read_teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `teacher_notification_id` int(11) DEFAULT NULL,
  `student_read` varchar(100) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_read_teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notification_read_teacher`
--


-- --------------------------------------------------------

--
-- Table structure for table `placementform`
--

CREATE TABLE IF NOT EXISTS `placementform` (
  `formid` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(11) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `s_contact` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `department_id` varchar(30) NOT NULL,
  `yr` varchar(35) NOT NULL,
  `sslc` float NOT NULL,
  `plustwo` float NOT NULL,
  `degree` float NOT NULL,
  `pg` float NOT NULL,
  `sem1` float DEFAULT NULL,
  `sem2` float DEFAULT NULL,
  `sem3` float DEFAULT NULL,
  `sem4` float DEFAULT NULL,
  `sem5` float DEFAULT NULL,
  `sem6` float DEFAULT NULL,
  `pgsem1` float DEFAULT NULL,
  `pgsem2` float DEFAULT NULL,
  `pgsem3` float DEFAULT NULL,
  `pgsem4` float DEFAULT NULL,
  `pgsem5` float DEFAULT NULL,
  `pgsem6` float DEFAULT NULL,
  `backlogug` varchar(25) DEFAULT NULL,
  `backlogpg` varchar(25) DEFAULT NULL,
  `floc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`formid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `placementform`
--

INSERT INTO `placementform` (`formid`, `student_id`, `s_name`, `s_address`, `sex`, `s_contact`, `email`, `department_id`, `yr`, `sslc`, `plustwo`, `degree`, `pg`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `pgsem1`, `pgsem2`, `pgsem3`, `pgsem4`, `pgsem5`, `pgsem6`, `backlogug`, `backlogpg`, `floc`) VALUES
(1, '13cs4124', 'Princi Benoy ', '#72, 1st Floor, 4th cross Muniveerappa layout, Ara', 'Female', '9741485993', 'princybenoypadayattil@gmail.com', 'MCA', '2013-2016', 72.48, 44, 65.0167, 68.7075, 70, 65, 58, 63.6, 65.5, 68, 63.85, 65.42, 74.42, 71.14, 0, 0, 'no', 'yes', 'nehadmin/uploads/8583_File_29.docx'),
(2, '13cs4117', 'Jithin Kumar ', 'Kalyan Nagar\r\nBangalore', 'Male', '8892567383', 'jithin.for2011@gmail.com', 'MCA', '2013-2016', 63, 64, 68.5, 0, 62, 64, 64, 68, 75, 78, 0, 0, 0, 0, 0, 0, 'no', 'no', 'nehadmin/uploads/6759_File_4701_File_resume1.docx'),
(3, '13cs4101', 'Abhijith K   ', '#219 3rd Cross BDS NagarKothanur PO, Narayanapur', 'Male', '8050564678', 'abhijith708@gmail.com', 'MCA', '2013-2016', 85, 70.33, 62.1667, 67.675, 64.25, 60, 60.5, 71.5, 47.5, 69.25, 59.14, 64.42, 75.14, 72, 0, 0, 'no', 'no', 'nehadmin/uploads/9928_File_4701_File_resume1.docx'),
(4, '13cs4115', 'Jiby Varghese  ', '#117,8th Cross,Oil Mill Road,St.Thomas Town Post', 'Female', '9036792263', 'jiby_varghese@yahoo.com', 'MCA', '2013-2016', 85.28, 57.5, 74.315, 79.925, 74.5, 71.4, 73.8, 73.2, 69.83, 83.16, 79, 78.42, 80.14, 82.14, 0, 0, 'no', 'no', 'nehadmin/uploads/8815_File_resume.docx'),
(5, '13cs4107', 'Chitra C ', '#159,K.Narayanpura ,Kothanur post,Bangalore-560077', 'Female', '9141628668', '13cs4107@kristujayanti.com', 'MCA', '2013-2016', 73.44, 60.5, 76.385, 81.89, 67.25, 75.8, 70.6, 74, 85.83, 84.83, 79.28, 84.86, 83.71, 79.71, 0, 0, 'no', 'no', 'nehadmin/uploads/2735_File_4701_File_resume1.docx'),
(6, '13cs4126', 'Shainu Thomas  ', '#847, 11th Cross 1st Stage, 3rd Block, HBR Layout,', 'Male', '9036128894', '13cs4126@kristujayanti.com', 'MCA', '2013-2016', 75, 58.8333, 61.2943, 69.9275, 59.8, 59, 54.6, 64.2, 62.333, 67.833, 68.57, 69.43, 72.14, 69.57, 0, 0, 'no', 'no', 'nehadmin/uploads/3855_File_shainu.docx'),
(7, '13cs4105', 'Ashvina Kumari N ', '#26/1, V R layout, post office road, 2nd cross, fi', 'Female', '8553809286', '13cs4105@kristujayanti.com', 'MCA', '2013-2016', 79.52, 56.84, 71.7417, 82.7825, 69.25, 67.6, 64.4, 68.4, 74.5, 86.3, 82.14, 83.85, 86.14, 79, 0, 0, 'no', 'no', 'nehadmin/uploads/7969_File_4701_File_resume1.docx'),
(8, '13cs4118', 'Madhu Malini ', 'No 85,6th cross M.C.E.C.Hs Layout Dr shivaramkaran', 'Female', '8105679882', 'madhuanand1612@gmail.com', 'MCA', '2013-2016', 73.6, 44.83, 56.9867, 67.68, 58.2, 61.4, 60.8, 51.2, 54.16, 56.16, 59.29, 66.86, 75, 69.57, 0, 0, 'no', 'no', 'nehadmin/uploads/1803_File_madhu.docx'),
(9, '13cs4123', 'Phebe  Beryl  ', '#2,1st cross,Vishwanath green city layout,Seegheha', 'Female', '9916680825', 'phebe.beryl20@gmail.com', 'MCA', '2013-2016', 82.8, 46.5, 67.3167, 70.605, 68, 70.8, 63.4, 63.8, 64.8, 73.1, 64.43, 68, 76.57, 73.42, 0, 0, 'no', 'no', 'nehadmin/uploads/7860_File_phebe.docx'),
(10, '13cs4128', 'Sudhesh P ', 'NO 1 MUTHAMMA GARDEN P.S.K NADIU ROAD COX TOWN BAN', 'Male', '9741207818', 'sudesh.babblu@gmail.com', 'MCA', '2013-2016', 58.88, 35, 56.5267, 62.93, 45.5, 50.2, 56.6, 58.2, 56, 72.66, 59, 63.29, 66, 63.43, 0, 0, 'no', 'no', 'nehadmin/uploads/9418_File_sudi.docx'),
(11, '13cs4111', 'Ganesh Ingnam  ', '120/1,Near mcs convention hall,N.Nagenahalli,Ban', 'Male', '8792738592', 'ingnam2013@gmail.com', 'MCA', '2013-2016', 60, 72.5, 66, 70.7125, 68, 65.2, 69.2, 60.6, 65, 68, 66.86, 70.14, 72.14, 73.71, 0, 0, 'no', 'no', 'nehadmin/uploads/6555_File_4701_File_resume1.docx'),
(12, '13cs4116', 'Jinu Maria  ', 'kuttickkattu (H)anickadu p.okottayam686503', 'Female', '7406274981', '13cs4116@kristujayanti.com', 'MCA', '2013-2016', 83, 83, 65.7083, 71.7633, 68.75, 60, 67.25, 61.25, 72.25, 64.75, 0, 66.43, 73.29, 75.57, 0, 0, 'no', 'yes', 'nehadmin/uploads/5975_File_4701_File_resume1.docx'),
(13, '13cs4119', 'Manu Prathapan ', '#145/3, 1st cross, Abbaiah Garden, Hormavu Agra Ma', 'Male', '7829279077', 'manuprathapan92@gmail.com', 'MCA', '2013-2016', 72, 74.83, 65.44, 68.9025, 66.57, 59.57, 66.42, 62, 64, 74.08, 68.1, 70.85, 66.9, 69.76, 0, 0, 'no', 'no', 'nehadmin/uploads/3616_File_4701_File_resume1.docx'),
(14, '13cs4129', 'Thanreingam Pheiray  ', 'PHUNGCHAM VILL,UKHRUL DISTRICT,CHINGAI BLOCK,MANIP', 'Male', '9742749874', 'easonnson@gmail.com', 'MCA', '2013-2016', 47.29, 54.28, 57.8333, 51.815, 46.4, 51.6, 53.6, 62.6, 66.2, 66.6, 48.85, 50.42, 56.57, 51.42, 0, 0, 'no', 'yes', 'nehadmin/uploads/2550_File_ip placem.docx'),
(15, '13cs4121', 'Nandu K.S ', 'Nandu K S\r\nKattuparambil(H)\r\nPO:Perinjanam(West)\r\n', 'Male', '8050546789', 'nanduksathyan@gmail.com', 'MCA', '2013-2016', 59, 53, 61.5, 63.0175, 53.9, 56.6, 54.1, 64.2, 62.2, 78, 55.71, 61.5, 68.86, 66, 0, 0, 'no', 'no', 'nehadmin/uploads/4129_File_NANDU-resume1.docx'),
(16, '13cs4127', 'Shebin Joseph  ', 'Ethackadu HouseUmbidi P.OThottackadu,Kottayam', 'Male', '8050282582', 'shebinjoseph388@gmail.com', 'MCA', '2013-2016', 83, 76, 70.6667, 73.21, 84.5, 74.25, 67.75, 71, 72.75, 53.75, 69.57, 72.42, 72.71, 78.14, 0, 0, 'no', 'no', 'nehadmin/uploads/9590_File_resume1.docx'),
(17, '13cs4108', 'Denil T David   ', 'Tharakan Melit Koonammochi PIN 680504', 'Male', '9008408567', 'denilonline09@gmail.com', 'MCA', '2013-2016', 86, 72.83, 64.8333, 71.175, 65.5, 67.75, 56, 65.75, 61.75, 72.25, 68.71, 71.57, 71, 73.42, 0, 0, 'no', 'no', 'nehadmin/uploads/4049_File_4701_File_resume1.docx'),
(18, '13cs4104', 'Arun Kumar ', 'no.774,17th cross, st.thomas town post, lingarajap', 'Male', '8123401200', 'arun2546@gmail.com', 'MCA', '2013-2016', 61.92, 41, 61.6783, 71.3175, 58.5, 67.6, 59.8, 54, 56.67, 73.5, 65.14, 69.57, 77.71, 72.85, 0, 0, 'no', 'yes', 'nehadmin/uploads/4313_File_Arun Resume.docx'),
(19, '13cs4110', 'Fathima Rani ', '#184,fathima nilaya,d/o s.kanika swamy chowrappa r', 'Female', '8748074992', 'fathimarani212@gmail.com', 'MCA', '2013-2016', 64.32, 54.66, 69.0722, 73.78, 69, 69, 64, 73.6, 69.333, 69.5, 64, 72.85, 78.42, 79.85, 0, 0, 'no', 'no', 'nehadmin/uploads/2031_File_fathima.docx'),
(20, '13cs4130', 'Merit John ', 'Door No:002,INLAND EXOTIC,BENSON TOWN,BENSON CROSS', 'Male', '9845332841', 'meritmampatta@gmail.com', 'MCA', '2013-2016', 65, 65, 64.5, 54.4, 60, 62, 64, 66, 67, 68, 48, 50, 55, 60, 59, 0, 'no', 'yes', 'nehadmin/uploads/9492_File_24.6.15.zip');

-- --------------------------------------------------------

--
-- Table structure for table `placementreg`
--

CREATE TABLE IF NOT EXISTS `placementreg` (
  `placementReg_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(300) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `enddate` varchar(30) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  PRIMARY KEY (`placementReg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `placementreg`
--

INSERT INTO `placementreg` (`placementReg_id`, `floc`, `fdatein`, `enddate`, `fdesc`, `teacher_id`, `class_id`, `company`) VALUES
(1, 'nehadmin/uploads/5542_File_Abstract.docx', '2015-07-24 23:51:18', '07/26/2015', 'All sem with 70% Aggregate', 35, 1, 'Google'),
(2, 'nehadmin/uploads/8302_File_Abstract.docx', '2015-07-25 00:04:45', '07/28/2015', 'All sem with 50%', 35, 3, 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `question_type`
--

CREATE TABLE IF NOT EXISTS `question_type` (
  `question_type_id` int(11) NOT NULL,
  `question_type` varchar(150) NOT NULL,
  PRIMARY KEY (`question_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_type`
--

INSERT INTO `question_type` (`question_type_id`, `question_type`) VALUES
(1, 'Multiple Choice'),
(2, 'True or False');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_title` varchar(50) NOT NULL,
  `quiz_description` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_title`, `quiz_description`, `date_added`, `teacher_id`) VALUES
(1, 'MBA', 'Aptitude', '2015-07-25 19:32:26', 35);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE IF NOT EXISTS `quiz_question` (
  `quiz_question_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(11) NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`quiz_question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`quiz_question_id`, `quiz_id`, `question_text`, `question_type_id`, `points`, `date_added`, `answer`) VALUES
(1, 1, '<p>Mean sdfsdfsdfsd?</p>\r\n', 1, 0, '2015-07-25 19:34:45', 'A'),
(2, 1, '<p>sfsfafasfasfasfasfas</p>\r\n', 1, 0, '2015-07-25 19:35:10', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `recruitor`
--

CREATE TABLE IF NOT EXISTS `recruitor` (
  `recruitor_id` int(11) NOT NULL AUTO_INCREMENT,
  `recruitor_name` varchar(100) DEFAULT NULL,
  `recruitor_job` varchar(30) DEFAULT NULL,
  `Company_Contact` varchar(35) DEFAULT NULL,
  `Company_Address` varchar(35) DEFAULT NULL,
  `selected_no` int(11) DEFAULT NULL,
  `job_category` varchar(20) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `reg_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`recruitor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `recruitor`
--

INSERT INTO `recruitor` (`recruitor_id`, `recruitor_name`, `recruitor_job`, `Company_Contact`, `Company_Address`, `selected_no`, `job_category`, `department`, `email`, `status`, `reg_date`) VALUES
(2, 'Google', NULL, '9959747463', 'dgdgfddfgdfgdf', 0, 'IT', '', 'googlesd@gmail.com', 'visited', '2015-07-20 13:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `RegisterNo` varchar(20) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `location` varchar(300) DEFAULT NULL,
  `sex` varchar(15) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `year_of_studying` varchar(35) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `status` varchar(25) NOT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_id` (`student_id`),
  UNIQUE KEY `RegisterNo` (`RegisterNo`),
  UNIQUE KEY `RegisterNo_2` (`RegisterNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=463 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `RegisterNo`, `firstname`, `lastname`, `location`, `sex`, `class_id`, `semester_id`, `year_of_studying`, `username`, `password`, `status`, `count`) VALUES
(462, '13cs4121', 'Nandu', 'K.S', NULL, 'Male', 36, NULL, '2013-2016', 'Nandu', '26dc07b98277cbb39ba0fabab4d89e2a8fe05e38', 'Registered', NULL),
(459, '13cs4130', 'Merit', 'John', NULL, 'Male', 36, NULL, '2013-2016', 'meritsamuel', 'cf30086b9c31d4e9102838c096c61e49a6098114', 'Registered', NULL),
(458, '13cs4129', 'Thanreigam', 'Pheiray', NULL, 'Male', 36, NULL, '2013-2016', 'W2DM7k', '093d4053798395fae3335aa23d97df7b5720bbce', 'Registered', NULL),
(457, '13cs4128', 'Sudhesh', 'P', NULL, 'Male', 36, NULL, '2013-2016', '4nQcJr', 'af0b6da89896f274f4836d025a7db7af730e6f7f', 'Registered', NULL),
(456, '13cs4127', 'Shebin', 'Joseph', NULL, 'Male', 36, NULL, '2013-2016', 'dLwtpM', '3f35d0970f0651921426f40bbed32bdcd03a4eea', 'Registered', 1),
(449, '13cs4118', 'Madhu', 'Malini', NULL, 'Female', 36, NULL, '2013-2016', '4c34KJ', 'b025c50c617eadeeb220c78fde84331eda7f4714', 'Registered', NULL),
(450, '13cs4119', 'Manu', 'Prathapan', NULL, 'Male', 36, NULL, '2013-2016', 'Lt47m2', '281065bb0884b668f334150892e396523ecc7596', 'Registered', NULL),
(451, '13cs4120', 'Emmanual', 'Komenan', NULL, 'Male', 36, NULL, '2013-2016', 'xmrxKw', NULL, 'Unregistered', NULL),
(452, '13cs4123', 'Phebe ', 'Beryl', NULL, 'Female', 36, NULL, '2013-2016', 'Phebe', 'd5ee98cf25f13869a71ab75afc759cc115c32065', 'Registered', NULL),
(453, '13cs4124', 'Princi', 'Benoy', NULL, 'Female', 36, NULL, '2013-2016', 'q9gLvv', '8f859353028afce28413ebfd20b9241d4b629577', 'Registered', NULL),
(454, '13cs4125', 'Salem', 'Matloob', NULL, 'Male', 36, NULL, '2013-2016', 'cvjbtB', NULL, 'Unregistered', NULL),
(455, '13cs4126', 'Shainu', 'Thomas', NULL, 'Male', 36, NULL, '2013-2016', 'LtHGQ8', 'e162b615e4edc2fd60874c610db0f38099c3bb1b', 'Registered', NULL),
(448, '13cs4117', 'Jithin', 'Kumar', NULL, 'Male', 36, NULL, '2013-2016', 'ygxysv', '3356c6d51c5dd0ac43c5c2822b9de11dea0ee8e6', 'Registered', NULL),
(447, '13cs4116', 'Jinu', 'Maria', NULL, 'Female', 36, NULL, '2013-2016', 'Xd2jjF', '8d5004c9c74259ab775f63f7131da077814a7636', 'Registered', NULL),
(446, '13cs4115', 'Jiby', 'Varghese', NULL, 'Female', 36, NULL, '2013-2016', 'B5h7wf', '98d736483ac1d90f6ddea87f41e36c52a9df79ca', 'Registered', NULL),
(433, '13cs4101', 'Abijith', 'K', NULL, 'Male', 36, NULL, '2013-2016', 'zcKSH5', '51bbbad24995ddf6df2bba8ba447206915d5029c', 'Registered', NULL),
(434, '13cs4102', 'Albin', 'Philip', NULL, 'Male', 36, NULL, '2013-2016', 'mqyg99', NULL, 'Unregistered', NULL),
(435, '13cs4103', 'Alex', 'John', NULL, 'Male', 36, NULL, '2013-2016', 'gSMBFb', NULL, 'Unregistered', NULL),
(436, '13cs4104', 'Arun', 'Kumar', NULL, 'Male', 36, NULL, '2013-2016', 'd7XDYs', '5fa339bbbb1eeaced3b52e54f44576aaf0d77d96', 'Registered', NULL),
(437, '13cs4105', 'Ashwina', 'Kumari', NULL, 'Female', 36, NULL, '2013-2016', '4jNsBP', '656355f5905712762767fb4c3b06413d8746e80a', 'Registered', NULL),
(438, '13cs4107', 'Chitra', 'C', NULL, 'Female', 36, NULL, '2013-2016', 'N9xKRs', '43457d84d996f9fd3b6eef43cd7134827f7e640a', 'Registered', NULL),
(439, '13cs4108', 'Denil', 'David', NULL, 'Male', 36, NULL, '2013-2016', 'Ss8PQr', 'd7e987d336096bee73d897517b471a2dc7c1222f', 'Registered', NULL),
(440, '13cs4109', 'Jesse', 'Khrumo', NULL, 'Female', 36, NULL, '2013-2016', 'X6RN2P', NULL, 'Unregistered', NULL),
(441, '13cs4110', 'Fathima', 'Rani', NULL, 'Female', 36, NULL, '2013-2016', 'srjnzC', '4b14a60c5ece99b5ddc6c952588ff7f001bdfbdd', 'Registered', NULL),
(442, '13cs4111', 'Ganesh', 'Ignam', NULL, 'Male', 36, NULL, '2013-2016', 'y8DVGg', 'ef07642a0c2bb2b78f3489932bded4690f1289c2', 'Registered', NULL),
(443, '13cs4112', 'Ganesh', 'R', NULL, 'Male', 36, NULL, '2013-2016', 'ZcFxqJ', NULL, 'Unregistered', NULL),
(444, '13cs4113', 'Goho', 'Ellia', NULL, 'Female', 36, NULL, '2013-2016', 'xVLF4t', NULL, 'Unregistered', NULL),
(445, '13cs4114', 'Goumo', 'Ferdinand', NULL, 'Male', 36, NULL, '2013-2016', 'w2NtHs', NULL, 'Unregistered', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_backpack`
--

CREATE TABLE IF NOT EXISTS `student_backpack` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(100) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student_backpack`
--

INSERT INTO `student_backpack` (`file_id`, `floc`, `fdatein`, `fdesc`, `student_id`, `fname`) VALUES
(1, 'nehadmin/uploads/4701_File_resume1.docx', '2015-07-26 07:29:41', 'Resume', 456, 'Resume');

-- --------------------------------------------------------

--
-- Table structure for table `student_class_quiz`
--

CREATE TABLE IF NOT EXISTS `student_class_quiz` (
  `student_class_quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_quiz_time` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  PRIMARY KEY (`student_class_quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_class_quiz`
--

INSERT INTO `student_class_quiz` (`student_class_quiz_id`, `class_quiz_id`, `student_id`, `student_quiz_time`, `grade`) VALUES
(1, 1, 456, '3600', '2 out of 2'),
(2, 1, 458, '38', ''),
(3, 1, 459, '51', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_placementreg`
--

CREATE TABLE IF NOT EXISTS `student_placementreg` (
  `student_placementReg_id` int(11) NOT NULL AUTO_INCREMENT,
  `placementReg_id` int(11) NOT NULL,
  `floc` varchar(100) DEFAULT NULL,
  `placementReg_fdatein` varchar(50) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `grade2` varchar(20) DEFAULT NULL,
  `grade3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`student_placementReg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_placementreg`
--

INSERT INTO `student_placementreg` (`student_placementReg_id`, `placementReg_id`, `floc`, `placementReg_fdatein`, `fdesc`, `company`, `student_id`, `RegNo`, `grade`, `grade2`, `grade3`) VALUES
(4, 2, NULL, '2015-07-26 06:45:56', 'Google', '13cs4127', 456, '13cs4127', 'clear', 'clear', 'clear');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `department_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `teacher_stat` varchar(25) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  UNIQUE KEY `teacher_id` (`teacher_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `department_id`, `location`, `teacher_stat`) VALUES
(35, 'binu', '98e44e48c42feb74831a7c49400b34346a2bf448', 'Binu', 'Joseph', 36, 'uploads/Scan2.jpg', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_backpack`
--

CREATE TABLE IF NOT EXISTS `teacher_backpack` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(100) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `teacher_backpack`
--


-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE IF NOT EXISTS `teacher_class` (
  `teacher_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `thumbnails` varchar(100) NOT NULL,
  `school_year` varchar(100) NOT NULL,
  PRIMARY KEY (`teacher_class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teacher_class`
--

INSERT INTO `teacher_class` (`teacher_class_id`, `teacher_id`, `class_id`, `semester_id`, `thumbnails`, `school_year`) VALUES
(3, 35, 36, NULL, 'nehadmin/uploads/thumbnails.jpg', '2013-2016');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_announcements`
--

CREATE TABLE IF NOT EXISTS `teacher_class_announcements` (
  `teacher_class_announcements_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`teacher_class_announcements_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `teacher_class_announcements`
--


-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_student`
--

CREATE TABLE IF NOT EXISTS `teacher_class_student` (
  `teacher_class_student_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `school_year` varchar(30) DEFAULT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_class_student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `teacher_class_student`
--

INSERT INTO `teacher_class_student` (`teacher_class_student_id`, `teacher_class_id`, `student_id`, `school_year`, `teacher_id`) VALUES
(1, 3, 459, '2013-2016', 35),
(2, 3, 458, '2013-2016', 35),
(3, 3, 457, '2013-2016', 35),
(4, 3, 456, '2013-2016', 35),
(5, 3, 449, '2013-2016', 35),
(6, 3, 450, '2013-2016', 35),
(7, 3, 451, '2013-2016', 35),
(8, 3, 452, '2013-2016', 35),
(9, 3, 453, '2013-2016', 35),
(10, 3, 454, '2013-2016', 35),
(11, 3, 455, '2013-2016', 35),
(12, 3, 448, '2013-2016', 35),
(13, 3, 447, '2013-2016', 35),
(14, 3, 446, '2013-2016', 35),
(15, 3, 433, '2013-2016', 35),
(16, 3, 434, '2013-2016', 35),
(17, 3, 435, '2013-2016', 35),
(18, 3, 436, '2013-2016', 35),
(19, 3, 437, '2013-2016', 35),
(20, 3, 438, '2013-2016', 35),
(21, 3, 439, '2013-2016', 35),
(22, 3, 440, '2013-2016', 35),
(23, 3, 441, '2013-2016', 35),
(24, 3, 442, '2013-2016', 35),
(25, 3, 443, '2013-2016', 35),
(26, 3, 444, '2013-2016', 35),
(27, 3, 445, '2013-2016', 35),
(28, 3, 462, NULL, 35);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notification`
--

CREATE TABLE IF NOT EXISTS `teacher_notification` (
  `teacher_notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_class_id` int(11) NOT NULL,
  `student_placementReg_id` int(11) DEFAULT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `placementReg_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teacher_notification`
--

INSERT INTO `teacher_notification` (`teacher_notification_id`, `teacher_class_id`, `student_placementReg_id`, `notification`, `date_of_notification`, `link`, `student_id`, `placementReg_id`) VALUES
(4, 3, 4, '<b>(13cs4127) </b>Register for Placement ', '2015-07-26 06:45:56', 'Placement-Registered-Students', 456, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_shared`
--

CREATE TABLE IF NOT EXISTS `teacher_shared` (
  `teacher_shared_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `shared_teacher_id` int(11) NOT NULL,
  `floc` varchar(100) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`teacher_shared_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `teacher_shared`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(15, 'paul', 'a027184a55211cd23e3f3094f1fdc728df5e0500', 'Sen', 'Mathew');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=279 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(267, 'paul', '2015-07-20 13:21:55', '2015-07-26 07:35:21', 15),
(268, 'paul', '2015-07-20 13:23:10', '2015-07-26 07:35:21', 15),
(269, 'paul', '2015-07-20 13:36:32', '2015-07-26 07:35:21', 15),
(270, 'paul', '2015-07-20 22:16:12', '2015-07-26 07:35:21', 15),
(271, 'paul', '2015-07-20 22:28:25', '2015-07-26 07:35:21', 15),
(272, 'paul', '2015-07-21 21:12:38', '2015-07-26 07:35:21', 15),
(273, 'paul', '2015-07-22 18:02:00', '2015-07-26 07:35:21', 15),
(274, 'paul', '2015-07-23 17:57:30', '2015-07-26 07:35:21', 15),
(275, 'paul', '2015-07-23 18:05:34', '2015-07-26 07:35:21', 15),
(276, 'paul', '2015-07-24 14:06:56', '2015-07-26 07:35:21', 15),
(277, 'paul', '2015-07-24 15:53:26', '2015-07-26 07:35:21', 15),
(278, 'paul', '2015-07-26 07:34:21', '2015-07-26 07:35:21', 15);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `y_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`y_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`y_id`, `year`) VALUES
(14, '2013-2016'),
(15, '2014-2016');
