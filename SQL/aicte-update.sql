-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 01:56 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aicte-update`
--

-- --------------------------------------------------------

--
-- Table structure for table `allscheme`
--

CREATE TABLE `allscheme` (
  `id` int(11) NOT NULL,
  `department` text NOT NULL,
  `scheme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allscheme`
--

INSERT INTO `allscheme` (`id`, `department`, `scheme`) VALUES
(3, 'VCMOffice', '`testing`'),
(4, 'NEAT', '`My Neat Test Scheme`,`My Neat Test Scheme 2`,`dassad`');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content`, `created`) VALUES
(1, '<p>dsadsadsa<strong>dasdsad&nbsp;<em>dsadsadsa</em></strong></p>\r\n', '2020-03-21'),
(2, '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>dsadsa</td>\r\n			<td>dasd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>dasda</td>\r\n			<td>sdasdsad</td>\r\n		</tr>\r\n		<tr>\r\n			<td>dsadsa</td>\r\n			<td>dasd</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-03-21'),
(3, '					    Test Content Here Up\r\n				    ', '2020-03-21'),
(4, '<p>dsadsa&nbsp;<em>dsadsadsad&nbsp;</em></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>dsa</td>\r\n			<td>s</td>\r\n		</tr>\r\n		<tr>\r\n			<td>s</td>\r\n			<td>s</td>\r\n		</tr>\r\n		<tr>\r\n			<td>s</td>\r\n			<td>s</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `examincation`
--

CREATE TABLE `examincation` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `awareness` text NOT NULL,
  `faculties` text NOT NULL,
  `workshop` text NOT NULL,
  `faculties_trained` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examincation`
--

INSERT INTO `examincation` (`id`, `year`, `awareness`, `faculties`, `workshop`, `faculties_trained`, `remarks`) VALUES
(1, '2017-18', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL'),
(2, '2018-19', '2', '575', 'NIL', 'NIL', 'Already conducted'),
(3, '2019-20', '17', '2268', '1', '59', 'Already conducted'),
(4, '2020-21', '50', '5000', '50', '5000', 'To be conducted');

-- --------------------------------------------------------

--
-- Table structure for table `induction`
--

CREATE TABLE `induction` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `fdp` text NOT NULL,
  `participants` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `induction`
--

INSERT INTO `induction` (`id`, `year`, `fdp`, `participants`) VALUES
(1, '2017-2018', '50', '5527'),
(2, '2018-2019', '115', '8552'),
(3, '2019-2020', '23', '1193');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `tables` text NOT NULL,
  `proposed` text NOT NULL,
  `future` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `description`, `tables`, `proposed`, `future`) VALUES
(1, 'Model Curriculum', 'AICTE prepared an outcome based model curriculum in UG/PG in Engg & Tech.; number of credits have been reduced to 160 from 200 to 220 and it is in line with the requirements of industry 4.0.;  MBA/PGDM in 2018 (102 credits); and Diploma in Engg. & Tech. (120 credits) (7 Disciplines); B. Arch. Launched in September 2019 (200 credits); B.Pharmacy (202 credits). Most of the technical universities and institutions have adopted the same. The concerned universities/ institutions are allowed flexibility in readjustment of courses/credits in their programs based on regional needs.', 'model_curriculum.php', '', ''),
(2, 'Induction Program', 'A three-week mandatory induction program for students is offered right at the commencement of the first year and classes begin after this induction program with activities designed for a daily routine to make the students feel comfortable in their new environment, create values, ethics, fitness and bonding in the batch as well as between faculty and students. 120 Faculty Development Programs; 15,000+ Faculty Trained for student induction program.  The feedback obtained from 30,000 students after undergoing induction program depicts benefitting them and realizing the importance of human values in their lives with a strong social connect etc.', 'induction.php', '', ''),
(3, 'Exam Reforms', 'To test the understanding of the concepts and the skills, application, creativity rather than mere subject knowledge. 2250 teachers participated in 17 Workshops held in 2019. A question bank, as per exam policy is available on AICTE website and more questions have been added regularly.', 'examination.php', '', ''),
(4, 'Perspective Plan', 'Prepared by the Industry Associations and implemented to impart courses on emerging technologies viz. AI; IoT; Block chain; Robotics; Quantum Computing; Data Sciences; Cyber Security; 3D Printing & Design; AR/VR. The recommendations also included greater focus on multi-disciplining courses by reducing the seats in conventional disciplines and converting the existing seats into these courses. \r\nAccordingly, AICTE established 4 Atal Training and Learning (ATAL) Academies to support technical institutions in fostering research, innovation and entrepreneurship through training in emerging and thrust areas viz. AI, IoT etc. 11 more new ATAL Academies launched covering as many states; Total 175  programmes have been conducted so far and trained more than 9000 participants in thrust/emerging areas. Next year 2019-20, a target of 500 FDPs proposed.\r\n', 'chronology.php', '', ''),
(5, 'Teachers Training Policy', 'A Comprehensive Training Policy for Technical Teachers” introduced for the first time in the world. A target of 30,000 fresh faculty & 30,000 faculty having up to 5 years of teaching experience are to be trained every year.                            This brings out character building, important facets of new teaching methodology, better and innovative means of transferring knowledge from one to another as against the existing refresher courses / domain specific courses being imparted. Towards this, eight online courses have been prepared in collaboration with NITTTRs which have since been included in gazette notification for 7th pay commission, as applicable mandatorily to new inductee teachers and teachers into service with less than five years of experience. Registration status is as follows', 'teacher_training.php', '', ''),
(6, 'Mandatory Internships', 'Internship policy for students of Technical Education comprising of steps for fostering internships.  Internships have been mandated for students. Over 1 Lakh internships posted on an exclusive portal developed by AICTE. Around 35% students received internship. Institutions to sign MoU with 5 Industries to request them to register on AICTE Internship Portal. So far a total of 45000 MoUs have been signed by our institutions. It has also been noted that a number of colleges are facing difficulty in enabling adequate no. of internship opportunities. AICTE has therefore taken a nation-wide initiative to conduct IMPACT Workshops in tier 2-3 cities with an aim of enabling industry academia collaboration for AICTE approved institutions.', 'summer_internship.php', '', ''),
(7, 'Mandatory Accreditation', 'Mandatory for all technical institutions to have their 60% programs NBA accredited in next four years, else no extension of approval will be granted. 400 297 Margadarshaks identified and trained to mentor the institutions. 40 institutions selected under scheme Margadarshan to facilitate institutions in getting NBA accreditation. Totally 750 institutions are being mentored.', 'margdarshak.php', '', ''),
(8, 'National Educational Alliance for Technology (NEAT)', 'National Educational Alliance for Technology (NEAT) is a Public-Private partnership model between the Government (through its implementing agency AICTE) and the Education Technology companies of India. AICTE is playing a role of facilitator between Ed-Tech companies and students/youth thereby enhancing their employability skills, bridge their learning gaps and enhance employability.\r\n9.	NEAT was conceptualized to bring best technological solutions in education pedagogy to the existing students and youth of the country. The Artificial Intelligence based portal helps the learners get a personalized learning experience. \r\n10.	NEAT also has a scheme for providing free seats to students of economically and socially weaker sections of society. The distribution of free seats would be done by AICTE through the NEAT portal, based on student information shared by Educational Institutions. \r\n11.	The Public Private Partnership Model ensures that the Companies and the Government Regulatory Bodies work together in enhancing the skills of workforce and make students more employable according to the changing market demands. 12.	NEAT Personalized Learning Products for Learners\r\na.	Learners can take benefit of the NEAT products to enhance their learning, skills and employability by purchasing them through the NEAT platform.\r\nb.	Learners have to register themselves on the NEAT portal (neat.aicte-india.org) to purchase products. Once the learning is complete, learners are required to submit their feedback about the product on NEAT portal to help enhance the learning product features. \r\nc.	The products are evaluated by AICTE for quality, usability and reliability for the Indian learners. These products help students in learning difficult concepts, overcome their weak areas, develop skills that are highly employable, prepare for examinations and placements and other related educational outcomes. \r\nd.	Any learner in the country, irrespective of age, qualification or profession, but willing to learn and pay for the product can register through NEAT. 25% of sales are given as free seats to students from economically and socially weaker sections of society.\r\ne.	NEAT for Educational Institutions\r\ni.	Educational Institutions have to register on NEAT portal to nominate their students for free seats after verifying their eligibility. Formats for submitting nominations are available on the NEAT portal. \r\nf.	NEAT Envisioned in coming year\r\ni.	In the coming year, NEAT would become the world’s Best Personalized, Adaptive Learning Platform. \r\ng.	The Artificial Intelligence based platform would have its own Learning Management System to help students learn faster, better and in an engaging manner. Institutions can also improve their educational outcomes by adopting the NEAT solutions that provide personalized learning to ', 'neat.php', '', ''),
(9, 'Smart India Hackathon(SIH)', 'Smart India Hackathon has been a huge impact making initiative of MHRD on Higher Education students. The students work on pressing challenges posed by various collaborating Ministries & Departments, State Governments and public & private sector industries to come up with some world class solutions for those challenges. SIH instituted in 2017 with three successful editions as indicated below:', 'sih.php', '', ''),
(10, 'Institute Innovation Councils (IIC)', 'A network of 1540 IICs has been established to promote innovation in the Institution through multitudinous modes leading to an innovation promotion eco-system in the campuses Total outreach of students – 16,16,076. IIC innovation Ambassadors Training commenced since January 2020 with a target of 5000 Ambassadors to be trained. Since January 2020 training commenced: 1400+ Ambassadors      trained so far.', 'notable.php', '', ''),
(11, 'AICTE Start-up Policy', 'National Innovation and Startup Policy for students and faculties in HEIs by MHRD on 11th Sept 2019 for all technical and non-technical HEIs is under implementation. Total of 3000 HEIs adopted AICTE Student Startup Policy. Number of startups during the year 2018-19 from academic institutes: 1300 employing approx. 6500 employees.\r\n\r\nInnovation Cell is working towards adoption of the ‘National Innovation and Startup Policy 2019 for Students and Faculty’ (NISP 2019) by all the higher education institutions of the country. Released in September, 2019 by Hon’ble Minister of Human Resource Development, NISP 2019 is built on earlier version of AICTE Startup Policy 2016 and has been framed with an aim to promote innovation and entrepreneurship culture within the higher education institutions. The policy will be instrumental in leveraging the potential of student’s creative problem solving and entrepreneurial mind-set and promoting a strong intra and inter-institutional partnerships with ecosystem enablers & different stakeholders at regional, national and international level. \r\n\r\nSo far, we have communicated this policy to Hon’ble Governors of 28 states and eight union territories and communication has been sent to 41000+ HEIs through multiple channels such as AICTE, INFLIBNET, etc. Visits were made to 5 states/ UTs (including Rajasthan, Pondicherry, Orissa, Uttrakhand, Telangana) to meet the hon’ble governors for the implementation of the policy at state universities and institutions.', 'notable.php', '', ''),
(12, 'MBA in Innovation, entrepreneurship and Venture development Course ', 'HEIs with incubation facility received approval to offer the course. Total 49 students start-ups are going through the course.', 'notable.php', '', ''),
(13, 'Atal Ranking of Institutions on Innovation Achievements (ARIIA) ', 'More than 1100 institutions participated so far.', 'notable.php', '', ''),
(14, 'One Student One Tree', 'Hon’ble HRD Minister Dr. Ramesh Pokhriyal “Nishank” launched a campaign “One Student One Tree” in line with Hon’ble PMs vision of a green and healthy environment on 20th July. AICTE spread this message and encouraged institutions to participate. More than 9000 AICTE Institutions planted around 30 Lakh trees.', 'notable.php', '', ''),
(15, 'Jal Shakti Abhiyan', 'More than 45000 Students of AICTE colleges mapped to the local administration of 256 water-stressed districts.', 'notable.php', '', ''),
(16, 'Clean and Green Campus Awards', 'In line with ‘Swachh Bharat’ GoI initiative, MHRD announced ‘Swachhta Ranking’ for top higher educational institutions in various categories.  AICTE also encourages all AICTE approved Institutions in the country to convert their campus into Clean and Green Campus and awarded such Institutions for ‘Clean and Smart Campus’ on 3rd December, 2019. ', 'notable.php', '', ''),
(17, 'Green Energy', 'To promote ‘Green Energy’  AICTE partnered with IIT-Bombay and organized SoUL Competition.', 'notable.php', '', ''),
(18, 'Plastic Free', 'AICTE has encouraged its approved institutions to ban use of plastic covers, plastic covers etc. in line with MHRD', 'notable.php', '', ''),
(19, 'Sansad Adarsh Gram Yojana (SAGY)', 'Council decided to take the initiative of creating Entrepreneurship and Employment opportunities in 29 subjects of Panchayati Raj in the villages adopted under Saansad Adarsh Gram Yojana (SAGY), by Hon’ble Members of Parliament. Mapping of 8000 institutes with adopted villages done.', 'notable.php', '', ''),
(20, 'Unnat Bharat Abhiyan', 'AICTE has been contributing to the cause by motivating its approved institute to join the Programme by registering themselves on UBA portal. AICTE has also been nominated to be subject expert group on Skill Development, Entrepreneurship and Startups. No financial assistance has been provided by the Council.', 'notable.php', '', ''),
(21, 'Ek Bharat Shreshtha Bharat', 'Various activities have been planned, around 2000 institutions mapped so far', 'notable.php', '', ''),
(22, 'AICTE - CHHATRA VISHWAKARMA AWARD', 'Council is organizing Vishwakarma Awards since 2017 onwards, to encourage and motivate young students and institutions to raise their performance, leading to significant contribution towards the growth and development of the nation. The theme for AICTE Vishwakarma Awards 2019 is “How to enhance the income of a Village” and awards were announced in various categories on February 24, 2020. ', 'notable.php', '', ''),
(23, 'Prime Minister Special Scholarship Scheme (PMSSS) for Jammu & Kashmir', 'Scholarship is to meet the      expenditure towards academic fees & maintenance allowance to the students belonging to Jammu & Kashmir', 'pmsss.php', '', ''),
(24, 'Protsahan Mudra Scheme', 'Protsahan Mudra Scheme: Android App has been developed and launched. ', 'notable.php', '', ''),
(25, 'Pradhan Mantri Kaushal Vikas Yojna (PMKVY-TI) ', 'Pradhan Mantri Kaushal Vikas Yojna (PMKVY-TI) for Technical Institutions-MHRD entrusted AICTE to implementing PMKVY-TI to train the unemployed youth in Engineering Skills and find placement in suitable private sector jobs. Around 3.25 lakh students enrolled for the same.', 'notable.php', '', ''),
(26, 'Employability Enhancement Training Programme (EETP)', 'AICTE is running Employability Enhancement Training Programme (EETP) with a vision to enhancing employment amongst fresh engineering graduates, imparting business and soft skills for sustained performance, career success and to meet growing industry demand. Around 29000 students from North-East enrolled.', 'notable.php', '', ''),
(27, 'National Employability Enhancement Mission (NEEM)', 'National Employability Enhancement Mission (NEEM)-to offer on the job practical training to enhance employability of a person either pursuing his or her graduation / diploma in any technical or non-technical stream or have discontinued studies of degree or diploma course to increase their employability. Around 2.4 lakhs student trainees enrolled', 'notable.php', '', ''),
(28, 'AICTE Quality Improvement Scheme (AQIS)', 'AICTE is responsible to promote proper planning and coordinated development of technical education in the country. Special attention is given for the welfare of SC, ST, and other under privileged/ backward classes. \r\nAt present there are 28 schemes under AICTE Quality Improvement Scheme (AQIS) to promote qualitative improvements in technical education in relation to the planning of quantitative growth and maintenance of proper norms and standards. To name a few Research Promotion Scheme; Seminar Grant, Travel Gran, Modernization and Removal of Obsolescence.', 'notable.php', '', ''),
(29, 'Faculty development cell', '1.	Faculty members have numerous options of training, which were never before.\r\n2.	Faculty Training have been increased to be of varying types to benefit one and all:\r\n	(a)	2 week FDPs.\r\n	(b)	1 week STTPs.\r\n	(c)	Co-organized by AICTE - ISTE.\r\n	(d)	Through NPTEL.\r\n	(e)	Through Professional bodies and self-financed (several options).\r\n\r\n3.	Residential funded Faculty Development Programs conducted countrywide in different engineering domains are close to 1000, each FDP for 1 week to 2-week duration.\r\n4.	Nos. of approved proposals have increased from 78 in 2015 to approx. 1000 in 2020.\r\n5.	Sanctioned amount has increased from few lakhs in 2015 to Rs.30 crore in 2020.\r\n6.	Distribution of the sanctioned cases have reached far and wide across India.\r\n7.	Special emphasis has been laid for the aspirational districts of the states.\r\n8.	National Initiative for Teacher Training Policy (The only initiative of its kind) has been implemented through a gazette notification. Each and every teacher has to mandatorily undergo 08 modules ensuring continuous learning followed by Industrial mentorship and mentor based supervision for the purposes of probation / promotion. Towards this the Hon’ble MHRD Minister has successfully launched the portal also.\r\n9.	MoU between AICTE - ISTE has been concluded for training of faculties with 300 trainings per year for training of 36,000 faculties over a period of three years. A total 12206 faculties have benefited in the first year itself (This includes self financing schemes also).\r\n10.	AICTE – NPTEL MoU allows faculty to take online NPTEL courses, and the same has been made at par with AICTE FDPs for the purposes of CAS.\r\n', 'full.php', '', ''),
(30, 'Student development Cell', 'Construction of Hostels for SC/ST Students\r\nPost Graduate Scholarship\r\nScholarship Scheme for Girl Child (SSGC)-PRAGATI\r\nScholarship Scheme for Differently Abled student-Saksham Scheme\r\n', 'student_development.php', '', ''),
(31, 'AICTE - SKILL DEVELOPMENT INITIATIVES (SD C)', 'To train 5000 students under Jammu & Kashmir Employability Enhancement Training (JEET) Program. Revised NEEM Regulation is submitted to MHRD for consideration.', 'skill.php', '', ''),
(32, 'BRIEF ON UK INIDA EDUCATION RESEARCH INITIATIVE (UKIERI) PROGRAMME', 'MHRD, Govt. of India and BIS, Govt. of UK has signed an MoU for UKIERI Phase-III which is effective from April, 2016 to March 2021. Following four stands of education collaboration will be undertaken under this programme :\r\n\r\nStrand 1) Leadership and Faculty Development\r\n\r\nStrand 2) Integration of Skills in Education System\r\n\r\nStrand 3) e-Partnership and Research Incubation\r\n\r\nStrand 4) Enhancing Mobility\r\n\r\nAccordingly, an Implementation Agreement (IA) between AICTE and UKIERI was signed on 06th September, 2016, for collaborative activities under Phase-III of UKIERI project. Executive Committee in its 101st meeting held on 3rd August, 2016, vide item No.101.03.20 considered and approved the Implementation Agreement (IA) signed between AICTE and UKIERI.\r\n\r\nUKIERI Board has shortlisted Dudley College, U.K., for conducting the Leadership Development Programme in Phase III of project. Under the Leadership Development Programme, experts from Dudley College will give training to 500 aspiring leaders (from Govt. Institutions/Govt./State Universities/AICTE approved institutions) during UKIERI Phase-III Project.\r\n\r\nThe applications were invited from all over India online. After selecting, the training of 1st batch of 100 participants during the AY 2017-18 was held as per details given below.\r\nFurther as per the Agreement, Dudley College, UK, send the list of 24 participants from the Participants of the AY 2017-18 with the request to select 10 participants for 05-day study tour to Dudley College, UK under LDP Training Programme. The final 10 selected participants visited UK from 1st April to 06th April 2018. As per the Agreement, Dudley College, UK, send the list of 47 participants from the Participants of the AY 2018-19 with the request to select 20 participants for 05-day study tour to Dudley College, UK under LDP Training Programme. The final 20 selected participants visited UK from 14th to 19th October 2019.\r\n\r\nPROPOSED PLAN FOR 2020-21\r\n\r\nAs per Agreement with Dudley College, UK, the training of 200 participants will be held during the AY 2020-21. The process for selection of 200 participants is yet to be started by the Council.\r\n\r\nFurther, Dudley college also submitted proposal for Master Trainer Development Programme to 40 senior faculties who have already attended AICTE-UKIERI Technical Leadership Development Programme from AY 2017-18 to AY 2019-20. ', 'notable.php', '', '');
INSERT INTO `information` (`id`, `name`, `description`, `tables`, `proposed`, `future`) VALUES
(33, 'VVIP/PMO References', '<table border=\"0\" cellspacing=\"0\">\r\n	<thead>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>S.No.</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Inward in MS Sectt. </strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Recd. On</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>From </strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Details of Correspondence testing for work</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Letter No. / Date</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Dispatch To</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Date of Dispossed of Application </strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Remarks</strong></td>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"7\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">1</td>\r\n			<td rowspan=\"7\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">1 (161/CM)</td>\r\n			<td rowspan=\"7\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">08.01.2020</td>\r\n			<td rowspan=\"7\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">From Shri B.S. Yadav , BIT Campus , Jhaansi</td>\r\n			<td rowspan=\"7\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">F.No. 20-1/2020-TS.II Dt. 02.01.2020</td>\r\n			<td rowspan=\"7\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">DD(PGRC)</td>\r\n			<td rowspan=\"7\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Replied</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Smt. Krishna Devi , Sector -23 Rohini .</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Adv.(RIFD)/10.01.20</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">From Shri Sudhir Mohan , Dehradun</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Replied</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">From Dr. Sahadeb Mandal , Physical Instructor , BIET , Jhansi</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Adv.(RIFD)/10.01.20</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">From Sri Nabin Chandra Som , Jogendranagar , Tripura</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Sent</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">From Shri Mrigendra Nath Mishra , Mishrauli , Gazipur</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Replied</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">From Shri H. Abdul Hadi , India Internation Inspring , Restriya Gaurav Awardee , Pondicherry.</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">RIFD</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">2</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">2(153/CM)</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">08.01.2020</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">VIP reference received from Shri A. Ganeshamurthy , MP ( Lok Sabha ) regarding absorption of Shri Ramesh as Assistant Director in AICTE -regarding</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">F.No. 2-1/2020-TS-II Dt. 02.01.2020</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Dir(Admin)</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Replied on 17.01.2020</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">3</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">3</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">09.01.2020</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Complaint received From CVC -reg. received in this office under vigilance section OM No. C. 13011/67/2019-Vig Dt. 20.12.2020 ( Complaint Made by Mr. Vijay Tiwari regarding Threat to Life with a reference to AICTE 2. Complaints made by Mr. Vijay Kumar Gude regarding college running with fake NBA accreditation in Hyderabd (3) Complaint made by M/s Paras Engineers regarding non availability of Expert Visit Committee Report documents adn Vidio CD in Durya Polytechnic for Engg &amp; Tech. ( Hapur Case)</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">F.No. 20-03/2020/TS-II Dt. 02.01.2020</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">CVO</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Under Process all cases forward from CVO to AB</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>4</strong></td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>4</strong></td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15.01.2020</strong></td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>B.K. Bhadri , Depuy Eduation Advisor (DL&amp;L) MHRD , Shastri Bhawan , New Delhi </strong></td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Honble Prime Minsters speech at Singapore - India Hackathon Event at IIT chennai - REgarding</strong></td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.NO. 12-3/2019-TS-II Dt. 06.01.2019</strong></td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>CIO</strong></td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"3\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>5</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>5</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15.01.2020</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Two letter No. M. 11018/04/2019-Coordination (FTS NO. 664212 &amp; FTS NO. 656769) dt. 26.12.2019 forwarding request from Shri Pradeep Kumar Pathak and Shri Rjni Kant to appoint member of any committee under MHRD.</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 20-03/2020/TS-II Dt. 08.01.2020</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Adv.(P&amp;AP)/16.01.2020</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>6</strong></td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>6</strong></td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15.01.2020</strong></td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Clarification regarding the eligiblity of Dr. Tarakeshwar Patil as Assoicate Professor in AICTE Approved Engineering Colleges -reg.</strong></td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 20-03/2020/TS-II Dt. 10.01.2020</strong></td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Adv.(RIFD)/ 16.01.2020</strong></td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"10\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Replied on 10.02.2020 Letter No. 32-03/RIFD/VIP-Ref .l2ol9-2o I 13</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>7</strong></td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>7</strong></td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15.01.2020</strong></td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Complaint aginst Blue Mountains Groups of College Kandoli, Dehradun -reg.</strong></td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 20-03/2020/TS-II Dt. 08.01.2020</strong></td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>DD(PGRC)</strong></td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"12\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Replied</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>8</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>8</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Permanent absorption of existing incumbents working on deputtion basis and completed at lest one year service in AICTE -reg. </strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.NO. 20-03/2020/TS-II Dt, 08.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Dir(Admin)</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Replied</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>9</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>9</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15.01.2020</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>VIP Reference of Dr. Harsh Vardhan , Honble Minister of Health &amp; Family Welfare , Science &amp; Technology and Earth Sciences for hearted support for IISF -2019-reg</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 1-11/2019-TC Dt. 07.01.2020</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Adv.(P&amp;AP)/17.01.2020 By mail</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>10</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>10</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>17.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Withdrawal of affiliation order to dr. B.R. Ambedkar Institute of Technology by Pondichery University -reg.</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 2-6/2017-TC Dt. 10.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Adv.(AB)/PS /21.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>11</strong></td>\r\n			<td rowspan=\"5\" style=\"border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>11</strong></td>\r\n			<td rowspan=\"5\" style=\"border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>20.01.2019</strong></td>\r\n			<td rowspan=\"5\" style=\"border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>From Dr. Mohanlal Sahu , District Surajpur , Chhattisgarh regarding National Education Consultant Committee.</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 20-1/2020-TS.II Dt. 13.01.2020 (283/CM)</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>DD(PGRC)/ 21.01.2020</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">P&amp;AP</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>From Shri Bhaskar Sastry Vemparla , Amalapuram regarding request for benefits like concesion in Railway Travelling , Sanad from the Prime Minister of India.</strong></td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:top\">Returned (not pertain)</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>From Dr. M. Periyasamy , Principal, Syed Ammal decrement in number of admission for Master of Engineering Courses in Engineering Colleges - Threat of extinction of high quality research in Science and Technology and Engineering Streams - Seeking of Remedial measures.</strong></td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:top\">Adv.(P&amp;AP)</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>From Ahmed Mohammad Ismail regarding Seeking justice from an Institue (MBA) for being deceitful.</strong></td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:top\">Returned (not pertain)</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>From Shri H. Abdul Hadi , India Internation Inspring , Restriya Gaurav Awardee , Pondicherry regarding pay anomaly in the scale of pay of Shri Thiru H. Abdul Hadi , Sr. Instructor from Motilal Nehru Government Polytechnic College .</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:top\">RIFD</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>12</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>12</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>22.01.2020</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Committee on welfare of other Backward Class - Selection of Subject for Examination during the year 2019-20 -reg.</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 20-03/2020/TS-II Dt. 15.01.2020</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Dir(Admin)</strong></td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"6\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>13</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>13</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>22.01.2020</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Meeting held under the Chairmanship of Honble Minister of State to discuss issues raised by Shri Omprakash alias Bachhu Kadu , MLA Maharastra concerning persons with disability -reg.</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.NO. 20-03/2020/TS-II Dt. 14.01.2020</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>DD(PGRC)/ 22.01.2020</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Adv. (P&amp;AP)/</strong></td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>14</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>14</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>22.01.2020</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Representation from Shri Sudhir Mohan &amp; Shri Jessy Roy -reg.</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 20-03/2020/TS-II Dt. 15.01.2020</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>DD(PGRC)/ 22.01.2020</strong></td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Replied </strong></td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>15</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>23.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Misc Complaint From Shri Rambabu Chaturvedy addressed to Deputy Director (PGRC) , AICTE New Delhi regardig non-refund of fees by ITM/PGDM College Kharghar , New Mumbai. ( RV College of Engineering , Bengaluru)</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.No. 20-03/2020/TS-II Dt, 17.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>DD(PGRC)/ 24.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Replied </strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>16</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>16</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>Swachhta Pakhwada Awrds 2019-Reg. ( its is requested that requisite information may be provided to ESEB Cell directly under intimation to this Section)</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>F.NO. 20-03/2020/TS-II Dt. 14.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Dir(Admin)/27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Dir(E-gov)</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\"><strong>replied</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>17</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>17</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>12th Meeting of the Standing Committee / 24th Meeting of the Eastern Zonal council - Submission of Items for inclusion in Agenda -reg.</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>F.NO. 20-03/2020/TS-II Dt. 14.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Adv.(P&amp;AP)/ 27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>18</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>18</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>28th Session of the congress on Crime prevention and Criminal Justie from 20-24 May 2019 held in Vienna Austria Reg. ( it is requested that requisite informtaion may be provided to UNESCO unit directly under intimation to this section.</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>F.NO. 20-03/2020/TS-II Dt. 14.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Adv.(P&amp;AP)/ 27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>19</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>19</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Compliance of the order of the Honble Supreme Court in the matter of Shri Anuj Goyal Vs UOI and Others -reg. ( It is requested that requisite information may be provided to SC/ST Cell directly under intimation to this section.</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>F.No. 20-03/2020/TS-II Dt. 14.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Dir(A)/ 27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>CAO</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>20</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>20</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>27.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Brouchures for each scheme run by MHRD and its autonomous organizations -reg.</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>F.No. 20-03/2020/TS-II Dt. 14.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>PS/ 27.01.2019</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Reply already sent</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>21</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>21</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>27.01.2020</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>1. MHRD , CDN letter NO. M. 11018/12/2019-CDN dt. 09th Jan 2020 regarding flagship scheme status update needed - West Bengal.</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>F.No. 20-03/2020/TS-II Dt. 21.01.2020</strong></td>\r\n			<td rowspan=\"5\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>DD(PGRC)/ 28.01.2020</strong></td>\r\n			<td rowspan=\"5\" style=\"border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Col Venket (FDC)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>2. MHRD , CDN Section Letter No. C.30020/01/2018-CDN dt. 10.01.2020 regarding Public Procurement ( Preference to make in INdia) , Order 2017.</strong></td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:middle\"><strong>Admn/ SDC</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>MHRD , CDN Section letter No. M. 11018/12/2019-CDN dt. 13th Jan 2020 regarding letter of Dr. K. Vijayan , Thiruvananthapuram for appointment as member of advisor Committee under MHRD.</strong></td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:middle\"><strong>MS</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>4. MHRD , CDN section leetter Noi. M. 11018/12/2019-CDN dt. 12th Jan 2020 regarding Procuring goods &amp; service from MSEs though GeM Portal only.</strong></td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:middle\"><strong>Admn/ SDC</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>5. MHRD , SC/ST Cell OM No. 1-5/2017-SC/ST dated 14th January , 2020 regarding Login id &amp; password for e-utthaan portal.</strong></td>\r\n			<td style=\"border-left:1px solid #000000; border-right:1px solid #000000; vertical-align:middle\"><strong>Dir(e-gov)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>22 </strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>22 </strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>29.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Ajeet Kumar , Under Secretary (TE) - 011-23070426</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>MHRD PN-1 Section Om No. 8-1/2020-PN-1 dated 14th Jan 2020 regading 25th Meeting of the Western Zonal Council - Submission of items for inclusion in Agenda regarding examine sub cauterization of OBCs.</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>F.No. 20-03/2020/TS-II Dt. 21.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>PS to MS/ 30.01.2020</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Reply Sent to Ministry at TS-II 10.02.2020 by Email.</strong></td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\"><strong>Reply</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">23</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">23</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">03.03.2020</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">A letter for PMO ID NO. PMOP/D/2020/0017950 dt. 16.01.2020 forwarding Presentation of Shri Pankaj and Others dated 13.01.2020 on the Public Gievances Section of MHRD - reg.</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">F.No. 20-03/2020/TS-II Dt. 25.02.2020</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">PS/ Mr. Tarun Sir/03.03.2020</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"4\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">24</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">24</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">03.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Comprehensive review to identify obsolete Laws/ Acts and their merger in the existing Laws / Acts -reg.</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">F.No. 20-03/2020/TS-II Dt. 25.02.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">DD(Legal)/ PS/ 03.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">25</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">25</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">03.03.2020</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">????? ?????? ?? ?????? ??????????? ???????? ?? ?????? ??????? ?? ??? ?? ???? AICTE ?????? ????? ????? 2020-21 ?? ??? ????? ????? ???? ?? ??? ????? ??????????? ?? ???? ???? ??????? ?? ????? ????</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">F.No. 20-3/2020-TS-II Dt. 25.02.2020</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">Adv.(AB) / PS 03.03.2020</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:middle\">&nbsp;</td>\r\n			<td rowspan=\"14\" style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">26</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">26</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">03.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Kavita Chauhan , Section Officer (TS.II )</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Reference from Honble Minister of STate for Home Affairs regarding extension of approval for Telangana Colleges.</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.No. 1-18/2017-TS.II (Pt.) Dt. 24.02.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Adv.(AB)/ PS 03.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">27</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">27</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">06.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Request for extension of time to shift Panchasheela polytechnic college , RR Nagar , Bengaluru , Karanataka</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.NO. 20-03/2020/TS-II Dt. 02.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Adv.(AB)/ PS 06.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">28</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">28</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Renuka mishra Director (TE)F.no 19-4/2018-TS-II</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">settlement of terminal benefits of prof R A Yadav, Ex chairman AICTE regarding</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.no 19-4/2018-TS-II dated 28 feb 2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Dir(admin)/09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">29</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">29</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">VIP reference received from shri pralhad joshi , MP ( Lok Sabha ) affairs, coal and mines regarding request for nomination of mr anand b havanavar the post of executive council member in visweshwarya technological university, belagavi, karnataka</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.no 20-10/2020-TS-II dated 28 feb 2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">ADV(PAP)/09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Replied on 16.03.2020</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">30</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">30</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Renuka mishra Director (TE)F.no 1-14/2020-Ts.II</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Minutes of the meeting to discuss issues related with higher educational institutes located in pakistan occupied kashmir on 26.02.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.no 1-14/2020-Ts.II dated 1-14/2020-Ts.II</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">ADV(PAP)/09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">31</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">31</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">VIP reference recived from shri D V Sadananda gowda minister of chemicals &amp; fertilizers, regarding request for nomination of Dr B N Umesh for the post of Executive council member in VTU, belgaum, karnataka</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.no 20-6/2020-Ts.II dated 28-02.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">ADV(PAP)/09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Replied on 16.03.2020</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">32</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">32</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">chandra shekhar kumar joint secretary to government of india</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Notification regarding declaration of government Educational institutions as institutions of eminence</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.no F.11/9/2019-U3(A) dt 02.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">ADV(AB)/P&amp;AP 11.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">33</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">33</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">09.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Ajeet Kumar , Under Secretary (TE) - 011-23070426</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Misc reference received<br />\r\n			1) a letter from Pc Y adav vasundhara ghaziabad forwarded by sadanand Additional PS to minister of health and family welfare, nirman bhavan vide their letter reference no 1608703/2019-HFM dated 05.12.2019 ref complaint against dr saikat maitra government college of engineering &amp; ceramic technology, kolkata<br />\r\n			2)a letter dated 15.01.2020 from civil society of odisha, cuttack forwarded by shir p l karan, ldc president secretariat letter no 1/1/2020-mantri III regarding adoption of fradulent methods by engineering colleges &amp; technical institutions for imparting education &amp; capacity building trainin to SC/ST students<br />\r\n			3)a letter dated 12.02.2020 received from shri radhe shyam garg, civil lines, janpad muradabad regarding son pawan garg advance admission money</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.no 20-1/2020-Ts.II dt 26.02.2020</td>\r\n			<td style=\"vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Replied Sr. No. 3 on 13.03.2020 by PGRC Cell</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">34</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">34</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">13.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Miscellaneous recipts - Reg. (Shri P S Marwah regarding CIPET Sree Budeda College of Engg. Kerala)</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">F.No. 20-03/2020/TS-II Dated 04.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">DD (PGRC)/13/03/2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Dak No.3572</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">35</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">35</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">16.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">VIP refrerence received from shri Vaiko , MP (RS) regarding reqeust to revoke the new notification and follow the exiting norms fo rthe admission in Engineering College - regarding</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.No. 2-11/2020-TS-II Dt. 16.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Adv.(P&amp;AP)/PS 17.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">36</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">36</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">16.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Erratic Education System in our country -reg.</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">No. f. 13-22/2020-TS Dt. 06.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">Adv.(P&amp;AP)/PS 17.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">37</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">37</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">16.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:top\">Shri Ajeet Kumar, Under Secretary to the Govt. of India, MHRD, Department of Higher Education, Technical Section II</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">(1) From Shri R.V Krishna Veerankaneyulu M.Sc Andhra Pradesh regarding in the direction of APSCHE - R.V. Krishna Veeranjaneyulu - former Associate Professor in S&amp; H Dept in Mathematice - Newtons Institute of Engineerin g- Alugurajapalli , Gunture . (2) From Shri Neeraj Chandra , Meerut , UP regarding Galgotia College of Pharmacy , Greater Noida . (3) From Dr. V.N. Jagtap , Institute of Pharmacy , Pune regarding request to change the ER 1991 to ER 2014.</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">F.No. 20-1/2020-TS.II Dt. 11.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">PS/DD(PGRC)/17.03.2020</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; vertical-align:bottom\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `model_curriculum`
--

CREATE TABLE `model_curriculum` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_curriculum`
--

INSERT INTO `model_curriculum` (`id`, `year`, `description`) VALUES
(1, '2017-18', '1. Preparation and Launching of Model Curriculum for UG Degree Course in Engineering & Technology (7 Disciplines)\r\na.Civil Engineering\r\nb.Electrical Engineering\r\nc.Mechanical Engineering\r\nd.Computer Science and Engineering\r\ne.Electronics & Communication Engineering\r\nf.Chemical Engineering\r\ng.Metallurgical Engineering & Material Science\r\n \r\n2.Preparation and Launching Model Curriculum for PG Degree Course in Engineering & Technology (6 Disciplines)\r\na.Electronics and Communication Engineering\r\nb.Computer Science\r\nc.Mechanical Engineering\r\nd.Civil Engineering\r\ne.Electrical Engineering\r\nf.Chemical Engineering & Technology\r\n3.Preparation and Launching of Model Curriculum for Management Program MBA / PGDM.\r\n'),
(2, '2018-19', '1.Preparation of Model Curriculum of Diploma Courses in Engg. & Tech. (7 Disciplines)\r\n2.Preparation of Model Curriculum of MBA in Hospitality Management, Tourism Management.\r\n3.Preparation of Model Curriculum of Bachelor in Cuisine Management.\r\n4.Preparation of Model Curriculum of Bachelor of Pharmacy (B. Pharm).\r\n5.Preparation of Model Curriculum of Bachelor of Architecture (B. Arch.).\r\n'),
(3, '2019-20', '1.Preparation and Launch of Model Curriculum of Diploma Courses in Engg. & Tech. (7 Disciplines)\r\na.Civil Engineering\r\nb.Electrical Engineering\r\nc.Mechanical Engineering\r\nd.Production Engineering\r\ne.Computer Engineering\r\nf.Chemical Engineering\r\ng.Electronics and Communication Engineering\r\n \r\n2.Preparation and Launch of Model Curriculum of Bachelor of Architecture (B. Arch.)\r\n3.Preparation and Launch of Model Curriculum of UG Degree Course in Biotechnology.\r\n4.Preparation of Model Curriculum of UG Degree Course in Automobile Engineering.\r\n5.Preparation of Model Curriculum of UG Degree Course in Mechatronics Engineering.\r\n6.Preparation of Model Curriculum of UG Degree Course in Artificial Intelligence and Data Science (AIDS).\r\n7.Preparation of Model Curriculum of Bachelor of Planning.\r\n8.Preparation of Model Curriculum of Master of Planning.\r\n9.Preparation of Model Curriculum for Minor Degree Courses in Engg. & Tech.(8 Emerging Areas).\r\na.Artificial Intelligence and Machine Learning\r\nb.Blockchain\r\nc.Cyber Security\r\nd.Data Science\r\ne.Internet of Things (IoT)\r\nf.Robotics\r\ng.Virtual and Augmented Reality\r\nh.3D Printing\r\n'),
(4, '2020-21 (Proposed Target)', '1.Preparation of Model Curriculum of UG Degree Course in Textile Engineering.\r\n2.Preparation of Model Curriculum of Aerospace Engineering.\r\n3.Launch of Model Curriculum of UG Degree Course in Automobile Engineering.\r\n4.Launch of Model Curriculum of UG Degree Course in Mechatronics Engineering.\r\n5.Launch of Model Curriculum of UG Degree Course in Artificial Intelligence and Data Science.\r\n6.Redevelopment / Modification of draft of MBA Hospitality Management, Tourism                              Management  and Bachelor of Cuisine Management Model Curriculum.\r\n7.Launch of Model Curriculum for Minor Degree Courses in Engg. & Tech. (8 Emerging Areas).\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `neat`
--

CREATE TABLE `neat` (
  `id` int(11) NOT NULL,
  `toal_registration` text NOT NULL,
  `student_register` text NOT NULL,
  `learner_register` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neat`
--

INSERT INTO `neat` (`id`, `toal_registration`, `student_register`, `learner_register`) VALUES
(1, '36589', '5644', '1917');

-- --------------------------------------------------------

--
-- Table structure for table `new_scheme`
--

CREATE TABLE `new_scheme` (
  `id` int(11) NOT NULL,
  `department` text NOT NULL,
  `scheme` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `proposed_target` text NOT NULL,
  `future_target` text NOT NULL,
  `created` text NOT NULL,
  `updated` text NOT NULL,
  `file_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_scheme`
--

INSERT INTO `new_scheme` (`id`, `department`, `scheme`, `title`, `description`, `proposed_target`, `future_target`, `created`, `updated`, `file_url`) VALUES
(31, 'VCMOffice', 'testing', 'going', '<p>my description</p>\r\n', '<p>my description</p>\r\n', '<p>my description</p>\r\n', '', '', './upload/730210206.'),
(32, 'NEAT', 'My Neat Test Scheme', 'Testing 1234', '<p>Descriptiondsadsadsa</p>\r\n', '<p>Future</p>\r\n', '<p>Targeted</p>\r\n', '', 'Date: 2020-04-20, At Time: 05:21:09pm', './upload/1430097014.'),
(33, 'NEAT', 'My Neat Test Scheme 2', 'test', '<p><strong>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', './upload/482094253.'),
(34, 'NEAT', 'dassad', 'sadsa', '<p>dasdas</p>\r\n', '<p>dsadsasss</p>\r\n', '<p>saddas</p>\r\n', '2020-04-20, At Time: 05:11:54pm', 'Date: 2020-04-20, At Time: 05:13:51pm', './upload/1847953356.');

-- --------------------------------------------------------

--
-- Table structure for table `pmsss`
--

CREATE TABLE `pmsss` (
  `id` int(11) NOT NULL,
  `year_1` text NOT NULL,
  `beneficiaries_1` text NOT NULL,
  `year_2` text NOT NULL,
  `beneficiaries_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmsss`
--

INSERT INTO `pmsss` (`id`, `year_1`, `beneficiaries_1`, `year_2`, `beneficiaries_2`) VALUES
(1, '2012-13', '0', '2016-17', '2162'),
(2, '2013-14', '4159', '2017-18', '3019'),
(3, '2014-15', '1963', '2018-19', '2525'),
(4, '2015-16', '1338', '2019-20', '4404');

-- --------------------------------------------------------

--
-- Table structure for table `sih`
--

CREATE TABLE `sih` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `pss` text NOT NULL,
  `industry` text NOT NULL,
  `reached` text NOT NULL,
  `participated` text NOT NULL,
  `centres` text NOT NULL,
  `successful` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sih`
--

INSERT INTO `sih` (`id`, `year`, `pss`, `industry`, `reached`, `participated`, `centres`, `successful`) VALUES
(1, '2017', '598', '29', '7 lakh', '40000+', '10', 'Process ongoing'),
(2, '2018', '408', '44', '2 lakh', '70000+', '2', '2'),
(3, '2019', '540', '92', '5 lakh', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `PARTICULARS` text NOT NULL,
  `AY_2017-18` text NOT NULL,
  `AY_2018-19` text NOT NULL,
  `AY_2019-20` text NOT NULL,
  `AY_2020-21` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `PARTICULARS`, `AY_2017-18`, `AY_2018-19`, `AY_2019-20`, `AY_2020-21`) VALUES
(1, 'Pradhan Mantri Kaushal Vikas Yojna (PMKVY-TI) for Technical Institutions ', '972 institutes with 85350 student', '1151 institutes with 205256 students', 'Scheme closed by the MHRD', ''),
(2, 'Employability Enhancement Training Programme (EETP)', '6601', '6558', '', 'To train 5000 students under Jammu & Kashmir Employability Enhancement Training (JEET) Program.'),
(3, 'National Employability Enhancement Mission (NEEM)', '17 Facilitator', '39 Facilitator', '43 Facilitator, Approx. 4 lakh students enrolled till now', 'Revised NEEM Regulation is submitted to MHRD for consideration'),
(4, 'Vocational Courses (B.Voc/D.Voc)', '', '384 institutes with 28750 approved intake.', '473 institutes with 35450 approved intake.', '318 institutes applied ');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `2017_18` text NOT NULL,
  `2018-19_t` text NOT NULL,
  `2018-19_p` text NOT NULL,
  `2019-20_tp` text NOT NULL,
  `2019-20_rs` text NOT NULL,
  `2019-20_rs_tp1` text NOT NULL,
  `2019-20_rs_tp2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `names`, `2017_18`, `2018-19_t`, `2018-19_p`, `2019-20_tp`, `2019-20_rs`, `2019-20_rs_tp1`, `2019-20_rs_tp2`) VALUES
(1, 'Prerana', '0', '100', '0   ', '0', '89', '0', '0'),
(2, 'Samriddhi', '0', '0', '0   ', '0', '0', '0', '100'),
(3, 'MITACS', '0', '0', '0   ', '0', '0', '0', '0'),
(4, 'SSPCA', '0', '0', '0   ', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_development`
--

CREATE TABLE `student_development` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `beneficiary_16_17` text NOT NULL,
  `amount_16_17` text NOT NULL,
  `beneficiary_17_18` text NOT NULL,
  `amount_17_18` text NOT NULL,
  `beneficiary_18_19` text NOT NULL,
  `amount_18_19` text NOT NULL,
  `beneficiary_19_20` text NOT NULL,
  `amount_19_20` text NOT NULL,
  `beneficiary_20_21` text NOT NULL,
  `amount_20_21` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_development`
--

INSERT INTO `student_development` (`id`, `names`, `beneficiary_16_17`, `amount_16_17`, `beneficiary_17_18`, `amount_17_18`, `beneficiary_18_19`, `amount_18_19`, `beneficiary_19_20`, `amount_19_20`, `beneficiary_20_21`, `amount_20_21`) VALUES
(1, 'Pragati Scholarship Scheme (For Girls Only)', '8', '441.24', '4353 ', '1682.68', '5142 ', '1288.73', '4228', '970.782', '6000 ', '1505.00'),
(2, 'Saksham Scholarship Scheme (For Disabled Students Only)', '1', '0', '0', '0', '0', '0', '0', '0', '1505.00', '0'),
(3, 'PG Scholarship', '122', '0', '98', '0', '0', '0', '0', '0', '0', '0'),
(4, 'National Doctoral Fellowship', '12', '0', '0', '0', '0', '0', '654', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `summer_internships`
--

CREATE TABLE `summer_internships` (
  `id` int(11) NOT NULL,
  `particulars` text NOT NULL,
  `first_year` text NOT NULL,
  `second_year` text NOT NULL,
  `third_year` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summer_internships`
--

INSERT INTO `summer_internships` (`id`, `particulars`, `first_year`, `second_year`, `third_year`, `total`) VALUES
(1, 'No. of Students', '1450268', '1613876', '1475271', '4539415'),
(2, 'No. of Students who secured Summer Internship', '205744', '523053', '727002', '1455799'),
(3, 'No. of Industries/Companies who offered internships for students', '40371', '108360', '130937', '279668'),
(4, 'Of the (b) above, No. of Students who found internship on their own', '51353', '155142', '219582', '426077');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_training`
--

CREATE TABLE `teachers_training` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `swayam` text NOT NULL,
  `nittt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_training`
--

INSERT INTO `teachers_training` (`id`, `name`, `swayam`, `nittt`) VALUES
(1, 'Orientation towards Technical Education & Curriculum Aspects', '4,755', '565'),
(2, 'Professional Ethics & Sustainability', '3,324', '297'),
(3, 'Communication Skills, Modes and Knowledge Dissemination', '6,216', '188'),
(4, 'Instructional Planning and Delivery', '1,604', '141'),
(5, 'Technology Enabled Learning and Life-long Self-learning', '2,125', '97'),
(6, 'Student Assessment and Evaluation', '2,032', '76'),
(7, 'Creative Problem Solving, Innovation and Meaningful R&D', '2,036', '87'),
(8, 'Institutional Management & Administrative Procedures', '1,531', '65');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_training_2`
--

CREATE TABLE `teachers_training_2` (
  `id` int(11) NOT NULL,
  `code` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_training_2`
--

INSERT INTO `teachers_training_2` (`id`, `code`, `name`) VALUES
(1, 'HM 01', 'Innovating Research, Fund Raising and Social Integration'),
(2, 'HM 02', 'Institutional Governance and Development'),
(3, 'HM 03', 'Resource Planning, Networking and Resource management'),
(4, 'HM 04', 'Business Start-up and Management'),
(5, 'HM 05', 'Academinc Event Planning, Resource Mobilisation and Management'),
(6, 'HM 06', 'Emerging Pedagogy with AR, VR and 3D Printing'),
(7, 'HM 07', 'Clean, Green and Sustainable'),
(8, 'HM 08', 'Zero Effect Zero Defect'),
(9, 'HM 09', 'KPI Accreditation and Ranking Frameworks'),
(10, 'HM 10', 'Learning Analytics'),
(11, 'HM 11', 'Innovative Curriculum Design, Development and Revision'),
(12, 'HM 12', 'Experiential and Immersive Learning'),
(13, 'HM 13', 'Hybrid Pedagogy'),
(14, 'HM 14', 'Virtual Education and Assessment'),
(15, 'HM 15', 'International Collaboration for Inclusive Education'),
(16, 'HM 16', 'Project Planning and Management in War Room COncept'),
(17, 'HM 17', 'Best Practice for Impactful MOOCs Material Development'),
(18, 'HM 18', 'AI for Engineering Applications'),
(19, 'HM 19', 'Case Studies and Problem Mapping'),
(20, 'HM 20', 'Breaking Stagnation and Efficiency Enhancement '),
(21, 'HM 21', 'Financial Resource Planning Management and Audio'),
(22, 'HM 22', 'Development Academic Leadership and management Skill'),
(23, 'HM 23', 'Cognitive and Reasoning Focused Instructional Material Development'),
(24, 'HM 24', 'Bench-marking of Institutions and Strategic Planning to Meet the Bench-marking'),
(25, 'HM 25', 'Reviewing an Institute');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_training_3`
--

CREATE TABLE `teachers_training_3` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `hours` text NOT NULL,
  `start` text NOT NULL,
  `end` text NOT NULL,
  `exam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_training_3`
--

INSERT INTO `teachers_training_3` (`id`, `title`, `hours`, `start`, `end`, `exam`) VALUES
(1, 'AICTE - NITTT - Module 1 - Orientation Towards Technical Education and Curriculum Aspects', '40', '02.03.2020', '27.04.2020', 'May 10, 2020 - FN'),
(2, 'AICTE - NITTT - Module 2 Professional Ethics & Sustainability', '40', '02.03.2020', '27.04.2020', 'May 09, 2020 - AN'),
(3, 'AICTE - NITTT - Module 3 - Communication Skills, Modes & Knowledge Dissemination', '20', '02.03.2020', '27.04.2020', 'May 09, 2020 - FN'),
(4, 'AICTE - NITTT - Module 4 Instructional Planning and Delivery', '40', '02.03.2020', '27.04.2020', 'April 29, 2020 - FN'),
(5, 'AICTE - NITTT - Module 5 - Technology Enabled Learning & Life Long Self Learning', '40', '02.03.2020', '27.04.2020', 'May 10, 2020 - AN'),
(6, 'AICTE - NITTT - Module 6 Student Assessment and Evaluation', '40', '02.03.2020', '27.04.2020', 'July 05, 2020 - AN'),
(7, 'AICTE - NITTT - Module 7 Creative Problem Solving , Innovation and Meaningful R & D', '40', '02.03.2020', '27.04.2020', 'July 05, 2020 - FN'),
(8, 'AICTE - NITTT - Module 8 - Institutional Management & Administrative Procedures', '40', '02.03.2020', '27.04.2020', 'April 29, 2020 -AN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `department` text NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `first_name`, `last_name`, `department`, `email`, `type`, `password`) VALUES
(9, 'USER_5e9967521fe1d1587111762', 'baljeet', 'singh', 'VCMOffice', 'bssinwar@icloud.com', 'AICTE', '12345678'),
(10, 'USER_5e9d2ac0c61341587358400', 'baljeet', 'singh', 'NEAT', 'neat@gmail.com', 'AICTE', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allscheme`
--
ALTER TABLE `allscheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examincation`
--
ALTER TABLE `examincation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `induction`
--
ALTER TABLE `induction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_curriculum`
--
ALTER TABLE `model_curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neat`
--
ALTER TABLE `neat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_scheme`
--
ALTER TABLE `new_scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmsss`
--
ALTER TABLE `pmsss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sih`
--
ALTER TABLE `sih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_development`
--
ALTER TABLE `student_development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summer_internships`
--
ALTER TABLE `summer_internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_training`
--
ALTER TABLE `teachers_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_training_2`
--
ALTER TABLE `teachers_training_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_training_3`
--
ALTER TABLE `teachers_training_3`
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
-- AUTO_INCREMENT for table `allscheme`
--
ALTER TABLE `allscheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `examincation`
--
ALTER TABLE `examincation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `induction`
--
ALTER TABLE `induction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `model_curriculum`
--
ALTER TABLE `model_curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `neat`
--
ALTER TABLE `neat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_scheme`
--
ALTER TABLE `new_scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pmsss`
--
ALTER TABLE `pmsss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sih`
--
ALTER TABLE `sih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_development`
--
ALTER TABLE `student_development`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `summer_internships`
--
ALTER TABLE `summer_internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers_training`
--
ALTER TABLE `teachers_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers_training_2`
--
ALTER TABLE `teachers_training_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `teachers_training_3`
--
ALTER TABLE `teachers_training_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
