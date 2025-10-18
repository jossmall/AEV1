<?php

namespace AEV1\Controllers;

use AEV1\Models\Tareas;
use AEV1\Views\VistaEliminar;

class EliminarController
{
    public function mostrar(): void
    {
        $vista = new VistaEliminar();
        $vista->render();
    }

    public function delete(): void
    {
        $id = $_POST['id'];

        $model = new Tareas();
        $model->deleteById($id);
    }
}