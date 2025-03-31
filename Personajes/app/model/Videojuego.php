<?php
class Videojuego
{
    var $nombre;
    var $categoria;
    var $plataforma;
    var $precio;

    function __construct($miNombre, $miCategoria, $miPlataforma, $miPrecio)
    {
        $this->nombre = $miNombre;
        $this->categoria = $miCategoria;
        $this->plataforma = $miPlataforma;
        $this->precio = $miPrecio;
    }
}
?>