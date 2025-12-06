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
    $preco = $_GET['preco'] ?? 0;
    $porcentagem = $_GET['porcentagem'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?> "method="get">
        <label for="preco">Preço do produto (R$)</label>
        <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">  

        <label for="porcentagem">Qual será a porcentagem do reajuste? <strong>(<span id="p">?</span>%)</strong></label>

        <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">
        <input type="submit" value="Reajustar Preço">
        </form>
    </main>
    <?php
    $reajuste = ($preco * $porcentagem) / 100;
    $precoAtual = $preco + $reajuste;
    ?>
        
        <section>
            <h2>Reajuste dos valores</h2>
            <p>O produto que custava R$<?=number_format($preco, 2 , "," , ".")?>. com <strong>
<?=$porcentagem?>% de aumento</strong> vai passar a custar <?=number_format($precoAtual, 2, ",",".")?>
            </p>
        </section>
        
        <script>
            mudaValor()

            function mudaValor(){
                p.innerText= porcentagem.value;
            }
        </script>
</body>
</html>