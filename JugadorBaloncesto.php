<?php

class JugadorBaloncesto {
   
    private $fuerte;
    private $alto;
    private $agil;
    private $veloz;

    public function __construct($fuerte, $alto, $agil, $veloz) {
        $this->fuerte = $fuerte;
        $this->alto = $alto;
        $this->agil = $agil;
        $this->veloz = $veloz;
    }


    public function Tecnica() {

        echo $this->Tecnica();
    }

    public function Cesta() {
        echo $this->Cesta();
    }

    public function Driblin() {
        echo $this->Driblin();
    }

    public function Efectividad() {
        echo $this->Efectividad();

    }
}



?>
