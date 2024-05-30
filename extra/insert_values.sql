
INSERT INTO clientes (id_cliente, nombre, apellido, telefono, correo_cliente) VALUES
(055001,'Juan', 'Pérez',9511234567, 'juan@example.com'),
(055002,'María', 'González',9519876543, 'maria@example.com'),
(055003,'Pedro', 'Rodríguez',9515551234, 'pedro@example.com'),
(055004,'Ana', 'López',9518889990, 'ana@example.com'),
(055005,'Luis', 'Martínez',9511112223, 'luis@example.com'),
(055006,'Laura', 'Hernández',9514445556, 'laura@example.com'),
(055007,'Carlos', 'Díaz',9517778889, 'carlos@example.com'),
(055008,'Sofía', 'Sánchez',9516667778, 'sofia@example.com'),
(055009,'Javier', 'Torres',9512223334, 'javier@example.com'),
(055010,'Carmen', 'Ruiz',9519990001, 'carmen@example.com');


INSERT INTO empleados (id_empleado, nombre_empleado, apaterno_empleado, amaterno_empleado, correo_empleado, telefono_empleado, puesto, fecha_contratacion) VALUES
(011001, 'Alejandro', 'García', 'López', 'alejandro@example.com', '9512345678', 'Cajero', '2023-01-15'),
(011002, 'Verónica', 'Fernández', 'Martínez', 'veronica@example.com', '9513456789', 'Vendedor', '2023-02-20'),
(011003, 'Gabriel', 'Hernández', 'Pérez', 'gabriel@example.com', '9514567890', 'Almacenero', '2023-03-10'),
(011004, 'Isabel', 'Díaz', 'González', 'isabel@example.com', '9515678901', 'Recepcionista', '2023-04-05'),
(011005, 'Fernando', 'Martínez', 'Sánchez', 'fernando@example.com', '9516789012', 'Supervisor de Ventas', '2023-05-12'),
(011006, 'Carolina', 'López', 'Ramírez', 'carolina@example.com', '9517890123', 'Auxiliar de Almacén', '2023-06-25'),
(011007, 'Roberto', 'Sánchez', 'Castro', 'roberto@example.com', '9518901234', 'Gerente de Sucursal', '2023-07-18'),
(011008, 'Mariana', 'Torres', 'Vázquez', 'mariana@example.com', '9519012345', 'Auxiliar Administrativo', '2023-08-30'),
(011009, 'Eduardo', 'Gómez', 'Flores', 'eduardo@example.com', '9510123456', 'Encargado de Compras', '2023-09-14'),
(011010, 'Patricia', 'Vázquez', 'Luna', 'patricia@example.com', '9511122334', 'Gerente General', '2023-10-0');


INSERT INTO proveedores (id_proveedor, nombre_proveedor, telefono_proveedor, correo_proveedor, direccion_proveedor) VALUES
(022001,'Distribuidora de Embalajes García', '9521111111', 'distribuidoraembalajes@example.com', 'Calle Morelos 123, Ciudad de México'),
(022002,'Mayorista de Suministros López', '9522222222', 'mayoristasuministros@example.com', 'Avenida Juárez 456, Guadalajara'),
(022003,'Comercial de Material Escolar Martínez', '9523333333', 'comercialmaterialescolar@example.com', 'Calle Revolución 789, Monterrey'),
(022004,'Proveedora de Artículos de Oficina Sánchez', '9524444444', 'proveedoraarticulos@example.com', 'Avenida Hidalgo 234, Puebla'),
(022005,'Distribuidora de Suministros Escolares Hernández', '9525555555', 'distribuidorasuministros@example.com', 'Calle Independencia 567, Querétaro'),
(022006,'Importadora de Papelería Díaz', '9526666666', 'importadorapapeleria@example.com', 'Avenida Reforma 890, Toluca'),
(022007,'Exportadora de Artículos para Oficina Rodríguez', '9527777777', 'exportadoraarticulos@example.com', 'Calle Allende 123, Mérida'),
(022008,'Mayorista de Papel Gómez S.A. de C.V.', '9528888888', 'mayoristapapel@example.com', 'Avenida Insurgentes 456, Ciudad Juárez'),
(022009,'Distribuidora de Utiles Escolares Pérez', '9529999999', 'distribuidorautiles@example.com', 'Calle Zaragoza 789, Culiacán'),
(022010,'Comercial de Suministros de Oficina Ramírez', '9520000000', 'comercialsuministros@example.com', 'Avenida Oaxaca 234, Chihuahua');



