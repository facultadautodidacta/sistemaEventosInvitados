CREATE DATABASE sei;
USE sei;

CREATE TABLE t_usuarios (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(245) NOT NULL,
  `password` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id_usuario`));

CREATE TABLE `sei`.`t_eventos` (
  `id_evento` INT NOT NULL AUTO_INCREMENT,
  `hora_inicio` DATETIME NULL,
  `hora_fin` DATETIME NULL,
  `fecha` DATE NULL,
PRIMARY KEY (`id_evento`));
CREATE TABLE `sei`.`t_invitados` (
  `id_invitado` INT NOT NULL AUTO_INCREMENT,
  `id_evento` INT NULL,
  `nombre_invitado` VARCHAR(245) NULL,
  `email` VARCHAR(245) NULL,
  PRIMARY KEY (`id_invitado`));

ALTER TABLE `sei`.`t_invitados` 
ADD INDEX `fkeventos_idx` (`id_evento` ASC);
;
ALTER TABLE `sei`.`t_invitados` 
ADD CONSTRAINT `fkeventos`
  FOREIGN KEY (`id_evento`)
  REFERENCES `sei`.`t_eventos` (`id_evento`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
ALTER TABLE `sei`.`t_eventos` 
ADD COLUMN `id_usuario` INT NULL AFTER `id_evento`,
ADD INDEX `fkusuarios_idx` (`id_usuario` ASC);
;
ALTER TABLE `sei`.`t_eventos` 
ADD CONSTRAINT `fkusuarios`
  FOREIGN KEY (`id_usuario`)
  REFERENCES `sei`.`t_usuarios` (`id_usuario`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

-- este es el campo que faltaba

ALTER TABLE `sei`.`t_eventos` 
ADD COLUMN `evento` VARCHAR(245) NULL AFTER `id_usuario`;


-- este es el insert para pruebas

INSERT INTO t_eventos (id_usuario,evento, hora_inicio, hora_fin, fecha) VALUES 
(1,'Evento 1', '2023-04-11 10:00:00', '2023-04-11 12:00:00' , '2023-04-11' ),
  (1,'Evento 2', '2023-04-12 14:00:00', '2023-04-12 16:00:00', '2023-04-12'),
  (1,'Evento 3', '2023-04-13 09:00:00', '2023-04-13 11:00:00', '2023-04-13');
