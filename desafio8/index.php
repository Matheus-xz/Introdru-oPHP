<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
    $nota1 = $_GET['nota1'] ?? '';
    $nota2 = $_GET['nota2'] ?? '';
    $peso1 = $_GET['peso1'] ?? '';
    $peso2 = $_GET['peso2'] ?? '';

    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="" method="get">
        <label for="nota1">Nota 1</label>
        <input type="number" name="nota1" id="nota1" required value="<?= $nota1 ?>">
        <label for="pesoNota1">Peso Nota 1</label>
        <input type="number" name="peso1" id="peso1" min="1" required value="<?= $peso1 ?>">
        <label for="nota2">Nota 2</label>
        <input type="number" name="nota2" id="nota2" required value="<?= $nota2 ?>">
        <label for="pesoNota2">Peso Nota 2</label>
        <input type="number" name="peso2" id="peso2" min="1" required value="<?= $peso2 ?>">
        <input type="submit" value="Calcular Média">        
        </form>
    </main>

        <section>
            <?php
        $mediaAritimetca = ($nota1 + $nota2) / 2;
        $mediaPonderada = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores entre <?=$nota1?> e <?=$nota2?>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a <?= number_format($mediaAritimetca, 2, "," , ".") ?>.</li>
            <li>A <strong>Média Aritimética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?= number_format($mediaPonderada, 2, "," , ".") ?>.</li>
        </ul>
        </section>
    
</body>
</html>