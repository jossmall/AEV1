<?php

namespace AEV1\Controllers;

use AEV1\Models\Home;
use AEV1\Views\VistaPrincipalTareas;

class HomeController
{
    public function welcome() : void
    {
        $home = new Home();
        $view = new VistaPrincipalTareas();
        $view->render($home->home());
    }
}