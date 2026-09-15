<?php
header('Content-Type: application/json');

$userProfile = [
    "id" => 1,
    "name" => "Estoque, Mary Joy M.",
    "email" => "maryjoyestoque06@gmail.com",
    "status" => "active"
];

echo json_encode($userProfile);
?>
