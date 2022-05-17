SET NAMES UTF8;
CREATE DATABASE IF NOT EXISTS cooperativa;
USE cooperativa;


DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario  ( 
    id_usuario      int auto_increment,
    dni             varchar(9),
    nombre          varchar(64) not null,
    apellidos       varchar(64) not null,
    direccion       varchar(255) not null,
    localidad       varchar(255) not null,
    telefono        varchar(9)  not null,
    correo          varchar(255) not null,
    password        varchar(255) not null,
    rol             tinyint not null,

    CONSTRAINT pk_usuario PRIMARY KEY (id_usuario),
    CONSTRAINT uq_dni UNIQUE(dni),
    CONSTRAINT uq_correo UNIQUE(correo)  
)ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO usuario(dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol) VALUES (
    '12345678A',
    'José',
    'Molina Álvarez',
    'C/ Gran Capitán nº 5 1ºA',
    'Huétor-Tájar',
    '123456789',
    'jose@gmail.com',
    '123456',
    2
);

INSERT INTO usuario(dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol) VALUES (
    '87654321B',
    'Juan',
    'Pérez López',
    'C/ Real nº 3',
    'Huétor-Tájar',
    '987654321',
    'juan@gmail.com',
    '654321',
    1
);

DROP TABLE IF EXISTS plantacion;
CREATE TABLE IF NOT EXISTS plantacion (
    id_plantacion   int auto_increment,
    variedad        varchar(255),
    anio            int,
    id_usuario      int,

    CONSTRAINT pk_plantacion PRIMARY KEY (id_plantacion),
    CONSTRAINT fk_plantacion_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
)ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS entrega;
CREATE TABLE IF NOT EXISTS entrega (
    id_entrega      int auto_increment,
    fecha           date,
    hora            time,
    tara            float,
    bruto           float,
    neto            float,
    id_plantacion   int,

    CONSTRAINT pk_entrega PRIMARY KEY (id_entrega),
    CONSTRAINT fk_entrega_plantacion FOREIGN KEY (id_plantacion) REFERENCES plantacion(id_plantacion)
)ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
