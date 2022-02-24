CREATE USER 'overlord_admin'@'localhost' IDENTIFIED BY ''; -- Creación del usuario
GRANT ALL PRIVILEGES ON overlord_db.* to 'overlord_admin'@'localhost'; -- Asignar persmisos al usuario
-- /////////////////////////////////////////////////////////////////////////
DROP DATABASE overlord_db; -- Borrar la base de datos

-- CREATION OF 'overlord_db' DATABASE
CREATE DATABASE overlord_db DEFAULT CHARSET utf8mb4 COLLATE utf8mb4_general_ci;
USE overlord_db;

-- CREATION OF 'rol' TABLE
CREATE TABLE rol (
    id_rol int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID del rol',
    rol varchar(45) NOT NULL COMMENT 'Nombre del rol'
)ENGINE=INNODB;

-- INSERT VALUES INTO 'usuario' TABLE
INSERT INTO rol (rol) VALUES
('Administrador'),
('Operador'),
('Usuario');

-- CREATION OF 'usuario' TABLE
CREATE TABLE usuario (
    id_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID del usuario',
    nombre varchar(45) NOT NULL COMMENT 'Nombre del usuario',
    apellido_p varchar(45) NOT NULL COMMENT 'Apellido paterno del usuario', 
    apellido_m varchar(45) NOT NULL COMMENT 'Apellido materno del usuario',
    sexo varchar(1) NOT NULL COMMENT 'Hombre (H), Mujer(M)',
    email varchar(60) NOT NULL COMMENT 'Email del usuario',
    password varchar(60) NOT NULL COMMENT 'Contraseña del usuario',
    imagen varchar(1024) NULL COMMENT 'Dirección de la imagen del usuario',
    id_rol int NOT NULL COMMENT 'ID del rol que desempeña el usuario',
    FOREIGN KEY (id_rol) REFERENCES rol(id_rol)
)ENGINE=INNODB;

-- INSERT VALUES INTO 'usuario' TABLE
INSERT INTO usuario (nombre, apellido_p, apellido_m, sexo, email, password, id_rol) VALUES
('Darien', 'Pérez', 'Cano', 'M', 'darien@gmail.com', 'darien', 1),
('Andric', 'Pérez', 'Cano', 'M', 'andric@gmail.com', 'andric', 2),
('Stacey', 'Conde', 'Corona', 'F', 'stacey@gmail.com', 'stacey', 3),
('Paulina', 'Fernández', 'Macia', 'F', 'paulina_905@gmail.com', 'paulina_905', 1),
('Igor', 'Ávila', 'Sánchez', 'F', 'igor_216@gmail.com', 'igor_216', 2),
('Emily', 'Vilchez', 'González', 'F', 'emily_343@gmail.com', 'emily_343', 3),
('Héctor', 'Campo', 'Méndez', 'M', 'héctor_007@gmail.com', 'hector_007', 1);
