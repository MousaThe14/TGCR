CREATE TABLE Member (
  VNumber varchar(9) NOT NULL,
  FirstName varchar(30) NOT NULL,
  LastName varchar(30) NOT NULL,
  Email varchar(100) NOT NULL,
  Phone int(10),
  Admin boolean NOT NULL DEFAULT 0,
  InventoryContributor boolean NOT NULL DEFAULT 0,
  ContactPhone boolean DEFAULT 0,
  ContactEmail boolean DEFAULT 0,
  PRIMARY KEY (`VNumber`)
);

CREATE TABLE Admin (
 `VNumber` varchar(9) NOT NULL,
 `Password` varchar(50) NOT NULL,
 PRIMARY KEY (`VNumber`),
	FOREIGN KEY (`VNumber`) REFERENCES `Member` (`VNumber`)
);

CREATE TABLE `Consoles`(
  `VNumber` varchar(9) NOT NULL,
  `Model` varchar(20) NOT NULL,
	PRIMARY KEY (`VNumber`, `Model`),
	FOREIGN KEY (`VNumber`) REFERENCES `Member` (`VNumber`)
);



CREATE TABLE EventLogin (
  LoginDate date NOT NULL,
  LoginTime time NOT NULL,
  VNumber varchar(9) NOT NULL,
  FirstName varchar(30) NOT NULL,
  PRIMARY KEY (`LoginDate`, `LoginTime`, `VNumber`),
  FOREIGN KEY (`VNumber`) REFERENCES `Member` (`VNumber`)
  );
  
  
  
  CREATE TABLE `Games`(
	VNumber varchar(9) NOT NULL,
	Title varchar(50) NOT NULL,
	Console varchar(20) NOT NULL,
	PVPorPVE varchar(3),
	Genre varchar(50),
	PRIMARY KEY (`VNumber`,`Title`),
	FOREIGN KEY (`VNumber`) REFERENCES `Member` (`VNumber`)
)
