CREATE TABLE clientes (

id_cliente INT NOT NULL,
PRIMARY KEY(id_cliente),
nombre VARCHAR(50),
apellido VARCHAR(50),
telefono VARCHAR(15),
correo_cliente VARCHAR(50)

);

CREATE TABLE empleados (

id_empleado INT NOT NULL,
PRIMARY KEY(id_empleado),
nombre_empleado VARCHAR(50),
apaterno_empleado VARCHAR(50),
amaterno_empleado VARCHAR(50),
correo_empleado VARCHAR(50),
telefono_empleado VARCHAR(15),
puesto VARCHAR(50),
fecha_contratacion DATE
);

CREATE TABLE proveedores (

id_proveedor INT NOT NULL,
PRIMARY KEY(id_proveedor),
nombre_proveedor VARCHAR(50),
telefono_proveedor VARCHAR(15),
correo_proveedor VARCHAR(50),
direccion_proveedor TEXT
);

CREATE TABLE categorias (

id_categoria INT NOT NULL,
PRIMARY KEY(id_categoria),
nombre_categoria VARCHAR(50),
descripcion_categoria TEXT

);

CREATE TABLE productos (

id_producto INT NOT NULL,
PRIMARY KEY(id_producto),
nombre_producto VARCHAR(100),
descripcion TEXT,
precio DECIMAL(10,2),
stock INT,
id_proveedor INT,
id_categoria INT,
FOREIGN KEY(id_proveedor) REFERENCES proveedores(id_proveedor),
FOREIGN KEY(id_categoria) REFERENCES categorias(id_categoria)

);

CREATE TABLE ventas (

id_venta INT NOT NULL,
PRIMARY KEY(id_venta),
fecha_hora DATETIME,
id_cliente INT,
id_empleado INT,
total_f DECIMAL(10,2),
FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente),
FOREIGN KEY(id_empleado) REFERENCES empleados(id_empleado)
); 

CREATE TABLE detalle_venta (
id_detalle INT AUTO_INCREMENT NOT NULL,
PRIMARY KEY(id_detalle),
id_venta INT,
id_producto INT,
cantidad INT,
total_p DECIMAL(10,2),
FOREIGN KEY(id_venta) REFERENCES ventas(id_venta),
FOREIGN KEY(id_producto) REFERENCES productos(id_producto)
);





--sudo ./manager-linux-x64.run 
-- sudo systemctl status ssh
--ip addr show






