<?php
require 'EleveController.php';

$controller = new EleveController();
$method = $_SERVER['REQUEST_METHOD'];
$id = $_GET['id'] ?? null;

switch ($method) {
    case 'GET':
        if ($id) {
            $controller->getEleve($id);
        } else {
            // Implémenter la récupération de tous les élèves si nécessaire
        }
        break;

    case 'POST':
        $controller->createEleve();
        break;

    case 'PUT':
        if ($id) {
            $controller->updateEleve($id);
        } else {
            http_response_code(400); // Bad Request
            echo json_encode(['error' => 'ID requis']);
        }
        break;

    case 'DELETE':
        if ($id) {
            $controller->deleteEleve($id);
        } else {
            http_response_code(400); // Bad Request
            echo json_encode(['error' => 'ID requis']);
        }
        break;

    default:
        http_response_code(405); // Method Not Allowed
        echo json_encode(['error' => 'Méthode non supportée']);
        break;
}
