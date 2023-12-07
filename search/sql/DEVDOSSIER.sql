DROP DATABASE IF EXISTS DEVDOSSIER;
CREATE DATABASE DEVDOSSIER;
USE DEVDOSSIER;

CREATE TABLE USER(
    COD_USER INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    EMAIL VARCHAR(255),
    PASSWORD VARCHAR(255),
    NAME VARCHAR(255)
);

CREATE TABLE LIKES(
    COD_USER INT,
    COD_PAGE INT,

    FOREIGN KEY (COD_PAGE) REFERENCES PAGE(COD_PAGE),
    FOREIGN KEY (COD_USER) REFERENCES USER(COD_USER)
);

CREATE TABLE PAGE(
    COD_PAGE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NUM_LIKE INT, 
    VIEWS INT,
    NAME VARCHAR(255)
);

CREATE TABLE TITLE(
    COD_TITLE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    TITLE_REAL VARCHAR(255),
    TITLE_SEARCH VARCHAR(255),
    DESC_TITLE VARCHAR(255),
    ID INT, 
    COD_PAGE INT,

    FOREIGN KEY (COD_PAGE) REFERENCES PAGE(COD_PAGE)
);