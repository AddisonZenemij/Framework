## Reporte Control Valores
SELECT t_az_cd.`t_iva` AS 'Iva',
	SUM(t_az_cd.`t_more_price`) AS 'Precio Mas Iva',
	SUM(t_az_cd.`t_sub_total`) AS 'Sub Total',
	SUM(t_az_cd.`t_total_unit`) AS 'Total Unitario',
	SUM(t_az_cd.`t_unit_price`) AS 'Precio Unitario',
	SUM(t_az_cd.`t_unity`) AS 'Cantidad Unidad'
FROM `az_control_diadem` t_az_cd
GROUP BY t_az_cd.`t_iva` ASC;

## Reporte Control Proveedores - Marcas - Valores
SELECT
	t_az_p.`t_name` AS 'Proveedor',
	t_az_b.`t_name` AS 'Marca',
	t_az_cd.`t_iva` AS 'Iva',
	SUM(t_az_cd.`t_more_price`) AS 'Precio Mas Iva',
	SUM(t_az_cd.`t_sub_total`) AS 'Sub Total',
	SUM(t_az_cd.`t_total_unit`) AS 'Total Unitario',
	SUM(t_az_cd.`t_unit_price`) AS 'Precio Unitario',
	SUM(t_az_cd.`t_unity`) AS 'Cantidad Unidad' 
FROM
	`az_control_diadem` t_az_cd 
INNER JOIN `az_brand` t_az_b 
	ON t_az_cd.`v_id_az_brand` = t_az_b.`id_az_brand` 
INNER JOIN `az_provider` t_az_p 
	ON t_az_cd.`v_id_az_provider` = t_az_p.`id_az_provider` 
WHERE t_az_b.`v_id_az_category_brand` = '1' 
	AND t_az_p.`v_id_az_category_provider` = '1' 
GROUP BY t_az_cd.`t_iva` ASC,
	t_az_p.`t_name` ASC,
	t_az_b.`t_name` ASC
ORDER BY t_az_cd.`t_iva` ASC,
	t_az_p.`t_name` ASC,
	t_az_b.`t_name` ASC;