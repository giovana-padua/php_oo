<?php

require_once "Calculadora.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se o formulário tem um POST
    $numero = $_POST["inumero"];

    $numero = str_replace(',', '.', $numero);
    $numero = floatval($numero);

    $operacao = $_POST["operacao"];

    $calc = new Calculadora();

    switch ($operacao) {
        case 'soma':
            $calc->somar($numero);
            break;

        case 'subtracao':
            $calc->subtrair($numero);
            break;

        case 'multiplicacao':
            $calc->multiplicar($numero);
            break;

        case 'divisao':
            $calc->dividir($numero);
            break;

        case 'potencia':
            $calc->elevarPotencia($numero);
            break;

        case 'porcentagem':
            $calc->calcularPorcentagem($numero);
            break;

        case 'raiz':
            $calc->calcularRaiz();
            break;
        
        default:
            # code...
            break;
    }
    
    $_SESSION['memoria'] = $calc->getMemoria();
    $_SESSION['resultado'] = $calc->getResultado();
    
    header('location:index.php');
    die();
}

?>