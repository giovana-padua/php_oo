<?php

    require_once "calculadora.php";
    $calc = new Calculadora();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <header>            
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../ex1/">1- Retângulo</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link active" href="calculadora-interface.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        2- Calculadora
                    </a>
                    <!--<ul class="dropdown-menu"> // class do li dropdown-toggle //
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>-->
                    </li>
                    <!--<li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>-->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="resultado">=
            <?php 
                echo "<p>" . $calc->getMemoria() . "</p>";
                echo "<h3>" . $calc->getResultado() . "</h3>";
            ?>
        </div>
        <form method="POST">
            <label>Número</label>
                <input type="number" step="1" name="inum">
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num = $_POST['inum'];
                    }
                ?>
            
            <div class="oper-btn">
                <h6>Escolha uma operação:</h6>
                
                <?php 
                    echo '<input type="submit" value="CE"' . $calc->zerar() . 'name="zerar">';
                    echo '<input type="submit" value="<-"' . $calc->desfazer() . 'name="desfazer">';
                    echo '<input type="submit" value="+"' . $calc->somar($num) . 'name="somar">';
                    echo '<input type="submit" value="-"' . $calc->subtrair($num) . 'name="subtrair">';
                    echo '<input type="submit" value="x"' . $calc->multiplicar($num) . 'name="multiplicar">';
                    echo '<input type="submit" value="/"' . $calc->dividir($num) . 'name="dividir">';
                    echo '<input type="submit" value="Xⁿ"' . $calc->elevarPotencia($num) . 'name="potencia">';
                    echo '<input type="submit" value="%"' . $calc->calcularPorcentagem() . 'name="porcentagem">';
                    echo '<input type="submit" value="²√"' . $calc->calcularRaiz() . 'name="raiz">';
                ?>
            </div>
            
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>