CREATE DATABASE IF NOT EXISTS msisdb;
USE msisdb;

DROP TABLE IF EXISTS books;
CREATE TABLE books (
    id int PRIMARY KEY AUTO_INCREMENT,
    title varchar(48),
    author varchar(48),
    published year,
    publisher varchar(48),
    pages int,
    msrp DECIMAL(4,2)
);

INSERT INTO books(id, title, author, published, publisher, pages, msrp) VALUES
    (1, 'Bloodless', 'Douglas Preston and Lincoln Child', 2021, 'Grand Central Publishing', 400, 29),
    (2, 'Billy Summers', 'Stephen King', 2021, 'Scribner', 528, 30),
    (3, 'Complications', 'Danielle Steel', 2021, 'Delacorte Press', 256, 28.99),
    (4, 'The Noise', 'James Patterson', 2021, 'Little, Brown and Company', 432, 28)
;