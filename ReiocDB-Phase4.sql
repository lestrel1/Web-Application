-- Create the database
CREATE DATABASE Reioc;

-- Switch to the new database
USE Reioc;

--------------  Create tables

-- 1st table == Departments
CREATE TABLE departments(
DeptName VARCHAR(30),
DeptCode INT NOT NULL,
OfficeNum CHAR(4),
OfficePhoneNum CHAR(10),
PRIMARY KEY (DeptCode)
);

-- 2nd table == Employees
CREATE TABLE employees(
Name VARCHAR(30),
WorkID INT NOT NULL,
SSN CHAR(9) NOT NULL,
Birthday DATE,
Sex VARCHAR(6), 
Address VARCHAR(50),
PhoneNum CHAR(10),
RoleTitle VARCHAR(30),
Department INT NOT NULL,
HireDate DATE,
Salary INT NOT NULL,
PRIMARY KEY (WorkID),
FOREIGN KEY (Department) REFERENCES departments(DeptCode)
);

-- 3rd table == Services 
CREATE TABLE services(
ServiceName VARCHAR(30),
ServiceDescrip VARCHAR(1000),
ServiceNum INT NOT NULL,
ServicePrice INT,
ServiceQTY CHAR(10),
OfferingDept INT NOT NULL,
PRIMARY KEY (ServiceNum)
);

-- 4th table == Customers
CREATE TABLE customers(
FirstName VARCHAR(30),
LastName VARCHAR(30),
CustomerID INT AUTO_INCREMENT;
Email VARCHAR(50),
CPhoneNum CHAR(12),
CAddress VARCHAR(100),
PRIMARY KEY (CustomerID)
);

-- 5th table == Orders
CREATE TABLE orders(
OrderName VARCHAR(30),
OrderID INT AUTO_INCREMENT;
CustomerID INT,
BillAddress VARCHAR(100),
ShipAddress VARCHAR(100),
OrderDate DATE,
OrderShipDate DATE,
OrderTotalPrice INT,
StatusofOrder VARCHAR(30),
PRIMARY KEY (OrderID),
FOREIGN KEY (CustomerID) REFERENCES customers(CustomerID)
);


-------------- Populate tables -- Insert data

--- count 13 Dept
INSERT INTO departments VALUES
('All Departments','00','101','4013111000'),
('Marketing','01','102','4013111020'),
('Engineering','02','103','4013111030'),
('Operations management','03','104','4013111040'),
('Quality Assurance','04','105','4013111050'),
('Technology','05','106','4013111060'),
('Customer Service','06','107','4013111070'),
('Sales','07','108','4013111080'),
('Administration','08','109','4013111090'),
('Finance','09','110','4013111010'),
('Purchasing','010','111','4013111011'),
('Production','011','112','4013111012'),
('Human Resources','012','113','4013111013');

