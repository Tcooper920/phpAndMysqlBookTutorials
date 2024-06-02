CREATE TABLE IF NOT EXISTS items (
    id int AUTO_INCREMENT PRIMARY KEY,
    name CHAR(16) NOT NULL,
    quantity INT NOT NULL,
    pass TEXT(256) NOT NULL,
    stamp DATETIME NOT NULL
);

INSERT INTO
    items (name, quantity, pass, stamp)
VALUES
    ("Alan", 10, SHA2("m00nriver", 256), NOW()),
    ("Dean", 20, SHA2("bluem00n", 256), NOW()),
    ("Gary", 30, SHA2("m00nlight", 256), NOW()),
    ("Mike", 40, SHA2("m00nshine", 256), NOW());

SELECT name, quantity FROM items
WHERE quantity BETWEEN 15 AND 35;

SELECT stamp, pass FROM items WHERE quantity < 15;
