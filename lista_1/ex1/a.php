<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Círculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
            justify-content: center;
        }

        .form button {
            border: none;
            border-radius: 10px;
            padding: 5px 20px;
            background-image: linear-gradient(326deg, #ffc107, transparent);
            transition: all .2s;
        }

        .form button:hover {
            background-image: linear-gradient(160deg, #ffc107, #ffc107);
        }

        .form-container article.resultado {
            padding: 10px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Calcular área</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="a.php">Círculo</a>
                    <a class="nav-link" href="b.php">Triângulo</a>
                    <a class="nav-link" href="c.php">Quadrado</a>
                    <a class="nav-link" href="d.php">Retângulo</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="form-container">
        <form method="POST" class="form"> 
            <label>Raio do círculo:</label>
            <input type="text" name="raio" required>

            <button type="submit">Calcular</button>
        </form>

        <article class="resultado">
            <?php 
            
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $raio = $_POST['raio'];
                    $area = $raio ** 2 * pi();

                    echo "<h3>Área do círculo: {$area}</h3>";
                }

            ?>
        </article>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>