--- count 22 employees
INSERT INTO employees VALUES 
('Mary Sanders','0001','101702341','11-27-1983','Female','1025 Smith St. Providence, RI. 02908','4013124561','CEO','00','02-13-2014','95256'),
('Marcos Johns','0230','891251093','03-07-1981','Male','270 Academy Ave. Providence, RI. 02908','4011213790','Investment Associate','09','02-17-2014','61030'),
('Chris Duarte','0400','341679435','05-16-1990','Male','280 Valley St. Providence, RI. 02909','4013517912','Software Engineer','05','02-16-2014','89019'),
('Kate Guio','0790','937148590','01-20-1987','Female','215 Atwells Ave. Providence, RI. 02903','4014548924','Director','01','02-17-2014','56227'),
('Lina Reed','1320','142856723','04-03-1989','Female','180 Westminster St. Providence, RI. 02903','4012791367','Technician','02','03-18-2015','74852'),
('Noah Junior','0416','102813652','12-28-1984','Female','1136 Harst St. Cranston, RI. 02920','4014235672','Assitant','03','03-14-2015','35367'),
('Oliver Johnson','0542','912362114','04-08-1982','Male','381 Michael Ave. Cranston, RI. 02921','4012324811','Specialist','04','02-18-2014','42141'),
('Benjamin Gavi','0874','452781546','06-17-1991','Male','391 Valley St. Providence, RI. 02909','4014628123','Data Scientist','05','03-16-2015','89019'),
('Madison Liz','0969','148259611','02-21-1988','Female','326 Wetwell Ave. Providence, RI. 02905','4015659135','Customer Representative','06','02-18-2014','31338'),
('Elijah Grayson','1480','253967834','05-04-1990','Male','291 Califor St. Providence, RI. 02912','4013812478','Sales Representative','07','02-17-2015','34963'),
('Sophia Amado','0527','213924763','01-29-1995','Female','2147 Colfax St. Cranston, RI. 02921','4015346783','Associate','08','04-15-2016','46478'),
('David Pavel','0653','123473225','05-09-1983','Male','41 Poul Ave. Cranston, RI. 02925','4013425912','Specialist','010','03-19-2015','43268'),
('Gil Arnie','0985','563892657','07-18-1992','Male','683 Spud St. Coventry, RI. 02931','4015739234','Graveyard Guardian','011','04-17-2015','30121'),
('Boba Mellin','1181','359361722','03-22-1989','Female','59 Jiles Ave. Kingston, RI. 02935','4016761236','Graveyard Guardian','011','03-18-2014','31349'),
('Sariq Dajuan','2591','364178945','06-06-1991','Male','28 Pears St. Providence, RI. 02914','4014923589','Asset Manager','09','02-17-2015','65174'),
('Milly Adora','0638','324135874','02-21-1996','Female','3258 Bonnie St. Cranston, RI. 02924','4016457894','Accounting','09','04-15-2017','76583'),
('Wren Penny','0964','234684336','06-10-1984','Male','52 Dolle Ave. Cranston, RI. 02926','4015636123','Specialist','010','05-29-2016','43268'),
('Flo Bambie','1082','674913768','08-23-1993','Male','794 Daman St. Providence, RI. 02902','4016841345','Graveyard Guardian','011','04-20-2017','30231'),
('Dori Miyondette','2192','461472834','04-26-1990','Female','61 Legder Ave. Providence, RI. 02904','4017872347','Graveyard Guardian','011','03-06-2016','31441'),
('Mignon Niu','3611','475289156','07-07-1992','Male','39 Colson St. Providence, RI. 02911','4015134691','HR Manager','012','02-19-2015','65174'),
('Fr Achilles Brantley','3213','572583945','05-30-1980','Male','75 King Ave. Providence, RI. 02906','4018983458','Priest','012','04-16-2014','71441'),
('Fr Kai Maverick','4721','586391267','08-08-1982','Male','821 Axel St. Providence, RI. 02914','4016245712','Priest','012','02-11-2014','75174');

------------------------------
--- Count 27 services
INSERT INTO services VALUES
('Care of memorials','Cleaning and preserving existing headstones, monuments, and other memorial markers/structures including statues and plaques. May involve repairs.','1','150','1','011'),
('Maintaining grounds','Year-round upkeep of cemetery landscapes, roads, facilities, and infrastructure. This includes mowing, pruning, snow removal, trash removal, repairs, etc.','2','200','1','011'),
('Grave liners & vaults','Offering protective caskets, liners, and vaults made of materials like concrete to place the coffin in for more secure interment.','3','100','1','07'),
('Interment services','Coordinating with funeral homes, families, and other parties for burial ceremonies. Staff oversee any rituals, prayers, flowers and more at the grave site.','4','70','1','03'),
('Burial plots','This involves selling plots of land for burying casketed remains or cremated remains (ashes). The business handles documentation, coordinates with local regulations, and maintains the grounds.','5','1200','1','07'),
('Grave openings and closings','Preparing the grave site by digging and securing the perimeter, setting up lowering devices, receiving the casketed remains, properly interring the casket, refilling the grave, installing any vaults, and cleaning up.','6','1700','1','02'),
('Grave markers and monuments','Providing, engraving, and installing flat or upright headstones, monuments, plaques, etc. to memorialize the deceased. This includes consultation on materials, inscriptions, and design.','7','2700','1','02'),
('Record keeping and sales','Maintaining records of plot ownership, burials, caller inquiries, and handling plot sales to new customers. This is typically an office-based activity.','8','60','1','08'),
('Endowment Care Fund','Maintaining a trust fund from a portion of plot sales to help fund long-term maintenance and upkeep of the cemetery.','9','30','1','09'),
('Grave Decorations','Allowing families to decorate graves with approved items (e.g. flowers, wreaths, small keepsakes) and providing guidelines for permitted decorations.','10','150','1','07'),
('Grave Locator Services','Helping visitors locate the specific site of a grave within the cemetery grounds. May involve record lookup and guidance to the site. For older cemeteries, staff can provide burial record lookups and other genealogy helps to aid those researching family history.','11','50','1','08'),
('Religious Accommodations','Providing designated sections, facilities, or modifications to support various religious burial traditions and customs. For example, Jewish cemeteries, Muslim cemeteries, Catholic sections, etc.','12','500','1','012'),
('Green Burials','Offering burial options that forgo certain preparations for the body (e.g. embalming) and utilize only natural or biodegradable materials for the casket/shroud allowing more natural decomposition.','13','800','1','04'),
('Pet Burials','Designated sections, memorials, and services for the burial of domestic pets and animals. Includes offerings like cremation for pets.','14','500','1','03'),
('Indigent Burials','Providing burial services at reduced or no cost for families that do not have the means to cover expenses. May involve a potters field.','15','1500','1','03'),
('Cemetery Restoration','For older historic cemeteries, offering specialized services to repair, reset, and restore severely damaged memorials, markers and monuments that have deteriorated over the decades.','16','2500','1','02'),
('Gravesite Photography','Taking professional photos of headstones and burial sites for families to have a visual remembrance, especially for loved ones who cannot visit the physical gravesite frequently.','17','400','1','01'),
('Digital memorials','Providing online virtual spaces to memorialize the deceased, share photos/stories, light virtual candles, and enable remote connections to the memorial.','18','400','1','01'),
('Legacy history compilations','Collecting photos, biographical information, family tree materials, and memorial site images over time to provide as a archived legacy keepsake for families.','19','150','1','08'),
('Burial Right Transfers','Legal services to help families facilitate ownership transfers of burial property rights as needed over generations. Includes handling all appropriate paperwork.','20','350','1','08'),
('Cemetery Tours','Historical/educational tours of their cemetery grounds to highlight notable memorials, gravesites of significant people, unique artwork/architecture, heritage of the property, etc.','21','20','1','06'),
('Online Access Portal','Provide an online dashboard for families to access documents related to their lot purchase, burial records, locations via integrated mapping, requests forms, etc.','22','30','1','08'),
('Surname sections','Designating burial areas of the cemetery by surnames only to allow families of the same lineage to be interred together.','23','300','1','03'),
('Private mausoleum estates','Constructing small private mausoleum buildings, estates, or large private plots that individual wealthy families can use across generations.','24','2500','1','02'),
('Memorial benches and fixtures','Offering benches, lamp posts, small statues, birdbaths, garden fixtures and other items to families that they can customize and place in memory of loved ones.','25','600','1','010'),
('Memorial tree planting','Planting trees chosen by families in designated spots on the cemetery grounds in memory of the deceased. Includes memorial placards and maintenance.','26','200','1','011'),
('Casket/urn selection services','If not selling caskets/urns directly, providing catalogs, purchasing support, and coordination with partners vendors on selecting caskets, urns, keepsake urns, etc.','27','150','1','07');

