<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
    <main>
        <h1>Gerador de numeros</h1>
        <?php
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "<p>Gerando um número aleatório entre <strong>$min</strong> e <strong>$max</strong>:</p>";
            echo "<p>O número gerado foi <strong>$num</strong></p>";
        ?>
        <button type="button" onclick="location.reload()">Gerar outro número</button>
    </main>
</body>
</html>