INSERT INTO categorias (id_categoria, nombre_categoria, descripcion_categoria) VALUES
(033001, 'Material de embalaje', 'Incluye cajas de cartón, sobres acolchados y material para envolver.'),
(033002,'Artículos de escritorio', 'Incluye organizadores de escritorio, portaplumas y bandejas de documentos.'),
(033003,'Cuadernos y libretas', 'Incluye cuadernos de rayas, cuadriculados y libretas de espiral.'),
(033004,'Accesorios de presentación', 'Incluye portafolios, carpetas de proyectos y fundas de plástico.'),
(033005,'Utensilios de escritura', 'Incluye bolígrafos, lápices, marcadores y rotuladores.'),
(033006,'Material de dibujo', 'Incluye lápices de colores, acuarelas, pinceles y papel para dibujo.'),
(033007,'Adhesivos y pegamentos', 'Incluye cintas adhesivas, pegamento en barra y pegamento líquido.'),
(033008,'Organización de archivos', 'Incluye archivadores de documentos, carpetas colgantes y separadores.'),
(033009,'Papelería general', 'Incluye todo tipo de papel, de diferentes formatos.'),
(033010,'Artículos de planificación', 'Incluye agendas, planificadores semanales y calendarios de pared.');

INSERT INTO productos (id_producto, nombre_producto, descripcion, precio, stock, id_proveedor, id_categoria) VALUES
(044001, 'Papel bond tamaño carta', 'Paquete de 500 hojas de papel bond tamaño carta.', 150.50, 100, 022008, 033009),
(044002, 'Bolígrafo de tinta negra', 'Bolígrafo con punta fina y tinta de secado rápido.', 5.75, 200, 022005, 033005),
(044003, 'Cuaderno de espiral cuadriculado', 'Cuaderno de espiral con hojas cuadriculadas y tapa dura.', 80.25, 150, 022003, 033003),
(044004, 'Caja de archivo tamaño oficio', 'Caja de archivo resistente para documentos tamaño oficio.', 120.00, 50, 022010, 033008),
(044005, 'Organizador de escritorio de plástico', 'Organizador de escritorio con varios compartimentos para bolígrafos, clips y notas adhesivas.', 45.99, 80, 022004, 033008),
(044006, 'Estuche de lápices de colores', 'Estuche de 24 lápices de colores de alta calidad.', 90.80, 100, 022003, 033006),
(044007, 'Cinta adhesiva transparente', 'Rollo de cinta adhesiva transparente de 2 pulgadas de ancho y 50 metros de longitud.', 8.25, 300, 022001, 033001),
(044008, 'Caja de sobres tamaño carta', 'Caja de sobres tamaño carta con cierre autoadhesivo.', 65.00, 120, 022007, 033001),
(044009, 'Clip decorativo de corazón', 'Clip decorativo en forma de corazón para sujetar documentos.', 3.50, 500, 022005, 033008),
(044010, 'Agenda semanal de tapa dura', 'Agenda semanal con tapa dura y páginas de alta calidad.', 120.75, 80, 022002, 033010);



INSERT INTO ventas (id_venta, fecha_hora, id_cliente, id_empleado,total_f) VALUES
(888001,'2024-05-01 10:30:00', 055006, 011003,5.75),
(888002,'2024-05-02 11:45:00', 055005, 011006,null),
(888003,'2024-05-03 09:15:00', 055003, 011002,355.5),
(888004,'2024-05-04 14:20:00', 055004, 011004,null),
(888005,'2024-05-05 16:00:00', 055001, 011006,8.25),
(888006,'2024-05-06 13:10:00', 055002, 011003,null),
(888007,'2024-05-07 08:45:00', 055008, 011003,435.26),
(888008,'2024-05-08 12:00:00', 055009, 011006,null),
(888009,'2024-05-09 17:30:00', 055002, 011004,663.25),
(888010,'2024-05-10 10:00:00', 055010, 011006,7.00);


INSERT INTO detalle_venta (id_venta, id_producto, cantidad,total_p) VALUES

(888003, 044003, 2,160.50),
(888003, 044008, 3,195.00),
(888001, 044002, 1,5.75),
(888009, 044001, 2,301.00),
(888009, 044010, 3,362.25),
(888007, 044006, 1,90.80),
(888007, 044003, 2,160.50),
(888007, 044005, 4,183.96),
(888005, 044007, 1,8.25),
(888010, 044009, 2,7.00);










--INSERT INTO detalle_venta (total_p)
--SELECT  productos.precio * detalle_venta.cantidad
--FROM productos
--JOIN detalle_venta ON detalle_venta.id_producto = productos.id_producto;



