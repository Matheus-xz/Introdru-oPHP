<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
        $salario = $_GET['salario'] ?? 0;
        $salarioMinimo = 1_518.00;
        ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h1>Informe seu salário</h1>
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01" >
            <p>Considerando o salário minimo de <strong>R$<?=number_format($salarioMinimo, 2 , ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2></h2>
        <?php
        $qtdSalario = intdiv ($salario, $salarioMinimo);
        $diferenca = $salario % $salarioMinimo;

        if($salario < $salarioMinimo){
            echo "<p>Quem recebe um salário de R\$ ". number_format($salario, 2 , "," , ".")."  <strong>recebe menos que 1 salário mínimo.</stong></p>";
        }else{
        echo "<p>Quem recebe um salário de R\$ ". number_format($salario, 2 , "," , "."). " recebe <strong>$qtdSalario salários mínimos</strong> + R\$ ". number_format($diferenca, 2 , "," , ".")."</p>";
        }
        ?>
    </section>

    
</body>
</html>