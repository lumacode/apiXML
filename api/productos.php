<?php 

require_once 'models/gsproductos.php';

$productos = new ProductosApi();
$allProducts = $productos->getAll();

if($allProducts){

$xml = new SimpleXmlElement('<?xml version="1.0" encoding="utf-8"?><productos></productos>');

while ($producto = $allProducts->fetch_object()){

$inventario = $xml->addChild("producto");
$inventario->addAttribute('codigo', $producto->codigo);
$inventario->addChild('descripcion', $producto->descripcion);
$inventario->addChild('categoria', $producto->categoria);
$inventario->addChild('imagen', $producto->imagen);
$inventario->addChild('precio', $producto->precio);
$inventario->addChild('stock', $producto->stock);
$inventario->addChild('oferta', $producto->oferta);
$inventario->addChild('fecha', $producto->fecha);

}


echo header("Content-Type: text/xml");
echo $xml->asXML();

}else {

    ini_set('date.timezone', 'America/Argentina/Buenos_Aires');

    $date = new DateTime();
    $format = $date->format("Y-m-d H:i:s");
    $fp = fopen("logs/error.log", "a+");
    fwrite($fp, "[".$format."]\tError al conectarse con la base de datos.".PHP_EOL); 
    fclose($fp);
    echo "Ha ocurrido un error y no se ha podido conectar con el web services, consulte con el administrador.";
  }
  