<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
     <h1>Resultados</h1>
    </header>
    <main>
        <?php
            $numero = $_GET["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p> O número escolhido foi: <strong>$numero</strong>.</p>";
            echo "<p> Seu antecessor é:  <strong>$antecessor</strong>.</p>";
            echo "<p> Seu sucessor é: <strong>$sucessor</strong>.</p>"; 
        ?>
        <p><a href="index.html">Voltar</a></p> 
    </main>
</body>
</html>