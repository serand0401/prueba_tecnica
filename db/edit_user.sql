CREATE DATABASE edit_user;
USE edit_user;

CREATE TABLE person (
id_person INT NOT NULL AUTO_INCREMENT,
fullname VARCHAR(80) NOT NULL,
username VARCHAR(20) NOT NULL,
password_person VARCHAR(16) NOT NULL,
confirm_pass VARCHAR(16) NOT NULL,
email VARCHAR(50) NOT NULL,
confirm_email VARCHAR(50) NOT NULL,
social_fb VARCHAR(50) NOT NULL,
social_x VARCHAR(50) NOT NULL,
PRIMARY KEY(id_person)
);