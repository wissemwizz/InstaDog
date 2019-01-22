-- VDC

CREATE DATABASE InstaDog; 

CREATE USER 'adminInstadog'@'localhost' IDENTIFIED BY 'Inst@D0g';
GRANT ALL ON Instadog.* TO 'adminInstadog'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE User
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    userName VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    dateConnect DATE  NOT NULL,
    mailAdress VARCHAR (255)
);

CREATE TABLE Dog
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    race VARCHAR(50) NOT NULL,
    mix bool,
    birthdate DATE,
    sex VARCHAR,
    image VARCHAR (255),
    userId INT(100),
  FOREIGN KEY (userId) REFERENCES User(id) 
);

CREATE TABLE Article
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    text VARCHAR (255),
    publicationDate VARCHAR (50),
    dogId INT (100),
    FOREIGN KEY (dogId) REFERENCES Dog(id)
);

CREATE TABLE Comment 
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    text VARCHAR(255) NOT NULL,
    publicationDate VARCHAR (255),
    userId INT (100),
    FOREIGN KEY (userId) REFERENCES User(id),
    articleId INT (100),
    FOREIGN KEY (articleId) REFERENCES Article(id)
);
