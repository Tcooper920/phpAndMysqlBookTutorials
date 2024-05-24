CREATE TABLE IF NOT EXISTS products (
    id int UNIQUE AUTO_INCREMENT,
    code int NOT NULL,
    name varchar(25) NOT NULL,
    quantity int DEFAULT 1 NULL,
    price decimal(6, 2) NOT NULL
); 