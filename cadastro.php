<?php
// ARQUIVO: cadastro.php (Versão com Dados Fixos)

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Pega os dados que o frontend enviou (mesmo que não os usemos)
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

// Validação simples
if (empty($usuario) || empty($email) || empty($senha)) {
    http_response_code(400); 
    echo json_encode(['erro' => "Dados incompletos recebidos na API MOCK."]);
    exit();
}

// Resposta de sucesso FIXA
http_response_code(201); // Created
echo json_encode(['msg' => "Cadastro (MOCK) realizado com sucesso para o usuário: " . $usuario]);
?>