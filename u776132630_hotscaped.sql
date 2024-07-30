-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2024 at 05:38 AM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u776132630_hotscaped`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `Is_Active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_name`, `Is_Active`) VALUES
(1, '4314b868f4659e797dbede8ccadd650c.png', 0),
(2, 'aa789e5c3aaa8ed8c3d67833569cf404.png', 0),
(3, 'Screenshot (6).png', 0),
(4, 'aa789e5c3aaa8ed8c3d67833569cf404.png', 0),
(5, 'Screenshot (3).png', 0),
(12, 'logo-one.png', 1),
(14, 'shipmanagment.jpg', 1),
(16, 'img1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `image`, `title`, `description`, `pdf`, `Is_Active`) VALUES
(1, 'Hardox plate supplies-Yash International.jpg', 'Hardox plate supplies - Yash Internationals', 'These plates are highly abrasion-resistant and known for their exceptional strength, durability, and toughness. Hardox Plate is used in various industries like agriculture, mining, construction, energy, and metalworking due to its superior properties compared to traditional AR steel plates. The impact of&nbsp;Hardox&nbsp;plates in the industry is significant as they offer greater strength, durability, and precision, allowing equipment to withstand heavy wear, impacts, and abrasion without cracking, denting, or warping.&nbsp;<a href=\"https://yashinternationals.in/Hardox-Plate-Suppliers-in-Mumbai.html\">Hardox&nbsp;plates</a> contribute to improved equipment performance, extended service life, and increased efficiency by reducing maintenance needs, protecting machinery, and enhancing productivity. Additionally,&nbsp;Hardox&nbsp;plates are easy to repair and maintain, saving time and money in the long run. Their machinability, formability, and finish make them ideal for creating lightweight components that resist wear and abrasion, leading to overall weight savings and enhanced equipment performance.&nbsp;Hardox&nbsp;plates have revolutionized various industries by optimizing equipment performance, reducing maintenance costs, and improving overall efficiency.', '', 1),
(2, 'S690 plate supplies-Yash International.jpg', 'S690 plate supplies - Yash Internationals', 'S690 plates, specifically S690QL and S690 QL, are high-strength structural steel plates known for their exceptional properties like high yield strength, toughness, and wear resistance. These plates are used in various industries such as machine building, lifting equipment, heavy transportation, steel constructions, and more. The impact of <a href=\"https://yashinternationals.in/S690-plate-supplies-in-india.html\">S690 plates</a> in the industry is significant as they enable the creation of leaner structures with increased payload capacity and energy efficiency. Due to their high strength nature, using S690 plates can lead to the development of lighter designs that maintain high payloads. S690 plates are also known for their excellent welding and machining properties, simplifying production and repair work. Their ability to resist cracks, withstand heavy impacts, and provide optimal reliability makes them ideal for applications requiring durability and strength. Overall, S690 plates contribute to improved equipment performance, extended service life, and cost savings by reducing maintenance needs and enhancing productivity in various industrial sectors.', '', 1),
(4, 'Stainless Steel Plates Suppliers-Yash International.jpg', 'Stainless steel plates Suppliers - Yash Internationals', 'Stainless steel plates are essential components used in various industries due to their corrosion resistance, durability, and aesthetic appeal. These plates are available in different grades like 304, 316, and 430, each offering specific properties suitable for diverse applications.<br><span class=\"\" style=\"border: 0px solid rgb(229, 231, 235); scrollbar-color: auto; scrollbar-width: auto; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-top: 0px;\">Supplier like, <a href=\"https://yashinternationals.in/\">Yash Internationals</a> provide a wide range of stainless-steel plates in different sizes and finishes to meet the needs of industries such as construction, manufacturing, and transportation. These suppliers offer customization options, high-quality products, and reliable services to ensure the availability of <a href=\"https://yashinternationals.in/Stainless-Steel-Sheets-Plates-Supplier-in-Mumbai.html\">stainless steel plates</a> that adhere to industry standards and customer requirements.</span><div><br></div>', '', 1),
(5, 'Boiler quality plates Suppliers-Yash International.jpg', ' Boiler quality plates Suppliers - Yash International', '<p><a href=\"https://yashinternationals.in/Boiler-Quality-Plates-Supplier-in-Mumbai-India.html\">Boiler quality plates</a> are steel plates specifically designed for use in welded pressure vessels where notch durability is crucial. These plates are used in applications like boilers, calorifiers, columns, pressure vessels, and more. They are known for their high strength, toughness, ductility, and resistance to corrosion, making them ideal for environments with high pressure and temperature fluids. Suppliers like Jaydeep Steels, Priminox Overseas, RPF Pipes &amp; Fittings, and VK Industrial Corporation Limited offer a variety of boiler quality plates in different grades and sizes to meet industry standards and specific project requirements. <a href=\"https://yashinternationals.in/\">Yash Internationals</a> provide high-quality products, customization options, and reliable services to cater to the diverse needs of industries requiring boiler quality plates<br></p>', '', 1),
(6, 'Alloy steel plates Suppliers-Yash International.jpg', 'Alloy steel plates Suppliers - Yash Internationals', '<span class=\"\" style=\"border: 0px solid rgb(229, 231, 235); scrollbar-color: auto; scrollbar-width: auto; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-top: 0px;\"><a href=\"https://yashinternationals.in/Alloy-steel-plates-Supplier-in-mumbai.html\">Alloy steel plates</a> are a type of steel that is alloyed with various elements like nickel, chromium, vanadium, and others to enhance its properties such as strength, wear resistance, and corrosion resistance. These alloying elements are added in specific proportions to create steel with unique characteristics not found in regular carbon steel. Alloy steel plates are often subjected to thermal processing like annealing or quenching and tempering to optimize their properties. The addition of alloying elements increases the hardenability of the steel, providing improved fatigue strength, wear resistance, and toughness. Alloy steel, like the 4140 alloys, offers a superior strength-to-weight ratio compared to standard steel grades, making it ideal for applications requiring high strength and hardness.</span>', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', 1, '2021-05-26 13:00:00', '2024-05-03 09:15:21'),
(5, 'yashinternational', '2d1718ea6e22a987d31926439e57702b', 'info@yashinternationals.in', 1, '2024-03-20 10:43:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcareer`
--

