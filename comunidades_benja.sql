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

CREATE TABLE Pertenece (
     id_usuario INTEGER,
     id_comunidad INTEGER,
     PRIMARY KEY (id_usuario, id_comunidad),
     FOREIGN KEY (id_usuario) REFERENCES usuario_normal(id_usuario)
);

CREATE TABLE Administra (
     id_usuario INTEGER,
     id_comunidad INTEGER,
     PRIMARY KEY (id_usuario, id_comunidad),
     FOREIGN KEY (id_usuario) REFERENCES usuario_admin(id_usuario)
);