<?php

namespace AEV1\Controllers;

use AEV1\Models\Error;
use AEV1\Views\VistaError;

class ErrorController
{
    public function mostrarError() : void
    {
        $error = new Error();
        $view = new VistaError();
        $view->render($error->error());
    }
}