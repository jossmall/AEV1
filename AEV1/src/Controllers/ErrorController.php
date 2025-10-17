<?php

namespace AEV1\Controllers;

use AEV1\Models\Error;
use AEV1\Views\VistaError;
use AEV1\Views\VistaError404;

class ErrorController
{
    public function mostrarError(): void
    {
        $error = new Error();
        $view = new VistaError();
        $view->render($error->error());
    }


    public function mostrar404(): void
    {
        $view = new VistaError404();
        $view->render();
    }
}