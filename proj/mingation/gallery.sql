#Creationg DB
CREATE DATABASE gallery;

#Creating table
use gallery;
CREATE TABLE images (
  id INT(8) AUTO_INCREMENT PRIMARY KEY ,
  name VARCHAR(256) NOT NULL ,
  url VARCHAR(512) NOT NULL
);

#Adding values for develop
INSERT INTO gallery.images (name, url)
    VALUES
      ('Image 1', 'img/gallery-1.jpg'),
      ('Image 2', 'img/gallery-2.jpg'),
      ('Image 3', 'img/gallery-3.jpg'),
      ('Image 4', 'img/gallery-4.jpg');