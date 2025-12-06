<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 5</title>
</head>
<body>
    <main>
        <h1>Analisar de Número Real</h1>
        <?php
        $numero = $_POST["numero"] ?? 0;

        echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",",".") . " </strong>informado pelo usuário:</p>";

        $inteiro = (int) $numero;
        $fra = $numero - $inteiro;
        echo "<ul><li> A parte inteira do número é <strong>" . number_format($inteiro, 0, ",",".") . "</strong></li>";
        echo "<li> A parte fracionária do número é <strong>" . number_format($fra, 3, ",",".") . "</strong></li></ul>";
        ?>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>