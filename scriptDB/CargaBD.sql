CargaInicialDB207DWESProyectoTema5
-- Selecciona la base de datos DB207DWESProyectoTema5
USE DB207DWESProyectoTema5;

-- Carga inicial para la tabla T01_Usuario
INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_NumConexiones, T01_FechaHoraUltimaConexion, T01_Perfil, T01_ImagenUsuario)
VALUES
--Creamos usuarios con contraseña codificada en el protocolo
    ('Borja', SHA2('pass1', 256), 'Borja Nuñez Refoyo', 0, '2023-01-01 10:00:00', 'administrador', NULL),
    ('Ismael', SHA2('pass2', 256), 'Ismael Ferreras Garcia', 0, '2023-01-02 12:30:00', 'usuario', NULL),
    ('Alvaro', SHA2('pass3', 256), 'Alvaro Cordero Miñambres', 0, '2023-01-03 15:45:00', 'usuario', NULL),
    ('Carlos', SHA2('pass4', 256), 'Carlos Garcia Cachon', 0, '2023-01-04 18:15:00', 'administrador', NULL),
    ('Oscar', SHA2('pass5', 256), 'Oscar Pascual Ferrero', 0, '2023-01-05 20:30:00', 'usuario', NULL);
    ('Rebeca', SHA2('pass5', 256), 'Rebeca Sanchez Perez', 0, '2023-01-05 21:30:00', 'usuario', NULL);
    ('Erika', SHA2('pass5', 256), 'Erika Martinez Perez', 0, '2023-01-05 22:30:00', 'usuario', NULL);
-- Otros comandos SQL...
-- Carga inicial para la tabla T02_Departamento
INSERT INTO T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento)
VALUES
    ('D01', 'Departamento 1', '2023-01-01 08:00:00', 50000.00, NULL),
    ('D02', 'Departamento 2', '2023-01-02 10:30:00', 75000.00, '2023-02-15 14:45:00'),
    ('D03', 'Departamento 3', '2023-01-03 12:45:00', 30000.00, NULL),
    ('D04', 'Departamento 4', '2023-01-04 14:15:00', 100000.00, '2023-03-10 18:30:00'),
    ('D05', 'Departamento 5', '2023-01-05 16:30:00', 60000.00, NULL);

