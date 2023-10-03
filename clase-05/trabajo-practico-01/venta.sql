CREATE TABLE `venta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_producto` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `cantidad` INT DEFAULT NULL,
  `fecha_de_venta` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_producto`) REFERENCES `producto`(`id`),
  FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `venta` (`id_producto`, `id_usuario`, `cantidad`, `fecha_de_venta`)
VALUES  ('1001', '101', '2', '2020-7-19'),
        ('1008', '102', '3', '2020-8-16'),
        ('1007', '102', '4', '2021-1-24'),
        ('1006', '103', '5', '2021-1-14'),
        ('1003', '104', '6', '2021-3-20'),
        ('1005', '105', '7', '2021-2-22'),
        ('1003', '104', '6', '2020-12-2'),
        ('1003', '106', '6', '2020-6-10'),
        ('1002', '106', '6', '2021-2-4'),
        ('1001', '106', '1', '2020-5-17');

