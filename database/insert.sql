INSERT INTO usuario(dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol, actual) VALUES (
    '12345678A',
    'José',
    'Molina Álvarez',
    'C/ Gran Capitán nº 5 1ºA',
    'Huétor-Tájar',
    '123456789',
    'jose@gmail.com',
    '123456',
    2,
    1
);

INSERT INTO usuario(dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol, actual) VALUES (
    '87654321B',
    'Juan',
    'Pérez López',
    'C/ Real nº 3',
    'Huétor-Tájar',
    '987654321',
    'juan@gmail.com',
    '654321',
    1,
    1
);

INSERT INTO usuario(dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol, actual) VALUES (
    '98741236B',
    'Luis',
    'Cruz Martín',
    'C/ Ancha nº 30 3ºB',
    'Huétor-Tájar',
    '987412365',
    'luis@gmail.com',
    '987654',
    0,
    1
);


INSERT INTO plantacion (variedad, anio, zona, id_usuario, actual) VALUES(
    'Placoset',
    '2008',
    1,
    3,
    1
);

INSERT INTO plantacion (variedad, anio, zona, id_usuario, actual) VALUES(
    'Vegalim',
    '2015',
    2,
    3,
    1
);


INSERT INTO entrega (fecha, hora, tara, bruto, neto, id_plantacion, actual) VALUES (
    '2022-03-17',
    '11:05:34',
    30.5,
    140.5,
    110,
    1,
    1
);

INSERT INTO entrega (fecha, hora, tara, bruto, neto, id_plantacion, actual) VALUES (
    '2022-03-18',
    '11:23:34',
    30.5,
    120.5,
    90,
    1,
    1
);