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
            <p>Selecionar estado: </p>
        </div>
        <div class='form'>
            <select id='selectEstado' nome='selectEstado'>
                <option value='0'>Todos</option>
                <?php foreach($STATUS as $chave => $dados){ ?>
                <option value=<?=$chave?>><?=$dados?></option>
                <?php } ?>
            </select>
        </div>
        <div class='grafico'>
            <canvas id="myChart"></canvas>
        </div>
        <div class="texto">Muitos dos jovens de hoje sofrem ou sofreram de depressão, não à toa é considerada o mal do século, em decorrência a está doença, ocorrem diversos casos de suicídio
             ao redor de todo o país. Ver um jovem tirar sua própria vida nos faz pensar as causas de sua ação e se o problema é individual ou de toda a sociedade. 
             Por meio de um sistema feito por nós, com a ajuda dos dados públicos disponibilizados pelo Atlas da Violência do Instituto de Pesquisa Econômica Avançada (IPEA), 
             iremos contabilizar, comparar e estudar os números registrados por cada estado, verificando se a quantidade de suicídios está relacionada com a qualidade de vida de 
             acordo com o IDH de cada estado. Utilizamos das informações retiradas da IPEA para montar um gráfico de cada estado e compará-los com o índice de desenvolvimento humano 
             da região, com isso podemos identificar se a qualidade de vida realmente interfere na quantidade de suicídios. Após a análise chegamos à conclusão que locais com IDH 
             consideravelmente baixo possuem menos casos de suicídios comparados a estados com IDH elevado, como por exemplo, o Distrito Federal, dono do maior IDH do Brasil e com 
             população de aproximadamente 3 Milhões de pessoas, possui praticamente a mesma quantidade de casos do Piauí, que tem o 3º pior IDH Brasileiro e a população, também em 
             torno dos 3 Milhões. E em outros casos é justamente o contrário. Portanto, descobrimos que a depressão não escolhe alvos, todos podem ser afetados, indiferente de renda 
             ou localidade.</div>
        <a>1° Distrito Federal: 0,874.
            2° Santa Catarina: 0,840.
            3° São Paulo: 0,833.
            4° Rio de Janeiro: 0,832.
            5° Rio Grande do Sul: 0,832.
            6° Paraná: 0,820.
            7° Espírito Santo: 0,802.
            8° Mato Grosso do Sul: 0,802.
            9° Goiás: 0,800.
            10° Minas Gerais: 0,800.
            11° Mato Grosso: 0,796.
            12° Amapá: 0,780.
            13° Amazonas: 0,780.
            14° Rondônia: 0,756.
            15° Tocantins: 0,756.
            16° Pará: 0,755.
            17° Acre: 0,751.
            18° Roraima: 0,750.
            19° Bahia: 0,742.
            20° Sergipe: 0,742.
            21° Rio Grande do Norte: 0,738.
            22° Ceará: 0,723.
            23° Pernambuco: 0,718.
            24° Paraíba: 0,718.
            25° Piauí: 0,703.
            26° Maranhão: 0,683.
            27° Alagoas: 0,677.</a>
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