CREATE TABLE `tblcareer` (
  `id` int(11) NOT NULL,
  `designation` text DEFAULT NULL,
  `Qualification` varchar(200) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `PostDetails` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcareer`
--

INSERT INTO `tblcareer` (`id`, `designation`, `Qualification`, `Experience`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostImage`, `postedBy`, `lastUpdatedBy`) VALUES
(1, 'adminhellp', 'hello', '123', 'dfmdsklfghjhr', '2024-02-24 10:43:09', '2024-02-26 04:55:34', 1, 'fitting3.png', 'admin', NULL),
(2, 'admin', 'hello', '123', '\r\ndfbgvrtfhnn \r\n\r\n', '2024-02-24 10:45:06', NULL, 1, 'crewing.jpg', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 'hello', 'cfdsgvfdfbv', '2024-02-26 05:05:39', '2024-03-27 07:07:01', 0),
(2, 'hello', 'cfdsgvfdfbv', '2024-02-26 05:05:39', '2024-03-27 07:07:02', 0),
(3, 'adminadmin', 'vcdv dvs', '2024-02-26 05:07:30', '2024-03-27 07:07:04', 0),
(4, 'monu', 'rtfghftrghj', '2024-02-26 05:25:48', '2024-03-27 07:07:08', 0),
(5, 'mumbai', 'mumbai maharastra', '2024-02-26 12:06:28', '2024-02-26 12:09:45', 0),
(6, 'admin12345', 'admin123456789', '2024-02-26 12:08:20', '2024-03-27 07:07:18', 0),
(7, 'Blog', 'Blog Section', '2024-03-27 07:08:28', NULL, 1),
(8, 'Yash International', 'Blog Post by Yash Internationals for SEO', '2024-03-27 07:08:45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` int(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblemp`
--

CREATE TABLE `tblemp` (
  `id` int(11) NOT NULL,
  `Empname` mediumtext DEFAULT NULL,
  `Empdesignation` varchar(200) NOT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` varchar(255) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext NOT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int(11) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `viewCounter`, `postedBy`, `lastUpdatedBy`) VALUES
(13, 'Revolutionizing Steel Production: The Role of Robotic Automation in the Industry', 8, NULL, '<h3><font color=\"#003163\">Introduction</font></h3><p>In the dynamic landscape of steel production, innovation has always been a driving force, propelling the industry towards greater efficiency and productivity. One of the most transformative innovations in recent years is the integration of robotic automation into steel manufacturing processes. This blog explores the pivotal role of robotic automation in revolutionizing steel production, reshaping traditional manufacturing practices, and driving the industry towards a more efficient and technologically advanced future. Additionally, we will delve into the contribution of <a href=\"https://yashinternationals.in/\">Yash Internationals</a>, a leading supplier of steel plates and other steel products, in supporting this evolution with their commitment to quality and reliability.</p><h3><font color=\"#003163\">The Evolution of Robotic Automation in Steel Production</font></h3><p>Robotic automation has emerged as a game-changer in the steel industry, offering a host of benefits that redefine the manufacturing landscape. These advanced robotic systems are designed to handle a wide array of tasks, from material handling and welding to quality control and maintenance. By incorporating robotics into steel production processes, manufacturers can streamline operations, enhance precision, and optimize overall efficiency. The evolution of robotic automation in steel production signifies a shift towards a more agile and responsive manufacturing environment capable of meeting the demands of a rapidly evolving market.</p><h3><font color=\"#003163\">Benefits of Robotic Automation in Steel Production</font></h3><p>The adoption of robotic automation in steel production brings a multitude of advantages to manufacturers. One of the key benefits is the improvement in precision and accuracy, leading to higher quality end products. Robots excel at performing repetitive tasks with consistent precision, minimizing variations and ensuring uniformity in the manufacturing process. Furthermore, robotic automation enhances workplace safety by reducing human exposure to hazardous environments and tasks, thereby improving employee well-being and reducing the risk of workplace accidents.</p><h3><font color=\"#003163\">Efficiency and Productivity Gains</font></h3><p>Robotic automation in steel production drives significant efficiency and productivity gains for manufacturers. Robots can operate continuously without the need for breaks, resulting in uninterrupted production cycles and increased output. The speed and agility of robotic systems enable faster turnaround times, reducing lead times and enhancing overall operational efficiency. By automating repetitive and labor-intensive tasks, manufacturers can reallocate human resources to more strategic roles, fostering innovation and growth within the organization.</p><h3><font color=\"#003163\">Enhanced Quality Control and Maintenance</font></h3><p>Quality control is a critical aspect of steel production, ensuring that end products meet stringent industry standards. Robotic automation plays a vital role in enhancing quality control processes by conducting precise inspections and measurements throughout the production cycle. Robots can detect defects, deviations, and inconsistencies in real-time, enabling manufacturers to address issues promptly and maintain product quality. Moreover, robotic automation facilitates predictive maintenance, allowing manufacturers to proactively identify and address equipment issues before they escalate, minimizing downtime and optimizing operational efficiency.</p><h3><font color=\"#003163\">Yash Internationals: A Leading Supplier of Steel Products</font></h3><p>Yash Internationals, a prominent <a href=\"https://yashinternationals.in/Stainless-Steel-Sheets-Plates-Supplier-in-Mumbai.html\">steel plates supplier</a>&nbsp;and other steel products, plays a crucial role in supporting the evolution of steel production through their commitment to quality and reliability. With over 30 years of experience, Yash Internationals has established itself as a trusted partner for businesses seeking high-quality steel materials. Their range of products, including steel plates, pipes, tubes, and round bars, caters to diverse industrial needs, ensuring certified quality standards and customer satisfaction. Yash Internationals\' dedication to integrity, honesty, and excellence in service has positioned them as a leading supplier in the steel industry, contributing to the advancement of steel production practices.</p><h3><font color=\"#003163\">Conclusion</font></h3><p>In conclusion, robotic automation is revolutionizing steel production by enhancing precision, efficiency, and safety in manufacturing processes. The integration of robotics into steel production operations offers a myriad of benefits, from improved quality control and maintenance to increased productivity and operational efficiency. Yash Internationals, as a leading supplier of steel products, plays a vital role in supporting this evolution by providing high-quality materials and upholding certified quality standards. As the steel industry continues to evolve, robotic automation and reliable suppliers like Yash Internationals will drive innovation and competitiveness within the sector, shaping a future of advanced and efficient steel production practices.</p>', '2024-03-27 08:05:10', '2024-03-28 05:28:15', 1, 'Revolutionizing-Steel-Production:-The-Role-of-Robotic-Automation-in-the-Industry', '298a885216af787f6a5f122449ba736f.jpg', NULL, 'yashinternational', 'yashinternational');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 4, 'hii', 'thytt', '2024-02-26 05:26:00', '2024-02-26 05:31:00', 0),
(4, 3, 'monu monudfvfd', 'ghfghfgjh', '2024-02-26 05:31:21', NULL, 1),
(5, 4, 'gfnfgjnfg', 'cbcghngtt', '2024-02-26 05:31:59', NULL, 1),
(6, 3, 'dvfdsvbfsbadnmmmmmmmmmmm', 'defsdfgsdvgfsd', '2024-02-26 11:45:35', '2024-02-26 12:12:29', 1),
(7, 6, 'testing1234566977', 'cdsafvdsfgvsdvgsdfvsdfvgsdfvsdfasdf', '2024-02-26 12:11:31', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AdminUserName` (`AdminUserName`);

--
-- Indexes for table `tblcareer`
--
ALTER TABLE `tblcareer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `tblemp`
--
ALTER TABLE `tblemp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postcatid` (`CategoryId`),
  ADD KEY `postsucatid` (`SubCategoryId`),
  ADD KEY `subadmin` (`postedBy`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`),
  ADD KEY `catid` (`CategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcareer`
--
ALTER TABLE `tblcareer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemp`
--
ALTER TABLE `tblemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD CONSTRAINT `pid` FOREIGN KEY (`postId`) REFERENCES `tblposts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD CONSTRAINT `postcatid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `postsucatid` FOREIGN KEY (`SubCategoryId`) REFERENCES `tblsubcategory` (`SubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subadmin` FOREIGN KEY (`postedBy`) REFERENCES `tbladmin` (`AdminUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `catid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
