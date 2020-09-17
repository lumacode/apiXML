<?php

require_once 'models/productosApi.php';


class productosController{

    public function index(){

            $productosApi = new ProductosApiConnect();
            $xml_obj = $productosApi->getAll('http://sd-1839959-h00002.ferozo.net/api/productos.php');

            /*var_dump($xml_obj);
            die();*/

            if (is_object($xml_obj)) {
                $cantidad_productos = count($xml_obj->producto);

                require_once 'views/productos/index.php';  //renderizar vista 

            }

        
            
        }

}