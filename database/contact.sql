-- CREATE DATABSE
CREATE DATABASE IF NOT EXISTS contact-form-db;

-- USE EXIST DATABASE
use contact-form-db;

-- CREATE TABLE

CREATE TABLE `contactform`{
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `subject` VARCHAR(100) NOT NULL,
    `message` VARCHAR(100) NOT NULL
}