------------------------------
--- count 20 orders
INSERT INTO customers VALUES
('Genesis','Nicholas','80241','Genesisnicholas@gmail.com','4013478293','110A Foster Center Rd, Foster, RI 02825'),
('Silas','Declan','91352','Silasdeclan1@yahoo.com','9283678224','81 Woodlawn Ave, Waltham, MA 02451'),
('Nathan','Kylen','12463','Nathankylen@yahoo.com','4027822147','1 Hamilton Heights Dr, West Hartford, CT 06119'),
('Avi','Gatlin','24674','Avigalin@icloud.com','6275689201','5600 Mayflower Hill Dr, Waterville, ME 04901'),
('Tristian','Judson','35785','Tristianjudson@hotmail.com','7348165231','261 Dogford Rd, Etna, NH 03750'),
('Leif','Emmett','91351','Leifemmett@gmail.com','5278317356','276 N Main St, Barre, VT 05641'),
('Davian','Foster','12673','Davianfoster@gmail.com','9283456172','25 Erie Blvd, Albany, NY 12204'),
('Zayd','Easton','46732','Zaydeaston@gmail.com','8455148349','40 E Crafton Ave, Pittsburgh, PA 15205'),
('Nova','Shepherd','36895','Novashepherd@gmail.com','9294577331','184 W Sherman Ave, Vineland, NJ 08360'),
('Benton','Wells','56891','Bentonwells@gmail.com','7256312987','1500 Union Ave, Baltimore, MD 21211'),
('Van','Blaise','10462','Vanblaise@icloud.com','6275319876','1640 W Broad St, Richmond, VA 23220'),
('Conrad','Ace','23784','Conradace@gmail.com','6386421987','1300 W Webster Rd, Summersville, WV 26651'),
('Brixton','Wesson','57843','Brixtonwesson@yahoo.com','5289467123','2545 Brixton Rd, Upper Arlington, OH 43221'),
('Jair','Coleman','47916','Jaircoleman@gmail.com','4261835421','2320 E 93rd St, Chicago, IL 60617'),
('Nicholas','Caspian','67912','Nicholascaspian@gmail.com','5384266591','2995 S Clement Ave, Milwaukee, WI 53207'),
('Aydin','Miller','21573','Aydinmiller@gmail.com','7484937546','474 Peterboro St, Detroit, MI 48201'),
('Landry','Thatcher','34895','Landrythatcher@yahoo.com','8485217349','1703 Biloxi Ct, Lexington, KY 40505'),
('Dayton','Keiji','68944','Daytonkeiji@gmail.com','5278566823','1125 S Semoran Blvd, Orlando, FL 32807'),
('Vance','Joyce','58127','Vancejoy@gmail.com','6578231045','3165 Jim Wilson Loop E, Montgomery, AL 36106'),
('Tadeo','Darwin','78123','Tadeodarwin@gmail.com','8360124230','2083 Caton St, New Orleans, LA 70122');

