<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PRICE</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="form-container">
        <form method="POST" class="form"> 
            <div>
                <label>Montante financiado:</label>
                <input type="text" name="montante" required>
            </div>

            <div>
                <label>Juros do financiamento:</label>
                <input type="text" name="jurosfin" required>
            </div>

            <div>
                <label>Numero de parcelas:</label>
                <input type="number" name="parcelas" required>
            </div>

            <button type="submit">Calcular</button>
        </form>

        <article class="price">
            <h2 class="titulo_price">Tabela PRICE</h2>
            <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Entrada de dados
                    $montanteEntrada = $_POST['montante'];
                    $jurosFinEntrada = $_POST['jurosfin'];
                    $parcelasEntrada = $_POST['parcelas'];

                    // Normalização dos dados
                    $montanteNormalizado = str_replace(",", ".", $montanteEntrada);
                    $jurosFinNormalizado = str_replace(",", ".", $jurosFinEntrada);
                    $parcelasNormalizada = str_replace(",", ".", $parcelasEntrada);
                    
                    // Tipando os dados
                    $montante = floatval($montanteNormalizado);
                    $jurosFin = floatval($jurosFinNormalizado) / 100;
                    $parcelas = floatval($parcelasNormalizada);
                    
                    // Valores fixos
                    $vlrParcelas = $montante * $jurosFin * (1 + $jurosFin) ** $parcelas / ((1 + $jurosFin) ** $parcelas - 1);                            
                    $vlrSaldo = $montante;

                    // Contadores
                    $vlrTotJuros = 0;


                    echo "
                    <p class='info_financiamento'><strong>Montante Financiado:</strong> $montante</p>
                    <p class='info_financiamento'><strong>Juros Financiamento:</strong> $jurosFin</p>
                    <p class='info_financiamento'><strong>N° de Parcelas:</strong> $parcelas</p>
                    <table class='tb_price'>
                    <thead>
                    <tr>
                        <th>Parcela</th>
                        <th>Valor das Parcela</th>
                        <th>Amortização</th>
                        <th>Juros</th>
                        <th>Saldo Devedor</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                    for ($i = 0; $i < $parcelas; $i++) {
                        // Cálculos variáveis (mudam de acordo com cada parcela)
                        $vlrJuros = $vlrSaldo * $jurosFin;
                        $vlrTotJuros += $vlrJuros;
                        $vlrAmortizacao = $vlrParcelas - $vlrJuros;
                        $vlrSaldo -= $vlrAmortizacao;

                        // Formatação
                        $vlrParcelasFormatado = number_format($vlrParcelas, decimals: 2, decimal_separator: ',', thousands_separator: '.');
                        $vlrSaldoFormatado = number_format($vlrSaldo, decimals: 2, decimal_separator: ',', thousands_separator: '.');
                        $vlrJurosFormatado = number_format($vlrJuros, decimals: 2, decimal_separator: ',', thousands_separator: '.');
                        $vlrTotJurosFormatado = number_format($vlrTotJuros, decimals: 2, decimal_separator: ',', thousands_separator: '.');
                        $vlrAmortizacaoFormatado = number_format($vlrAmortizacao, decimals: 2, decimal_separator: ',', thousands_separator: '.');


                        // Apresentação na tabela linha por linha
                        echo "<tr> <td>" . $i + 1 . "</td>";
                        echo "<td>$vlrParcelasFormatado</td>";
                        echo "<td>$vlrAmortizacaoFormatado</td>";
                        echo "<td>$vlrJurosFormatado</td>";
                        echo "<td>$vlrSaldoFormatado</td> </tr>";
                    }
                    echo "
                    </tbody>
                    </table>
                    <p>Total de juros pago: R$ $vlrTotJurosFormatado</p>";
                }
            ?>
        </article>
    </section>

</body>
</html>