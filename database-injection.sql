-- SQL command to create database and table to record information collected from booked.php
CREATE DATABASE IF NOT EXISTS booking_db;
USE booking_db;

CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stylist VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL
);
