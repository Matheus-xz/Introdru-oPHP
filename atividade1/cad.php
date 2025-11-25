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
        <h1>Resultado processamento</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome";
            echo "<p> Prazer em te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site! </p>"
        ?>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>