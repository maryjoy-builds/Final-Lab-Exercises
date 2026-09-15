<?php
$jsonString = '{"name":"Estoque, ,Mary Joy M.","age":20,"email":"maryjoyestoque06@gmail.com"}';

$phpObject = json_decode($jsonString);

$phpArray = json_decode($jsonString, true);

echo "Object: " . $phpObject->name . "<br>";
echo "Array: " . $phpArray['email'];
?>
