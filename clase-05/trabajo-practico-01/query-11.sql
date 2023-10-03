-- 11. Traer las ventas entre junio del 2020 y febrero 2021.

SELECT *
FROM `venta` v
WHERE v.fecha_de_venta BETWEEN '2020-6-1' AND '2021-2-28';