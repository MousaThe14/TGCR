-- !preview conn=DBI::dbConnect(RSQLite::SQLite())

INSERT INTO Member VALUES("V00123456", "Malron", "Shine", "malron@vsu.edu", "5715555555", 1, 0, 0, 1),
                         ("V00234567", "Sinjer", "Ash", "sinjer@vsu.edu", "2025555555", 0, 1, 1, 0),
                         ("V00345678", "Aryal", "Tide", "aryl@vsu.edu", "7035555555", 1, 1, 1, 1),
                         ("V00456789", "Brock", "Fissure", "brock@vsu.edu", "8045555555", 1, 1, 0, 1),
                         ("V00567890", "Iceac", "Aurora", "iceac@vsu.edu", "2015555555", 0, 1, 1, 0),
                         ("V00678901", "Zap", "Surge", "zap@vsu.edu", "3045555555", 0, 1, 1, 1),
                         ("V00789012", "Airin", "Stream", "airin@vsu.edu", "9095555555", 0, 0, 1, 0),
                         ("V00890123", "Flora", "Bloom", "flora@vsu.edu", "3055555555", 0, 0, 1, 0),
                         ("V00901234", "Mayble", "Cutter", "mayble@vsu.edu", "5045555555", 1, 0, 0, 1),
                         ("V00632167", "Mousa", "Toure", "rtou2167@students.vsu.edu", "5712260974", 1, 1, 1, 1);

UPDATE Member SET InventoryContributor = 1 WHERE FirstName = "Mayble";

SELECT COUNT(Admin) FROM Member WHERE Admin = 1;

INSERT INTO Admin (VNumber) SELECT VNumber FROM Member WHERE admin = 1;

UPDATE Admin SET Password = "password1" WHERE VNumber = "V00123456";
