<?php
// ARQUIVO: login.php (Versão com Dados Fixos)

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($email) || empty($senha)) {
    http_response_code(400); 
    echo json_encode(['erro' => "Dados de login incompletos recebidos na API MOCK."]);
    exit();
}

// Resposta de sucesso FIXA
http_response_code(200); // OK
echo json_encode([
    'msg' => "Login (MOCK) realizado com sucesso!",
    'usuario' => [
        'id' => 99,
        'nome' => "Usuário de Teste Fixo",
        'email' => $email // Retorna o email que foi enviado
    ]
]);
?>