<?php
require_once 'config/Conexion.php';

/**
 * Clase Usuario
 * 
 * Esta clase representa un usuario en el sistema.
 */
class Usuario
{
    /**
     * @var PDO La instancia de la conexión a la base de datos.
     */
    private $db;

    /**
     * Constructor de la clase Usuario.
     * 
     * Crea una nueva instancia de Usuario y establece la conexión a la base de datos.
     */
    public function __construct()
    {
        $this->db = Conexion::getInstance()->getConnection();
    }

    /**
     * Registrar un nuevo usuario.
     * 
     * @param string $nombre El nombre del usuario.
     * @param string $correo El correo electrónico del usuario.
     * @param string $contrasena La contraseña del usuario.
     * @return void
     */
    public function registrar($nombre, $correo, $contrasena)
    {
        $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $correo, $contrasenaHash]);
    }

    /**
     * Verificar si un usuario existe en la base de datos.
     * 
     * @param string $correo El correo electrónico del usuario a verificar.
     * @return array|false Los datos del usuario si existe, o false si no existe.
     */
    public function verificar($correo)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE correo = ?");
        $stmt->execute([$correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
}