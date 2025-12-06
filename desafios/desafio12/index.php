<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 70px;
        }
    </style>
</head>
<body>
    <?php
    $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
        <input type="number" name="saque" id="saque" step="5" required>
        <p style="font=size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">   
        </form>
    </main>
    <?php
        $sobra = $saque;
        $nota_100 = intdiv($sobra, 100);
        $sobra = $saque % 100;
        $nota_50 = intdiv($sobra, 50);
        $sobra = $saque % 50;
        $nota_10 = intdiv($sobra, 10);
        $sobra = $saque % 10;
        $nota_5 = intdiv($sobra, 5);
        $sobra = $saque % 5;
    ?>
        <section>
            <h2>Saque de R$<?=$saque?> realizado</h2>
            <ul>
                <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> = <?=$nota_100?></li>
                <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> = <?=$nota_50?></li>
                <li><img src="imagens/10-reais.png" alt="Nota de 10" class="nota"> = <?=$nota_10?></li>
                <li><img src="imagens/5-reais.png" alt="Nota de 5" class="nota"> = <?=$nota_5?></li>
            </ul>
        </section>

    
</body>
</html>