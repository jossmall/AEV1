<?php

namespace AEV1\Controllers;

use AEV1\Models\Tareas;
use AEV1\Views\VistaFormulario;

class FormularioController
{
    public function mostrar(): void
    {
        $vista = new VistaFormulario();
        $vista->render();
    }

    public function guardar(): void
    {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $fCreacion = $_POST['fCreacion'];
        $fVencimiento = $_POST['fVencimiento'];

        $model = new Tareas();
        $model->insertar($titulo, $descripcion, $fCreacion, $fVencimiento);
    }
}