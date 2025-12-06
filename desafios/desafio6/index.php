<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="pt_BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $dividendo = $_GET['v1'] ?? 0;
    $divisor = $_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Divisor de valores</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>
        "method="get">
        <label for="v1"> Valor 1</label>
        <input type="number" name="v1" id="v1" min="0" value="<?= $dividendo ?>">
        <label for="v2"> Valor 2</label>
        <input type="number" name="v2" id="v2" min="1" value="<?= $divisor ?>">
        <input type="submit" value="Dividir"> 
        </form>       
    </main>

        <section>
        <h2>Resultado da divisão</h2>
        <?php

        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $quociente ?></td>
                <td><?= $resto ?></td>
            </tr>
        </table>
    </section>    
    
</body>
</html>