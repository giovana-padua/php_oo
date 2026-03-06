<?php

class Calculadora {
    private $resultado; // armazena resultada das operações
    private $memoria; // armazena resultado da última operação

    public function __construct($res=0, $mem=0)
    {
        $this->resultado = $res;
        $this->memoria = $mem;
    }

    public function getResultado() {
        return $this->resultado;
    }

    public function zerar() {
        $this->resultado = 0;
    }
        
    public function desfazer() {
        $this->resultado = $this->memoria;        
    }

    public function somar($num) {
        $this->memoria = $this->resultado;
        return $this->resultado + $num;
    }
        
    public function subtrair($num) {
        $this->memoria = $this->resultado;
        return $this->resultado - $num;
    }
        
    public function multiplicar($num) {
        $this->memoria = $this->resultado;
        return $this->resultado * $num;
    }

    public function dividir($num) {
        if ($num != 0) {
            $this->memoria = $this->resultado;
            return $this->resultado / $num;
        }
        else
            return "Operação inválida";
    }

    public function elevarPotencia($num) {
        $this->memoria = $this->resultado;
        if ($num != 0)
            return $this->resultado ** $num;
        else
            return 1;
    }

    public function calcularPorcentagem($num) {
        $this->memoria = $this->resultado;
        return $this->resultado * $num / 100;
    }

    public function calcularRaiz() {
        $this->memoria = $this->resultado;
        return $this->resultado ** 1 / 2;
    }
}