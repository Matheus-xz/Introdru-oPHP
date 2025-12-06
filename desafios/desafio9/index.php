<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $anoAtual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $anoAtual;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="">Em que ano você nasceu?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=$anoAtual?>"value="<?=$nasc?>">
        <label for="">Qual ano você deseja saber sua idade (estamos em 2025)</label>
        <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
        <input type="submit" value="Calcular Idade">
        </form>
    </main>
    <?php
    $idade = $ano - $nasc;
    ?>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos </strong> em <?=$ano?></p>
    </section>
</body>
</html>