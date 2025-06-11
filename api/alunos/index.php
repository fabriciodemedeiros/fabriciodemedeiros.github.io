<?php
require_once __DIR__ . '/../config/cors.php';
require_once __DIR__ . '/../auth.php';
require_once __DIR__ . '/AlunoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!auth_protegido()) {
        http_response_code(401);
        echo json_encode(['error' => 'Não autorizado']);
        exit;
    }

    $controller = new AlunoController();
    echo $controller->listar();
} else {
    http_response_code(405);
    echo json_encode(["error" => "Método não permitido."]);
}
