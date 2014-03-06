Students Redesign Banking 
====================================


###A Collaboration Between Dynamic Web Authoring: Client Side & Server Side

**This a student assignment between 4 web design students. Feel free to watch the work.**

##The Brief

We are to create a dynamic website for the allocated scenario to demonstrate our skills in JavaScript, jQuery, PHP and databases. 

Each group member must contribute and document their contributions in their own web spaces to insure this. 

**Our Scenario is:** Bank mortgage sales

####The Database

| STAFF MEMBER  | MORTGAGE      | CUSTOMER       | PROPERTY   |
| ------------- |:-------------:|---------------:|-----------:|
| __Staff_id__  | __Mort_id__   | __Cust_id__*   | __Prop_id__|
| Image         | Prop_id*      | Name           | Cust_id*   |
| Name          | Mort_Type     | Address        | Address    |
| Location      | Date_Done     | Martial Status | Type       |
| Branch_Name   | Due_Date      | Age            | Price      |
| Position      | Staff_id*     | Income         | No_of_opp  |
|               | Price         | Tel            | Rent_buy   |
|               | Interest      | Email          |


## The To Do List

* Entity Relationship Modelling
* Site Mapping
* Idea generation 
* Research

**List will be update over the course of the initial stage of the assignment.**


-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

CREATE TABLE IF NOT EXISTS `CUSTOMER` (
  `Cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Martial Status` enum('Single','Married','Separated','Cohabitation') NOT NULL DEFAULT 'Single',
  `Age` int(2) NOT NULL,
  `Income` int(50000) NOT NULL,
  `Tel` bigint NOT NULL,
  `Email` varchar(550) NOT NULL,
  PRIMARY KEY (`Cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
