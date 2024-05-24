CREATE TABLE IF NOT EXISTS pans (
    id int NOT NULL,
    pattern varchar(25) NOT NULL,
    price decimal(6, 2)
);

EXPLAIN pans;

ALTER TABLE
    pans
ADD
    PRIMARY KEY(id),
ADD
    COLUMN code int UNIQUE NOT NULL,
    CHANGE pattern pan_pattern varchar(25) NOT NULL,
    DROP COLUMN price;

EXPLAIN pans;