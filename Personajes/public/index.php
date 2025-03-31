<?php
// Habilitar visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Incluir el controlador y la conexión a la base de datos
require __DIR__ . '/../app/controller/PersonajesController.php';

// Crear una instancia del controlador
$controller = new PersonajesController;

// Obtener la acción desde la URL, si no está definida, usar 'todosRegistros'
$action = $_GET['action'] ?? 'todosRegistros';
$id = $_GET['id'] ?? null;

// Lista de acciones permitidas
$acciones_permitidas = ['todosRegistros', 'verRegistro', 'agregar', 'guardar', 'editarPersonaje', 'actualizarPersonaje', 'eliminar'];

// Si la acción no está en la lista de permitidas, redirige a 'todosRegistros'
if (!in_array($action, $acciones_permitidas)) {
    $action = 'todosRegistros';
}

// Manejar la acción solicitada
switch ($action) {
    case 'todosRegistros':
        $controller->index();
        break;
		
    case 'verRegistro':
        $controller->verRegistro($id);
        break;
    
	case 'agregar':
        $controller->agregar();
        break;
    
	case 'guardar':
        $controller->guardar($_POST['personaje'], $_POST['saga'], $_POST['especie']);
        break;
    
	case 'editarPersonaje':
        $controller->editarPersonaje($id);
        break;
    
	case 'actualizarPersonaje':
    if (isset($_POST['id'], $_POST['personaje'], $_POST['saga'], $_POST['especie'])) {
        $controller->actualizarPersonaje($_POST['id'], $_POST['personaje'], $_POST['saga'], $_POST['especie']);
    } else {
        echo "Error: Faltan datos.";
    }
    break;

    
	case 'eliminar':
        if (isset($_GET['confirmar'])) {
            $controller->eliminar($id);
        } else {
            $row = $controller->obtenerPersonajeId($id);
            if ($row) {
                require __DIR__ . '/../app/view/eliminar.php';
            } else {
                header("Location: index.php?action=todosRegistros");
                exit();
            }
        }
        break;
}
?>
