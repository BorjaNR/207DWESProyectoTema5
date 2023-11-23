-- Crea la base de datos DB207DWESProyectoTema5
CREATE DATABASE IF NOT EXISTS DB207DWESProyectoTema5;

-- Selecciona la base de datos recién creada
USE DB207DWESProyectoTema5;


-- Crea la tabla Usuarios
CREATE TABLE IF NOT EXISTS T01_Usuario (
    T01_CodUsuario CHAR(8) NOT NULL CHECK(CHAR_LENGTH(T01_CodUsuario) BETWEEN 4 AND 8),
    T01_Password CHAR(512) NOT NULL CHECK(CHAR_LENGTH(T01_Password) BETWEEN 64 AND 512),
    T01_DescUsuario VARCHAR(255) NOT NULL,
    T01_NumConexiones INT DEFAULT 1 NOT NULL,
    T01_FechaHoraUltimaConexion DATETIME NOT NULL,
    T01_Perfil ENUM('usuario', 'administrador') NOT NULL DEFAULT 'usuario',
    T01_ImagenUsuario LONGBLOB,
    PRIMARY KEY (T01_CodUsuario)
);

-- Crea la tabla Departamento
CREATE TABLE IF NOT EXISTS T02_Departamento (
    T02_CodDepartamento CHAR(3) NOT NULL,
    T02_DescDepartamento VARCHAR(255) NOT NULL,
    T02_FechaCreacionDepartamento DATETIME NOT NULL,
    T02_VolumenDeNegocio FLOAT NOT NULL,
    T02_FechaBajaDepartamento DATETIME DEFAULT NULL,
    PRIMARY KEY (T02_CodDepartamento)
);

-- Crear usuario y dar privilegios
CREATE USER 'user207DWESProyectoTema5'@'%' IDENTIFIED BY 'paso';
GRANT ALL PRIVILEGES ON DB207DWESProyectoTema5.* TO 'user207DWESProyectoTema5';