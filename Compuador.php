<?php

class Computador {
    // Atributos
    private $marca;
    private $modelo;
    private $ram; 
    private $almacenamiento;

     // Constructor
     public function __construct($marca, $modelo, $ram, $almacenamiento) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ram = $ram;
        $this->almacenamiento = $almacenamiento;
    }

   
    // Método para mostrar información del computador
    public function mostrarInfo() {

        echo $this->mostrarInfo();
    }

    // Método para actualizar la RAM
    public function actualizarRam() {
        echo $this->actualizarRam();
    }

    // Método para actualizar el almacenamiento
    public function actualizarAlmacenamiento() {
        echo $this->actualizarAlmacenamiento();
    }

    // Método para encender el computador
    public function encender() {
       echo $this->encender();
    }
}

?>
