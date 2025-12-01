<?php

$conexao = mysqli_connect(
    'paparella.com.br',
    'paparell_codigomorse',
    '@Senai2025',
    'paparell_codigomorse'
);

$texto = $_POST['texto'] ?? '';
$morse = $_POST['resultado'] ?? '';

$update = $conexao->prepare("INSERT INTO morse_iot (morse, traducao) VALUES (?, ?)");
$update->bind_param("ss", $morse, $texto);
$update->execute();

echo "OK";

mysqli_close($conexao);