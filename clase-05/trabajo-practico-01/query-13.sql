-- 13. Agregar el producto llamado ‘Chocolate’, de tipo Sólido y con un precio de 25,35.

INSERT INTO `producto`(`nombre`, `tipo`, `precio`, `fecha_de_creacion`)
VALUES ('Chocolate', 'solido', '25.35', CURDATE());