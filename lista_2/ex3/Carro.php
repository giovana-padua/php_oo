<?php

class Carro {
    private $consumo;
    private $tanque;

    public function __construct($con, $tan=0)
    {
        $this->consumo = $con;
        $this->tanque = $tan;
    }

    public function getConsumo()
    {
        return $this->consumo;
    }

    public function getCombustivel()
    {
        return $this->tanque;
    }

    public function setCombustivel($litrosAbastecidos)
    {
        $this->tanque += $litrosAbastecidos;
    }

    public function andar($distancia)
    {
        $litrosConsumidos = $distancia / $this->consumo;
        $this->tanque -= $litrosConsumidos;
    }
}