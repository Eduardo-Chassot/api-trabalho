<?php
function arrayToJson(array $arr){

header('Contente-Type: application/json');
echo json_encode($arr);

}




$handle = fopen("suicidio-de-jovens.csv", "r");

$header = fgetcsv($handle, 1000, ";");

while ($row = fgetcsv($handle, 1000, ";")) {
$nota[] = array_combine($header, $row);
}

fclose($handle);

/*
echo "<pre>";
print_r($nota);
echo "</pre>";
*/



$arrayDados = array();
$labels = array();

foreach($nota as $dados){
$arrayDados[$dados['nome']][$dados['período']] = [
    $dados['valor']
];
}

ksort($arrayDados);

foreach($arrayDados as $chave => $dados){
if(!array_search($chave, $labels)){
    $labels[] = $chave;
}
}

arrayToJson($arrayDados['RS']);
?>