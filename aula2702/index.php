<?php

require_once "retangulo.php";

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
    <title>Exemplo de POO Retângulo</title>

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
</body>
</html>