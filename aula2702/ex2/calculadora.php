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
        $this->memoria = 0;
    }

    public function somar($n1, $n2) {
        return $n1 + $n2;
    }

    public function subtrair($n1, $n2) {
        return $n1 - $n2;
    }

    public function multiplicar($n1, $n2) {
        return $n1 * $n2;
    }

    public function dividir($n1, $n2) {
        if ($n2 != 0)
            return $n1 / $n2;
        else
            return "Operação inválida";
    }

    public function elevarPotencia($n1, $n2) {
        if ($n2 != 0)
            return $n1 ** $n2;
        else
            return 1;
    }

    public function calcularPorcentagem($n1, $n2) {
        return $n1 * $n2 * 100;
    }



}