<?php


/**
 * Clase controladora de Usuario.
 */
class UsuarioController
{
    /**
     * Modelo de Usuario.
     * @var Usuario
     */
    private $model;

    /**
     * Constructor de la clase UsuarioController.
     */
    public function __construct()
    {
        $this->model = new Usuario();
    }

    /**
     * Método para registrar un usuario.
     */
    public function registrar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $this->model->registrar($nombre, $correo, $contrasena);
            header('Location: login');
        } else {
            require 'app/views/registrar.php';
        }
    }

    /**
     * Método para iniciar sesión.
     */
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $verificar = $this->model->verificar($correo, $contrasena);
            if (count($verificar) > 0) {
                if (password_verify($_POST["contrasena"], $verificar["contrasena"])) {
                    $_SESSION['usuario'] = $verificar;
                    // var_dump($_SESSION['usuario']);
                    // die("KILL");
                    header('Location: leer');
                } else {
                    $error = 'Datos incorrectos';
                    require 'app/views/login.php';
                }
            } elseif (count($verificar) == 0) {
                $error = 'Usuario no encontrado <br> Registrate para poder acceder <a href="registrar">Registrarse</a>';
                require 'app/views/login.php';
            }
        } else {
            require 'app/views/login.php';
        }
    }

    /**
     * Método para cerrar sesión.
     */
    public function logout()
    {
        unset($_SESSION['usuario']);
        session_start();
        session_destroy();
        header('Location: login');
    }
}