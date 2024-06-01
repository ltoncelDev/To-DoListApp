<?php

/**
 * Clase controladora de tareas.
 */
class TareaController
{
    /**
     * Modelo de tareas.
     * @var Tarea
     */
    private $model;

    /**
     * Constructor de la clase.
     */
    public function __construct()
    {
        $this->model = new Tarea();
    }

    /**
     * Crea una nueva tarea.
     */
    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_usuario = $_SESSION['usuario']['id'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $this->model->crear($id_usuario, $titulo, $descripcion);
            header('Location: leer');
        } else {
            require 'app/views/crear.php';
        }
    }

    /**
     * Lee todas las tareas.
     */
    public function leer()
    {
        $tareas = $this->model->leerTodas();
        require 'app/views/leer.php';
    }

    /**
     * Actualiza una tarea existente.
     */
    public function actualizar()
    {
        # code...require 'app/views/actualizar.php';
    }

    /**
     * Elimina una tarea.
     */
    public function eliminar()
    {
        # code...require 'app/views/eliminar.php';
    }
}
