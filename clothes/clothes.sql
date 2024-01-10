-- phpMyAdmin SQL Dump
-- Emma Bui | Webd167 
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: November 30, 2023 at 09:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `Webd167`
--


-- Table: user
CREATE TABLE user (
    user_id INT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15),
    location VARCHAR(100),
    user_type VARCHAR(50)
);

-- Table: item
CREATE TABLE item (
    seller_id INT,
    item_id INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    condition VARCHAR(50),
    category VARCHAR(50),
    price DECIMAL(10, 2),
    FOREIGN KEY (seller_id) REFERENCES user(user_id) ON DELETE CASCADE
);

-- Table: business
CREATE TABLE business (
    business_id INT PRIMARY KEY,
    seller_id INT,
    buyer_id INT,
    date DATE,
    item_id INT,
    status VARCHAR(50),
    FOREIGN KEY (seller_id) REFERENCES user(user_id) ON DELETE CASCADE,
    FOREIGN KEY (buyer_id) REFERENCES user(user_id) ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES item(item_id) ON DELETE CASCADE
);

-- Table: location
CREATE TABLE location (
    location_id INT PRIMARY KEY,
    name VARCHAR(100),
    wait_list INT,
    capacity INT
);

-- Table: review
CREATE TABLE review (
    review_id INT PRIMARY KEY,
    rating INT,
    comments TEXT,
    item_id INT,
    reviewer_user_id INT,
    reviewed_user_id INT,
    date DATE,
    FOREIGN KEY (item_id) REFERENCES item(item_id) ON DELETE CASCADE,
    FOREIGN KEY (reviewer_user_id) REFERENCES user(user_id) ON DELETE CASCADE,
    FOREIGN KEY (reviewed_user_id) REFERENCES user(user_id) ON DELETE CASCADE
);

-- Relationship between the location and business
ALTER TABLE business ADD CONSTRAINT FK_location_business
    FOREIGN KEY (location_id) REFERENCES location(location_id) ON DELETE CASCADE;
    

-- INSERT INTO user (user_id, username, email, password, phone_number, location, user_type)
VALUES (1, 'apple bottom', 'redapples@gmail.com', 'greenredyellow1', '1234567890', 'New York', 'Seller');

--INSERT INTO item (seller_id, item_id, name, description, condition, category, price)
VALUES (1, 1, 'Apple Bottom Jeans', 'Y2K dark wash denim jeans', 'Mint Condition', 'Clothing', 42.00);

-- INSERT INTO business (business_id, seller_id, buyer_id, date, item_id, status)
VALUES (1, 1, 2, '2023-12-12', 1, 'Completed');

-- INSERT INTO location (location_id, name, wait_list, capacity)
VALUES (1, 'Clothes and More', 420, 50);

-- INSERT INTO review (review_id, rating, comments, item_id, reviewer_user_id, reviewed_user_id, date)
VALUES (1, 4, 'Item came quick and exactly as described!', 1, 2, 1, '2023-12-12');