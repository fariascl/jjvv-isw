/* Tablas generales para primera entrega */

CREATE TABLE usuario (
	id_usuario VARCHAR(40) PRIMARY KEY,
	nombre VARCHAR(50),
    rut VARCHAR(12),
	correo VARCHAR(50),
	clave VARCHAR(15)
);

CREATE TABLE usuario_normal (
	id_usuario VARCHAR(40) PRIMARY KEY,
	FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE usuario_admin (
	id_usuario VARCHAR(40) PRIMARY KEY,
	FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE comunidad (
    id_comunidad INTEGER PRIMARY KEY,
    nombre_comunidad VARCHAR(60)
);

CREATE TABLE reunion (
    id_reunion INTEGER PRIMARY KEY,
    nombre_reunion VARCHAR(60),
    fecha_reunion DATE, /*Fecha seria "Dia" en el MER y MR*/
    hora_reunion VARCHAR(5),
    ubicacion_reunion VARCHAR(50),
    tema_reunion VARCHAR(1000),
    id_comunidad INTEGER,
    id_usuario VARCHAR(40),
    FOREIGN KEY (id_comunidad) REFERENCES comunidad(id_comunidad),
    FOREIGN KEY (id_usuario) REFERENCES usuario_admin(id_usuario)
);
