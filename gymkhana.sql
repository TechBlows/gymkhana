

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog`
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) NOT NULL,
  `blog_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blog_comment` varchar(11) NOT NULL,
  `blog_desc` varchar(1000) NOT NULL,
  `blog_photo` varchar(10000) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('1', '45 Minimal Worksspace Rooms for Web Savvys', '2016-11-18 21:26:11', '12', 'Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '1479486550103.jpg');
INSERT INTO `blog` VALUES ('2', '45 Minimal Worksspace Rooms for Web Savvys', '2016-11-18 21:26:31', '21', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '1479486592171.jpg');
INSERT INTO `blog` VALUES ('3', '45 Minimal Worksspace Rooms for Web Savvys', '2016-11-18 21:26:32', '21', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '1479487063476.jpg');

-- ----------------------------
-- Table structure for `class`
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_types` varchar(255) NOT NULL,
  `class_no` varchar(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', 'Cardio', '12');
INSERT INTO `class` VALUES ('2', 'Swimming', '10');
INSERT INTO `class` VALUES ('3', 'Yoga', '10');
INSERT INTO `class` VALUES ('4', 'Aerobics', '20');
INSERT INTO `class` VALUES ('5', 'Zumba', '10');
INSERT INTO `class` VALUES ('6', 'Massage', '5');
INSERT INTO `class` VALUES ('7', 'Body Building', '10');

-- ----------------------------
-- Table structure for `client`
-- ----------------------------
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_net` varchar(100) NOT NULL,
  `client_photo` varchar(10000) NOT NULL,
  `client_message` varchar(1000) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of client
-- ----------------------------
INSERT INTO `client` VALUES ('1', 'Mahesh Sharma', 'Facebook', '1479566087062.jpg', 'Gymkhana Changed my lifestyle from bulky body to a great figure and make me appreciate by my girl.');
INSERT INTO `client` VALUES ('2', 'Nishma Ghimere', 'Twitter', '1479566100602.jpg', 'Gymkhana Changed my lifestyle from bulky body to a great figure and make me appreciate by my boy.');

-- ----------------------------
-- Table structure for `content`
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `content_id` int(10) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(100) NOT NULL,
  `content_description` varchar(1000) NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('1', 'Weight Lifting', 'Want to take up a strength or weight-lifting program, but don\'t know where to start?  Try weight lifting to see changes within month.');
INSERT INTO `content` VALUES ('2', 'Running', 'Running promotes a healthy quality of life with improvements in the metabolic response, to name a few of its many benefits. ');
INSERT INTO `content` VALUES ('3', 'Yoga', 'Browse our extensive yoga pose library, with a collection of basic poses of seated and standing poses, twists, and bandha techniques.');
INSERT INTO `content` VALUES ('4', 'Karate', 'Karate is all time favorite Martial Arts of modern world. We make physical contacts with designed rules to score points and win the bout. ');


-- ----------------------------
-- Table structure for `expert`
-- ----------------------------
DROP TABLE IF EXISTS `expert`;
CREATE TABLE `expert` (
  `expert_id` int(11) NOT NULL AUTO_INCREMENT,
  `expert_name` varchar(100) NOT NULL,
  `expertise` varchar(100) NOT NULL,
  `expert_photo` varchar(10000) NOT NULL,
  PRIMARY KEY (`expert_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of expert
-- ----------------------------
INSERT INTO `expert` VALUES ('2', 'Arnold Smith', 'Body Building Expert', '1479451401657.jpg');
INSERT INTO `expert` VALUES ('3', 'Rachel Sheely', 'Yoga Expert', '1479451417863.jpg');
INSERT INTO `expert` VALUES ('4', 'Michel Obama', 'Karate', '1479451431178.jpg');

-- ----------------------------
-- Table structure for `gallery`
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_photo` varchar(10000) NOT NULL,
  `photo_title` varchar(100) NOT NULL,
  `photo_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES ('1', '1479552758731.jpg', 'Body Building', 'Photo 1');
INSERT INTO `gallery` VALUES ('2', '1479552775642.jpg', 'Weight Lifting', 'Photo 2');
INSERT INTO `gallery` VALUES ('3', '1479552800083.jpg', 'Skipping', 'Photo 3');
INSERT INTO `gallery` VALUES ('4', '1479552879871.jpg', 'Sun Set', 'Photo 4');

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('4', 'Janine ', 'Labrune', '40.67.8555', '67, rue des Cinquante Otages', 'Nantes', 'France');
INSERT INTO `members` VALUES ('5', 'Jonas ', 'Bergulfsen', '07-98 9555', 'Erling Skakkes gate 78', 'Stavern', 'Norway');
INSERT INTO `members` VALUES ('6', 'Susan', 'Nelson', '4155551450', '5677 Strong St.', 'San Rafael', 'USA');
INSERT INTO `members` VALUES ('7', 'Zbyszek ', 'Piestrzeniewicz', '(26) 642-7555', 'ul. Filtrowa 68', 'Warszawa', 'Poland');
INSERT INTO `members` VALUES ('8', 'Roland', 'Keitel', '+49 69 66 90 2555', 'Lyonerstr. 34', 'Frankfurt', 'Germany');
INSERT INTO `members` VALUES ('9', 'Julie', 'Murphy', '6505555787', '5557 North Pendale Street', 'San Francisco', 'USA');
INSERT INTO `members` VALUES ('10', 'Kwai', 'Lee', '2125557818', '897 Long Airport Avenue', 'NYC', 'USA');
INSERT INTO `members` VALUES ('11', 'Diego ', 'Freyre', '(91) 555 94 44', 'C/ Moralzarzal, 86', 'Madrid', 'Spain');
INSERT INTO `members` VALUES ('12', 'Christina ', 'Berglund', '0921-12 3555', 'Berguvsvägen  8', 'Luleå', 'Sweden');
INSERT INTO `members` VALUES ('13', 'Jytte ', 'Petersen', '31 12 3555', 'Vinbæltet 34', 'Kobenhavn', 'Denmark');
INSERT INTO `members` VALUES ('14', 'Mary ', 'Saveley', '78.32.5555', '2, rue du Commerce', 'Lyon', 'France');
INSERT INTO `members` VALUES ('15', 'Eric', 'Natividad', '+65 221 7555', 'Bronz Sok.', 'Singapore', 'Singapore');
INSERT INTO `members` VALUES ('16', 'Jeff', 'Young', '2125557413', '4092 Furth Circle', 'NYC', 'USA');
INSERT INTO `members` VALUES ('17', 'Kelvin', 'Leong', '2155551555', '7586 Pompton St.', 'Allentown', 'USA');
INSERT INTO `members` VALUES ('18', 'Juri', 'Hashimoto', '6505556809', '9408 Furth Circle', 'Burlingame', 'USA');
INSERT INTO `members` VALUES ('19', 'Wendy', 'Victorino', '+65 224 1555', '106 Linden Road Sandown', 'Singapore', 'Singapore');
INSERT INTO `members` VALUES ('20', 'Veysel', 'Oeztan', '+47 2267 3215', 'Brehmen St. 121', 'Bergen', 'Norway  ');
INSERT INTO `members` VALUES ('21', 'Keith', 'Franco', '2035557845', '149 Spinnaker Dr.', 'New Haven', 'USA');
INSERT INTO `members` VALUES ('22', 'Isabel ', 'de Castro', '(1) 356-5555', 'Estrada da saúde n. 58', 'Lisboa', 'Portugal');
INSERT INTO `members` VALUES ('23', 'Martine ', 'Rancé', '20.16.1555', '184, chaussée de Tournai', 'Lille', 'France');
INSERT INTO `members` VALUES ('24', 'Marie', 'Bertrand', '(1) 42.34.2555', '265, boulevard Charonne', 'Paris', 'France');
INSERT INTO `members` VALUES ('25', 'Jerry', 'Tseng', '6175555555', '4658 Baden Av.', 'Cambridge', 'USA');
INSERT INTO `members` VALUES ('26', 'Julie', 'King', '2035552570', '25593 South Bay Ln.', 'Bridgewater', 'USA');
INSERT INTO `members` VALUES ('27', 'Mory', 'Kentary', '+81 06 6342 5555', '1-6-20 Dojima', 'Kita-ku', 'Japan');
INSERT INTO `members` VALUES ('28', 'Michael', 'Frick', '2125551500', '2678 Kingston Rd.', 'NYC', 'USA');
INSERT INTO `members` VALUES ('29', 'Matti', 'Karttunen', '90-224 8555', 'Keskuskatu 45', 'Helsinki', 'Finland');
INSERT INTO `members` VALUES ('30', 'Rachel', 'Ashworth', '(171) 555-1555', 'Fauntleroy Circus', 'Manchester', 'UK');
INSERT INTO `members` VALUES ('31', 'Dean', 'Cassidy', '+353 1862 1555', '25 Maiden Lane', 'Dublin', 'Ireland');
INSERT INTO `members` VALUES ('32', 'Leslie', 'Taylor', '6175558428', '16780 Pompton St.', 'Brickhaven', 'USA');
INSERT INTO `members` VALUES ('33', 'Elizabeth', 'Devon', '(171) 555-2282', '12, Berkeley Gardens Blvd', 'Liverpool', 'UK');
INSERT INTO `members` VALUES ('34', 'Yoshi ', 'Tamuri', '(604) 555-3392', '1900 Oak St.', 'Vancouver', 'Canada');
INSERT INTO `members` VALUES ('35', 'Miguel', 'Barajas', '6175557555', '7635 Spinnaker Dr.', 'Brickhaven', 'USA');
INSERT INTO `members` VALUES ('36', 'Julie', 'Young', '6265557265', '78934 Hillside Dr.', 'Pasadena', 'USA');
INSERT INTO `members` VALUES ('37', 'Brydey', 'Walker', '+612 9411 1555', 'Suntec Tower Three', 'Singapore', 'Singapore');
INSERT INTO `members` VALUES ('38', 'Frédérique ', 'Citeaux', '88.60.1555', '24, place Kléber', 'Strasbourg', 'France');
INSERT INTO `members` VALUES ('39', 'Mike', 'Gao', '+852 2251 1555', 'Bank of China Tower', 'Central Hong Kong', 'Hong Kong');
INSERT INTO `members` VALUES ('40', 'Eduardo ', 'Saavedra', '(93) 203 4555', 'Rambla de Cataluña, 23', 'Barcelona', 'Spain');
INSERT INTO `members` VALUES ('41', 'Mary', 'Young', '3105552373', '4097 Douglas Av.', 'Glendale', 'USA');
INSERT INTO `members` VALUES ('42', 'Horst ', 'Kloss', '0372-555188', 'Taucherstraße 10', 'Cunewalde', 'Germany');
INSERT INTO `members` VALUES ('43', 'Palle', 'Ibsen', '86 21 3555', 'Smagsloget 45', 'Århus', 'Denmark');
INSERT INTO `members` VALUES ('44', 'Jean ', 'Fresnière', '(514) 555-8054', '43 rue St. Laurent', 'Montréal', 'Canada');
INSERT INTO `members` VALUES ('45', 'Alejandra ', 'Camino', '(91) 745 6555', 'Gran Vía, 1', 'Madrid', 'Spain');
INSERT INTO `members` VALUES ('46', 'Valarie', 'Thompson', '7605558146', '361 Furth Circle', 'San Diego', 'USA');
INSERT INTO `members` VALUES ('47', 'Helen ', 'Bennett', '(198) 555-8888', 'Garden House', 'Cowes', 'UK');
INSERT INTO `members` VALUES ('48', 'Annette ', 'Roulet', '61.77.6555', '1 rue Alsace-Lorraine', 'Toulouse', 'France');
INSERT INTO `members` VALUES ('49', 'Renate ', 'Messner', '069-0555984', 'Magazinweg 7', 'Frankfurt', 'Germany');
INSERT INTO `members` VALUES ('50', 'Paolo ', 'Accorti', '011-4988555', 'Via Monte Bianco 34', 'Torino', 'Italy');
INSERT INTO `members` VALUES ('51', 'Daniel', 'Da Silva', '+33 1 46 62 7555', '27 rue du Colonel Pierre Avia', 'Paris', 'France');
INSERT INTO `members` VALUES ('52', 'Daniel ', 'Tonini', '30.59.8555', '67, avenue de l\'Europe', 'Versailles', 'France');
INSERT INTO `members` VALUES ('53', 'Henriette ', 'Pfalzheim', '0221-5554327', 'Mehrheimerstr. 369', 'Köln', 'Germany');
INSERT INTO `members` VALUES ('54', 'Elizabeth ', 'Lincoln', '(604) 555-4555', '23 Tsawassen Blvd.', 'Tsawassen', 'Canada');
INSERT INTO `members` VALUES ('55', 'Peter ', 'Franken', '089-0877555', 'Berliner Platz 43', 'München', 'Germany');
INSERT INTO `members` VALUES ('56', 'Anna', 'O\'Hara', '02 9936 8555', '201 Miller Street', 'North Sydney', 'Australia');
INSERT INTO `members` VALUES ('57', 'Giovanni ', 'Rovelli', '035-640555', 'Via Ludovico il Moro 22', 'Bergamo', 'Italy');
INSERT INTO `members` VALUES ('58', 'Adrian', 'Huxley', '+61 2 9495 8555', 'Monitor Money Building', 'Chatswood', 'Australia');
INSERT INTO `members` VALUES ('59', 'Marta', 'Hernandez', '6175558555', '39323 Spinnaker Dr.', 'Cambridge', 'USA');
INSERT INTO `members` VALUES ('60', 'Ed', 'Harrison', '+41 26 425 50 01', 'Rte des Arsenaux 41 ', 'Fribourg', 'Switzerland');
INSERT INTO `members` VALUES ('61', 'Mihael', 'Holz', '0897-034555', 'Grenzacherweg 237', 'Genève', 'Switzerland');
INSERT INTO `members` VALUES ('62', 'Jan', 'Klaeboe', '+47 2212 1555', 'Drammensveien 126A', 'Oslo', 'Norway  ');
INSERT INTO `members` VALUES ('63', 'Bradley', 'Schuyler', '+31 20 491 9555', 'Kingsfordweg 151', 'Amsterdam', 'Netherlands');
INSERT INTO `members` VALUES ('64', 'Mel', 'Andersen', '030-0074555', 'Obere Str. 57', 'Berlin', 'Germany');
INSERT INTO `members` VALUES ('65', 'Pirkko', 'Koskitalo', '981-443655', 'Torikatu 38', 'Oulu', 'Finland');
INSERT INTO `members` VALUES ('66', 'Catherine ', 'Dewey', '(02) 5554 67', 'Rue Joseph-Bens 532', 'Bruxelles', 'Belgium');
INSERT INTO `members` VALUES ('67', 'Steve', 'Frick', '9145554562', '3758 North Pendale Street', 'White Plains', 'USA');
INSERT INTO `members` VALUES ('68', 'Wing', 'Huang', '5085559555', '4575 Hillside Dr.', 'New Bedford', 'USA');
INSERT INTO `members` VALUES ('69', 'Julie', 'Brown', '6505551386', '7734 Strong St.', 'San Francisco', 'USA');
INSERT INTO `members` VALUES ('70', 'Mike', 'Graham', '+64 9 312 5555', '162-164 Grafton Road', 'Auckland  ', 'New Zealand');
INSERT INTO `members` VALUES ('71', 'Ann ', 'Brown', '(171) 555-0297', '35 King George', 'London', 'UK');
INSERT INTO `members` VALUES ('72', 'William', 'Brown', '2015559350', '7476 Moss Rd.', 'Newark', 'USA');
INSERT INTO `members` VALUES ('73', 'Ben', 'Calaghan', '61-7-3844-6555', '31 Duncan St. West End', 'South Brisbane', 'Australia');
INSERT INTO `members` VALUES ('74', 'Kalle', 'Suominen', '+358 9 8045 555', 'Software Engineering Center', 'Espoo', 'Finland');
INSERT INTO `members` VALUES ('75', 'Philip ', 'Cramer', '0555-09555', 'Maubelstr. 90', 'Brandenburg', 'Germany');
INSERT INTO `members` VALUES ('76', 'Francisca', 'Cervantes', '2155554695', '782 First Street', 'Philadelphia', 'USA');
INSERT INTO `members` VALUES ('77', 'Jesus', 'Fernandez', '+34 913 728 555', 'Merchants House', 'Madrid', 'Spain');
INSERT INTO `members` VALUES ('78', 'Brian', 'Chandler', '2155554369', '6047 Douglas Av.', 'Los Angeles', 'USA');
INSERT INTO `members` VALUES ('79', 'Patricia ', 'McKenna', '2967 555', '8 Johnstown Road', 'Cork', 'Ireland');
INSERT INTO `members` VALUES ('80', 'Laurence ', 'Lebihan', '91.24.4555', '12, rue des Bouchers', 'Marseille', 'France');
INSERT INTO `members` VALUES ('81', 'Paul ', 'Henriot', '26.47.1555', '59 rue de l\'Abbaye', 'Reims', 'France');
INSERT INTO `members` VALUES ('82', 'Armand', 'Kuger', '+27 21 550 3555', '1250 Pretorius Street', 'Hatfield', 'South Africa');
INSERT INTO `members` VALUES ('83', 'Wales', 'MacKinlay', '64-9-3763555', '199 Great North Road', 'Auckland', 'New Zealand');
INSERT INTO `members` VALUES ('84', 'Karin', 'Josephs', '0251-555259', 'Luisenstr. 48', 'Münster', 'Germany');
INSERT INTO `members` VALUES ('85', 'Juri', 'Yoshido', '6175559555', '8616 Spinnaker Dr.', 'Boston', 'USA');
INSERT INTO `members` VALUES ('86', 'Dorothy', 'Young', '6035558647', '2304 Long Airport Avenue', 'Nashua', 'USA');
INSERT INTO `members` VALUES ('87', 'Lino ', 'Rodriguez', '(1) 354-2555', 'Jardim das rosas n. 32', 'Lisboa', 'Portugal');
INSERT INTO `members` VALUES ('88', 'Braun', 'Urs', '0452-076555', 'Hauptstr. 29', 'Bern', 'Switzerland');
INSERT INTO `members` VALUES ('89', 'Allen', 'Nelson', '6175558555', '7825 Douglas Av.', 'Brickhaven', 'USA');
INSERT INTO `members` VALUES ('90', 'Pascale ', 'Cartrain', '(071) 23 67 2555', 'Boulevard Tirou, 255', 'Charleroi', 'Belgium');
INSERT INTO `members` VALUES ('91', 'Georg ', 'Pipps', '6562-9555', 'Geislweg 14', 'Salzburg', 'Austria');
INSERT INTO `members` VALUES ('92', 'Arnold', 'Cruz', '+63 2 555 3587', '15 McCallum Street', 'Makati City', 'Philippines');
INSERT INTO `members` VALUES ('93', 'Maurizio ', 'Moroni', '0522-556555', 'Strada Provinciale 124', 'Reggio Emilia', 'Italy');
INSERT INTO `members` VALUES ('94', 'Akiko', 'Shimamura', '+81 3 3584 0555', '2-2-8 Roppongi', 'Minato-ku', 'Japan');
INSERT INTO `members` VALUES ('95', 'Dominique', 'Perrier', '(1) 47.55.6555', '25, rue Lauriston', 'Paris', 'France');
INSERT INTO `members` VALUES ('96', 'Rita ', 'Müller', '0711-555361', 'Adenauerallee 900', 'Stuttgart', 'Germany');
INSERT INTO `members` VALUES ('97', 'Sarah', 'McRoy', '04 499 9555', '101 Lambton Quay', 'Wellington', 'New Zealand');
INSERT INTO `members` VALUES ('98', 'Michael', 'Donnermeyer', ' +49 89 61 08 9555', 'Hansastr. 15', 'Munich', 'Germany');
INSERT INTO `members` VALUES ('99', 'Maria', 'Hernandez', '2125558493', '5905 Pompton St.', 'NYC', 'USA');
INSERT INTO `members` VALUES ('100', 'Alexander ', 'Feuer', '0342-555176', 'Heerstr. 22', 'Leipzig', 'Germany');
INSERT INTO `members` VALUES ('101', 'Dan', 'Lewis', '2035554407', '2440 Pompton St.', 'Glendale', 'USA');
INSERT INTO `members` VALUES ('102', 'Martha', 'Larsson', '0695-34 6555', 'Åkergatan 24', 'Bräcke', 'Sweden');
INSERT INTO `members` VALUES ('103', 'Sue', 'Frick', '4085553659', '3086 Ingle Ln.', 'San Jose', 'USA');
INSERT INTO `members` VALUES ('104', 'Roland ', 'Mendel', '7675-3555', 'Kirchgasse 6', 'Graz', 'Austria');
INSERT INTO `members` VALUES ('105', 'Leslie', 'Murphy', '2035559545', '567 North Pendale Street', 'New Haven', 'USA');
INSERT INTO `members` VALUES ('106', 'Yu', 'Choi', '2125551957', '5290 North Pendale Street', 'NYC', 'USA');
INSERT INTO `members` VALUES ('107', 'Martín ', 'Sommer', '(91) 555 22 82', 'C/ Araquil, 67', 'Madrid', 'Spain');
INSERT INTO `members` VALUES ('108', 'Sven ', 'Ottlieb', '0241-039123', 'Walserweg 21', 'Aachen', 'Germany');
INSERT INTO `members` VALUES ('109', 'Violeta', 'Benitez', '5085552555', '1785 First Street', 'New Bedford', 'USA');
INSERT INTO `members` VALUES ('110', 'Carmen', 'Anton', '+34 913 728555', 'c/ Gobelas, 19-1 Urb. La Florida', 'Madrid', 'Spain');
INSERT INTO `members` VALUES ('111', 'Sean', 'Clenahan', '61-9-3844-6555', '7 Allen Street', 'Glen Waverly', 'Australia');
INSERT INTO `members` VALUES ('112', 'Franco', 'Ricotti', '+39 022515555', '20093 Cologno Monzese', 'Milan', 'Italy');
INSERT INTO `members` VALUES ('113', 'Steve', 'Thompson', '3105553722', '3675 Furth Circle', 'Burbank', 'USA');
INSERT INTO `members` VALUES ('114', 'Hanna ', 'Moos', '0621-08555', 'Forsterstr. 57', 'Mannheim', 'Germany');
INSERT INTO `members` VALUES ('115', 'Alexander ', 'Semenov', '+7 812 293 0521', '2 Pobedy Square', 'Saint Petersburg', 'Russia');
INSERT INTO `members` VALUES ('116', 'Raanan', 'Altagar,G M', '+ 972 9 959 8555', '3 Hagalim Blv.', 'Herzlia', 'Israel');
INSERT INTO `members` VALUES ('117', 'José Pedro ', 'Roel', '(95) 555 82 82', 'C/ Romero, 33', 'Sevilla', 'Spain');
INSERT INTO `members` VALUES ('118', 'Rosa', 'Salazar', '2155559857', '11328 Douglas Av.', 'Philadelphia', 'USA');
INSERT INTO `members` VALUES ('119', 'Sue', 'Taylor', '4155554312', '2793 Furth Circle', 'Brisbane', 'USA');
INSERT INTO `members` VALUES ('120', 'Thomas ', 'Smith', '(171) 555-7555', '120 Hanover Sq.', 'London', 'UK');
INSERT INTO `members` VALUES ('121', 'Valarie', 'Franco', '6175552555', '6251 Ingle Ln.', 'Boston', 'USA');
INSERT INTO `members` VALUES ('122', 'Tony', 'Snowden', '+64 9 5555500', 'Arenales 1938 3\'A\'', 'Auckland  ', 'New Zealand');

-- ----------------------------
-- Table structure for `persons`
-- ----------------------------
DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of persons
-- ----------------------------
INSERT INTO `persons` VALUES ('2', 'Garrett', 'Winters', 'male', 'Tokyo', '1988-09-02');
INSERT INTO `persons` VALUES ('3', 'John', 'Doe', 'male', 'Kansas', '1972-11-02');
INSERT INTO `persons` VALUES ('4', 'Tatyana', 'Fitzpatrick', 'male', 'London', '1989-01-01');
INSERT INTO `persons` VALUES ('6', 'Mahesh ', 'Sharma', 'male', 'Kathmandu', '1996-11-02');
INSERT INTO `persons` VALUES ('7', 'Yubaraj ', 'Bhattrai', 'male', 'Kapan', '1994-03-05');
INSERT INTO `persons` VALUES ('8', 'Cuzina ', 'Maharjan', 'female', 'Bafal', '1994-03-09');
INSERT INTO `persons` VALUES ('9', 'Shambhavi ', 'Sharma', 'female', 'Kathmandu', '1994-03-23');
INSERT INTO `persons` VALUES ('10', 'Dhruba', 'Tripathi', 'male', 'Dhumbarahi', '1989-02-22');
INSERT INTO `persons` VALUES ('11', 'Haribol ', 'Badal', 'male', 'Sangha', '1981-07-28');
INSERT INTO `persons` VALUES ('12', 'Nibida', 'Dhakal', 'female', 'Lubhoo', '1986-04-23');

-- ----------------------------
-- Table structure for `price`
-- ----------------------------
DROP TABLE IF EXISTS `price`;
CREATE TABLE `price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_types` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of price
-- ----------------------------
INSERT INTO `price` VALUES ('1', 'Starter', '$10');
INSERT INTO `price` VALUES ('2', 'Basic', '$27');
INSERT INTO `price` VALUES ('3', 'Pro', '$74');
INSERT INTO `price` VALUES ('4', 'Unlimited', '$140');

-- ----------------------------
-- Table structure for `schedule`
-- ----------------------------
DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_day` varchar(100) NOT NULL,
  `sc_timing` varchar(100) NOT NULL,
  `sc_class` varchar(100) NOT NULL,
  `sc_trainer` varchar(100) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schedule
-- ----------------------------
INSERT INTO `schedule` VALUES ('1', 'Sunday', '7:00 - 8:00', 'Cardio ', 'Angel Adams');
INSERT INTO `schedule` VALUES ('2', 'Sunday', '8:00 - 9:00', 'Ballet Dance', 'Michel Obama');
INSERT INTO `schedule` VALUES ('3', 'Monday', '7:00 - 8:00', 'Yoga', 'Surendra Pandey');
INSERT INTO `schedule` VALUES ('4', 'Monday', '8:00 - 9:00', 'Body Building', 'Arnold Smith');
INSERT INTO `schedule` VALUES ('5', 'Tuesday', '7:00 - 8:00', 'Boxing', 'Mike Tison');
INSERT INTO `schedule` VALUES ('6', 'Tuesday', '8:00 - 9:00', 'Swimming Class', 'Nir Shah');
INSERT INTO `schedule` VALUES ('7', 'Wednesday', '7:00 - 8:00', 'Yoga', 'Surendra Pandey');
INSERT INTO `schedule` VALUES ('8', 'Wednesday', '8:00 - 9:00', 'Ballet Dance', 'Michel Obama');
INSERT INTO `schedule` VALUES ('9', 'Thursday', '7:00 - 8:00', 'Body Bilding', 'Arnold Smith');
INSERT INTO `schedule` VALUES ('10', 'Thursday', '8:00 - 9:00', 'Swimming', 'Nir Shah');
INSERT INTO `schedule` VALUES ('11', 'Friday', '7:00 - 8:00', 'Boxing', 'Mike Tyson');
INSERT INTO `schedule` VALUES ('12', 'Friday', '8:00 - 9:00', 'Ballet Dance', 'Michel Obama');
INSERT INTO `schedule` VALUES ('13', 'Saturday', '7:00 - 8:00', 'Cardio', 'Angel Adams');
INSERT INTO `schedule` VALUES ('14', 'Saturday', '8:00 - 9:00', 'Body Building', 'Arnold Smith');

-- ----------------------------
-- Table structure for `training`
-- ----------------------------
DROP TABLE IF EXISTS `training`;
CREATE TABLE `training` (
  `training_id` int(11) NOT NULL AUTO_INCREMENT,
  `training_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `months` varchar(100) NOT NULL,
  `schedule_name` varchar(100) NOT NULL,
  `timing` varchar(100) NOT NULL,
  PRIMARY KEY (`training_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of training
-- ----------------------------
INSERT INTO `training` VALUES ('1', 'Dance', '10000', '1 month', 'Alpha', 'Mornin/ Day/ Evening');
INSERT INTO `training` VALUES ('2', 'Body Building', '30000', '1 months', 'Beta ', 'Morning/ Evening');
INSERT INTO `training` VALUES ('3', 'Yoga', '20000', '1 months', 'Gamma', 'Morning/ Day / Evening');

-- ----------------------------
-- Table structure for `user_login`
-- ----------------------------
DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_login
-- ----------------------------
INSERT INTO `user_login` VALUES ('1', 'administrator', 'administrator@gymkhana.com', 'administrator', 'superadmin');
INSERT INTO `user_login` VALUES ('2', 'nishchal', 'nishchal@gmail.com', 'nishchal', '');
