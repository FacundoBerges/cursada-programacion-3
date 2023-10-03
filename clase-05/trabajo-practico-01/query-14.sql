-- 14. Insertar un nuevo usuario.

INSERT INTO `usuario`(`nombre`, `apellido`, `clave`, `mail`, `fecha_de_registro`, `Localidad`)
VALUES ('Juan', 'Perez', '1357', 'jperez@ejemplo.com', CURDATE(), 'Avellaneda');