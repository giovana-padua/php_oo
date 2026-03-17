<?php

class Calculadora {
    private $memoria; // armazena resultado da última operação
    private $resultado; // armazena resultada das operações

    public function __construct($res=0, $mem=0)
    {
        $this->memoria = $mem;
        $this->resultado = $res;
    }

    public function getMemoria() {
        return $this->memoria;
    }

    public function getResultado() {
        return $this->resultado;
    }

    public function zerar() {
        $this->memoria = $this->resultado;
        $this->resultado = 0;
    }
        
    public function desfazer() {
        $y = $this->memoria;
        $this->memoria = $this->resultado;
        $this->resultado = $y;
    }

    public function somar($num) {
        $this->memoria = $this->resultado;
        $this->resultado += $num;
    }
        
    public function subtrair($num) {
        $this->memoria = $this->resultado;
        $this->resultado -= $num;
    }
        
    public function multiplicar($num) {
        $this->memoria = $this->resultado;
        $this->resultado *= $num;
    }

    public function dividir($num) {
        if ($num != 0) {
            $this->memoria = $this->resultado;
            $this->resultado /= $num;
        }
        else
            return "Operação inválida";
    }

    public function elevarPotencia($num) {
        $this->memoria = $this->resultado;
        $this->resultado **= $num;
    }

    public function calcularPorcentagem($num) {
        $this->memoria = $this->resultado;
        $this->resultado *= $num / 100;
    }

    public function calcularRaiz() {
        $this->memoria = $this->resultado;
        $this->resultado **= 1 / 2;
    }
}