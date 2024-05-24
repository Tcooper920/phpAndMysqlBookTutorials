CREATE TABLE IF NOT EXISTS pans (
    id NOT NULL,
    pattern VARCHAR(25) NOT NULL,
    price DECIMAL(6, 2)
);

EXPLAIN pans;

ALTER TABLE
    pans
ADD
    PRIMARY KEY(id),
ADD
    COLUMN code INT UNIQUE NOT NULL,
    CHANGE pattern pan_pattern varchar(25) NOT NULL,
    DROP COLUMN price;

EXPLAIN pans;