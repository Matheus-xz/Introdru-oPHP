<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
     <h1>Resultado em dólar</h1>
    </header>
    <main>
        <?php
            $real = $_GET["valor"];
            $valorDolar = 5;
            $valorConvertido = $real / $valorDolar;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>O seu valor em real ". numfmt_format_currency($padrao, $real, "BRL") . " convertido em dólar são <strong>" . numfmt_format_currency($padrao, $valorConvertido, "USD<strong>". "</p>");
        ?>
        <p><a href="index.html">Voltar</a></p> 
    </main>
</body>
</html>