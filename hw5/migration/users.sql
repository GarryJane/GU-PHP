#Creationg DB
CREATE DATABASE shop;

#Creating table
use shop;
CREATE TABLE users (
  id INT(8) AUTO_INCREMENT PRIMARY KEY ,
  name VARCHAR(256) NOT NULL ,
  password VARCHAR(256) NOT NULL
);

#Adding values for develop
INSERT INTO shop.users (name, password)
VALUES
  ('user1', '111'),
  ('user2', '222'),
  ('user3', '333'),
  ('user4', '444');