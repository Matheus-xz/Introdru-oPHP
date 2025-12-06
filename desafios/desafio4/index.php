<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
     <h1>Resultado em dólar</h1>
    </header>
    <main>
        <?php

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $real = $_GET["valor"];
            $valorDolar = $dados["value"][0]["cotacaoCompra"];
            $valorConvertido = $real / $valorDolar;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>O seu valor em real ". numfmt_format_currency($padrao, $real, "BRL") . " convertido em dólar são <strong>" . numfmt_format_currency($padrao, $valorConvertido, "USD<strong>". "</p>");

            echo "<p>A cotação atual é ". $valorDolar . " Baseado no <strong> Banco Central <strong></p>"
        ?>
        <p><a href="index.html">Voltar</a></p> 
    </main>
</body>
</html>