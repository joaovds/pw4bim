CREATE DATABASE pw3;

USE pw3;

CREATE TABLE tb_user (
  cd INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(80) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL
);