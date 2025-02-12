<?php
/**
 * Archivo de índice principal de la aplicación To-Do List.
 *
 * Este archivo maneja las rutas y controladores para las diferentes acciones de la aplicación.
 */

session_start();

require_once 'app/models/Tarea.php';
require_once 'app/controllers/TareaController.php';

require_once 'app/models/Usuario.php';
require_once 'app/controllers/UsuarioController.php';

$tareaController = new TareaController();
$usuarioController = new UsuarioController();

$request = $_SERVER['REQUEST_URI'];

include 'app/views/includes/header.php';

switch ($request) {
    case '/To-DoListApp/':
        if (!isset($_SESSION["usuario"])) {
            /**
             * Si no hay un usuario en la sesión, redirige al controlador de usuario para iniciar sesión.
             */
            $usuarioController->login();
            return;
        }
    case '/To-DoListApp/crear':
        /**
         * Acción para crear una nueva tarea.
         */
        $tareaController->crear();
        break;
    case '/To-DoListApp/leer':
        /**
         * Acción para leer todas las tareas.
         */
        $tareaController->leer();
        break;
    case '/To-DoListApp/actualizar':
        /**
         * Acción para actualizar una tarea existente.
         */
        $tareaController->actualizar();
        break;
    case '/To-DoListApp/eliminar':
        /**
         * Acción para eliminar una tarea existente.
         */
        $tareaController->eliminar();
        break;
    case '/To-DoListApp/registrar':
        /**
         * Acción para registrar un nuevo usuario.
         */
        $usuarioController->registrar();
        break;
    case '/To-DoListApp/login':
        /**
         * Acción para iniciar sesión.
         */
        $usuarioController->login();
        break;
    case '/To-DoListApp/logout':
        /**
         * Acción para cerrar sesión.
         */
        $usuarioController->logout();
        break;
    default:
        http_response_code(404);
        echo '<h1>404</h1> Página no encontrada';
        break;
}

include 'app/views/includes/footer.php';