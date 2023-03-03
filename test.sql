 DROP DATABASE IF EXISTS project ;

 -- Creer la BDD
 CREATE DATABASE project;

 --Creer les tables
 CREATE TABLE project.contact(
    id TINYINT PRIMARY KEY auto_increment,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message text NOT NULL
 );