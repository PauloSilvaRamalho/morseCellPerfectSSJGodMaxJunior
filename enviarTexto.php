<?php

$conexao = mysqli_connect(
    'paparella.com.br',
    'paparell_codigomorse',
    '@Senai2025',
    'paparell_codigomorse'
);


$id = $_POST['id'] ?? '';
$traducao = $_POST['texto'] ?? '';
$morse = $_POST['morse']


$update = $conexao->prepare("INSERT INTO morse_iot (morse, traducao) VALUES (?, ?)");
$update->bind_param("ss", $morse, $traducao);
$update->execute();

echo "OK";

mysqli_close($conexao);