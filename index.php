<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>O IDH e a taxa de suicídio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <div class='container'>
        <h1>Qualidade de vida e suicídio</h1>
        <div class="texto">
            O objetivo deste site é obter os números de suicídios registrados nos estados brasileiros e compara-los, por meio de gráficos, ao IDH de cada unidade federativa, 
            identificando se a quantidade de suicídios está diretamente ligada à qualidade de vida.
        </div>
        <div class='texto'> Procedimentos metodológicos: Baixamos o <a href="https://www.ipea.gov.br/atlasviolencia/dados-series/173">arquivo CSV</a> do Atlas da Violência no site do Instituto de Pesquisa 
        Econômica Avançada (IPEA), utilizamos o PHP para manipular o CSV e criar um arquivo JSON, com o JS foi feito o POST para o PHP utilizando Ajax, em seguida o PHP retorna o 
        resultado em JSON que é utilizado para criar o gráfico por meio do Charts.js. 
        </div>
        <div class='textoform'>
            <p>Selecionar estado: </p>
        </div>
        <div class='form'>
            <select id='selectEstado' nome='selectEstado'>
                <option value='0'>--</option>
                <?php foreach($STATUS as $chave => $dados){ ?>
                <option value=<?=$chave?>><?=$dados?></option>
                <?php } ?>
            </select>
        </div>
        <div class='grafico'>
            <canvas id="myChart"></canvas>
            <canvas id="ChartIDH"></canvas>
            <a>fonte: </a><a href=https://www.preparaenem.com/geografia/oidhdosestadosbrasileiros.htm">https://brasilescola.uol.com.br/brasil/o-idh-no-brasil.html</a>
        </div>
        <div class="texto">
            Após a análise dos dados identificamos que locais com maior qualidade de vida tem leve aumento na quantidade de suicídio comparado a locais com menor qualidade de vida, 
            como o exemplo de Brasília e Tocantins, com isso, há duas possíbilidades: <br>A população "pobre" tem menos tempo livre, logo menos tempo para desenvolver depressão mais
            profunda pela cabeça estar muito ocupada, além da família precisar do dinheiro;<br>A população "rica" tem maior acesso a policiamento e é menos julgada socialmente, 
            portanto há mais casos registrados.
        </div>
        <div class='linha'>
            <hr size="10" width="33%" noshade color='black'>
        </div>
        <p>Precisa de ajuda?</p>
        <p>Disque 188 - Centro de Valorização da Vida</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
            integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jQuery.js"></script>
    <script src="script.js"></script>
</body>

</html>