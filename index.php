<?php
$handle = fopen("suicidio-de-jovens.csv", "r");

$header = fgetcsv($handle, 1000, ";");

while ($row = fgetcsv($handle, 1000, ";")) {
    $nota[] = array_combine($header, $row);
}

echo "<pre>";
print_r($nota);
echo "</pre>";

fclose($handle);
?>