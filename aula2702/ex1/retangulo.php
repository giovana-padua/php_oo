<?php

class Retangulo {
    // Atributos privados
    private $largura;
    private $altura;
    // atributos são privados para evitar o livre acesso

    /* Construtor: método como os outros, mas que é executado quando um objeto é instanciado
    public function __construct() 
    {
        $this->altura = 1;
        // quero altura do objeto que está sendo utilizado. this faz referência ao objeto
        $this->largura = 1;
    }
    */

    public function __construct($larg=1, $alt=1) // se não for passado valor, o valor default é 1
    {
        $this->largura = $larg;
        // $this->altura e $alt estão em contextos de variável diferentes
        $this->altura = $alt;
    }

    //Get e Set, métodos também, mas ligados ao encapsulamento
    // Getters
    public function getLargura(): mixed {
        return $this->largura;
    }
        
    public function getAltura(): mixed {
        return $this->altura;
    }

    // Setters
    public function setLargura( $novaLargura ): void {
        if ($novaLargura > 0)
            $this->largura = $novaLargura;
    }
        
    public function setAltura( $novaAltura): void {
        if ($novaAltura > 0)
            $this->altura = $novaAltura;
    }

    // Métodos
    public function calcularPerimetro(): float|int { // perímetro é uma informação, por isso não é um atributo
        // obtido pelo cálculo dos dados de largura e altura
        return 2 * ($this->largura + $this->altura);
    }

    public function calcularArea(): float|int {
        return $this->largura * $this->altura;
    }

    public function ehQuadrado(): bool {
        return $this->largura == $this->altura;
    }

}

/*
$ret = new Retangulo();
$ret1 = new Retangulo(larg: 10, alt: 5);
$ret2 = new Retangulo(larg: 10);
$ret3 = new Retangulo(10, 5);

//$ret->$largura = 10; não pode pois o atributo é privado

//$ret5->altura = 50;
$ret5->setAltura(50);
$ret5->getAltura();

$ret1->calcularPerimetro();
$ret1->calcularArea();
*/
?>