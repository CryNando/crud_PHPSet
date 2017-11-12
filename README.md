# crud_PHPSet

Some information:

1. The SGBD used was MySQL;
2. The script to create the database, table and insert the admin information, will be posted below.


### Script to create database, table and insert the data for admin ###


CREATE DATABASE crud_PHPSet;

USE crud_PHPSet;

CREATE TABLE `user` (firstname varchar(30) NOT NULL, lastname varchar(30) NOT NULL, username varchar(16) NOT NULL, password varchar(16) NOT NULL, type int NOT NULL, birthday varchar(16) NOT NULL, cpf varchar(16) NOT NULL, phone varchar(16) NOT NULL, email varchar(50) NOT NULL, street varchar(100) NOT NULL, number int NOT NULL, complement varchar(50), city varchar(50) NOT NULL, cep varchar(16) NOT NULL, country varchar(30) NOT NULL, PRIMARY KEY(cpf));


INSERT INTO `user` VALUES ("Admin","Admin","admin","123456",1,"11/11/1111","111.111.111-11","(11)1111-1111", "admin@gmail.com", "Admin Street" , 10, "Nope", "New York", "11111-111", "USA");

### End of Script ###



This project was developed by:

Luis F. P. C. Filho

Rodrigo R. Galvão

Rogério T. Hirata

Tiago Alves da Silva
