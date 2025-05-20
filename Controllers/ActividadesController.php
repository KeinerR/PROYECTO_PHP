<?php
require_once 'Actividades.php';

header('Content-Type: application/json');

$actividad = new ActividadesModel();
$method = $_SERVER['REQUEST_METHOD'];

// Función auxiliar para obtener input JSON o form-data
function getInputData() {
    $input = json_decode(file_get_contents("php://input"), true);
    return $input ?: $_POST;
}

// Enrutamiento simple según método
switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $data = $actividad->getById($_GET['id']);
            echo json_encode($data ?: ['error' => 'Actividad no encontrada']);
        } else {
            echo json_encode($actividad->getAll());
        }
        break;

    case 'POST':
        $data = getInputData();
        if (
            !empty($data['nombre']) &&
            !empty($data['nivel_id']) &&
            !empty($data['descripcion']) &&
            !empty($data['tiempo_estimado'])
        ) {
            $success = $actividad->create(
                $data['nombre'],
                $data['nivel_id'],
                $data['descripcion'],
                $data['tiempo_estimado']
            );
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Faltan campos requeridos']);
        }
        break;

    case 'PUT':
        $data = getInputData();
        if (
            isset($_GET['id']) &&
            !empty($data['nombre']) &&
            !empty($data['nivel_id']) &&
            !empty($data['descripcion']) &&
            !empty($data['tiempo_estimado'])
        ) {
            $success = $actividad->update(
                $_GET['id'],
                $data['nombre'],
                $data['nivel_id'],
                $data['descripcion'],
                $data['tiempo_estimado']
            );
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Datos incompletos para actualización']);
        }
        break;

    case 'DELETE':
        if (isset($_GET['id'])) {
            $success = $actividad->delete($_GET['id']);
            echo json_encode(['success' => $success]);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Falta el ID para eliminar']);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Método HTTP no permitido']);
        break;
}
?>