------------------------------
--- count 20 orders
INSERT INTO orders VALUES
('Order #101','025','80241','110A Foster Center Rd, Foster, RI 02825','110A Foster Center Rd, Foster, RI 02825','03-12-2017','03-17-2017','573','Shipped'),
('Order #212','136','91352','81 Woodlawn Ave, Waltham, MA 02451','81 Woodlawn Ave, Waltham, MA 02451','03-23-2017','03-28-2017','2584','Delivered'),
('Order #322','247','12463','1 Hamilton Heights Dr, West Hartford, CT 06119','1 Hamilton Heights Dr, West Hartford, CT 06119','04-30-2017','05-08-2017','617','Processing'),
('Order #435','358','24674','5600 Mayflower Hill Dr, Waterville, ME 04901','5600 Mayflower Hill Dr, Waterville, ME 04901','04-28-2017','05-01-2017','791','Processing'),
('Order #586','419','35785','261 Dogford Rd, Etna, NH 03750','261 Dogford Rd, Etna, NH 03750','05-19-2017','05-29-2017','284','Shipped'),
('Order #425','417','91351','276 N Main St, Barre, VT 05641','276 N Main St, Barre, VT 05641','04-22-2018','04-26-2018','684','Delivered'),
('Order #552','147','12673','25 Erie Blvd, Albany, NY 12204','25 Erie Blvd, Albany, NY 12204','06-03-2018','06-09-2018','3695','Delivered'),
('Order #537','398','46732','40 E Crafton Ave, Pittsburgh, PA 15205','40 E Crafton Ave, Pittsburgh, PA 15205','07-31-2018','08-05-2018','728','Processing'),
('Order #628','379','36895','184 W Sherman Ave, Vineland, NJ 08360','184 W Sherman Ave, Vineland, NJ 08360','08-18-2018','08-22-2018','8102','Shipped'),
('Order #915','178','56891','1500 Union Ave, Baltimore, MD 21211','1500 Union Ave, Baltimore, MD 21211','09-19-2018','09-29-2018','395','Shipped'),
('Order #536','528','10462','1640 W Broad St, Richmond, VA 23220','1640 W Broad St, Richmond, VA 23220','05-12-2018','05-16-2018','795','Delivered'),
('Order #683','258','23784','1300 W Webster Rd, Summersville, WV 26651','1300 W Webster Rd, Summersville, WV 26651','02-04-2018','02-06-2018','4716','Delivered'),
('Order #648','469','57843','2545 Brixton Rd, Upper Arlington, OH 43221','2545 Brixton Rd, Upper Arlington, OH 43221','01-31-2018','02-02-2018','839','Processing'),
('Order #739','481','47916','2320 E 93rd St, Chicago, IL 60617','2320 E 93rd St, Chicago, IL 60617','09-01-2018','09-05-2018','9213','Shipped'),
('Order #126','289','67912','2995 S Clement Ave, Milwaukee, WI 53207','2995 S Clement Ave, Milwaukee, WI 53207','10-17-2018','10-19-2018','416','Shipped'),
('Order #647','639','21573','474 Peterboro St, Detroit, MI 48201','474 Peterboro St, Detroit, MI 48201','06-11-2019','05-17-2019','816','Delivered'),
('Order #794','369','34895','1703 Biloxi Ct, Lexington, KY 40505','1703 Biloxi Ct, Lexington, KY 40505','03-05-2019','03-08-2019','5827','Delivered'),
('Order #959','571','68944','1125 S Semoran Blvd, Orlando, FL 32807','1125 S Semoran Blvd, Orlando, FL 32807','12-01-2019','12-07-2019','9410','Processing'),
('Order #841','592','58127','3165 Jim Wilson Loop E, Montgomery, AL 36106','3165 Jim Wilson Loop E, Montgomery, AL 36106','10-04-2019','10-12-2019','10324','Shipped'),
('Order #230','391','78123','2083 Caton St, New Orleans, LA 70122','2083 Caton St, New Orleans, LA 70122','01-03-2020','01-15-2010','527','Shipped');
