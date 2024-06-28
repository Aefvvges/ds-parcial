<?php
require_once 'modelo/almacen.php';
require_once 'modelo/categoria.php';
require_once 'modelo/producto.php';

$categoria = new Categoria();
$categoria-> Id = 1;
$categoria-> Nombre = 'Iluminación';

$almacen = new Almacen();
$almacen-> Id = 1;
$almacen-> Nombre = 'Almacén Principal';
$almacen-> Direccion = 'Av. Libertador 123';

$producto = new Producto();
$producto-> Codigo = 1234;
$producto-> Nombre = 'Lámpara LED';
$producto-> Precio = '$25.99';
$producto-> Stock = $_GET['stock'];
$producto-> Almacen = $almacen;
$producto-> Categoria = $categoria;

$producto-> MostrarDatos();