<?php
include "conexao.php"; // inclui o arquivo de conexão

$result = mysqli_query($conexao, "SELECT * FROM pedidos"); // exemplo de consulta