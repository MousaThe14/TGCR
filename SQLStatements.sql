-- !preview conn=DBI::dbConnect(RSQLite::SQLite())

INSERT INTO Member VALUES("V00123456", "Malron", "Shine", "malron@vsu.edu", 5715555555, 1, 0, 0, 1),
                         ("V00234567", "Sinjer", "Ash", "sinjer@vsu.edu", 2025555555, 0, 1, 1, 0),
                         ("V00345678", "Aryal", "Tide", "aryl@vsu.edu", 7035555555, 1, 1, 1, 1),
                         ("V00456789", "Brock", "Fissure", "brock@vsu.edu", 8045555555, 1, 1, 0, 1),
                         ("V00567890", "Iceac", "Aurora", "iceac@vsu.edu", 2015555555, 0, 1, 1, 0),
                         ("V00678901", "Zap", "Surge", "zap@vsu.edu", 3045555555, 0, 1, 1, 1),
                         ("V00789012", "Airin", "Stream", "airin@vsu.edu", 9095555555, 0, 0, 1, 0),
                         ("V00890123", "Flora", "Bloom", "flora@vsu.edu", 3055555555, 0, 0, 1, 0),
                         ("V00901234", "Mayble", "Cutter", "mayble@vsu.edu", 5045555555, 1, 0, 0, 1),
                         ("V00632167", "Mousa", "Toure", "rtou2167@students.vsu.edu", 5712260974, 1, 1, 1, 1);
                         
                         
                         
INSERT INTO Consoles VALUES ("V00234567", "Switch", 2), ("V00345678", "PC", 4), ("V00456789", "PC", 2), ("V00567890", "Xbox Series X", 2), ("V00678901", "Xbox Series X", 4), ("V00632167", "PC", 1);

INSERT INTO Games VALUES("V00234567", "Mario Kart 8 Deluxe", "Switch"), ("V00345678", "Borderlands 3", "PC"), ("V00456789", "Age of Empires II", "PC"), ("V00567890", "Call of Duty", "Xbox Series X"), ("V00678901", "Borderlands 3", "Xbox Series X"), ("V00632167", "Super Smash Bros. Ultimate", "Switch");

INSERT INTO Games VALUES("V00234567", "Super Smash Bros. Ultimate", "Switch"), ("V00234567", "Nintendo Switch Sports", "Switch"), ("V00567890", "Borderlands 3", "Xbox Series X"), ("V00632167", "Borderlands 3", "PC");

--If you want to know who in the club owns an Xbox Series X for an event
SELECT * FROM Member LEFT JOIN Consoles ON Member.VNumber = Consoles.VNumber WHERE Consoles.Model = "Xbox Series X" 



-- This join would allow you you to see who contirubted consoles that aren't club admins
SELECT Consoles.Model, Consoles.VNumber FROM Consoles INNER JOIN Member ON Consoles.VNumber = Member.VNumber WHERE Member.Admin = 0;


-- See who has Borderlands 3
SELECT Games.Title, Consoles.Model, Games.VNumber  FROM Games INNER JOIN Consoles ON Games.Console = Consoles.Model WHERE Games.Title = "Borderlands 3";

UPDATE Member SET InventoryContributor = 1 WHERE FirstName = "Mayble";

UPDATE Member SET Admin = 1 WHERE FirstName = "Mousa";

-- Selects non-leader members of organization for review
SELECT COUNT(Admin) FROM Member WHERE Admin = 0; 

-- Auto-adds an Admin from the Member section into the Admin section
INSERT INTO Admin (VNumber) SELECT VNumber FROM Member WHERE admin = 1;

UPDATE Admin SET Password = "password1" WHERE VNumber = "V00123456";

UPDATE Admin SET Password = "password2" WHERE VNumber = "V00345678";


--Brings up contact information of admin
SELECT * FROM Admin LEFT JOIN Member ON Admin.VNumber = Member.VNumber;



CREATE TABLE PhoneContact AS SELECT VNumber, FirstName, LastName, Phone FROM Member WHERE ContactPhone = 1;

CREATE TABLE EmailContact AS SELECT VNumber, FirstName, LastName, Email FROM Member WHERE ContactEmail = 1;

INSERT INTO EventLogin (VNumber, FirstName) SELECT VNumber, FirstName FROM Member WHERE admin = 1;

SELECT * FROM EventLogin WHERE LoginTime < 140000;

SELECT * FROM EventLogin INNER JOIN Member ON EventLogin.VNumber = Member.VNumber WHERE Member.Admin = 0 & EventLogin.LoginTime < 120000;
