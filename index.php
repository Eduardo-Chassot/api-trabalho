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
    <h1>Qualidade de vida e o índice de suicídio</h1>
    <div class='textoform'>
    <p>Selecionar Estado</p>
    </div>
    <select id='selectEstado' nome='selectEstado'>
        <option value='0'>Todos</option>
        <?php foreach($STATUS as $chave => $dados){ ?>
            <option value=<?=$chave?>><?=$dados?></option>
        <?php } ?>
    </select>
    <button id='opcao' name='opcao' placeholder="selecionar">Selecionar</button>
    <div class='grafico'>
        <canvas id="myChart"></canvas>
    <h2>TEXTO</h2>
    </div>
    <div class='linha'>
    <hr size="10" width="33%" noshade color='black'>
    </div>
    <p>Precisa de ajuda?</p>
    <p>Disque 188 - Centro de Valorização da Vida</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jQuery.js"></script>
    <script src="script.js"></script>
</body>

</html>
