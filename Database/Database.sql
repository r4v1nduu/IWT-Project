CREATE TABLE contact_data (
    fname VARCHAR(20),
    lname VARCHAR(20),
    email VARCHAR(50),
    cnumber iNT,
    subject VARCHAR(200),
    detail VARCHAR (1000)
);

CREATE TABLE registered_user (
    user_id VARCHAR(10),
    user_type VARCHAR(30),
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    user_email VARCHAR(50),
    user_password VARCHAR(50)
);

CREATE TABLE safari_booking (
    safari_id VARCHAR(10),
    user_email VARCHAR(50),
    route_id VARCHAR(10),
    boat_id VARCHAR(10),
    time_slot VARCHAR(10),
    seat_count INT,
    s_date DATE
);