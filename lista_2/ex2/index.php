<?php

require_once "Calculadora.php";
session_start();
$visor = "";
$_SESSION['calc'] = new Calculadora();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["inumero"];
    $operacao = $_POST["operacao"];

    $numero = str_replace(',', '.', $numero);
    $numero = floatval($numero);

    switch ($operacao) {
        case 'desfazer':
            $_SESSION['calc']->desfazer();
            break;

        case 'zerar':
            $_SESSION['calc']->zerar();
            break;

        case 'soma':
            $_SESSION['calc']->somar($numero);
            break;

        case 'subtracao':
            $_SESSION['calc']->subtrair($numero);
            break;

        case 'multiplicacao':
            $_SESSION['calc']->multiplicar($numero);
            break;

        case 'divisao':
            $_SESSION['calc']->dividir($numero);
            break;

        case 'potencia':
            $_SESSION['calc']->elevarPotencia($numero);
            break;

        case 'porcentagem':
            $_SESSION['calc']->calcularPorcentagem($numero);
            break;

        case 'raiz':
            $_SESSION['calc']->calcularRaiz();
            break;
        
        default:
            # code...
            break;
    }
    
    $visor .= "<p class='memoria'>" . $_SESSION['calc']->getMemoria() . "</p><h3class='memoria'>" . $_SESSION['calc']->getResultado() . "</h3>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP em POO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #d4d6d8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            border-radius: 10px;
            padding: 25px;
            background-color: #fff;
            box-shadow: 0px 5px 10px 4px #00000042;
        }

        h2 {
            color: #525252;
            text-align: center;
        }

        /*
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
            */

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #CCC;
            border-radius: 10px;
        }

        button {
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 10px;
            color: #fff;
            background-color: #007bff;
            cursor: pointer;
            transition: all .3s;
        }

        button:hover {
            background-color: #3a92f1;
        }

        .resultado {
            margin: 20px 0;
            border-radius: 10px;
            padding: 15px;
            background-color: #f1f1f1;
        }

        .ok {
            color: green;
            font-weight: bold;
        }

        .nao {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>            
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../ex1/index.php">1- Retângulo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">2- Calculadora</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../ex3/index.php">3- Carro</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <h2>Calculadora com POO(PHP)</h2>

        <div class="resultado">
            <?php
                if (isset($visor))
                    echo $visor;
            ?>
        </div>
    
        <form method="POST">
        <!-- método é como será enviado o formulário, post é via http -->
            <label>Número</label>
            <input type="number" step="1" name="inumero">
            
            <label>Operação</label>
            <select name="operacao">
                <option value="desfazer"><-</option>
                <option value="zerar">CE</option>
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">*</option>
                <option value="divisao">/</option>
                <option value="potencia">Xⁿ</option>
                <option value="porcentagem">%</option>
                <option value="raiz">²√</option>
            </select>
    
            <button type="submit">=</button>
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>