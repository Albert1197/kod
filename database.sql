-- Active: 1689864395314@@127.0.0.1@3306@bootcamps
USE bootcamps;

SELECT * FROM bootcamp1;

SELECT INTO bootcamp1(title, descripttion, start_bootcamp, end_bootcamp, modules)
VALUES("javaScript Front", "un bootcamp", 23-8-01, 24-1-01,2),
      ("","","", "",""),
      ("","","", "","")
