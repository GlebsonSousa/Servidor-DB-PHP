<?php
// ARQUIVO: conexao.php (VERSÃO CORRIGIDA)

// Pega as credenciais das Variáveis de Ambiente configuradas na Render
$host = 'b5fcwam3fxdo75arcgjg-mysql.services.clever-cloud.com';
$db_name = 'b5fcwam3fxdo75arcgjg';
$username = 'uzznkx8aeemao6f2';
$password = 'XAtawNYSbvelIZF4A9ua';

// Tenta criar a conexão
$conexao = mysqli_connect($host, $username, $password, $db_name);

// Define o charset para utf8 para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");

// Verifica se a conexão falhou
if (mysqli_connect_error()) {
    http_response_code(500); // Erro interno do servidor
    echo json_encode(['erro' => 'Falha na conexão com o banco de dados.']);
    die();
}
?>