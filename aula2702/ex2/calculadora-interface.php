<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <section>
        <form>
            <div class="num-btn">
                <?php
                    for ($i = 9; $i > 0; $i--) {
                        echo `<button> $i </button>`;
                    }
                ?>
            </div>
            
            <div class="oper-btn">
                <button>%</button>
                <button>CE</button>
                <button>C</button>
                <button>/</button>
                <button>x</button>
                <button>+</button>
                <button>-</button>
                <button>^</button>
                <button>=</button>
            </div>
        </form>
    </section>
</body>
</html>