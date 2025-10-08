<?php

namespace AP34\Core;

use AP34\Core\Interfaces\IDataBase;

/**
 * Esta clase posee un sistema de conexión a la BB.DD. siguiendo un patrón Singleton
 */
class DataBase implements IDataBase
{
    public static $dbConfig;
    public static $instancia = null;
    public static $conexion;

    public function __construct()
    {
        $configPath = __DIR__ . '/../../config/dbConfig.json';
        if (!file_exists($configPath)) {
            die('No se encuentra el archivo de configuración de la base de datos.');
        }
        self::$dbConfig = json_decode(file_get_contents($configPath), true);
        if (!self::$dbConfig) {
            die('Error al leer el archivo de configuración de la base de datos.');
        }
        $this->getConnection();
    }

    /**
     * Creamos una instancia únicamente si no existe una previamente.
     * @return DataBase
     */
    public static function getInstance()
    {
        if (self::$instancia === null) {
            self::$instancia = new DataBase();
        }
        return self::$instancia;
    }

    /**
     * Genera la conexión a la BBDD
     * @return void
     */
    private function getConnection()
    {
        //Se definen las varíables para crear la conexión a la BBDD
        $host = self::$dbConfig["host"];
        $username = self::$dbConfig["user"];
        $password = self::$dbConfig["password"];
        $database = self::$dbConfig["database"];

        //Creamos la conexión, pero en este caso debemos usar self en vez de this porque estamos haciendolo con
        //variables estáticas.
        self::$conexion = new \mysqli($host, $username, $password, $database);
    }

    private function __clone()
    {
    }

    /**
     * Función que ejecuta cualquier sentencia SQL que recibe y devuelve el resultado en un array asociativo
     * ESTA FUNCIÓN SE HA IMPLEMENTADO SÍ O SÍ PORQUE LO DEFINE EL INTERFAZ
     */
    public function executeSQL($sql)
    {
        return self::$conexion->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function executeSQLnoreturn($sql)
    {
        return self::$conexion->query($sql);
    }

    /**
     * Se encarga de asegurarse que no se queda la conexión abierta consumiendo recursos
     */
    public function __destruct()
    {
        if (self::$conexion != null) {
            self::$conexion->close();
        }
    }
}