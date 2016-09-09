<?php

$dbServer = 'mysql.hostinger.com.br';
$dbUser = 'u294567397_sheld';
$dbPassword = 'W@rcurs31';
$dbDatabase = 'u294567397_siebe';
//$dbServer = '127.0.0.1';
//$dbUser = 'sheldon';
//$dbPassword = '5up3rColl1d3r';
//$dbDatabase = 'db_siebentek';

$conection = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbDatabase);

if (mysqli_connect_errno($conection)) {
    echo 'Houston we have a problem!';
    die();
}

function searchCategories($conection) {
    $sqlSearch =  'SELECT * FROM tb_servico_categoria';
    $resultado = mysqli_query($conection, $sqlSearch);
    
    $service = array();
    
    while ($service = mysqli_fetch_assoc($resultado)) {
        $services[] = $service;
    }
    return $services;
}
?>

