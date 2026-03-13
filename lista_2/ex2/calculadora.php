<?php

class Calculadora {
    private static $resultado; // armazena resultada das operações
    private static $memoria; // armazena resultado da última operação

    public function __construct($res=0, $mem=0)
    {
        $this->resultado = $res;
        $this->memoria = $mem;
    }

    public function getMemoria() {
        return self::$memoria;
    }

    public function getResultado() {
        return self::$resultado;
    }

    public function zerar() {
        $this->memoria = $this->resultado;
        $this->resultado = 0;
    }
        
    public function desfazer() {
        $this->memoria = $this->resultado;
        $this->resultado = $this->memoria;        
    }

    public function somar($num = null) {
        $this->memoria = $this->resultado;
        $this->resultado = $this->resultado + $num;
    }
        
    public function subtrair($num = null) {
        $this->memoria = $this->resultado;
        $this->resultado -= $num;
    }
        
    public function multiplicar($num = null) {
        $this->memoria = $this->resultado;
        $this->resultado *= $num;
    }

    public function dividir($num = null) {
        if ($num != 0) {
            $this->memoria = $this->resultado;
            $this->resultado /= $num;
        }
        else
            return "Operação inválida";
    }

    public function elevarPotencia($num = null) {
        $this->memoria = $this->resultado;
        $this->resultado **= $num;
    }

    public function calcularPorcentagem($num = null) {
        $this->memoria = $this->resultado;
        $this->resultado *= $num / 100;
    }

    public function calcularRaiz() {
        $this->memoria = $this->resultado;
        $this->resultado **= 1 / 2;
    }
}