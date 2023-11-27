DROP DATABASE IF EXISTS DEVDOSSIER;
CREATE DATABASE DEVDOSSIER;
USE DEVDOSSIER;

CREATE TABLE USER(
COD_USER INT NOT NULL AUTO_INCREMENT,
EMAIL VARCHAR(255),
PASSWORD VARCHAR(255),

PRIMARY KEY (COD_USER)
);

CREATE TABLE TITLE(
COD_TITLE INT NOT NULL AUTO_INCREMENT,
TITLE_REAL VARCHAR(255),
TITLE_SEARCH VARCHAR(255), 
TYPE VARCHAR(255),
ID VARCHAR(20),
COLOR VARCHAR(6),

PRIMARY KEY (COD_TITLE)
);