CREATE DATABASE IF NOT EXISTS baseautos;
SHOW DATABASES;
SHOW TABLES FROM baseautos;

USE baseautos;
CREATE TABLE auto (idauto TINYINT (3) UNSIGNED DEFAULT '0', marca CHAR (50) DEFAULT '0', modelo CHAR (50), agno CHAR (20), cilindro TINYINT(3), precio DOUBLE (10,2), imagen CHAR (20));
USE baseautos;
INSERT INTO auto (idauto, marca, modelo, agno, cilindro, precio, imagen) VALUES (1, 'PEUGEOT', 'PARTNET', '1995', 4, 4500, 'auto1.jpg');
INSERT INTO auto VALUES (2, 'PEUGEOT', 'M1007', '1996', 4, 8500, 'auto2.jpg');
INSERT INTO auto VALUES (3, 'TOYOTA', 'M1X05', '1995', 6, 11500, 'auto3.jpg');
INSERT INTO auto VALUES (4, 'PEUGEOT', 'H1X07', '1999', 6, 18500, 'auto4.jpg');
INSERT INTO auto VALUES (5, 'MERCEDES', 'HY50D', '2001', 5, 10500, 'auto5.jpg');
INSERT INTO auto VALUES (6, 'PEUGEOT', 'T1007', '2002', 6, 8520, 'auto6.jpg');
INSERT INTO auto VALUES (7, 'FIAT', 'R1007', '2005', 7, 16500, 'auto7.jpg');
INSERT INTO auto VALUES (8, 'BMW', 'T1007', '2002', 8, 5000, 'auto8.jpg');
INSERT INTO auto VALUES (9, 'NISSAN', 'YHY03', '2006', 2, 12000, 'auto9.jpg');
INSERT INTO auto VALUES (10, 'PEUGEOT', 'G1004', '2004', 3, 10500, 'auto10.jpg');
INSERT INTO auto VALUES (11, 'NISSAN', 'A1004', '2004', 4, 9500, 'auto11.jpg');
INSERT INTO auto VALUES (12, 'PEUGEOT', 'G1001', '2002', 5, 10500, 'auto1.jpg');
INSERT INTO auto VALUES (13, 'TOYOTA', 'AV007', '20 S02', 6, 14500, 'auto13.jpg');
INSERT INTO auto VALUES (14, 'PEUGEOT', 'HT100', '2003', 4, 19500, 'auto14.jpg');
INSERT INTO auto VALUES (15, 'PEUGEOT', 'Q1007', '2002', 8, 9500, 'auto15.jpg');
INSERT INTO auto VALUES (16, 'VOLKSWAGEN', 'N1007', '1996', 4, 8500, 'auto16.jpg');
INSERT INTO auto VALUES (17, 'PEUGEOT', 'M1X05', '1995', 6, 11500, 'auto1.jpg');
INSERT INTO auto VALUES (18, 'TOYOTA', 'H1X07', '1999', 6, 18500, 'auto2.jpg');
INSERT INTO auto VALUES (19, 'PEUGEOT', 'HY50D', '2001', 5, 10500, 'auto5.jpg');
INSERT INTO auto VALUES (20, 'PEUGEOT', 'T1007', '2002', 6, 8520, 'auto6.jpg');
INSERT INTO auto VALUES (21, 'PEUGEOT', 'R1007', '2005', 7, 16500, 'auto7.jpg');
INSERT INTO auto VALUES (22, 'PEUGEOT', 'T1007', '2002', 8, 5000, 'auto8.jpg');
INSERT INTO auto VALUES (23, 'NISSAN', 'YHY03', '2006', 2, 12000, 'auto9.jpg');
INSERT INTO auto VALUES (24, 'PEUGEOT', 'G1004', '2004', 3, 10500, 'auto10.jpg');
INSERT INTO auto VALUES (25, 'PEUGEOT', 'A1004', '2004', 4, 9500, 'auto11.jpg');
INSERT INTO auto VALUES (26, 'PEUGEOT', 'G1001', '2002', 5, 10500, 'auto12.jpg');
INSERT INTO auto VALUES (27, 'PEUGEOT', 'AV007', '2002', 6, 14500, 'auto13.jpg');
INSERT INTO auto VALUES (28, 'PEUGEOT', 'HT100', '2003', 4, 19500, 'auto14.jpg');
INSERT INTO auto VALUES (29, 'PEUGEOT', 'Q1007', '2002', 8, 9500, 'auto15.jpg');
INSERT INTO auto VALUES (30, 'MERCEDES BENZ', 'Q1007', '2002', 8, 9500, 'auto17.jpg');




USE baseautos;

#creacion de tabla de autosclientes

CREATE TABLE autosclientes (idauto TINYINT (3) UNSIGNED DEFAULT '0',idcliente TINYINT (3), nombre CHAR (50) DEFAULT '0');

#insercion de registros
INSERT INTO autosclientes(idauto, idcliente, nombre) VALUES (1, 1, 'ANDREA SALAS');
INSERT INTO autosclientes VALUES (2, 2, 'FERNANDO QUIROZ');
INSERT INTO autosclientes VALUES (2, 3, 'SEBASTIAN FERNANDEZ');
INSERT INTO autosclientes VALUES (3, 4, 'ADRIAN CABRERA');
INSERT INTO autosclientes VALUES (4, 5, 'MIRELLA BALDERRAMA');
INSERT INTO autosclientes VALUES (5, 6, 'CARLA SOTELO');
INSERT INTO autosclientes VALUES (4, 7, 'TERESA GOMEZ');
INSERT INTO autosclientes VALUES (5, 8, 'SANDRA LLANOS');
INSERT INTO autosclientes VALUES (5, 9, 'RAUL POLAR MENDOZA');
INSERT INTO autosclientes VALUES (6, 10, 'GINA ANDREI');
INSERT INTO autosclientes VALUES (7, 11, 'JOAQUIN MORA');
INSERT INTO autosclientes VALUES (9, 12, 'SANTIAGO AMERICO');
INSERT INTO autosclientes VALUES (5, 13, 'ANA CECILIA VAL');
INSERT INTO autosclientes VALUES (6, 14, 'ITALO PORTILLA');
INSERT INTO autosclientes VALUES (7, 15, 'JORGE MENDOZA');
INSERT INTO autosclientes VALUES (10, 16, 'TATIANA SOSA');
INSERT INTO autosclientes VALUES (9, 17, 'PILAR SANCHEZ');
INSERT INTO autosclientes VALUES (12, 18, 'PATRICIA MORALES');
INSERT INTO autosclientes VALUES (13, 19, 'SUSANA LOPEZ');
INSERT INTO autosclientes VALUES (14, 20, 'CLARA BUENDIA');
INSERT INTO autosclientes VALUES (8, 21, 'DANITZA ORE');
