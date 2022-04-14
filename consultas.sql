CREATE DATABASE sistema_prueba;
CREATE TABLE usuarios(
  id BIGINT PRIMARY KEY,
  nombre VARCHAR(100) UNIQUE,
  clave VARCHAR(100)
);
INSERT INTO usuarios (nombre, clave) VALUES ('HOMERO', 'H0M3R0');