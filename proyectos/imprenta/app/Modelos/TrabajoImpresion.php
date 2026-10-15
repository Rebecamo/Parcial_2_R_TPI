<?php
namespace Imprenta\Modelos;


abstract class TrabajoImpresion{

    public function __construct( public readonly $descripcion, public readonly $paginas,
    public readonly $copias){


    abstract public function precioPorPagina():float;


    }


}


?>