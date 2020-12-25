-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 09:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activearticle`
--

CREATE TABLE `activearticle` (
  `id` int(255) NOT NULL,
  `publishdate` text NOT NULL DEFAULT current_timestamp(),
  `title` text NOT NULL,
  `authorname` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('MRajibH', 'rajib104.ewubd@gmail.com', 'admin'),
('Pranto', '', '123'),
('shakib', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`name`, `email`, `gender`, `address`, `password`) VALUES
('Ayesha', 'Ayesha@gmail.com', 'Female', 'Banosree , Dhaka', '123'),
('Juthi', 'Juthi@gmail.com', 'Female', 'Bagerhat,Bangladesh', '123'),
('Mustafiz', 'Mustafiz@gmail.com', 'Male', 'Banosree , Dhaka', '123'),
('MRajibH', 'rajib104.ewubd@gmail.com', 'Male', 'Banosree , Dhaka', '123'),
('Salman', 'Salman@gmail.com', 'Male', 'Khulna, Bangladesh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(255) NOT NULL,
  `catagoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagoryname`) VALUES
(1, 'COVID-19'),
(2, 'Politics'),
(3, 'Bangladesh'),
(4, 'World'),
(5, 'Business'),
(6, 'Sports'),
(7, 'Jobs'),
(9, 'Showbiz');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `postid` int(255) NOT NULL,
  `visitorname` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `publishdate` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postid`, `visitorname`, `comment`, `publishdate`) VALUES
