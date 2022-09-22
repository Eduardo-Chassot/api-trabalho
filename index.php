<?php
include_once 'config.php';
$estadosDoBrasil = [
    1 => 'AC',
    2 => 'AL',
    3 => 'AM',
    4 => 'AP',
    5 => 'BA',
    6 => 'CE',
    7 => 'DF',
    8 => 'ES',
    9 => 'GO',
    10 => 'MA',
    11 => 'MG',
    12 => 'MS',
    13 => 'MT',
    14 => 'PA',
    15 => 'PB',
    16 => 'PE',
    17 => 'PI',
    18 => 'PR',
    19 => 'RJ',
    20 => 'RN',
    21 => 'RO',
    23 => 'RR',
    24 => 'RS',
    25 => 'SC',
    26 => 'SE',
    27 => 'TO'
];
foreach($estadosDoBrasil as $chave=>$value){
    echo $value;
}
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
    <h1>Qualidade de vida e o índice de suicídio</h1>
    <form method="GET">
        <select id='selectEstado' nome='selectEstado'>
            <option value='0'>Todos</option>
            <?php foreach($estadosDoBrasil as $chave => $dados){ ?>
                <option value=<?=$chave?>><?=$dados?></option>
            <?php } ?>
        </select> 
        <input type='submit' id='opcao' name='opcao' value='Selecionar'> 
    </form>
    <div class='grafico'>
        <canvas id="myChart"></canvas>
    <h2>TEXTO</h2>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jQuery.js"></script>
    <script src="script.js"></script>
</body>

</html>

<script>
    
</script>