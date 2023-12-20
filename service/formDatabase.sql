-- Active: 1702969265829@@127.0.0.1@3306@form
CREATE DATABASE IF NOT EXISTS form;
USE form;

     CREATE or REPLACE TABLE form_data (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nom VARCHAR(255),
                    email VARCHAR(255),
                    message TEXT
                );