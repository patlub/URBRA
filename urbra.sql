-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 12:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urbra`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `address`, `web_link`) VALUES
(2, 'Alexander Forbes Financial Services Uganda Limited,', '<p>2nd Floor Studio House, 5 Bandali Rise,<br />\nP. O. Box 73302,<br />\nBugolobi, Kampala</p>\n', ''),
(3, 'AON Uganda Limited,', '<p>Plot 11/13 Lower Kololo Terrace,<br />\nP.O. Box 3123, Kampala</p>\n', ''),
(4, 'Liberty Life Assurance Uganda Limited,', '<p>Investment House, 2nd Floor, Plot 1 Dundas Road,<br />\nP.O. Box 22938, Kololo, Kampala</p>\n', ''),
(5, 'Padrepio Insurance Brokers Limited,', '<p>Plot 12A Turffnell Drive, Kamwokya,<br />\nP.O. Box 7446, Kampala</p>\n', ''),
(6, 'Sanlam Life Insurance Uganda Limited,', '<p>Plot 3 Nakasero Hill Road,<br />\nP.O. Box 25495, Kampala</p>\n', ''),
(7, 'Liaison Financial Services Limited,', '<p>Liaison House, Plot 44 Lumumba Avenue,<br />\nP. O. Box 22607,Kampala,</p>\n', ''),
(8, 'The Jubilee Insurance Company of Uganda Limited', '<p>Jubilee Insurance Centre, Parliament Avenue,<br />\nP.O Box 10234, Kampala</p>\n', ''),
(9, 'UAP Life Assurance Uganda Limited,', '<p>UAP Nakawa Business Park, 1st Tower, &nbsp;&nbsp;6th Floor,<br />\nPlot 3-5, Old Port Bell Road,<b', ''),
(10, 'Octagon Uganda Limited,', '<p>5th Floor, Padre Pio House,<br />\nPlot 32, Lumumba Avenue,<br />\nP.O. Box 2255, Kampala</p>\n', ''),
(11, 'Insurance Company of East Africa Limited,', '<p>Rwenzori Courts, Nakasero Road,<br />\nP.O. Box 33953, Kampala</p>\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_law`
--

CREATE TABLE IF NOT EXISTS `admin_law` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `admin_law`
--

INSERT INTO `admin_law` (`id`, `tab`, `details`) VALUES
(13, 'Application and grant of licence of Administrator ', '<p>(1) An application for a licence to act as an administrator shall be in the prescribed form and shall</p>\r\n\r\n<ol>\r\n	<li>state whether the applicant has the adequate professional, technical knowledge, experience or operational ability to perform the functions of an adminstrator; ;</li>\r\n	<li>contain or be accompanied by any other information that the Authority may require for the purpose of determining the application;</li>\r\n	<li>contain the address of a place in Uganda for the service on the applicant of any notice or document required or authorised to be served on the applicant under this Act; and</li>\r\n	<li>be accompanied by the prescribed fee.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority may grant a licence to an applicant who meets the requirements specified in subsection (1).</p>\r\n\r\n<p>(3) The Authority shall publish in the Gazette and in a newspaper with wide circulation, a list of all licensed administrators, at least once in every year.</p>\r\n\r\n<p>(4) A person who acts as an administrator of a retirement benefits scheme without a licence issued under this Act commits an offence and is liable on conviction to a fine not exceeding one thousand currency points or imprisonment not exceeding six years, or both.</p>\r\n'),
(14, 'Refusal of licence of Administrator ', '<p>(1) The Authority may refuse to grant a licence to an applicant if the Authority is satisfied that</p>\r\n\r\n<ol>\r\n	<li>the information contained in the application is false in any material particular;</li>\r\n	<li>the applicant is not a fit and proper person as prescribed in Part II of Schedule 3;</li>\r\n	<li>the applicant has ever been an administrator of a retirement benefits scheme whose licence was revoked by the Authority due to any fault either fully or partially of the applicant; or</li>\r\n	<li>the applicant does not meet the requirements specified in section 48 (1).</li>\r\n</ol>\r\n\r\n<p>(2) Where the Authority refuses to grant a licence to an applicant, the Authority shall notify the applicant of its decision and specify the reasons for the refusal in writing.</p>\r\n'),
(15, 'Restrictions on licence of Administrator ', '<p>(1) A person shall not be licensed as an administrator of a retirement benefits scheme if he or she</p>\r\n\r\n<ol>\r\n	<li>has been sentenced to imprisonment by a court of competent jurisdiction for six months or more;</li>\r\n	<li>is declared bankrupt or insolvent, or has entered into an arrangement with his or her creditors;</li>\r\n	<li>was previously involved in the management or administration of a retirement benefits scheme whose licence has been revoked under this Act, due to any fault either fully or partially of the applicant;</li>\r\n	<li>is disqualified under any other written law, or his or her holding office as such is determined by the Authority as being, in any way, detrimental to the retirement benefits scheme; or</li>\r\n	<li>is not a fit and proper person as prescribed in Part II of Schedule 3.</li>\r\n</ol>\r\n'),
(16, 'Validity of licence of Administrator ', '<p>(1) A licence issued to an administrator shall be valid for one year and may be renewed upon payment of the prescribed fee.</p>\r\n\r\n<p>(2) An application for the renewal of a licence under subsection (1) shall be made at least three months before the expiry of the licence.</p>\r\n'),
(17, 'Revocation of licence of Administrator ', '<p>(1) The Authority may revoke the licence of an administrator if</p>\r\n\r\n<ol>\r\n	<li>the Authority discovers, after the licence has been issued, that the administrator made a false statement in relation to the application;</li>\r\n	<li>an event occurs which renders the administrator ineligible to perform his or her functions as administrator;</li>\r\n	<li>the administrator is declared bankrupt or insolvent, or enters into an arrangement with his or her creditors ;</li>\r\n	<li>the administrator is in breach of any condition of the licence;</li>\r\n	<li>the administrator is disqualified by virtue of section 50;</li>\r\n	<li>the administrator ceases to be a fit and proper person as prescribed in Part II of Schedule 3; or</li>\r\n	<li>the administrator does not comply with any provision of this Act, or regulations made under this Act.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority shall give the administrator at least thirty days notice in writing specifying the reasons for the intended revocation of the licence.</p>\r\n\r\n<p>(3) The Authority shall, before revoking a licence of an administrator, consider any representations made in writing by the administrator opposing the revocation.</p>\r\n\r\n<p>(4) The Authority shall revoke the licence of an administrator ifï¿½</p>\r\n\r\n<ol>\r\n	<li>within thirty days after issuing the notice, the administrator has not opposed the revocation, or</li>\r\n	<li>the Authority is not satisfied by the representation made by the administrator under subsection (3).</li>\r\n</ol>\r\n'),
(18, 'Functions of a Administrator ', '<p>(1) An administrator of a retirement benefits scheme shallï¿½</p>\r\n\r\n<ol>\r\n	<li>keep the records of the scheme;</li>\r\n	<li>process receipts and invoices;</li>\r\n	<li>produce quarterly and annual accounts for audit;</li>\r\n	<li>organise and arrange for meetings ; and</li>\r\n	<li>prepare annual benefit statements and trustee reports.</li>\r\n</ol>\r\n\r\n<p>(2) An administrator of a retirement benefits scheme shall not act as a custodian, trustee or fund manager of the same retirement benefits scheme.</p>\r\n\r\n<p>(3) The provisions of subsection (2) shall apply to any assignee or related party of the administrator.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `date` date NOT NULL,
  `attachment` varchar(10) NOT NULL,
  `expiry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `date`, `attachment`, `expiry`) VALUES
(1, 'asdsd', 'asdasdsdjjjj', '2017-01-11', 'asass.pdf', '2017-01-19 17:43:00'),
(2, 'yes', 'b', '2017-01-25', '199653.pdf', '2017-01-19 17:43:36'),
(3, 'new article', 'foo bar', '2017-01-27', '11822.pdf', '2017-01-31 22:30:00'),
(4, 'mnmnmn', 'jkjbnmb', '2017-01-26', '521963.pdf', '2017-02-01 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bod`
--

CREATE TABLE IF NOT EXISTS `bod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(10) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `bod`
--

INSERT INTO `bod` (`id`, `name`, `image`, `details`) VALUES
(11, 'Mr. Andrew Kasirye', '154106.jpg', 'Managing Partner- Kasirye, Byaruhanga & Co. Advocates Chairman'),
(12, 'Mr. Keith Muhakanizi', '559614.jpg', 'Permanent Secretary Ministry of Finance, Planning and Economic Development Board Member'),
(13, 'Dr. Robert M. Okello', '904881.jpg', 'Director - Lyciar (U) Ltd Board Member'),
(14, 'M/s Rose Mary Senabulya', '748573.jpg', 'Executive Director Federation of Uganda Employers Board Member'),
(15, 'M/s Adah Muwanga', '428733.jpg', 'Ag. Permanent Secretary Ministry of Public Service Board Member'),
(16, 'Mr. David Bonyi Nyakundi', '578029.jpg', 'Chief Executive Officer Uganda Retirement Benefits Regulatory Authority Ex Officio');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content`, `page_id`) VALUES
(7, '<p>edrgfgdffgd</p>\n', 36),
(8, '<p>this is a new page</p>\n', 37);

