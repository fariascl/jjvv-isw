CREATE TABLE reunion (
    id_reunion INTEGER PRIMARY KEY,
    nombre_reunion VARCHAR(60),
    fecha_reunion DATE,
    hora_reunion VARCHAR(5), /* Formato: 10:50 */
    tema_reunion VARCHAR(1000),
    id_acta INTEGER, /* Pensar bien si poner acta o no ya que si hay reunion siempre habra acta, el id de reunion es el mismo id*/
    titulo_acta VARCHAR(60),
    contenido_acta VARCHAR(10000),
    fecha_acta DATE /* Lo mismo que id_acta, ya que la fecha de la reunion sera la misma de la fecha del acta, datos redundantes*/
);

CREATE TABLE comunidad (
    id_comunidad INTEGER PRIMARY KEY,
    nombre_comunidad VARCHAR(60)
);

CREATE TABLE tiene (
    id_reunion INTEGER,
    id_comunidad INTEGER,
    PRIMARY KEY (id_reunion, id_comunidad),
    FOREIGN KEY (id_reunion) REFERENCES reunion(id_reunion),
    FOREIGN KEY (id_comunidad) REFERENCES comunidad(id_comunidad)
);

INSERT INTO reunion VALUES (1, 'Reunion de apertura', '2021-10-22', '17:00', 'Reunion para dar la bienvenida al nuevo sistema para reuniones
de junta de vecinos', 1, 'Acta de Reunion de apertura', 'En la reunion quedaron los siguientes puntos: blablabla', '2021-10-22');

INSERT INTO comunidad VALUES (1, 'Junta de Vecinos');

INSERT INTO tiene VALUES (1,1);