(26, 24, 'Rajib', 'This is very alarming news . When this gonna end?', '2020-09-26 23:58:33'),
(27, 27, 'Rajib', 'Nice news', '2020-09-30 18:40:15'),
(28, 31, 'Mustafiz', 'This is so sad and good news at the same time.', '2020-09-30 18:56:21'),
(29, 32, 'Mustafiz', 'Good News ! But I couldnot play IPL because of papon. Shame on you Casino Papon.', '2020-10-01 15:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `mainportal`
--

CREATE TABLE `mainportal` (
  `mid` int(255) NOT NULL,
  `mpublishdate` text NOT NULL DEFAULT current_timestamp(),
  `mtitle` text NOT NULL,
  `mauthorname` varchar(255) NOT NULL,
  `mcatagory` varchar(255) NOT NULL,
  `mimage` varchar(255) NOT NULL,
  `mbody` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainportal`
--

INSERT INTO `mainportal` (`mid`, `mpublishdate`, `mtitle`, `mauthorname`, `mcatagory`, `mimage`, `mbody`, `comment`) VALUES
(22, '2020-09-24 03:03:25', 'China-US ‘rivalry’ shouldn’t dominate world', 'MRajibH', 'World', 'images/emmanuel-macron.jpg', '<h2><em>Says Macron at UN, seeks &lsquo;new consensus&rsquo; to solve global crises</em></h2>\r\n\r\n<p>World leaders must not let themselves be dominated by a power struggle between the US and China, French President Emmanuel Macron has told the UN, calling for a &quot;modern new consensus&quot; on tackling global challenges.&nbsp;</p>\r\n\r\n<p>&quot;The world today cannot be reduced to the rivalry between China and the United States, irrespective of the global weight of these great powers,&quot; Macron told the UN General Assembly by video on Tuesday.</p>\r\n\r\n<p>Borrowing a term that describes a duet in ballet, he said: &quot;We do not have to settle for a &#39;pas de deux&#39; that would make us only the rueful spectators of a collective powerlessness.&quot;</p>\r\n\r\n<p>Macron has already warned that Washington&#39;s retreat from the global stage will require Europe to forge its own common defense strategy, and reduce its alliance on key technologies currently supplied by US or Chinese giants.</p>\r\n\r\n<p>&quot;The complete dependence on certain powers, with regards to technologies, food or industry, creates vulnerabilities that no longer allow the balances that go hand in hand with global stability,&quot; Macron told the UN.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The coronavirus crisis, he warned, has further undermined support for multilateralism and encouraged the willingness of some nations to ignore UN injunctions or international law.</p>\r\n\r\n<p>&quot;There will surely be a cure one day for this pandemic. But there will not be a miracle cure for this destruction of the contemporary order,&quot; he said.</p>\r\n\r\n<p>&quot;Multilateralism is not simply an act of faith -- it&#39;s an operational necessity,&quot; he said. &quot;No country will get out of this ordeal on its own.&quot;</p>\r\n\r\n<p>Earlier, UN Secretary-General Antonio Guterres, opening the General Assembly, warned of the risks of rising tensions between the United States and China.</p>\r\n\r\n<p>&quot;We must do everything to avoid a new Cold War,&quot; Guterres said.</p>\r\n\r\n<p>His comment came before US and China leaders addressed the UN virtually and presented a conflicting world view at a time when the world is full of existential crises.</p>\r\n\r\n<p>Xi Jinping warned against the perils of a &quot;clash of civilizations&quot; after Trump angrily cast blame on China over the coronavirus pandemic and urged UN to hold it accountable.&nbsp;</p>\r\n', ''),
(23, '2020-09-25 02:51:21', 'Onion Self-Sufficiency: Possible, but not so soon', 'Salman', 'Bangladesh', 'images/onion_41.jpg', '<p>The government intends to make the country self-sufficient in onion by increasing the production of this essential cooking ingredient but it may take years as overcoming the seed crisis remains a major challenge.&nbsp;</p>\r\n\r\n<p>Scientists in Bangladesh say they have developed some high-yielding varieties that can be cultivated in summer when the market sees a scarcity of local onion produced in winter.</p>\r\n\r\n<p>But it would take at least six years to have enough seeds of the new varieties to meet the country&#39;s demand.</p>\r\n\r\n<p>With trouble recurring due to India&#39;s onion export ban in two consecutive years, the government aims to expand the coverage of onion cultivation in the coming winter season to be started at the end of next month.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/big_1/public/news/images/onon_text.jpg?itok=-T9oWn7N\" /></p>\r\n\r\n<p>The Department of Agricultural Extension (DAE) has already sought suggestions and data from the field offices on how to reach the target and experts also made a presentation on this at the agriculture ministry.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Our prime minister has directed us to take initiatives to increase onion production. We have already conducted several meetings on this,&quot; Dr Muhammad Abdur Razzaque, the agriculture minister, told The Daily Star.</p>\r\n\r\n<p>He said scientists at Bangladesh Agriculture Research Institute (BARI) have developed summer varieties which have yet to reach the farmers because of the seed crisis.</p>\r\n\r\n<p>Bangladesh is now self-sufficient in rice, vegetables, fish and meat because the government took initiatives to increase the production of those food items.</p>\r\n\r\n<p>Asked whether it will at all be possible for the country to become self-sufficient in onion, Dr Md Abdul Muyeed, director general of DAE, said, &quot;It is very much possible. But for that we need some time, maybe a few years.&quot;</p>\r\n\r\n<p>Last year, the country produced 23.30 lakh tonnes of onion in 2019, yet 10.91 lakh tonnes more was imported in 2019-20 year -- about 95 percent of it from India.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/big_1/public/news/images/onion-story.jpg?itok=5RC4A_0D\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>On September 14, as India banned onion exports, the market here became unstable and prices of the item skyrocketed, causing outrage among the people.</p>\r\n\r\n<p>The same thing happened in late September last year.&nbsp;</p>\r\n\r\n<p>&quot;This year,&quot; Abdul Muyeed said, &quot;we are trying to increase the production significantly.&quot;</p>\r\n\r\n<p>He added, &quot;We have set a target to produce 33 lakh tonnes of onion a year. But it will take a few years to reach that goal.&quot;</p>\r\n\r\n<p>Asked how they are planning to fulfill this target, the DG said the first step is to increase the average production.</p>\r\n\r\n<p>In the last season, the production of onion rose by 2.27 lakh tonnes and reached 25.57 lakh tonnes, which was 23.30 lakh tonnes the previous year.</p>\r\n\r\n<p>Currently, farmers are cultivating onions in around 2.5 lakh hectares of land. On average, around 10 lakh tonnes is produced in one hectare.</p>\r\n\r\n<p>&quot;If we can increase the production by just one tonne per hectare, there will be additional 2.5 lakh tonnes next year,&quot; the DG said.</p>\r\n\r\n<p>He noted that the global average of onion production is around 17 tonnes per hectare while it is 10 tonnes in Bangladesh.</p>\r\n\r\n<p>&quot;The production rate varies from one region to another, depending on soil quality and weather. But we have the potential to increase the average onion production up to 12 to 13 tonnes per hectare.&quot;</p>\r\n\r\n<p>He added that the land where farmers grow potatoes, tobacco, wheat or winter vegetables could also be suitable for onion cultivation and farmers will find it profitable.</p>\r\n\r\n<p>Besides, the government is likely to provide seeds of high-yielding varieties of onion and fertiliser to farmers at subsidised prices so that they can shift to onion cultivation from other winter crops in the coming season.&nbsp;</p>\r\n\r\n<p>The DAE control room sources said farmers last year cultivated onion in 2.37 lakh hectares of land, which was 2.07 lakh hectares in 2018.</p>\r\n\r\n<p>For the last five years, Pabna, Rajshahi, Faridpur, Rajbari and Jhenaidah remain the top onion-producing districts.</p>\r\n\r\n<p>SEED CRISIS</p>\r\n\r\n<p>Every year, farmers need more than 1,100 tonnes of seed, of which around 1,000 tonnes are generated by farmers, while the rest is supplied by Bangladesh Agriculture Development Corporation (BADC) and private companies.</p>\r\n\r\n<p>&quot;But this year, there is a crisis as seed production was low in the last season. Currently, we have around 700 tonnes of seed; we need to import the rest,&quot; said Shailendra Nath Mazumder, principal scientific officer and director, Strengthening Spices Crop Research in Bangladesh.</p>\r\n\r\n<p>This year, the price of seeds is Tk 8,000 per kg, which was below Tk 2,000 last year.</p>\r\n\r\n<p>Shailendra, who made the presentation at the agriculture ministry on Wednesday on how to increase onion production, said sandy char areas in the northern region have good potential to grow onion.&nbsp;</p>\r\n\r\n<p>And farmers should grow onions with sugarcane, ginger, turmeric and maize and agricultural officials can train farmers about the method, he added.</p>\r\n\r\n<p>Regarding new varieties of onion, he said, they have just developed high-yielding BARI-6. But it will take some time to produce seeds to start its cultivation at the farmers&#39; level.</p>\r\n\r\n<p>Regarding the summer variety BARI-5, he said, it was cultivated on only a few hundred acres of land last year.</p>\r\n\r\n<p>&quot;Even if we start producing the seeds now, it will take around six years to grow enough of the new varieties to meet our demand,&quot; he added.</p>\r\n\r\n<p>Shailendra suggested that farmers, who usually plant homegrown and low-yielding seeds, should be provided with the new varieties.</p>\r\n\r\n<p>Asked why seeds are not imported, he said, &quot;Our winter is short compared to other onion growing countries. Seeds from those countries usually don&#39;t survive here.&quot;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Abdul Muyeed, director general of DAE, said the summer varieties BARI-5 and BARI-3 will play a big role in making the country self-sufficient in onion.&nbsp; Besides, the BADC will be directed to produce adequate seeds of summer onion.</p>\r\n\r\n<p>When asked about the seed crisis issue, agriculture minister Abdur Razzaque said, &quot;We will ensure supply of quality seeds to farmers before the season starts. I think farmers will show more interest in onion cultivation in the coming season.&quot;</p>\r\n', ''),
(24, '2020-09-25 03:44:51', 'Covid-19 deaths in Bangladesh nearing 5,000', 'Salman', 'COVID-19', 'images/covid_web_21.jpg', '<h2><em>40 die, 1,705 infected, 2,152 recover in 24 hours</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Forty people have died and 1,705 new Covid-19 infections were recorded in the country in the last 24 hours, according to a press release issued by the Directorate General of Health Services (DGHS).</strong></p>\r\n\r\n<p>The total number of deaths has now reached 4,979 and the death rate stands at 1.42 percent. The total number of people infected has now risen to 3,50,621, according to the briefing.</p>\r\n\r\n<p>The current positivity rate is 13.06 percent and the total positivity rate stands at 19.11 percent.</p>\r\n\r\n<p>Bangladesh is currently 15th in the list of worst-affected countries in the world in terms of number of cases.</p>\r\n\r\n<p>The position is one step ahead of Saudi Arabia and one step behind United Kingdom, according to worldometers.info.</p>\r\n\r\n<p>A total of 13,053 samples were tested across the country in the last 24 hours. At least 2,152 Covid-19 patients have recovered in the last 24 hours.</p>\r\n\r\n<p>The total number of recoveries stands at 2,58,717 and the recovery rate at 73.79 percent.</p>\r\n\r\n<p>Among the deceased 27 were male and 13 were female while one was between 0-10 years old, two within 21-30, three were within 31-40, four between 41-50, 10 between 51-60 and 20 were above 60 years old.</p>\r\n\r\n<p>&nbsp;</p>\r\n', ''),
(25, '2020-09-25 04:01:59', 'Popcorn Highlights', 'Juthi', 'Showbiz', 'images/devil.jpg', '<h2><em>Here are some binge worthy movie and series you can spend your time watching while you stay at home social distancing, keeping yourself, as well as others, safe.</em></h2>\r\n\r\n<p><strong>The Devil All the Time&nbsp;</strong></p>\r\n\r\n<p><em>The Devil All the Time</em>&nbsp;is a psychological thriller film on&nbsp;<em>Netflix</em>. It has been based on the eponymous novel by Donald Ray Pollock, directed by Antonio Campos, and produced by Jake Gyllenhaal and Randall Poster. The film stars Tom Holland, Sebastian Stan, Eliza Scanlen, Mia Wasikowska and Robert Pattinson, among many others. It focuses on a man who is committed to protecting the people he loves from the brutal environment they live in. It was released on September 16, 2020.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/very_big_2/public/news/images/julie.jpg?itok=CqEmkAZt\" /></p>\r\n\r\n<p><strong>Julie and the Phantoms</strong></p>\r\n\r\n<p><em>Julie and the Phantoms&nbsp;</em>is a comedy and fantasy television series on&nbsp;<em>Netflix</em>. It has been created by Dan Cross and David Hoge, produced under the banner of&nbsp;<em>Brightlight Pictures</em>&nbsp;alongside others, and stars Madison Reyes, Charlie Gillespie and Owen Joyner, among others. It follows the journey of a teenage girl with a passion for music, and a dead band, as they help and guide each other. It was released on September 10, 2020.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/very_big_2/public/news/images/love_5.jpg?itok=dWteLTqk\" /></p>\r\n\r\n<p><strong>Was It Love?&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Was It Love?</em>&nbsp;is a South Korean drama romance television series on&nbsp;<em>Netflix</em>. It has been directed by Kim Do-hyung, produced under the banner of&nbsp;<em>JTBC Studios</em>&nbsp;and&nbsp;<em>Gill Pictures</em>, and stars Song Ji-hyo, Son Ho-jun and Song Jong-ho, among others. The story revolves around a single mother and her journey through love after a long fourteen years hiatus, and four men who enter her life. It was released on July 8, 2020.</p>\r\n\r\n<p><img alt=\"\" src=\"https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/very_big_2/public/news/images/ratched.jpg?itok=4QVii6MM\" /></p>\r\n\r\n<p><strong>Ratched&nbsp;</strong></p>\r\n\r\n<p><em>Ratched</em>&nbsp;is a psychological thriller drama web television series on&nbsp;<em>Netflix</em>. It has been based on the eponymous character from the novel&nbsp;<em>One Flew Over the Cuckoo&#39;s Nest</em>&nbsp;by Ken Kesey, and acts as its prequel. The series was created by Evan Romansky, produced by Paul Zaentz, among others, with Sarah Paulson in the lead. It tells the story of a nurse working at a mental institution, and shows her dark side and actions towards her patients. It premiered on September 18, 2020.</p>\r\n\r\n<p>&nbsp;</p>\r\n', ''),
(26, '2020-09-25 04:02:08', '‘A different world’', 'Juthi', 'Sports', 'images/tigers-player.jpg', '<h2><em>Tigers adjusting to life inside bio-secure bubbles.</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The coronavirus pandemic has widened the world&#39;s vocabulary by driving words such as lockdown, quarantine and isolation into daily use. The latest buzzword is bio-secure bubble.</p>\r\n\r\n<p>The England and Wales Cricket Board first introduced the term as they prepared to host the West Indies in what would be the first cricket series following the outbreak of the coronavirus earlier this year.</p>\r\n\r\n<p>The ECB successfully managed the complex process of creating a bio-secure bubble, which is basically a bio-secure environment that is designed to prevent the spread of the coronavirus. The &#39;bubbles&#39; are sealed off from the outside world, with players, staff and officials on the inside.</p>\r\n\r\n<p>Normally bio-secure bubbles aim to minimise the risk of transmission of the virus from one person to another while training, staying together or having meals during ongoing tournaments and training camps and it is prescribed by the International Cricket Council.&nbsp;</p>\r\n\r\n<p>With the Bangladesh aiming to return to cricket through the upcoming Sri Lanka tour, the Bangladesh Cricket Board (BCB) has already started a residential camp for its 27-member preliminary squad by creating a bio-secure bubble with frequent coronavirus testing.</p>\r\n\r\n<p>It can still be hard for the general public to understand what goes on inside the bubble, so The Daily Star tried to get insights on the experience from Bangladeshi cricketers who have been inside a bubble at a city hotel since September 20, when the BCB initiated the residential camp.&nbsp;</p>\r\n\r\n<p>&quot;It&#39;s like a different world. The first and the most important thing about the bubble is that we are not allowed to go outside the hotel premises. We are not allowed to even have any food from outside, not even chocolates or chips. We have a dedicated lift for players,&quot; a national cricketer requesting anonymity said.</p>\r\n\r\n<p>&quot;We have our meals in the hotel and when we are at the restaurant, there is no one from outside. Even the hotel staff who serve us maintain social distancing. After having breakfast, I go to gym or swimming in a restricted environment. When we go to the ground, we have to take alternative exit routes to avoid crowds.&quot;</p>\r\n\r\n<p>According to many cricketers, it was a challenge initially but one that they later adjusted with.</p>\r\n\r\n<p>Although the upcoming tour of Sri Lanka is still under dark clouds as the Sri Lanka Cricket officials are yet to provide revised health protocols for the tour, it is understood that the Tigers -- who previously planned to travel to the island nation on September 27 -- are now expected to delay.</p>\r\n\r\n<p>It was learned that SLC officials had tried to relax the mandatory 14-day quarantine for the visitors, but government health authorities led by the Covid-19 task force of Sri Lanka were unwilling.</p>\r\n\r\n<p>If that is the case, then the tour of Sri Lanka could well get postponed. But the Bangladeshi cricketers who got a taste of living in a bio-secure environment will surely help the Tigers to cope with similar situations in the coming days as we have already stepped into a new normal.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', ''),
(27, '2020-09-25 04:02:19', 'BB caps interest rate on credit card loans', 'Juthi', 'Business', 'images/central-bank_2.jpg', '<p>The central bank yesterday capped the interest rate on credit card loans at 20 per cent in a relief for clients as they would get rid of the burden of higher interest amid the pandemic.</p>\r\n\r\n<p>Banks charge between 25 and 27 per cent interest on credit card loans, way higher than the 9 per cent interest rate ceiling applicable for all loan products in Bangladesh.</p>\r\n\r\n<p>As per a previous instruction of the central bank, banks were allowed not to impose more than 5 per cent on top of the highest interest rate of a consumer loan for the amount of the outstanding loan of a credit card. The provision helped banks enjoy more than 25 per cent interest against their disbursed loans through credit cards. In April, the central bank had imposed the interest rate ceiling of 9 per cent for all loan products except the credit cards.</p>\r\n\r\n<p>Had the Bangladesh Bank followed the previous provision, lenders would not be permitted to levy a maximum of 14 per cent interest on credit cards, a central bank official said.</p>\r\n\r\n<p>&quot;The latest ceiling on the interest rates will give a relief to clients,&quot; he said.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The central bank also found some irregularities committed by banks, which are impairing the interest of cardholders.</p>\r\n\r\n<p>The Guidelines on Credit Operations of Banks issued in May 2017 stipulated that a client is allowed to withdraw a maximum 50 per cent in the form of cash against their credit card limit set by banks.</p>\r\n\r\n<p>But lenders have disbursed loans in many forms ignoring the ceiling, thus widening the credit risk for banks, according to a central bank notice yesterday.</p>\r\n\r\n<p>Loan disbursement through credit cards is highly unsecured and collateral-free, so banks should take extra cautionary measures while giving funds by way of using the tool, the BB said.</p>\r\n\r\n<p>Besides, clients have to pay a higher interest rate against loans, which is harming the interest of the customers. The central bank yesterday instructed lenders to follow the 50 per cent cash withdrawal ceiling.</p>\r\n\r\n<p>Some lenders also impose interest rate against the overdue loans of clients from the beginning of disbursement in another violation of the guidelines. Interest can be charged when the loan becomes overdue, the BB said.</p>\r\n\r\n<p>In some cases, banks impose late payment fees several times against the defaulted clients, contradicting the guidelines. Lenders have been asked to realise the late payment fee for just once.</p>\r\n\r\n<p>The new directives would be effective from October 1.</p>\r\n\r\n<p>Speaking to The Daily Star, heads of the card at three banks expressed frustration at the central bank&#39;s initiative, arguing that this will not bring any good for the country&#39;s credit card market.</p>\r\n\r\n<p>The credit card operation of banks is highly costly. Besides, a large number of employees have been recruited to run the operations.</p>\r\n\r\n<p>Banks have to offer various discounts, buy-one-get-one offers and lounge facilities at airports to attract and retain customers. So, their cost of operation is high in this business.</p>\r\n\r\n<p>So, the latest instructions will create an impediment to offering such discounts as profits from the credit card operations will be on the decline in the coming days, they said.</p>\r\n\r\n<p>The bankers say the central bank had excluded credit card from the 9 percent interest rate ceiling and it was a good thing for the growing credit card market.</p>\r\n\r\n<p>Banks&#39; profit has already faced different</p>\r\n\r\n<p>no challenges because of the ongoing financial meltdown and the 9 percent interest rate cap.</p>\r\n\r\n<p>&quot;The latest initiative will give another blow to the income of banks,&quot; said one of them.</p>\r\n\r\n<p>&quot;20 percent interest rate is not sustainable for any bank,&quot; said an official of a payment-processing company.</p>\r\n\r\n<p>The interest rate on credit card loans is high across the world and it goes up to as high as 35 percent in some countries, the executive said.</p>\r\n\r\n<p>&quot;So, if the interest rate goes down, banks&#39; incomes would go down. As a result, banks would not be able to continue offering the same benefits to customers as they are giving now. This means customers also would not benefit from the interest rate cut.&quot;&nbsp;</p>\r\n\r\n<p>But the central bank official differed, saying clients are now reluctant to use credit cards because of a fall in purchasing power in the wake of ongoing the economic recession.</p>\r\n\r\n<p>So, the latest rate cut will encourage them to embrace the product that will surely give a boost to the credit card market, he said.</p>\r\n\r\n<p>In India, some banks charge as high as 47 per cent annualised interest rate on credit card loans, reported Indian business news website Moneycontrol in February.&nbsp;</p>\r\n\r\n<p>The median credit card interest rate for all credit cards in the Investopedia database currently stands at 19.49 per cent, based on average advertised rates across several hundred of the most popular card offers in the US.</p>\r\n\r\n<p>In July, credit cardholders spent Tk 1,252.4 crore in Bangladesh, the highest in six months and up 19.49 per cent year-on-year. Their spending stood at Tk 898 crore in June this year and Tk 1,048.1 crore in July last year, BB data showed.</p>\r\n\r\n<p>The number of credit cards in circulation stood at 1,597,748 in July, up 10.56 percent compared to 1,445,119 in the same month last year. The number stood at 1,593,697 in June this year.</p>\r\n\r\n<p>In Bangladesh, credit cards were launched in 1997, by Standard Chartered bank.</p>\r\n\r\n<p>The credit card segment is dominated by City Bank, Eastern Bank, Standard Chartered, and Brac Bank. Lanka-Bangla Finance dominates the domestic-only credit cards.&nbsp;</p>\r\n', ''),
(28, '2020-09-25 04:02:30', 'No fee on bank job seekers: BB', 'Juthi', 'Jobs', 'images/bb-logo-1_0.jpg', '<p>Bangladesh Bank has directed all banks not to take any fees in the form of pay order or bank draft from job applicants.</p>\r\n\r\n<p>It has been noticed that some banks have been taking fees from the applicants despite previous requests against taking any sort of fees, read a circular by the central bank which was sent to all the banks today.</p>\r\n\r\n<p>The central bank said it is very difficult for an unemployed youth to pay fees along with his job applications.</p>\r\n\r\n<p>A high official of BB said the central bank has now decided to ban the fees. He said the central bank will take punitive measures if it receives any complaint of taking bank fees.&nbsp;</p>\r\n', ''),
(29, '2020-09-25 04:02:36', 'The debate over Khaleda Zia’s parole', 'Juthi', 'Politics', 'images/op_1_70.jpg', '<p>Ever since the imprison-ment of BNP Chairperson Khaleda Zia, her party has systematically demanded her release. Recently, a possibility for her &quot;parole&quot; has come up in discussion, even amongst the leading members of the ruling Awami League. The high officials and lawyers of BNP are emphasising on the fact that &quot;parole&quot; is not equivalent to being discharged from prison. They are further stating that since the charges brought against Khaleda Zia are for political reasons, if the government wishes, it can grant bail to the BNP chairperson based on her medical condition. And if her bail petition is approved, then she will be sent to the UK for better treatment.&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>BNP Secretary General Mirza Fakhrul Islam Alamgir learnt of Khaleda Zia&#39;s condition from her family members, who were the only ones granted permission to meet with the former prime minister. The possibility of Khaleda Zia&#39;s release raises a number of issues. According to the law, does she have the opportunity to get bail? Is there a possibility of her being released on parole? If she is released on parole, will she be able to go abroad for treatment?</p>\r\n\r\n<p>First, let us look into the possibility of parole.</p>\r\n\r\n<p>There are no laws passed by parliament on parole. It is within the ambit of the Home Ministry. According to the policy of the ministry dated June 1, 2016, there is scope for a conditional temporary release. When someone close to a prisoner of a significant status or other classes passes away, a parole can be granted to them.</p>\r\n\r\n<p>The policy states that the time of the temporary release will not exceed 12 hours. However, in certain cases, if the government wants, the time period can be adjusted, but there is no specific allocation of the time frame. During the time, the prisoner must be constantly under observation by the police. According to the policy, when released on parole, the prisoner will be handed over to the police by the jail authorities and the police will hand over the prisoner back to the jail authorities within the designated time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Supreme court lawyer Arif Khan told&nbsp;<em>The Daily Star,&nbsp;</em>&quot;According to the policy, a person released on parole is not allowed to travel abroad, whether it be for medical purpose or otherwise. Moreover, whether a prisoner admits their guilt or not has nothing to do with the parole.&quot;</p>\r\n\r\n<p>&quot;Those released on parole do have the opportunity to travel abroad,&quot; said S M Rezaul Karim, former Awami League legal affairs secretary and currently the minister of Fisheries and Livestock. &quot;Anyone on parole will have to report to the Bangladesh embassy in the destination country. All the necessary details including their current address, the hospital they are visiting for treatment and other relevant information must be provided to the embassy.&quot;</p>\r\n\r\n<p>In 2008, Awami League&#39;s then Secretary General, Abdul Jalil was released on parole and he went to Singapore to receive treatment, though it created some controversy later as, according to parole regulations, this was not permissible.</p>\r\n\r\n<p>Now let us come to the question of bail.</p>\r\n\r\n<p>So far, there are 34 ongoing cases against Begum Khaleda Zia; she has already been sentenced for two of them. The two cases have been disposed of at the Appellate Division. Which means, the cases have ended. Since they have been disposed of, there is no scope of her getting bail in these two cases. The only way Khaleda Zia can get bail is for the ongoing cases. And even if she gets bail in all the ongoing cases, she cannot escape prison.</p>\r\n\r\n<p>Apart from getting out on &quot;parole&quot; there is a scope to seek presidential clemency. According to Article 49 of the Constitution, if someone admits one&#39;s guilt, such clemency can be given. The president has the power to reject the plea for clemency. He can also pardon all the sentences or reduce the duration of the sentence. He can also suspend the sentence for a specific time and arrange for release from prison.</p>\r\n\r\n<p>The most crucial question to be considered is, what exactly does Khaleda Zia want? A few months ago, BNP MPs met with her in jail. One of these MPs told<em>&nbsp;The Daily Star&nbsp;</em>that when he had broached the subject of taking up the issue of parole or a way for her release, with the government, Khaleda Zia said &quot;there&#39;s no use&quot;, and asked him not to enter into such discussions. According to the MP, Khaleda Zia&#39;s health had seriously deteriorated, so much so that she couldn&#39;t even stand by herself.</p>\r\n\r\n<p>A few days ago, Khaldea Zia&#39;s sister and a few other relatives had visited her in jail. A senior BNP leader told&nbsp;<em>The Daily Star&nbsp;</em>that after the visit, Khaleda Zia&#39;s relatives reported that her health was in the worst possible state; both her arms had become bent with stiffness; she could not eat properly. According to Khaleda&#39;s relatives, this was the first time she had resigned herself to the idea of bail or release on parole, remarking: &quot;Do whatever you think best.&quot; It seemed to them that she was at the end of her life and that was why she made that remark. But one thing is for sure&mdash;under no circumstances will Khaleda Zia seek presidential clemency, as according to her, she has not committed any crime.</p>\r\n\r\n<p>According to a source, BNP as a party will not appeal for parole. Only if her release on parole is guaranteed will the family appeal for it. Then BNP can claim that the family, on humanitarian grounds, had requested parole. The appeal would have nothing to do with the party.</p>\r\n\r\n<p>Almost all BNP leaders believe that her health is more important than anything else and appealing for release on parole will not taint her &quot;no compromise&quot; image. BNP leaders think that even if the government tries to propagate such a notion, the people of this country will not believe it. If Khaleda Zia is released on parole on humanitarian grounds, it will be a positive development for BNP&#39;s politics. Yet they cannot shed the apprehension of what the head of the government is thinking. Despite talks between Obaidul Quader and Mirza Fakhrul, this unease has not been alleviated. It is not the court on which Khaleda Zia&#39;s release depends; it depends on the decision of the government. And this decision lies mainly with the head of the government.</p>\r\n\r\n<p>&nbsp;</p>\r\n', ''),
(31, '2020-09-30 18:53:52', 'School closure to be extended, decision on HSC exams next week: Dipu Moni', 'Mustafiz', 'Bangladesh', 'images/dipu_moni-1wb.jpg', '<p><strong>School closure due to the coronavirus pandemic will be extended and decisions regarding holding Higher Secondary Certificate (HSC) and its equivalent examinations will be announced next week -- Monday or Tuesday.</strong></p>\r\n\r\n<p>Education Minister Dipu Moni said this while attending a views exchange programme with reporters today.</p>\r\n\r\n<p>She also said that HSC examinees will be informed about the date of exams at least four weeks before the exams begin.</p>\r\n\r\n<p>&quot;Situation is still not favourable for reopening of schools, so school closure will be extended. We will let you know the date and duration soon,&quot; Dipu Moni said during a virtual programme.</p>\r\n\r\n<p>On March 17, the government closed the schools to contain the spread of coronavirus. The closure was extended till October 3. The long closure has led to the cancellation of exams and left academic calendars in disarray.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;<strong>We will announce our </strong>specific plans regarding holding HSC exams on Monday or T<em>uesday,&quot; Dipu Moni said</em>.</p>\r\n\r\n<p>HSC and equivalent exams slated for April 1 were postponed on March 22 in fear of coronavirus spread.</p>\r\n\r\n<p>The education minister said that earlier they were considering giving students 15 days before holding exams; now they are considering giving them four</p>\r\n', ''),
(32, '2020-10-01 15:17:30', 'Closure of schools, colleges, universities extended till Oct 31', 'Juthi', 'Bangladesh', 'images/dressed-in-school-uniform_0.jpg', '<p><strong>The closure of all educational institutions in the country due to the Covid-19 outbreak has been extended till October 31.</strong></p>\r\n\r\n<p>A notice issued by the Education Ministry today and signed by Mohammad Abul Khair, public relations officer of the ministry, confirmed the extension.</p>\r\n\r\n<blockquote>\r\n<p>Education Minister Dipu Moni yesterday said that the situation is still not favourable for reopening schools therefore the closure shall be extended. Earlier the closure was extended till October 3.</p>\r\n</blockquote>\r\n\r\n<p>The decision on holding the postponed Higher Secondary Certificate (HSC) and its equivalent examinations will be announced on Monday or Tuesday.</p>\r\n\r\n<p>Dipu Moni also said the mechanism for holding annual exams for class-VI, VII and others at schools will be declared soon.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>On March 17, the government closed the schools to contain the spread of Covid-19. Educational activities of about four crore students are being hampered due to the crisis. This year&#39;s Primary Education Completion and its equivalent exams and Junior School Certificate and its equivalent exams were cancelled.</p>\r\n\r\n<p>The government started tele-education through Sangsad TV for secondary-level students on March 29, for primary-level students on April 7, and for technical and madrassa students on April 19 so that students can make up for some of their losses due to closure of the educational institutions.</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `email`, `gender`, `password`, `address`) VALUES
('2020-09-24 02:56:01', 'Rajib ', 'rajib104.ewubd@gmail.com', 'Male', '123', 'Banosree , Dhaka'),
('2020-09-26 23:57:33', 'Rajib', 'rajib@gmail.com', 'Male', '123', 'Banosree , Dhaka'),
('2020-09-30 18:55:35', 'Mustafiz', 'Mustafiz@gmail.com', 'Male', '123', 'Banosree , Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activearticle`
--
ALTER TABLE `activearticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD UNIQUE KEY `mail` (`email`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainportal`
--
ALTER TABLE `mainportal`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activearticle`
--
ALTER TABLE `activearticle`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mainportal`
--
ALTER TABLE `mainportal`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
