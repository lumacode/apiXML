<?php 

class ProductosApiConnect{

    private $url;

    public function  getUrl(){
        $this->url;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getAll($url){
        $xml = file_get_contents($url);

        $xml_obj = new simpleXMLElement($xml);

        return $xml_obj;

}

}