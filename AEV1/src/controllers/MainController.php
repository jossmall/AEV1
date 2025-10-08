<?php

namespace AP34\Controllers;

use AP34\Models\Tareas;
use AP34\Views\ListadoTareas;

class MainController
{
    public function main()
    {
        //En este caso el controller únicamente debe preocuparse de hablar con el Modal y le da igual como se
        //conecta este con la BB.DD.
        $tarea = new Tareas();
        //Ahora recibimos todos los datos que existan en la tabla.
        $view = new ListadoTareas();
        $view->render($tarea->findAll());
    }
}