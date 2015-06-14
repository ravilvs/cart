-- mysql -u sravani -ppass123 < tables.sql

drop database if exists sravanicart;
create database sravanicart;
use sravanicart;

create table users
(
	UserId integer auto_increment,
	UserName varchar(50) not null,
	Password varchar(20) not null,
	EmailId varchar(100) not null unique,
	Address varchar(100),
	PRIMARY KEY(UserId)
);


create table productgroups
(
	GroupId integer PRIMARY KEY,
	GroupName varchar(50) not null UNIQUE
);

insert into productgroups (GroupId, GroupName) values (1, 'Books');
insert into productgroups (GroupId, GroupName) values (2, 'Mobiles');
insert into productgroups (GroupId, GroupName) values (3, 'Laptops');
insert into productgroups (GroupId, GroupName) values (4, 'Fans');
insert into productgroups (GroupId, GroupName) values (5, 'Gifts');

create table products
(
	GroupId integer ,
	ProductName varchar(100),
	ProductId integer PRIMARY KEY,
	Details varchar(1024) ,
	Price integer ,
	BalQuantity integer ,
	OrdQuantity integer
);

insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 1, 'Mathematics',569,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 2, 'Physics',500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 3, 'Chemistry',449,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 4, 'Economics',325,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 5, 'Civics',300,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 6, 'History',350,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 7, 'Commerce',425,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 8, 'Biology',460,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (1, 9, 'GK',560,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 10, 'Samsung Galaxy',10000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 11, 'RedMi 2',7000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 12, 'MicroMax',20000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 13, 'Nokia Lumia',15700,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 14, 'Apple iphone',25000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 15, 'Google Nexus',18750,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 16, 'Karbon',12000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 17, 'Sony Xperia',17500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (2, 18, 'Moto G',13600,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 19, 'Lenevo',50675,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 20, 'Dell',49999,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 21, 'Toshiba',35000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 22, 'Acer',25000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 23, 'Sony Vaio',46500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 24, 'Apple',62499,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 25, 'Samsung',60000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 26, 'HP',42500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (3, 27, 'Asus',23560,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 28, 'Usha',2000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 29, 'Ganga',1560,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 30,'Crompton Greeves',1250,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 31, 'Orient',1450,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 32, 'Star 1',1625,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 33, 'Polar',1100,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 34, 'Bajaj',1000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 35, 'Anjali',1299,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (4, 36, 'Havells',1560,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 37, 'Tebby Bear',1050,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 38, 'Chcolates',500,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 39, 'Barbie doll',1000,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 40, 'Greeting card',200,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 41, 'Bouqet',250,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 42, 'Photo Frame',350,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 43, 'Dairy',560,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 44, 'Laughing Buddha',370,50);
insert into products (GroupId, ProductId, ProductName, Price, BalQuantity) values (5, 45, 'Flower Vase',525,50);

create table cartdetails
(
	UserId integer,
	ProductId integer,
	OrdQuantity integer ,
	constraint uidpid_pk PRIMARY KEY (UserId, ProductId)
);

create table ordertable
(
	UserId integer,
	OrderNo integer,
	OrderDate date not null,
	ProductId integer,
	OrdQuantity integer not null,
	Amount integer not null,
	constraint uidpidordno_pk PRIMARY KEY (UserId, OrderNo, ProductId)
);
