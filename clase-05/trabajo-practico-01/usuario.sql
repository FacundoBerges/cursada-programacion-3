CREATE TABLE `usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` TEXT DEFAULT NULL,
  `apellido` TEXT DEFAULT NULL,
  `clave` INT DEFAULT NULL,
  `mail` varchar(255) UNIQUE NOT NULL,
  `fecha_de_registro` DATE DEFAULT NULL,
  `localidad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `clave`, `mail`, `fecha_de_registro`, `localidad`)
VALUES  ('101', 'Esteban', 'Madou', '2345', 'dkantor0@example.com', '2021-1-7', 'Quilmes'),
        ('102', 'German', 'Gerram', '1234', 'ggerram1@hud.gov', '2020-5-8', 'Berazategui'),
        ('103', 'Deloris', 'Fosis', '5678', 'bsharpe2@wisc.edu', '2020-11-28', 'Avellaneda'),
        ('104', 'Brok', 'Neiner', '4567', 'bblazic3@desdev.cn', '2020-12-8', 'Quilmes'),
        ('105', 'Garrick', 'Brent', '6789', 'gbrent4@theguardian.com', '2020-12-17', 'Moron'),
        ('106', 'Bili', 'Baus', '0123', 'bhoff5@addthis.com', '2020-11-27', 'Moreno');

