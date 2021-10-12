/*CREATE TABLE comunidad(
    id_comunidad INTEGER PRIMARY KEY,
    nombre_comunidad VARCHAR(60)
);
*/
/*
CREATE TABLE administrador(
    id_administrador INTEGER PRIMARY KEY,
    correo_administrador VARCHAR(60),
    nombre_administrador VARCHAR(60),
    rut_administrador VARCHAR(60),
    contrasena_administrador VARCHAR(20)
);}*/

CREATE TABLE reunion (
    id_reunion INTEGER PRIMARY KEY,
    nombre_reunion VARCHAR(60),
    fecha_reunion DATE, /*Fecha seria "Dia" en el MER y MR*/
    hora_reunion VARCHAR(5),
    ubicacion_reunion VARCHAR(50),
    tema_reunion VARCHAR(1000),
    FOREIGN KEY (id_comunidad) REFERENCES comunidad(id_comunidad),
    FOREIGN KEY (id_administrador) REFERENCES administrador(id_administrador)
);
