-- Consejos: Crear un socio con un correo real en el que verificar que llegan los correos con los tickets.
-- Crear una plantacion nueva y asignarsela a éste para poder hacer las entregas

INSERT INTO usuario (dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol, actual) VALUES (
    '87654321Z',
    'Francisco',
    'Pérez Gálvez',
    'C/ Río nº 1',
    'Villaconejos',
    '654987321',
    'paco@gmail.com',
    '$2y$10$Z0JYPSkFryuhUJ78W1TM4OMvncuuiXy02P7EcuDif6zqFRv74uDHS', -- Hash para 258369
    2,
    1
);

INSERT INTO usuario (dni, nombre, apellidos, direccion, localidad, telefono, correo, password, rol, actual) VALUES (
    '87654321Z',
    'Javier',
    'Aguilera Aguilera',
    'C/ Baja nº 0',
    'Villaliebres',
    '123456789',
    'javieraguilerayaguilera@gmail.com', -- Cuidado con las pruebas que llegan a mi correo
    '$2y$10$eomIc5bZKR9EvsvdNWzrMeP.mQCoW.DTMyfgftyb1fOAs5J3q3U6C', -- Hash para 123456789
    0,
    1
);

INSERT INTO plantacion (variedad, anio, zona, id_usuario, actual) VALUES(
    ' Placosesp',
    '2008',
    1,
    2,
    1
);