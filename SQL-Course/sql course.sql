create database holamundo;
use holamundo;
show databases;
CREATE TABLE animales (
	id int,
    tipo varchar(255),
    estado varchar(255),
    primary key (id)
);

-- INSERT INTO animales (tipo,estado) VALUES ('chanchito','Feliz');
-- Esta linea no sera ejecutada
ALTER TABLE animales MODIFY COLUMN id int auto_increment;

SHOW CREATE TABLE animales ;

CREATE TABLE `animales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;

INSERT INTO animales (tipo,estado) VALUES ('chanchito','Feliz');
INSERT INTO animales (tipo,estado) VALUES ('Dragon','Feliz');
INSERT INTO animales (tipo,estado) VALUES ('Felipe','Triste');

SELECT * FROM animales;
SELECT * FROM animales WHERE id=1;
SELECT * FROM animales WHERE estado='Feliz' AND tipo='chanchito';

UPDATE animales SET estado = 'Feliz' WHERE id=4;

DELETE FROM animales WHERE estado ='feliz';

-- Error Code: 1175. You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column.  To disable safe mode, toggle the option in Preferences -> SQL Editor and reconnect.

DELETE FROM animales WHERE id=4;
DELETE FROM animales WHERE id=1;

SELECT * FROM animales;

UPDATE animales SET estado = 'sad' where tipo ='dragon';
-- Esto tambien da error 1175

