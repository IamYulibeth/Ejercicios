CREATE DATABASE users;

USE users;

CREATE TABLE users(
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25),
    last_name VARCHAR(25),
    family_name VARCHAR(25),
    email VARCHAR(50),
    phone_number VARCHAR(50),
    date_birth DATE
    
);


--DATE 1990/09/25
--DATETIME 1990/09/25 01:05:59 -> VIENE DE FORMULARIOS
--TIMESTAMP 1990/09/25 01:05:59 -> ZONA HORARIA DEL CLIENTE