<?php

namespace AEV1\Models;

use AEV1\Core\DataBase;

class Tareas
{
    //Remarcar que cuando creamos el Model el constructor no hace nada.
    public function __construct()
    {
    }

    /**
     * Función que nos devuelve todos los registros de la tabla Tarea
     */
    public function findAll()
    {
        $sql = "SELECT * FROM tareas";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }

    /**
     * Función que nos devuelve el contenido de una tarea para su id
     */
    public function findById($id)
    {
        $sql = "SELECT * FROM tareas WHERE id=$id";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);
        return array_shift($result);
    }

    // Función para obtener ruta a partir del título de tareas (/detalle/Sed nec metus/facilisis/lorem)
    public function generarRuta($titulo): string
    {
        $rutaTitulo = str_replace(" ", "/", $titulo);
        return "/detalle/" . $rutaTitulo;
    }

    public function insertar(string $titulo, string $descripcion, string $fCreacion, string $fVencimiento)
    {
        $sql = "INSERT INTO tareas (titulo, descripcion, fecha_creacion, fecha_vencimiento)
        VALUES ('$titulo', '$descripcion', '$fCreacion', '$fVencimiento')";
        $db = DataBase::getInstance();
        return $result = $db->executeSQL($sql);
    }
}