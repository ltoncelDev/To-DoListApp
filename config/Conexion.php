<?php
/**
 * Clase Conexion
 * 
 * Esta clase implementa el patrón Singleton para proporcionar una única instancia de conexión a la base de datos.
 * 
 * El patrón Singleton es un patrón de diseño creacional que garantiza que solo haya una instancia de una clase en todo el programa.
 * En el contexto de esta clase, el patrón Singleton se utiliza para asegurar que solo haya una única conexión a la base de datos en todo el programa.
 * Esto es útil para evitar problemas de concurrencia y para optimizar el rendimiento al reutilizar la misma conexión en diferentes partes del código.
 * 
 * La implementación del patrón Singleton en esta clase se logra mediante el uso de una variable estática privada llamada $instance.
 * Esta variable almacena la única instancia de la clase Conexion y se inicializa a null.
 * El método estático getInstance() se encarga de crear la instancia de la clase si no existe y devolverla.
 * Si la instancia ya existe, simplemente la devuelve.
 * 
 * Para obtener la instancia de la clase Conexion, se debe llamar al método estático getInstance().
 * Esto garantiza que siempre se obtenga la misma instancia de la clase en todo el programa.
 * 
 * La conexión a la base de datos se establece en el constructor privado de la clase.
 * Esto asegura que la conexión solo se establezca una vez y que no se puedan crear instancias de la clase directamente.
 * 
 * Para obtener la conexión a la base de datos, se debe llamar al método getConnection().
 * Este método devuelve la conexión almacenada en la variable $conn.
 */
class Conexion
{
    /**
     * @var Conexion|null La única instancia de la clase Conexion.
     */
    private static $instance = null;

    /**
     * @var PDO La conexión a la base de datos.
     */
    private $conn;

    /**
     * Constructor privado.
     * 
     * El constructor es privado para evitar que se puedan crear instancias de la clase directamente.
     * La conexión a la base de datos se establece en este método.
     */
    private function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=todo', 'root', '');
    }

    /**
     * Obtener la instancia de la clase Conexion.
     * 
     * Este método estático devuelve la única instancia de la clase Conexion.
     * Si la instancia no existe, se crea una nueva.
     * 
     * @return Conexion La instancia de la clase Conexion.
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Conexion();
        }
        return self::$instance;
    }

    /**
     * Obtener la conexión a la base de datos.
     * 
     * Este método devuelve la conexión a la base de datos.
     * 
     * @return PDO La conexión a la base de datos.
     */
    public function getConnection()
    {
        return $this->conn;
    }
}