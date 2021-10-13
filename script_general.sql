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
    id_comunidad INTEGER NOT NULL AUTO_INCREMENT,
    nombre_comunidad VARCHAR(60),
    descripcion_comunidad VARCHAR(500),
    PRIMARY KEY (id_comunidad)
);

CREATE TABLE reunion (
    id_reunion INTEGER PRIMARY KEY AUTO_INCREMENT,
    tema_reunion VARCHAR(60),
    fecha_reunion DATE, /*Fecha seria "Dia" en el MER y MR*/
    hora_reunion VARCHAR(5),
    ubicacion_reunion VARCHAR(50),
    descripcion_reunion VARCHAR(1000),
    id_comunidad INTEGER,
    id_usuario VARCHAR(40),
    FOREIGN KEY (id_comunidad) REFERENCES comunidad(id_comunidad),
    FOREIGN KEY (id_usuario) REFERENCES usuario_admin(id_usuario)
);

CREATE TABLE acta (
    id_acta INTEGER PRIMARY KEY AUTO_INCREMENT,
    titulo_acta VARCHAR(60),
    contenido_acta VARCHAR(5000),
    fecha_acta DATE
);

CREATE TABLE registra (
    id_reunion INTEGER,
    id_acta INTEGER,
    PRIMARY KEY (id_reunion, id_acta),
    FOREIGN KEY (id_reunion) REFERENCES reunion(id_reunion),
    FOREIGN KEY (id_acta) REFERENCES acta(id_acta)
);

CREATE TABLE pertenece (
    id_usuario INTEGER,
    id_comunidad INTEGER,
    PRIMARY KEY (id_usuario, id_comunidad),
    FOREIGN KEY (id_usuario) REFERENCES usuario_normal(id_usuario)
);

CREATE TABLE administra (
    id_usuario INTEGER,
    id_comunidad INTEGER,
    PRIMARY KEY (id_usuario, id_comunidad),
    FOREIGN KEY (id_usuario) REFERENCES usuario_admin(id_usuario)
);
CREATE TABLE tiene (
    id_reunion INTEGER,
    id_comunidad INTEGER,
    PRIMARY KEY (id_reunion, id_comunidad),
    FOREIGN KEY (id_reunion) REFERENCES reunion(id_reunion),
    FOREIGN KEY (id_comunidad) REFERENCES comunidad(id_comunidad)
);