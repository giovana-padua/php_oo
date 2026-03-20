<?php

require_once "Data.php";
session_start();

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $diaEntrada = $_POST["idia"];
    $mesEntrada = $_POST["imes"];
    $anoEntrada = $_POST["iano"];
    $novaData = $_POST["novadt"];

    if ($_SESSION['data'] == null || $novaData == 'sim')
        $_SESSION['data'] = new Data(d: $diaEntrada, m: $mesEntrada, a:$anoEntrada);

    $resultado .= "<h3>" . $_SESSION['data']->mostrarData() . "</h3>";
    if ($_SESSION['data']->ehBissexto())
        $resultado .= "<p class='sim'> (Ano é bissexto)</p>";
    else
        $resultado .= "<p class='nao'> (Ano não é bissexto)</p>";
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

        .sim {
            color: green;
            font-weight: bold;
        }

        .nao {
            color: red;
            font-weight: bold;
        }

        .data-definida {
            display: flex;
            flex-direction: row;
            align-items: baseline;
            gap: 10px;
        }

        .operacoes-data form label {
            border-radius: 5px;
            padding: 5px;
        }
        
        .operacoes-data form label input[type='radio'] {
            display: none;
        }

        .operacoes-data form label:hover {
            background-color: #3a92f1;
            cursor: pointer;
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
                            <a class="nav-link" href="../ex2/index.php">2- Calculadora</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../ex3/index.php">3- Carro</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="../ex4/index.php">3- Data</a>
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
            <div>
                <label for="novadt">Nova data?</label>
                <label>
                    <input type='radio' name='novadt' value='sim'>
                    Sim
                </label>

                <label>
                    <input type='radio' name='novadt' value='nao' checked>
                    Não
                </label>
            </div>

            <label for="idia">Dia</label>
            <input type="number" name="idia" min="1" max="31">
            
            <label for="imes">Mês</label>
            <input type="number" name="imes" min="1" min="12">
            
            <label for="iano">Ano</label>
            <input type="number" name="iano" min="0" min="5000">
    
            <button type="submit">Definir data</button>
        </form>

        
        <?php
            if(isset($_SESSION['data']))
            {
                echo "<div class='data-definida'>{$resultado}</div>";

                echo "
                <div class='operacoes-data'>
                <form method='POST'>
                    <label>
                        <input type='radio' name='operacao' value='passar'>
                        Passar o dia
                    </label>

                    <label>
                        <input type='radio' name='operacao' value='voltar'>
                        Voltar o dia
                    </label>

                    <label>
                        <input type='radio' name='operacao' value='comparar'>
                        Comparar datas
                    </label>

                    <label>
                        <input type='radio' name='operacao' value='subtrair'>
                        Subtrair datas
                    </label>
                    
                    <button type='submit'>Executar</button>
                </form>
                </div>
                ";
            }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