-- --------------------------------------------------------

--
-- Table structure for table `corporate_trustees`
--

CREATE TABLE IF NOT EXISTS `corporate_trustees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `corporate_trustees`
--

INSERT INTO `corporate_trustees` (`id`, `name`, `address`, `web_link`) VALUES
(1, 'KCB Bank Uganda Limited', 'Commercial Plaza, Plot 7 Kampala road,', ''),
(2, 'Vivo Energy Uganda Provident Trust Limited', 'Plot 9/11 7th Street Industrial Area Kampala', ''),
(3, 'Crane Bank Ltd', 'Plot 38, Crane Chambers Kampala Road, P. O. Box 3673 Kampala', ''),
(4, 'Jomo Investments & Trustee Services Ltd', 'Plot 374, block 392, Sekiunga Busiro, Wakiso', ''),
(5, 'Quanteast Advisory Ltd', 'Plot 26, Buganda Road', '');

-- --------------------------------------------------------

--
-- Table structure for table `custodians`
--

CREATE TABLE IF NOT EXISTS `custodians` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `custodians`
--

INSERT INTO `custodians` (`id`, `name`, `address`, `web_link`) VALUES
(8, 'Housing Finance Bank,', '<p>Investment House, Plot 4 Wampewo Avenue- Kololo,<br />\nP. O. Box 1539, Kampala</p>\n', ''),
(9, 'Stanbic Bank Uganda,', '<p>Plot 17 Hannington Road, 2nd Floor Crested Towers,<br />\nP.O. Box 7131, Kampala</p>\n', ''),
(10, 'Standard Chartered Bank Uganda Limited,', '<p>5 Speke Road, P.O. Box 7111, Kampala</p>\n', ''),
(11, 'KCB Bank Uganda Limited', '<p>Commercial Plaza, Plot 7 Kampala road,<br />\nP.O. Box 7399, Kampala</p>\n', ''),
(12, 'Bank of Africa Uganda,', '<p>Plot 45, Jinja Road<br />\nP. O. Box 2750 , Kampala</p>\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `custodian_law`
--

CREATE TABLE IF NOT EXISTS `custodian_law` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `custodian_law`
--

INSERT INTO `custodian_law` (`id`, `tab`, `details`) VALUES
(13, 'Application and grant of licence of custodian', '<p>An applicantion for a licence as a custodian of a retirement benefits scheme shall not be grantedï¿½</p>\r\n\r\n<ol>\r\n	<li>unless the applicant is a financial institution licensed under the Financial Institutions Act, 2004;</li>\r\n	<li>if the applicant does not have the adequate professional, technical and operational systems to perform the functions of a custodian of a retirement benefits scheme;</li>\r\n	<li>if the applicant has been a custodian of a retirement benefits scheme whose licence was revoked by the Authority due to any fault either fully or partially of the custodian; and</li>\r\n	<li>if the applicant does not meet any additional requirements as may be prescribed by this Act or regulations made under this Act.</li>\r\n</ol>\r\n'),
(14, 'Refusal of licence of custodian ', '<p>(1) An application for a licence to act as a custodian shall be in the prescribed form and shallï¿½</p>\r\n\r\n<ol>\r\n	<li>contain or be accompanied by any other information that the Authority may require for the purpose of determining the application;</li>\r\n	<li>contain the address of a place in Uganda for the service on the applicant of any notice or document required or authorised to be served on the applicant under this Act; and</li>\r\n	<li>be accompanied by the prescribed fee.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority shall grant a licence to an applicant which meets the requirements specified in section 34 and subsection 35(1).</p>\r\n\r\n<p>(3) The Authority shall publish in the Gazette and a newspaper with wide circulation, a list of all licensed custodians at least once every year.</p>\r\n\r\n<p>(4) A financial institution which acts as a custodian of a retirement benefits scheme without a licence issued under this Act commits an offence and is liable on conviction to a fine not exceeding one thousand currency points.</p>\r\n'),
(15, 'Restrictions on licence of Custodian ', '<p>(1) The Authority may refuse to grant a licence to an applicant, if the Authority is satisfied thatï¿½</p>\r\n\r\n<ol>\r\n	<li>the information contained in the application is false in any material particular; or</li>\r\n	<li>the applicant does not meet the requirements specified in section 34 and subsection 35 (1).</li>\r\n</ol>\r\n\r\n<p>(2) Where the Authority refuses to grant a licence to an applicant, the Authority shall notify the applicant of its decision and specify the reasons for the refusal in writing.</p>\r\n'),
(16, 'Validity of licence of custodian ', '<p>(1) A licence issued to a custodian shall be valid for one year and may be renewed upon payment of the prescribed fee.</p>\r\n\r\n<p>(2) An application for the renewal of a licence under subsection (1) shall be made at least three months before the expiry of the licence.</p>\r\n'),
(17, 'Revocation of licence of custodian ', '<p>(1) The Authority may revoke the licence of a custodian ifï¿½</p>\r\n\r\n<ol>\r\n	<li>the Authority discovers after the licence has been issued, that the custodian made a false statement in relation to the application;</li>\r\n	<li>any event occurs which renders the custodian ineligible to provide custodial services to the retirement benefits scheme;</li>\r\n	<li>the custodian&#39;s business is wound up;</li>\r\n	<li>the custodian is in breach of any condition of the licence;</li>\r\n	<li>the custodian ceases to be a licensed financial institution under the Financial Institutions Act,2004; or</li>\r\n	<li>the custodian does not comply with any provision of this Act or regulations made under this Act.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority shall give the custodian at least thirty days notice in writing specifying the reasons for the intended revocation of the licence.</p>\r\n\r\n<p>(3) The Authority shall, before revoking a licence of a custodian, consider any representations made in writing by the custodian opposing the revocation.</p>\r\n\r\n<p>(4) The Authority shall revoke the licence of a custodian ifï¿½</p>\r\n\r\n<ol>\r\n	<li>within thirty days after issuing the notice, the custodian has not opposed the revocation, or</li>\r\n	<li>the Authority is not satisfied by the representation made by the custodian under subsection (3).</li>\r\n</ol>\r\n'),
(18, 'Functions of a custodian ', '<p>(1) A custodian of a retirement benefits scheme shallï¿½</p>\r\n\r\n<ol>\r\n	<li>hold the funds, assets and investments of the retirement benefits scheme in safe custody for the members and beneficiaries of the scheme;</li>\r\n	<li>receive contributions made to the scheme;</li>\r\n	<li>notify the administrator and fund manager of the receipt of contributions;</li>\r\n	<li>be responsible for collecting of dividends and income in relation to the investments of the scheme;</li>\r\n	<li>be responsible for processing and transferring documents;</li>\r\n	<li>report to the Authority on matters relating to the assets and investments of the scheme.</li>\r\n</ol>\r\n\r\n<p>(2) A custodian shall not use the funds or assets in its custody to meet its own financial obligations.</p>\r\n\r\n<p>(3) A custodian of a retirement benefits scheme shall not act as a trustee, administrator or fund manager of the same retirement benefits scheme.</p>\r\n\r\n<p>(4) The provisions of subsection (3) shall apply to any sub custodian, assignee or related party of the custodian.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `image`) VALUES
(4, '953935.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `end-date` date NOT NULL,
  `pdf` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `external_media`
--

CREATE TABLE IF NOT EXISTS `external_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `date_realesed` date NOT NULL,
  `source` varchar(100) NOT NULL,
  `link` varchar(1200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `external_media`
--

INSERT INTO `external_media` (`id`, `title`, `date_realesed`, `source`, `link`) VALUES
(1, 'Media release title example ', '2017-02-23', 'New Vision', 'www.newvision.co.ug'),
(2, 'Media release title example ', '2017-02-23', 'New Vision', 'www.newvision.co.ug'),
(3, 'Media release title example ', '2017-02-23', 'New Vision', 'www.newvision.co.ug');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'How are u?', 'Am ok'),
(2, 'Another Question', 'This is the answer');

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE IF NOT EXISTS `functions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`id`, `tab`, `details`) VALUES
(1, 'Functions of the Authority ', '<ul>\n	<li>Regulate and supervise the establishment, management and operation of retirement benefits schemes in Uganda, in both the public and private sectors.</li>\n	<li>License retirement benefits schemes in Uganda.</li>\n	<li>License custodians, trustees, administrators and fund managers of retirement benefits schemes;</li>\n	<li>Approve an actuary or auditor of any retirement benefit scheme.</li>\n	<li>Protect the interests of members and beneficiaries of retirement benefits schemes including the promotion of transparency and accountability.</li>\n	<li>Improve understanding and promote the development of the retirement benefits sector.</li>\n	<li>Promote the stability and integrity of the financial sector through ensuring stability and security of retirement benefits schemes.</li>\n	<li>Ensure sustainability of the retirement benefits sector with a view to promoting long term capital development.</li>\n	<li>Advise the Minister on all matters relating to the development and operation of the retirement benefits sector.</li>\n	<li>Implement Government policy relating to retirement benefits schemes.</li>\n	<li>Promote public awareness of the retirement benefits sector.</li>\n	<li>Any other function conferred upon it under the URBRA Act 2011.</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Table structure for table `fund_managers`
--

CREATE TABLE IF NOT EXISTS `fund_managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fund_managers`
--

INSERT INTO `fund_managers` (`id`, `name`, `address`, `web_link`) VALUES
(2, 'PineBridge Investments East Africa Limited', '<p>Workers House, 7th Floor, Pilkington Road,<br />\nP.O. Box 9831, Kampala</p>\n', ''),
(3, 'Genesis Kenya Investment Management Limited', '<p>P.O. Box 75200, Plot 4 Parliament Avenue,<br />\nEco Bank Plaza, Kampala</p>\n', ''),
(4, 'African Alliance Uganda Limited', '<p>1st Floor Workers House, Pilkington Road,<br />\nP.O. Box 70828, Kampala</p>\n', ''),
(5, 'Stanlib Uganda Limited', '<p>4th Floor Crested Towers, 17 Hannington Road,<br />\nP.O. Box 7131, Kampala</p>\n', ''),
(6, 'UAP Financial Services Limited,', '<p>UAP Nakawa Business Park, 1<sup>st</sup> Tower 6<sup>th</sup> Floor<br />\nP.O. Box 1610, Kampala<', '');

-- --------------------------------------------------------

--
-- Table structure for table `fund_manager_law`
--

CREATE TABLE IF NOT EXISTS `fund_manager_law` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `fund_manager_law`
--

INSERT INTO `fund_manager_law` (`id`, `tab`, `details`) VALUES
(25, 'Application and grant of licence of Fund Managers', '<p>(1) An application for a licence as a fund manager of a retirement benefits scheme shall be in the prescribed form and shallï¿½</p>\r\n\r\n<ol>\r\n	<li>state whether the applicant has the adequate professional, technical and operational ability to perform the functions of a fund manager;</li>\r\n	<li>contain or be accompanied by any other information that the Authority may require for the purpose of determining the application;</li>\r\n	<li>contain the address of a place in Uganda for the service on the applicant of any notice or document required or authorised to be served on the applicant under this Act; and</li>\r\n	<li>be accompanied by the prescribed fee.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority may grant a licence to an applicant who meets the requirements specified in subsection (1).</p>\r\n\r\n<p>(3) The Authority shall publish in the Gazette and in a newspaper with wide circulation, a list of all licensed fund managers, at least once in every year.</p>\r\n\r\n<p>(4) A person who acts as a fund manager of a retirement benefits scheme without a licence issued under this Act commits an offence and is liable on conviction to a fine not exceeding one thousand currency points or imprisonment not exceeding six years, or both.</p>\r\n'),
(26, 'Refusal of licence of Fund Managers ', '<p>(1) The Authority may refuse to grant a licence to an applicant if the Authority is satisfied thatï¿½</p>\r\n\r\n<ol>\r\n	<li>the information contained in the application is false in any material particular;</li>\r\n	<li>the applicant is not a fit and proper person as prescribed in Part II of Schedule 3;</li>\r\n	<li>the applicant has ever been a fund manager of a retirement benefits scheme whose licence was revoked by the Authority due to any fault either fully or partially of the applicant; or</li>\r\n	<li>the applicant does not meet the requirements specified in section 55 (1).</li>\r\n</ol>\r\n\r\n<p>(2) Where the Authority refuses to grant a licence to an applicant, the Authority shall notify the applicant of its decision and specify the reasons for the refusal in writing.</p>\r\n'),
(27, 'Restrictions on licence of Fund Managers ', '<p>(1) A person shall not be licensed as a fund manager of a retirement benefits scheme if he or she</p>\r\n\r\n<ol>\r\n	<li>has been sentenced to imprisonment by a court of competent jurisdiction for six months or more;</li>\r\n	<li>is declared bankrupt or insolvent, or has entered into an arrangement with his or her creditors;</li>\r\n	<li>was previously involved in the management or administration of a retirement benefits scheme whose licence has been revoked under this Act due to his or her fault either fully or partially;</li>\r\n	<li>is disqualified under any other written law, or his or her holding office as such is determined by the Authority as being, in any way, detrimental to the retirement benefits scheme; or</li>\r\n	<li>is not a fit and proper person as prescribed in Part II of Schedule 3.</li>\r\n</ol>\r\n'),
(28, 'Validity of licence of Fund Managers ', '<p>(1) A licence issued to a fund manager shall be valid for one year and shall be renewed annually upon payment of the prescribed fee.</p>\r\n\r\n<p>(2) An application for the renewal of a licence under subsection (1) shall be made at least three months before the expiry of the licence.</p>\r\n'),
(29, 'Revocation of licence of Fund Managers ', '<p>(1) The Authority may revoke the licence of a fund manager ifï¿½</p>\r\n\r\n<ol>\r\n	<li>the Authority discovers, after the licence has been issued, that the fund manager made a false statement in relation to the application;</li>\r\n	<li>any event occurs which renders the fund manager ineligible to perform his or her functions as a trustee;</li>\r\n	<li>the fund manager is declared bankrupt or insolvent, or enters into an arrangement with his or her creditors;</li>\r\n	<li>the fund manager is in breach of any condition of the licence;</li>\r\n	<li>the fund manager is disqualified by virtue of section 57;</li>\r\n	<li>the fund manager ceases to be a fit and proper person as prescribed in Part II of Schedule 3; or</li>\r\n	<li>the fund manager does not comply with any provision of this Act, or any regulations made under this Act.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority shall give the fund manager at least thirty days notice in writing specifying the reasons for the intended revocation of the licence.</p>\r\n\r\n<p>(3) The Authority shall, before revoking a licence of a fund manager, consider any representations made in writing by the fund manager opposing the revocation.</p>\r\n\r\n<p>(4) The Authority shall revoke the licence of a fund manager ifï¿½</p>\r\n\r\n<ol>\r\n	<li>within thirty days after issuing the notice, the fund manager has not opposed the revocation; or</li>\r\n	<li>the Authority is not satisfied by the representation made by the fund manager under subsection (3).</li>\r\n</ol>\r\n'),
(30, 'Functions of a Fund Managers ', '<p>(1) A fund manager of a retirement benefits scheme shall</p>\r\n\r\n<ol>\r\n	<li>be responsible for management of funds and other assets of the retirement benefits scheme for purposes of investment in accordance with the scheme&#39;s investment policy and the scheme rules;</li>\r\n	<li>provide advisory services on the investment of the scheme funds and disseminating information concerning the assets available for investment of scheme funds.</li>\r\n</ol>\r\n\r\n<p>(2) A fund manager of a retirement benefits scheme shall not act as a custodian, trustee or administrator of the same retirement benefits scheme.</p>\r\n\r\n<p>(3) The provisions of subsection (2) shall apply to any assignee or related party of the fund manager.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE IF NOT EXISTS `home_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(10) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `position` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `imagename`, `heading`, `text`, `position`) VALUES
(1, '591534.jpg', 'Workshops', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 1),
(2, '742293.jpg', 'Media Releases', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes\r\n', 2),
(3, '403764.jpg', 'Reports', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `individual_trustees`
--

CREATE TABLE IF NOT EXISTS `individual_trustees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `scheme` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `individual_trustees`
--

INSERT INTO `individual_trustees` (`id`, `name`, `scheme`) VALUES
(1, 'Franks', 'Some Bank');

-- --------------------------------------------------------

--
-- Table structure for table `internal_media`
--

CREATE TABLE IF NOT EXISTS `internal_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `date_realesed` date NOT NULL,
  `source` varchar(100) NOT NULL,
  `attachment` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `internal_media`
--

INSERT INTO `internal_media` (`id`, `title`, `date_realesed`, `source`, `attachment`) VALUES
(2, 'The release of the new ubra acts this year', '2017-02-25', 'New Vision', '981038.pdf'),
(3, 'The release of the new ubra acts this year', '2017-02-25', 'New Vision', '981038.pdf'),
(4, 'The release of the new ubra acts this year', '2017-02-25', 'New Vision', '981038.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `sender`, `message`) VALUES
(1, 'Patrick Luboobi', 'patricklu2010@gmail.com', 'Hello'),
(2, 'Patrick Luboobi', 'patricklu2010@gmail.com', 'Hello'),
(3, 'Patrick Luboobi', 'patricklu2010@gmail.com', 'Hello'),
(4, 'Patrick Luboobi', 'patricklu2010@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `mailing_list`
--

CREATE TABLE IF NOT EXISTS `mailing_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mailing_list`
--

INSERT INTO `mailing_list` (`id`, `name`, `email`) VALUES
(1, 'Patrick Luboobi', 'patricklu2010@gmail.com'),
(9, 'aaaa', 'patricklu2010@gmail.com'),
(10, 'qwqwqwq', 'patricklu2010@gmail.com'),
(11, 'qwqwqwq', 'patricklu2010@gmail.com'),
(12, 'p', 'patricklu2010@gmail.com'),
(13, 'p', 'patricklu2010@gmail.com'),
(14, 'p', 'patricklu2010@gmail.com'),
(15, 'pat', 'patrick@gmail.com'),
(16, 'pp', 'p@p.com');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` enum('normal','custom') NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `type`) VALUES
(1, 'administrators', 'normal'),
(2, 'articles', 'normal'),
(3, 'bod', 'normal'),
(4, 'custodians', 'normal'),
(5, 'departments', 'normal'),
(6, 'schemes', 'normal'),
(7, 'fund_managers', 'normal'),
(8, 'resources', 'normal'),
(9, 'tenders', 'normal'),
(10, 'corporate_trustees', 'normal'),
(11, 'users', 'normal'),
(12, 'vacancies', 'normal'),
(13, 'index', 'normal'),
(14, 'reports', 'normal'),
(15, 'faqs', 'normal'),
(16, 'workshops', 'normal'),
(17, 'imedia', 'normal'),
(18, 'emedia', 'normal'),
(34, 'addpage', 'normal'),
(36, 'sfsdfs', 'custom'),
(37, 'home', 'custom'),
(38, 'timestamps', 'normal'),
(39, 'individual_trustees', 'normal'),
(40, 'new_pages', 'normal'),
(41, 'you_tube', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `page_alloc`
--

CREATE TABLE IF NOT EXISTS `page_alloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `page_alloc`
--

INSERT INTO `page_alloc` (`id`, `page_id`, `uid`) VALUES
(30, 1, 15),
(31, 2, 15),
(32, 3, 15),
(33, 4, 15),
(34, 5, 15),
(35, 6, 15),
(36, 7, 15),
(37, 8, 15),
(38, 9, 15),
(39, 10, 15),
(40, 11, 15),
(41, 12, 15),
(42, 13, 15),
(46, 1, 17),
(47, 2, 17),
(48, 3, 17),
(49, 4, 17),
(50, 5, 17),
(51, 6, 17),
(52, 7, 17),
(53, 8, 17),
(54, 9, 17),
(55, 10, 17),
(56, 11, 17),
(57, 12, 17),
(58, 13, 17),
(59, 1, 18),
(60, 2, 18),
(61, 3, 18),
(62, 4, 18),
(63, 5, 18),
(64, 6, 18),
(65, 7, 18),
(66, 8, 18),
(67, 9, 18),
(68, 10, 18),
(69, 11, 18),
(70, 12, 18),
(71, 13, 18),
(72, 14, 17),
(73, 15, 17),
(74, 16, 17),
(75, 17, 17),
(76, 18, 17),
(77, 38, 17),
(78, 38, 18),
(79, 39, 17),
(80, 39, 18),
(81, 40, 17),
(82, 40, 18),
(85, 41, 17),
(86, 41, 18);

-- --------------------------------------------------------

--
-- Table structure for table `rbs`
--

CREATE TABLE IF NOT EXISTS `rbs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `rbs`
--

INSERT INTO `rbs` (`id`, `name`, `address`, `web_link`) VALUES
(4, '<p>AAR Health Services Uganda Limited Staff Retirement Benefits Scheme</p>\n', 'Elizabeth Avenue, Kololo', ''),
(5, '<p>AIG Uganda</p>\n', 'Plot 24A Akii Bua Road.  Kampala. ', ''),
(7, '<p>Alexander Forbes Retirement Fund</p>\n\n<ul>\n	<li>Marsh Uganda Ltd</li>\n	<li>CitiBank Uganda Ltd</li>\n	<li>International Alert Uganda</li>\n	<li>Alexander Forbes Financial Services Ltd</li>\n	<li>Uganda Development Bank Ltd</li>\n	<li>Rakai Health Sciences Program</li>\n	<li>KCB Bank Uganda Ltd</li>\n	<li>Guaranty Trust Bank Uganda Ltd</li>\n	<li>Capital Markets Authority</li>\n	<li>ICCO Cooperation</li>\n	<li>Imperial Bank Uganda Ltd</li>\n	<li>Lion Assurance Company Ltd</li>\n	<li>Rift Valley Railways (Uganda) Ltd</li>\n	<li>Unilever Uganda Ltd</li>\n	<li>Commercial Bank of Africa (U) Ltd</li>\n	<li>Total E &amp; P Uganda B.V.</li>\n	<li>United Bank for Africa Ltd</li>\n	<li>Makerere University School of Public Health, Fellowship Programme</li>\n	<li>American Tower Cooperation</li>\n	<li>ZTE Uganda Ltd</li>\n</ul>\n', '5 Bandali Rise Bugolobi, 2nd Floor Studio House', ''),
(8, '<p>AON Uganda Ltd Staff Retirement Benefits Scheme</p>\n', ' Plot 16 Clement Hill Road, Kampala', ''),
(9, '<p>Bank of Africa Staff Povident Fund</p>\n', 'Plot 45, Jinja Road', ''),
(10, '<p>Bank of Uganda DC</p>\n', 'Plot 33-45, Kampala Road', ''),
(11, '<p>Bank Of Uganda Staff Retirement Benefit Scheme</p>\n', 'Plot 33-45, Kampala Road', ''),
(12, '<p>Barclays Bank Retirement Benefits Scheme</p>\n', 'Plot 2/4 Hannington Road', ''),
(13, '<p>British American Tobacco Uganda Staff Pension Scheme</p>\n', 'Plot 69/71 Jinja Road Kampala', ''),
(14, '<p>Centenary Bank Staff&nbsp; Defined Contribution Scheme</p>\n', 'Mapeera House Plot 44-46 Kampala Road', ''),
(15, '<p>Crown Beverages Uganda limited</p>\n', 'Crown Beverages Uganda limited', ''),
(16, '<p>Delta Petroleum (u) Ltd Staff Retirement Benefits scheme</p>\n', 'Ruth Tower, Hannington Road', ''),
(17, '<p>DFCU Retirement Benefit Scheme</p>\n', 'Plot 2 Jinja Road', ''),
(18, '<p>Equity Bank (u) staff provident fund scheme</p>\n', 'Plot 390 Mutesa 1 Road', ''),
(19, '<p>Housing Finance Bank Retirement Benefits Scheme</p>\n', 'Plot 4 Wampewo Avenue, Kololo', ''),
(20, '<p>ICEA Life Assurance Company</p>\n\n<ul>\n	<li>Family Health International</li>\n	<li>Grameen Foundation Uganda</li>\n	<li>Human Rights Network</li>\n	<li>ICEA Agency</li>\n	<li>NC Bank</li>\n	<li>ICEA Staff</li>\n	<li>Bible Society of Uganda</li>\n	<li>Life Church</li>\n	<li>Feed the Children</li>\n	<li>ENCOT</li>\n	<li>Broll</li>\n	<li>Diakonia</li>\n	<li>Insurance Regulatory Authority of Uganda</li>\n</ul>\n\n<p>&nbsp;</p>\n', '2nd Floor Rwenzori Courts', ''),
(21, '<p>Jubilee Life Umbrella Retirement Scheme</p>\n\n<ul>\n	<li>Fountain Publishers Ltd</li>\n	<li>Life Ministries Uganda</li>\n	<li>Aga Khan Foundation</li>\n	<li>Sadolin Paints Uganda Limited</li>\n	<li>Swisscontact</li>\n	<li>DHL</li>\n	<li>World Renew (CRWRC)</li>\n	<li>Flitlinks International</li>\n	<li>Eagle Africa Insurance Brokers</li>\n	<li>AKDN</li>\n	<li>Finca Uganda &amp; Finca Network Support</li>\n	<li>Sign Health Gratuity Scheme</li>\n	<li>Multichoice Uganda</li>\n	<li>Balaji Insurance Ltd</li>\n	<li>AVSI Foundation</li>\n</ul>\n\n<p>&nbsp;</p>\n', '2nd Floor Rwenzori Courts', ''),
(22, '<p>Kilimo Trust Provident Fund Scheme</p>\n', 'Plot 42, Princess Anne Drive, Bugolobi', ''),
(23, '<p>Kinyara Sugar Works Limited Staff Provident Fund</p>\n', 'Bujenje Masindi', ''),
(24, '<p>Liaison Financial Services Ltd</p>\n\n<ul>\n	<li>Ecobank Uganda Ltd Staff Provident Fund</li>\n	<li>Ericsson Uganda Staff Provident Fund</li>\n	<li>Lancet Laboratories Uganda Limited</li>\n</ul>\n', 'Plot 44 Lumumba Avenue, Kampala', ''),
(25, '<p>Liberty Life Assurance Uganda Ltd</p>\n\n<ul>\n	<li>East African Underwriters Ltd</li>\n	<li>First Insurance Co. Ltd</li>\n	<li>Ultra Uganda Ltd</li>\n	<li>VECO East Africa Uganda Programme</li>\n	<li>Africa Center for Treatment and Rehabilitation of Torture Victims</li>\n	<li>Uganda Cooperative Alliance</li>\n</ul>\n', 'Mariba Building, 3rd Floor Plot 17, Golf Course Road, Kololo, Kampala, Uganda', ''),
(26, '<p>Makerere University Business School Retirement Benefits Scheme</p>\n', 'Plot M118 Portbell Road', ''),
(27, '<p>Mazima Voluntary Individual RBS</p>\n', 'Plot 1256, prof Nsibambi Road, Namirembe, Kampala', ''),
(28, '<p>Makerere University Retirement Benefits Scheme</p>\n', 'B4, Lincoln Flats,  Makerere University Main Campus', ''),
(29, '<p>Mbarara University of Science &amp; Technology Retirement Benefits Scheme</p>\n', 'Mbarara', ''),
(30, '<p>Monitor Publications Ltd Staff Retirement Benefits Scheme</p>\n', 'Plot 29-35, 8th Street Industrial Area', ''),
(31, '<p>MTN Uganda Contributory Provident Fund</p>\n', 'PLOT 22 HANNINGTON ROAD', ''),
(32, '<p>NARO Retirement Benefits Scheme</p>\n', ' Plot 11-13 Lugard Avenue, Entebbe', ''),
(33, '<p>National Housing and Construction Ltd Staff Provident Fund</p>\n', 'Plot 5, 7th Street Industrial Area', ''),
(34, '<p>National Social Security Fund</p>\n', 'Plot 1 Pilkington Road, 14th Floor Workers House', ''),
(35, '<p>Nile Breweries Staff Provident Fund</p>\n', ' Plot 6-10 Portbell Road, Luzira', ''),
(36, '<p>NSSF-Staff Provident Fund</p>\n', 'Plot 1 Pilkington Road, 14th Floor Workers House', ''),
(37, '<p>Opportunity Bank Staff Retirement Savings Scheme</p>\n', 'Plot 7A, John Babiha Avenue', ''),
(38, '<p>Orient Bank Staff Defined Contribution Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 6/6a Kampala Road', ''),
(39, '<p>PACE Staff Retirement Benefits Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 2, Lbis Vale Kololo', ''),
(40, '<p>Parliamentary Pension Scheme</p>\n', '', ''),
(41, '<p>PCP Staff Provident Fund</p>\n\n<p>&nbsp;</p>\n', 'Plot M697      2nd Floor, UMA Show Grounds', ''),
(42, '<p>Post-Bank Uganda Provident Fund</p>\n\n<p>&nbsp;</p>\n', 'Plot 4/6 Nkurumah Road', ''),
(43, '<p>Pride Microfinance Retirement Benefits Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 8-10 Entebbe Road, Metropole House', ''),
(44, '<p>Royal Danish Embassy Local Staff Retirement Benefit Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 3 Lumumba Avenue, Kampala', ''),
(45, '<p>Stanbic Bank Uganda</p>\n\n<p>&nbsp;</p>\n', 'Plot 17 Hannington Road', ''),
(46, '<p>Standard Chartered Bank Uganda&nbsp; Pension Trust Fund</p>\n\n<p>&nbsp;</p>\n', 'Plot 5 Speke Road', ''),
(47, '<p>Stanlib Uganda Umbrella Scheme</p>\n\n<ul>\n	<li>Medical Access Uganda Ltd</li>\n	<li>Ryra Investments</li>\n	<li>Divine Sisters Investment Club</li>\n	<li>Crystal Services Investment Club</li>\n	<li>Sentinel Investment Club</li>\n	<li>Pelum Staff Pension Fund</li>\n	<li>Clinton Health Access Initiative Staff Fund</li>\n	<li>Truss Investments</li>\n	<li>Pearl Engineering Company Ltd Staff Scheme</li>\n	<li>Water for People</li>\n</ul>\n\n<p>&nbsp;</p>\n', 'Plot 17 Hannington road, 4th Floor Crested Tower', ''),
(48, '<p>State-wide Insurance Company Limited Staff Retirement Benefits Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 1 Bombo Road Sure House', ''),
(49, '<p>Toyota Uganda Limited Staff Retirement Benefits Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 1A And 1B 1st Street Industrial Area', ''),
(50, '<p>Tullow Uganda Limited Staff Retirement Benefits Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 15, Yusuf Lule Road Nakasero', ''),
(51, '<p>Uganda Breweries Limited Retirement Benefits Scheme</p>\n', 'Portbell, Kampala', ''),
(52, '<p>UAP Financial Services</p>\n\n<ul>\n	<li>ADRA Uganda</li>\n	<li>Advance Microfinance</li>\n	<li>Bugema University</li>\n	<li>Build Africa</li>\n	<li>C&amp; G ANDIJES</li>\n	<li>FIDA</li>\n	<li>Habitat for Humanity</li>\n	<li>UAP Life Agents DAP</li>\n	<li>Ligomarc</li>\n	<li>Self Help Africa</li>\n	<li>Send A Cow Uganda</li>\n	<li>Spear Motors</li>\n	<li>Uganda Flowers Exporters Association</li>\n	<li>Pentecostal Assemblies of God&nbsp; Uganda</li>\n</ul>\n\n<p>&nbsp;</p>\n', 'Block A 6th Floor, New Port Bell Road Kampala', ''),
(53, '<p>Uganda Clays Retirement Benefits Scheme</p>\n\n<p>&nbsp;</p>\n', 'Entebbe Road Kajjansi', ''),
(54, '<p>Uganda Communication Commission Staff Provident Fund</p>\n\n<p>&nbsp;</p>\n', 'Plot 42-44 Spring Road Bugolobi', ''),
(55, '<p>Uganda Communications&nbsp;&nbsp;&nbsp; Employee&acirc;&euro;&trade;s Contributory Pension Scheme</p>\n', 'Plot 1 Delhi Gardens, Old Kampala', ''),
(56, '<p>Uganda Revenue Authority Staff Retirement Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 40 Rotary Avenue, URA Training School', ''),
(57, '<p>UNEB Staff Retirement Benefits Scheme</p>\n\n<p>&nbsp;</p>\n', 'Plot 35 Martyrs Way Ntinda', ''),
(58, '<p>Vivo Energy Uganda Limited Staff Provident Fund</p>\n\n<p>&nbsp;</p>\n', 'Plot 9/11, 7th Street Industrial Area', ''),
(59, '<p>Watoto Church Ministries Provident Fund</p>\n\n<p>&nbsp;</p>\n', 'Plot 87 Kampala Road,', '');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `date_realesed` date NOT NULL,
  `attachment` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `desc`, `date_realesed`, `attachment`) VALUES
(1, 'qwerty', 'weff', '2017-02-18', '220415.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category` enum('act','regulation','compliance','other') NOT NULL,
  `end_date` date NOT NULL,
  `attachment` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `scheme_law`
--

CREATE TABLE IF NOT EXISTS `scheme_law` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `scheme_law`
--

INSERT INTO `scheme_law` (`id`, `tab`, `details`) VALUES
(13, 'Application and grant of licence of a retirement benefits scheme', '<p>(1) An application for a licence to establish a retirement benefits scheme shall be in the prescribed form and shall be accompanied by the prescribed fee.</p>\r\n\r\n<p>(2) An application for a licence to establish a retirement benefits scheme shall stateï¿½</p>\r\n\r\n<ol>\r\n	<li>the name and address of the applicant;</li>\r\n	<li>the name of the proposed retirement benefits scheme;</li>\r\n	<li>names and addresses of the custodian, trustee, administrator and fund manager of the retirement benefits scheme;</li>\r\n	<li>the status of the retirement benefits scheme in respect ofï¿½\r\n	<ul style="list-style-type:lower-roman">\r\n		<li>the names of members admitted into the retirement benefits scheme and their contribution;</li>\r\n		<li>benefits that accrue to members under the retirement benefits scheme;</li>\r\n		<li>whether any members of the scheme are active members or not;</li>\r\n	</ul>\r\n	</li>\r\n	<li>the proposed scheme rules which shall adequately protect the interests of members and beneficiaries of the scheme;</li>\r\n	<li>the address of a place in Uganda for the service on the applicant of any notice or document required or authorised to be served on the applicant under this Act; and</li>\r\n	<li>any other information which the Authority considers necessary for the purposes of determining the application.</li>\r\n</ol>\r\n\r\n<p>(3) A person who establishes or operates a retirement benefits scheme without a licence commits an offence and is liable on conviction to a fine not exceeding one thousand five hundred currency points or imprisonment not exceeding twelve years, or both.</p>\r\n'),
(14, 'Grant of licence to operate a retirement benefits scheme ', '<p>(1) The Authority may grant a licence to operate a retirement benefits scheme, if the Authority is satisfied thatï¿½</p>\r\n\r\n<ol>\r\n	<li>the proposed retirement benefits scheme is established as an irrevocable trust under this Act and Regulations made under this Act;</li>\r\n	<li>the scheme rules of the proposed retirement benefits scheme adequately protect the rights and interests of the members and beneficiaries of the scheme; and</li>\r\n	<li>the custodian, trustee, administrator and fund manager of the proposed retirement benefits scheme are licensed in accordance with this Act.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority shall publish in the Gazette and in a newspaper of wide circulation in Uganda, a list of all retirement benefits schemes licensed under this Act at least once in every year.</p>\r\n\r\n<p>(3) The Authority may refuse to grant a licence to an applicant, if the Authority is satisfied thatï¿½</p>\r\n\r\n<ol>\r\n	<li>the information contained in the application is false in any material particular;</li>\r\n	<li>the applicant does not meet the requirements specified in section 29 (2) and subsection 30 (1); or</li>\r\n	<li>the applicant is not a fit and proper person as prescribed in Schedule 3.</li>\r\n</ol>\r\n\r\n<p>(4) Where the Authority refuses to grant a licence to an applicant, the Authority shall notify the applicant of its decision and specify the reasons for the refusal in writing.</p>\r\n'),
(15, 'Validity of licence ', '<p>A licence issued to a retirement benefits scheme shall be valid from the date of issue and shall remain in force until the scheme is wound up in accordance with the scheme rules or the law under which the scheme is established or until the licence is revoked under this Act.</p>\r\n'),
(16, 'Restriction of licence ', '<p>(1) A licence issued to an administrator shall be valid for one year and may be renewed upon payment of the prescribed fee.</p>\r\n\r\n<p>(2) An application for the renewal of a licence under subsection (1) shall be made at least three months before the expiry of the licence.</p>\r\n'),
(17, 'Revocation of licence of Administrator ', '<p>(1) The Authority may revoke the licence of a retirement benefits scheme ifï¿½</p>\r\n\r\n<ol>\r\n	<li>the Authority discovers that the applicant made a false statement in the application, which he or she knew to be false in any material particular;</li>\r\n	<li>the retirement benefits scheme is merged, wound up or dissolved;</li>\r\n	<li>the retirement benefits scheme breaches the conditions of its licence;</li>\r\n	<li>the licence expires; or</li>\r\n	<li>the retirement benefits scheme contravenes any provision of this Act or any regulations made under this Act.</li>\r\n</ol>\r\n\r\n<p>(2) The Authority shall give the trustee of a retirement benefits scheme at least thirty days notice in writing specifying the reasons for the intended revocation of the licence.</p>\r\n\r\n<p>(3) The Authority shall, before revoking a licence of a retirement benefits scheme, consider any representations made in writing by the sponsor opposing the revocation.</p>\r\n\r\n<p>(4) The Authority shall revoke the licence of a retirement benefits scheme ifï¿½</p>\r\n\r\n<ol>\r\n	<li>within thirty days after issuing the notice, the trustee of the retirement benefits scheme has not opposed the revocation, or</li>\r\n	<li>the Authority is not satisfied by the representation made by the trustee under subsection (3).</li>\r\n</ol>\r\n\r\n<p>The revocation of a licence of a retirement benefits scheme shall not in any way prejudice the rights of members and beneficiaries under the retirement benefits scheme.</p>\r\n\r\n<p>(6) Where the licence of a retirement benefits scheme is revoked, the Authority may, subject to the approval of the Board in consultation with the Minister, take over the distribution of the assets and the supervision of the retirement benefits scheme or appoint an interim administrator in order to protect the interests of members and beneficiaries of the retirement benefits scheme.</p>\r\n'),
(18, 'Functions of a Administrator ', '<p>(1) An administrator of a retirement benefits scheme shallï¿½</p>\r\n\r\n<ol>\r\n	<li>keep the records of the scheme;</li>\r\n	<li>process receipts and invoices;</li>\r\n	<li>produce quarterly and annual accounts for audit;</li>\r\n	<li>organise and arrange for meetings ; and</li>\r\n	<li>prepare annual benefit statements and trustee reports.</li>\r\n</ol>\r\n\r\n<p>(2) An administrator of a retirement benefits scheme shall not act as a custodian, trustee or fund manager of the same retirement benefits scheme.</p>\r\n\r\n<p>(3) The provisions of subsection (2) shall apply to any assignee or related party of the administrator.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(10) NOT NULL,
  `caption` text NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `imagename`, `caption`, `link`) VALUES
(24, '81089.jpg', 'Save for retirement - For more information call 0776802000/0756802000/0417304500', ''),
(25, '104686.jpg', 'URBRA launches Zaabu Life Media Campaign to create awareness about the need for saving for retiremen', ''),
(26, '584431.jpg', 'Zaabulife - Happy Retirement', '');

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE IF NOT EXISTS `tenders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(10) NOT NULL,
  `desc` text NOT NULL,
  `category` varchar(10) NOT NULL,
  `deadline` date NOT NULL,
  `date_pub` date NOT NULL,
  `date_awarded` date NOT NULL,
  `attachment` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `ref_no`, `desc`, `category`, `deadline`, `date_pub`, `date_awarded`, `attachment`) VALUES
(6, '1', '1', '1', '2017-01-09', '2017-01-28', '2017-01-28', '480958.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `time_stamps`
--

CREATE TABLE IF NOT EXISTS `time_stamps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `licences` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `time_stamps`
--

INSERT INTO `time_stamps` (`id`, `last_updated`, `licences`) VALUES
(1, '2017-02-25 00:56:31', 'Administrators'),
(2, '2017-02-25 00:55:30', 'Custodians'),
(3, '2017-02-27 22:29:53', 'Corporate_Trustees'),
(4, '2017-02-25 00:56:07', 'Schemes'),
(5, '2017-02-27 23:30:37', 'Fund_Managers'),
(6, '2017-02-27 22:30:06', 'Individual_Trustees');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id`, `item_id`, `sid`) VALUES
(2, 9, 1),
(3, 9, 1),
(4, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_slideshow`
--

CREATE TABLE IF NOT EXISTS `tmp_slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(10) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trustee_law`
--

CREATE TABLE IF NOT EXISTS `trustee_law` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `trustee_law`
--

INSERT INTO `trustee_law` (`id`, `tab`, `details`) VALUES
(32, 'Love', '<p>Grace</p>\r\n'),
(33, 'kjnnmnm', '<p><br />\r\nnbmnbmnbn</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(17, 'p', 'p', 'p@p.com', '83878c91171338902e0fe0fb97a8c47a'),
(18, 'frank', 'frank', 'frank@gmail.com', '26253c50741faa9c2e2b836773c69fe6');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE IF NOT EXISTS `vacancies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `attachment` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are`
--

CREATE TABLE IF NOT EXISTS `who_we_are` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab` varchar(150) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `who_we_are`
--

INSERT INTO `who_we_are` (`id`, `tab`, `details`) VALUES
(1, 'Our Vision ', '<p>A vibrant, secure and sustainable Retirement Benefits System.</p>\r\n'),
(2, 'Our Mission ', '<p>To regulate, supervise and promote the development of a stable and effective Retirement Benefits Sector.</p>\r\n'),
(3, 'Our Core Values ', '<p>A person shall not be licensed as a trustee of a retirement benefits scheme if he or she</p>\r\n\r\n<ol>\r\n	<li>Professionalism</li>\r\n	<li>Integrity</li>\r\n	<li>Transparency</li>\r\n	<li>Innovativeness</li>\r\n</ol>\r\n'),
(4, 'Retirement Benefits Sector Background ', '<p>The pensions sector is one of the key non-banking financial sectors that is a source for long term finance for investment. It is a long term savings vehicle that permits the population to provide for old age retirement among others and a safety net in general against a variety of unforeseen future consumption requirements. Currently, the pension sector in Uganda is composed of; the Public Service Pension Scheme, which is a Government scheme catering for the pensions of civil servants; the National Social Security Funds, which receives mandatory pension contributions from all private sector employers with five or more staff, and their employees; and a number of occupational pension schemes to which various large employers and their employees make additional contributions, over and above the NSSF mandatory contribution.</p>\r\n'),
(5, 'Objectives of establishing a the Authority ', '<p>The primary strategic objectives of establishing a Retirement Regulatory Authority &amp; a strong supervisory framework include:-</p>\r\n\r\n<ul>\r\n	<li>Ensuring the stability and integrity of the financial sector through the stability and security of pension funds.</li>\r\n	<li>Ensuring sustainability of the pension sector as a whole and encouragement of pension provision with a view to promoting long term capital development.</li>\r\n	<li>Finally, setting the foundation for the gradual liberalization of the sector.</li>\r\n</ul>\r\n'),
(6, 'Brief Background of URBRA ', '<p>The Uganda Retirement Benefits Regulatory Authority (URBRA) is established by the virtue of section 2 of the Uganda Retirement Benefits Regulatory Authority Act 2011, No. 15 of 2011. It is an autonomous body responsible for regulating establishment, management and operation of retirement benefits schemes in Uganda in both private and public sectors. The Authority is responsible for supervising institutions which provide retirement benefit products and services.</p>\r\n'),
(7, 'Mandate of the Authority ', '<p>The Authority is responsible for the implementation of the URBRA Act, its functions among others include:-</p>\r\n\r\n<ul>\r\n	<li>Regulating the establishment, management and operation of retirement benefits schemes in Uganda in both the private and public sectors;</li>\r\n	<li>Supervision of institutions which provide retirement benefits products and services;</li>\r\n	<li>Promoting the development of the retirement benefits sector;</li>\r\n	<li>Licensing the retirement benefits schemes;</li>\r\n	<li>Licensing of custodians, trustees, administrators and fund managers of retirement benefits schemes.</li>\r\n</ul>\r\n'),
(8, 'POWERS OF THE AUTHORITY ', '<p>Section 6 of the URBRA Act 2011 states that, for the purpose of carrying out its objectives, the Authority may exercise, perform and discharge any of the following powers:-</p>\r\n\r\n<ul>\r\n	<li>Control, supervise and administer the assets of the Authority in such a manner and for such purposes that promote the purpose for which the Authority was established;</li>\r\n	<li>Conduct any investigation or inquiry relevant to the retirement benefits industry in Uganda;</li>\r\n	<li>Conduct any inspection and examination of books of accounts, records, returns and any document or premises of a licensed person or scheme;</li>\r\n	<li>Issue guidelines, directives or instructions to any licensed person for the proper management of a retirement benefits scheme;</li>\r\n	<li>Search the premises of any licensed person in accordance with this Act;</li>\r\n	<li>Delegate any of its powers other than the powers of revocation, licensing, delegation or variation of such delegation; and</li>\r\n	<li>Do such other things to ensure efficiency in the management of retirement benefits schemes.</li>\r\n</ul>\r\n'),
(9, 'Who we are', '<p>The Uganda Retirement Benefits Regulatory Authority (URBRA) was established to regulate the establishment, management and operations of retirement benefit schemes in Uganda both in the private and public sectors as well as promote the development of the Retirement Benefits Sector.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE IF NOT EXISTS `workshops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `dateheld` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `title`, `desc`, `dateheld`) VALUES
(4, 'Title', 'sdfdsfdv', '2017-02-25'),
(5, 'p', 'p', '2017-02-24'),
(6, 'nn', 'ijlkjlk', '2017-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_docs`
--

CREATE TABLE IF NOT EXISTS `workshop_docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attachment` varchar(10) NOT NULL,
  `workshop_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `workshop_docs`
--

INSERT INTO `workshop_docs` (`id`, `attachment`, `workshop_id`) VALUES
(1, '965581.pdf', 4),
(2, '637204.pdf', 5),
(3, '230659.pdf', 5),
(4, '361357.pdf', 5),
(5, '507969.pdf', 5),
(6, '49352.pdf', 6),
(7, '122064.pdf', 6);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `link`) VALUES
(1, 'wCSNECgNMcY');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
