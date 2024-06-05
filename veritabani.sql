CREATE DATABASE telefon_rehberi;

USE telefon_rehberi;

CREATE TABLE kisiler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad VARCHAR(255) NOT NULL,
    soyad VARCHAR(255) NOT NULL,
    telefon VARCHAR(255) NOT NULL
);