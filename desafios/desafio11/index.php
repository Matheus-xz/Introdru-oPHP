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
    $segundos = $_GET['segundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="">Qual é o total de segundos?</label>
        <input type="number" name="segundos" id="segundos">
        <input type="submit" value="Calcular">
        </form>
    
        <section>
            <?php
            $sobra = $segundos;
            $semana = intdiv ($sobra, 604800);
            $sobra = $sobra % 604800;
            $dia = intdiv ($sobra, 86400);
            $sobra = $sobra % 86400;            
            $horas = intdiv ($sobra, 3600);
            $sobra = $sobra % 3600;            
            $minutos = intdiv ($sobra, 60);
            $sobra = $sobra % 60;
            $restoSegundos = $sobra;            
            ?>

            <h2>Totalizando</h2>
            <ul>
                <li>Semana(s) = <?=$semana?></li>
                <li>Dia(s) = <?=$dia?></li>
                <li>Hora(s) = <?=$horas?></li>
                <li>Minuto(s) = <?=$minutos?></li>
                <li>Segundo(s) = <?=$restoSegundos?></li>
            </ul>
        </section>

    </main>
    
</body>
</html>