<?php
class Ciclista {
    private $nombre;
    private $edad;
    private $equipo;
    private $pais;
    public function __construct($nombre, $edad, $equipo, $pais) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->equipo = $equipo;
        $this->pais = $pais;
    }
    public function obtenerInfo() {
    }
    public function cambiarEquipo($nuevoEquipo) {  
    }
    public function entrenar($horas) {
    }
    public function participarCarrera($carrera) {
    }
}
?>
