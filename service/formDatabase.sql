CREATE DATABASE IF NOT EXISTS form;
USE form;

CREATE TABLE IF NOT EXISTS form_data (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message VARCHAR(255) NOT NULL
);