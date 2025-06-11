<?php
require_once __DIR__ . '/../config/cors.php';
require_once __DIR__ . '/LoginController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $controller = new LoginController();
    echo $controller->login($data);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Método não permitido."]);
}
