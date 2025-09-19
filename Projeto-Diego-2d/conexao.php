<?php

// Configurações do banco
$host    = "localhost";   // normalmente não precisa alterar
$usuario = "root";        // substituir se seu usuário não for root
$senha   = "";            // substituir se você tiver senha no MySQL
$banco   ="projeto-diego-2d";       // substituir pelo nome do seu banco criado no phpMyAdmin

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

//Verificação de erro
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// SENSITIVE CASE suportar acentos e Ç
mysqli_set_charset($conexao, "utf8");

// Substituam os valores abaixo pelas credenciais da sua própria conta do Cloudinary
$cloud_name = "diego2d";  // exemplo: "meucloud123"
$api_key    = "378388427788478";     // exemplo: "123456789012345"
$api_secret = "TfnaHxCZwNgblrekfvioPdClTnk";  // exemplo: "abcdeFGHijkLMNopqrstu"
?>
