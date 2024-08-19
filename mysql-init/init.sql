CREATE DATABASE IF NOT EXISTS `aquaswift`;

USE `aquaswift`;

CREATE TABLE contact_data (
    fname VARCHAR(30),
    lname VARCHAR(30),
    email VARCHAR(80),
    cnumber iNT,
    subject VARCHAR(200),
    detail VARCHAR (1000)
);

CREATE TABLE registered_user (
    user_id INT NOT NULL AUTO_INCREMENT,
    user_type VARCHAR(30),
    first_name VARCHAR(30),
    last_name VARCHAR(30),
    user_email VARCHAR(80),
    user_password VARCHAR(60),

    CONSTRAINT User_PK PRIMARY KEY (user_id)
);

CREATE TABLE safari_booking (
    safari_id INT NOT NULL AUTO_INCREMENT,
    user_email VARCHAR(80),
    route_id VARCHAR(10),
    boat_id VARCHAR(10),
    time_slot VARCHAR(10),
    seat_count INT,
    s_date DATE,

    CONSTRAINT Booking_PK PRIMARY KEY (safari_id)
);

CREATE TABLE newsletter(
	name VARCHAR(30),
	email VARCHAR(80)
);
