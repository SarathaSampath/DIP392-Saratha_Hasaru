CREATE DATABASE eazy_baber;
USE eazy_baber;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    contact VARCHAR(15),
    password VARCHAR(255)
);

CREATE TABLE time_slots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slot_date DATE,
    slot_time TIME,
    is_booked BOOLEAN DEFAULT 0
);

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    slot_id INT,
    booking_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (slot_id) REFERENCES time_slots(id)
);