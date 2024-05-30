--Exercise_01
SELECT clientes.nombre, ventas.total_f 
FROM clientes 
JOIN ventas ON clientes.id_cliente = ventas.id_cliente;

--Exercise_02
SELECT clientes.nombre, detalle_venta.cantidad, productos.nombre_producto
FROM clientes
JOIN ventas ON clientes.id_cliente = ventas.id_cliente
JOIN detalle_venta ON ventas.id_venta = detalle_venta.id_venta
JOIN productos ON detalle_venta.id_producto = productos.id_producto
WHERE clientes.nombre = 'Pedro';

--Exercise_03
SELECT clientes.nombre, productos.nombre_producto, ventas.total_f
FROM clientes
JOIN ventas ON clientes.id_cliente = ventas.id_cliente
JOIN detalle_venta ON ventas.id_venta = detalle_venta.id_venta
JOIN productos ON detalle_venta.id_producto = productos.id_producto
WHERE clientes.nombre = 'Laura';

--Exercise_04
SELECT proveedores.nombre_proveedor, productos.nombre_producto, productos.stock
FROM productos
JOIN proveedores ON proveedores.id_proveedor = productos.id_proveedor
WHERE proveedores.nombre_proveedor = 'Distribuidora de Suministros Escolares Hernández';

--Exercise_05
SELECT empleados.nombre_empleado, empleados.apaterno_empleado, empleados.puesto, empleados.fecha_contratacion
FROM empleados
WHERE empleados.fecha_contratacion < '2023-04-01'
GROUP BY empleados.nombre_empleado ASC;

--Exercise_06
SELECT clientes.nombre, SUM(detalle_venta.total_p) AS Total_compra
FROM detalle_venta
JOIN ventas ON detalle_venta.id_venta = ventas.id_venta
JOIN clientes ON ventas.id_cliente = clientes.id_cliente
WHERE clientes.nombre = 'Sofía';

--Exercise_07
SELECT clientes.nombre, ventas.total_f
FROM clientes
JOIN ventas ON clientes.id_cliente = ventas.id_cliente
GROUP BY ventas.total_f DESC;

--Exercise_08
SELECT AVG(ventas.total_f) AS promedio_venta
FROM clientes
JOIN ventas ON clientes.id_cliente = ventas.id_cliente;

--Exercise_09
SELECT clientes.nombre
FROM clientes
ORDER BY clientes.nombre asc;

--Exercise_10
SELECT categorias.nombre_categoria, COUNT(categorias.nombre_categoria) AS cat_pape
FROM productos
JOIN categorias ON productos.id_categoria = categorias.id_categoria
JOIN detalle_venta ON detalle_venta.id_producto = productos.id_producto
JOIN ventas ON ventas.id_venta = detalle_venta.id_venta
WHERE categorias.nombre_categoria = 'Material de embalaje';
