-- database file for the web site project Almotabari3
-- Database Managment System: MySQL
-- SERVER: Apache
-- Creation date: 29/10/2022


-- creating of database

DROP DATABASE IF EXISTS Almotabari3;
CREATE DATABASE Almotabari3;
USE Almotabari3;


-- table with all the regions in the beloved morocco :)

CREATE TABLE Region(
    Identification SMALLINT AUTO_INCREMENT,
    Region VARCHAR(30) NOT NULL,
    CONSTRAINT PRIMARY KEY(Identification)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


-- table with all the citys in morocco :)

CREATE TABLE City(
    Identification INT AUTO_INCREMENT,
    City VARCHAR(30) NOT NULL,
    Region SMALLINT NOT NULL,
    CONSTRAINT PK_City PRIMARY KEY(Identification),
    CONSTRAINT FK_City_Region FOREIGN KEY (Region) REFERENCES Region(Identification)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

-- table for the diferent blood types

CREATE TABLE Blood_Type(
    Identification SMALLINT AUTO_INCREMENT,
    Blood_Type VARCHAR(4) NOT NULL,
    CONSTRAINT PK_Blood_Type PRIMARY KEY(Identification)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


-- table for storing the donors

CREATE TABLE Donor(
    Identification VARCHAR(10),
    First_Name VARCHAR(15),
    Last_Name varchar(15),
    Phone_Number VARCHAR(14),
    Blood_Type SMALLINT NOT NULL,
    City INT NOT NULL,
    CONSTRAINT PK_Donor PRIMARY KEY(Identification),
    CONSTRAINT FK_Donor_City FOREIGN KEY(City) REFERENCES City(Identification),
    CONSTRAINT FK_Donor_Blood_Type FOREIGN KEY(Blood_Type) REFERENCES Blood_Type(Identification)
)ENGINE=INNODB DEFAULT CHARSET=utf8;


-- ading records:

-- BLOOD TYPES:

INSERT INTO Blood_Type (Identification, Blood_Type) VALUES
(1,'A+'),
(2,'A-'),
(3,'B+'),
(4,'A-'),
(5,'O+'),
(6,'O-'),
(7,'AB+'),
(8,'AB-');


-- Regions:

INSERT INTO Region (Identification, Region) VALUES
(1, 'Tanger-Tétouan-Al Hoceïma'),
(2, 'l''Oriental'),
(3, 'Fès-Meknès'),
(4, 'Rabat-Salé-Kénitra'),
(5, 'Béni Mellal-Khénifra'),
(6, 'Casablanca-Settat'),
(7, 'Marrakech-Safi'),
(8, 'Drâa-Tafilalet'),
(9, 'Souss-Massa'),
(10, 'Guelmim-Oued Noun'),
(11, 'Laâyoune-Sakia El Hamra'),
(12, 'Dakhla-Oued Ed Dahab');


-- Citys

INSERT INTO City (Identification, City, region) VALUES
(1, 'Aïn Harrouda', 6),
(3, 'Bouskoura', 6),
(4, 'Casablanca', 6),
(6, 'Mohammadia', 6),
(9, 'Bejaâd', 5),
(11, 'Benslimane', 6),
(12, 'Berrechid', 6),
(15, 'Bouznika', 6),
(21, 'Khouribga', 5),
(23, 'Oued Zem', 5),
(30, 'Settat', 6),
(37, 'El Jadida', 6),
(49, 'Safi', 7),
(54, 'Sidi Bennour', 6),
(57, 'Youssoufia', 7),
(58, 'Fès', 3),
(67, 'Moulay Yaâcoub', 3),
(71, 'Séfrou', 3),
(79, 'Kénitra', 4),
(86, 'Sidi Kacem', 4),
(92, 'Assa', 10),
(93, 'Bouizakarne', 10),
(95, 'Es-Semara', 11),
(98, 'Guelmim', 10),
(99, 'Taghjijt', 10),
(100, 'Tan-Tan', 10),
(101, 'Tata', 9),
(102, 'Zag', 10),
(103, 'Marrakech', 7),
(118, 'Ben Guerir', 7),
(122, 'Essaouira', 7),
(130, 'Lâattaouia', 7),
(150, 'Meknès', 3),
(158, 'Arfoud', 8),
(168, 'El Hajeb', 3),
(171, 'Errachidia', 8),
(172, 'Gardmit', 8),
(173, 'Goulmima', 8),
(177, 'Ifrane', 3),
(179, 'Jorf', 8),
(211, 'Berkane', 2),
(227, 'Jaâdar', 2),
(228, 'Jerada', 2),
(234, 'Midar', 2),
(235, 'Nador', 2),
(238, 'Oujda', 2),
(252, 'Rabat', 4),
(253, 'Salé', 4),
(270, 'Aït Melloul', 9),
(291, 'Inezgane', 9),
(293, 'Kelaat-M''Gouna', 8),
(294, 'Lakhsas', 9),
(298, 'Massa (Maroc)', 9),
(300, 'Ouarzazate', 8),
(301, 'Oulad Berhil', 9),
(302, 'Oulad Teïma', 9),
(304, 'Sidi Ifni', 10),
(306, 'Tabounte', 8),
(307, 'Tafraout', 9),
(308, 'Taghzout', 1),
(315, 'Taroudannt', 9),
(317, 'Tifnit', 9),
(319, 'Tiznit', 9),
(321, 'Zagora', 8),
(324, 'Azilal', 5),
(327, 'Béni Mellal', 5),
(331, 'Dar Oulad Zidouh', 5),
(332, 'Demnate', 5),
(336, 'Fquih Ben Salah', 5),
(337, 'Kasba Tadla', 5),
(345, 'Tanger', 1),
(346, 'Tétouan', 1),
(348, 'Assilah', 1),
(352, 'Chefchaouen', 1),
(355, 'Fnideq', 1),
(360, 'Ksar El Kébir', 1),
(361, 'Larache', 1),
(363, 'Martil', 1),
(367, 'Ouazzane', 1),
(374, 'Al Hoceïma', 1),
(379, 'Guercif', 2),
(385, 'Oued Amlil', 3),
(390, 'Taounate', 3),
(392, 'Taza', 3),
(397, 'Laayoune', 11),
(398, 'El Marsa', 11),
(399, 'Tarfaya', 11),
(400, 'Boujdour', 11),
(401, 'Awsard', 12);