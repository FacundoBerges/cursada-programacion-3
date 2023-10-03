CREATE TABLE `producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo_de_barra` INT(6) UNIQUE NULL,
  `nombre` VARCHAR(255) DEFAULT NULL,
  `tipo` TEXT DEFAULT NULL,
  `stock` INT DEFAULT NULL,
  `precio` DECIMAL(10,2) DEFAULT NULL,
  `fecha_de_creacion` date DEFAULT NULL,
  `fecha_de_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `producto` (`id`, `codigo_de_barra`, `nombre`, `tipo`, `stock`, `precio`, `fecha_de_creacion`, `fecha_de_modificacion`)
VALUES  ('1001', '77900361', 'Westmacott', 'liquido', '33', '15.87', '2021-2-9', '2020-9-26'),
        ('1002', '77900362', 'Spirit', 'solido', '45', '69.74', '2020-9-18', '2020-4-14'),
        ('1003', '77900363', 'Newgrosh', 'polvo', '14', '68.19', '2020-11-29', '2021-2-11'),
        ('1004', '77900364', 'McNickle', 'polvo', '19', '53.51', '2020-11-28', '2020-4-17'),
        ('1005', '77900365', 'Hudd', 'solido', '68', '26.56', '2020-12-19', '2020-6-19'),
        ('1006', '77900366', 'Schrader', 'polvo', '17', '96.54', '2020-8-2', '2020-4-18'),
        ('1007', '77900367', 'Bachellier', 'solido', '59', '69.17', '2021-1-30', '2020-6-7'),
        ('1008', '77900368', 'Fleming', 'solido', '38', '66.77', '2020-10-26', '2020-10-3'),
        ('1009', '77900369', 'Hurry', 'solido', '44', '43.01', '2020-7-4', '2020-5-30'),
        ('1010', '77900310', 'Krauss', 'polvo', '73', '35.73', '2021-3-3', '2020-8-30');

