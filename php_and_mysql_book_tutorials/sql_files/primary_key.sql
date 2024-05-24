CREATE TABLE IF NOT EXISTS cups (
    id int AUTO_INCREMENT PRIMARY KEY,
    cup_pattern varchar(25)
);

CREATE TABLE IF NOT EXISTS pots (
    id int AUTO_INCREMENT,
    pot_pattern varchar(25),
    PRIMARY KEY(id)
);