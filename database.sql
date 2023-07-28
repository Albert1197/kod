-- Active: 1689864395314@@127.0.0.1@3306@bootcamps
USE bootcamps;

SELECT * FROM bootcamp1;

INSERT INTO bootcamp1(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("javaScript Front", "Tendra duracion de 6 meses cada modulo ", 23-8-01, 24-1-01,2),
      ("Frameworks JavaScript","Tendra duracion de  un mes cada modulo",23-8-01, 24-1-01,2),
      ("Backend","Se desarrollara en un año el cuursante desarrollara habilidades de un programador backend",23-8-01, 24-1-01,2)
