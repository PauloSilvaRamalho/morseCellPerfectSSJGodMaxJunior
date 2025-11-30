<?php

$conexao = mysqli_connect(
    'paparella.com.br',
    'paparell_codigomorse',
    '@Senai2025',
    'paparell_codigomorse'
);

// valores enviados do JS
$id = $_POST['id'] ?? '';
$traducao = $_POST['texto'] ?? '';

$update = $conexao->prepare("UPDATE morse_iot SET traducao = ? WHERE id_morse = ?");
$update->bind_param("si", $traducao, $id);
$update->execute();

echo "OK";

mysqli_close($conexao);
