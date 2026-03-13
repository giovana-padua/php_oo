<?php

class Carro {
    private $consumo;
    private $tanque;

    public function __construct($con, $tan=0)
    {
        $this->consumo = $con;
        $this->tanque = $tan;
    }

    public function getCombustivel()
    {
        return $this->tanque;
    }

    public function setCombustivel($litrosAbastecidos)
    {
        echo $this->tanque;
        $this->tanque += $litrosAbastecidos;
        echo $this->tanque;
    }

    public function andar($distancia)
    {
        $litrosConsumidos = $distancia / $this->consumo;
        $this->tanque -= $litrosConsumidos;
    }
}