CREATE DATABASE livraria_bd;

USE livraria_bd;

create table bookmaker(
  id integer(11) primary key NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  cep varchar(9) NOT NULL,
  number integer(11) NOT NULL,
  street varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  neighborhood varchar(50) NOT NULL,
  state varchar(2) NOT NULL,
  status boolean DEFAULT 1,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
);

create table author (
  id integer(11) primary key NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  age integer(3) NOT NULL,
  status boolean DEFAULT 1,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL

);

create table book (
  id integer(11) primary key NOT NULL AUTO_INCREMENT,
  title varchar(50) NOT NULL,
  id_author integer(11) NOT NULL,
  id_bookmaker integer(11) NULL,
  price decimal (10,2) NOT NULL,
  status boolean DEFAULT 1,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  foreign key(id_author) references author(id),
  foreign key(id_bookmaker) references bookmaker(id)
);