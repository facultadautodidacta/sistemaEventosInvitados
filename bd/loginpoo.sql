CREATE DATABASE sei;
USE sei;

CREATE TABLE t_usuarios (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(245) NOT NULL,
  `password` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id_usuario`));