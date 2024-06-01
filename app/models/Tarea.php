<?php
require_once 'config/Conexion.php';

/**
 * Clase Tarea
 * 
 * Esta clase representa una tarea en la aplicación.
 */
class Tarea
{
    /**
     * @var PDO La instancia de la conexión a la base de datos.
     */
    private $db;

    /**
     * Constructor de la clase Tarea.
     * 
     * Crea una nueva instancia de la clase Tarea y establece la conexión a la base de datos.
     */
    public function __construct()
    {
        $this->db = Conexion::getInstance()->getConnection();
    }

    /**
     * Crea una nueva tarea.
     * 
     * @param int $id_usuario El ID del usuario al que pertenece la tarea.
     * @param string $titulo El título de la tarea.
     * @param string $descripcion La descripción de la tarea.
     * @return void
     */
    public function crear($id_usuario, $titulo, $descripcion)
    {
        $stmt = $this->db->prepare("INSERT INTO tareas (id_usuario, titulo, descripcion) VALUES (?, ?, ?)");
        $stmt->execute([$id_usuario, $titulo, $descripcion]);
    }

    /**
     * Lee todas las tareas.
     * 
     * @return array Las tareas encontradas.
     */
    public function leerTodas()
    {
        $stmt = $this->db->query("SELECT * FROM tareas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Lee una tarea específica.
     * 
     * @param int $id El ID de la tarea a leer.
     * @return array La tarea encontrada.
     */
    public function leerUna($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM tareas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Actualiza una tarea existente.
     * 
     * @param int $id El ID de la tarea a actualizar.
     * @param string $titulo El nuevo título de la tarea.
     * @param string $descripcion La nueva descripción de la tarea.
     * @return void
     */
    public function actualizar($id, $titulo, $descripcion)
    {
        # code...
    }

    /**
     * Elimina una tarea.
     * 
     * @param int $id El ID de la tarea a eliminar.
     * @return void
     */
    public function eliminar($id)
    {
        # code...
    }
}