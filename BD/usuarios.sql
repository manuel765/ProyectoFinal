CREATE TABLE usuarios(
	id_usuario int AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(50),
	fechnac varchar(12),
	correo varchar(50),
	nombre_usuario varchar(20),
	password char(128),
	oregano char(32),
	permiso int
);