<?php

require_once "Retangulo.php";

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se o formulário tem um POST
    $largura = $_POST["ilargura"];
    $altura = $_POST["ialtura"];

    //echo "Altura: " . $altura . "  Largura: " . $largura;

    $ret = new Retangulo(larg: $largura, alt: $altura);

    $resultado .= $resultado . "Largura: " . $ret->getLargura() . "<br>";
    $resultado .= "Altura: " . $ret->getAltura() . "<br>";
    $resultado .= "Área: " . $ret->calcularArea() . "<br>";
    $resultado .= "Perímetro: " . $ret->calcularPerimetro() . "<br>";
    if ($ret->ehQuadrado()) {
        $resultado .= "<span class='ok'> O retângulo é um quadrado </span>";
    } else {
        $resultado .= "<span class='nao'> O retângulo não é um quadrado </span>";    
    }
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

                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">1- Retângulo</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../ex2/index.php">2- Calculadora</a>
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
        <h2>Retângulo com POO(PHP)</h2>
    
        <form method="POST">
        <!-- método é como será enviado o formulário, post é via http -->
            <label>Largura</label>
            <input type="number" step="0.1" name="ilargura">
            
            <label>Altura</label>
            <input type="number" step="0.1" name="ialtura">
    
            <button type="submit">Calcular</button>
    
        </form>

        <?php
            if ($resultado != "") {
                echo '<div class="resultado"><h4> Resultado </h4>' . $resultado . "</div>";
            }
        ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>