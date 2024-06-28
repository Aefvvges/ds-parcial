<?php

class Producto{
    public $Codigo;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $Almacen;
    public $Categoria;

    public function MostrarDatos(){
        echo 'Código del producto: ' . $this->Codigo . '<br>';
        echo 'Nombre del producto: ' . $this->Nombre . '<br>';
        echo 'Precio del producto: ' . $this->Precio . '<br>';
        if ($_GET['stock'] >= 100){
            echo 'Stock del producto: ' . $this->Stock . ' Producto en abundancia. <br>';
        } else if ($_GET['stock'] >= 50 && $_GET['stock'] < 100){
            echo 'Stock del producto: ' . $this->Stock . ' Stock moderado. <br>';
        } else {
            echo 'Stock del producto: ' . $this->Stock . ' Stock bajo. <br>';
        }
        echo 'Stock del producto: ' . $this->Stock . '<br>';
        echo 'Id del almacén: ' . $this->Almacen->Id . '<br>';
        echo 'Nombre del almacén: ' . $this->Almacen->Nombre . '<br>';
        echo 'Dirección del almacén: ' . $this->Almacen->Direccion . '<br>';
        echo 'Id de la categoría: ' . $this->Categoria->Id . '<br>';
        echo 'Nombre de la categoría: ' . $this->Categoria->Nombre . '<br>';
    }
}