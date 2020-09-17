<?php

require_once 'config/db.php';

class ProductosApi{

    private $id;
    private $codigo;
    private $descripcion;
    private $categoria;
    private $imagen;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getId(){
        return $this->id;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getStock(){
        return $this->stock;
    }

    public function getOferta(){
        return $this->oferta;
    }

    public function getFecha(){
        return $this->fecha;
    }
 
    public function setId($id){
        $this->id = $id;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    public function setCodigo($codigo){
        $this->codigo = $this->db->real_escape_string($codigo);
    }

    public function setCategoria($categoria){
        $this->categoria = $this->db->real_escape_string($categoria);
    }

    public function setImagen($imagen){
        $this->imagen = $this->db->real_escape_string($imagen);
    }

    public function setPrecio($precio){
        $this->precio = $this->db->real_escape_string($precio);
    }

    public function setStock($stock){
        $this->stock = ($stock);
    }

    public function setOferta($oferta){
        $this->oferta = $oferta;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos");

        return $productos;
    }



}