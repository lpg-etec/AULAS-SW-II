<?php
header("Content-Type: application/json");

$usuarios = json_decode(file_get_contents('./usuarios.json'));

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo json_encode($usuarios);
        break;
    case 'POST':
        $d = json_decode(file_get_contents('php://input'), true);
        if (!isset($d['id']) || !isset($d['name']) || !isset($d['email'])) {
            http_response_code(400);
            echo json_encode(['erro' => 'Dados incompletos.']);
            exit;
        }
        $usuarios[] = [
            'id' => $d['id'],
            'nome' => $d['nome'],
            'email' => $d['email']
        ];
        file_put_contents('./usuarios.json', json_encode($usuarios));
        break;
    default:
        http_response_code(405);
        echo json_encode(['erro' => 'Método não encontrado.'])
        break;
}
?>