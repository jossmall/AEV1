<?php

namespace AEV1\Views;

class VistaPrincipalTareas
{
    const HTML = __DIR__ . '/../../public/assets/home.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param string|null $saludo
     * @return void
     */
    public function render(string $saludo = null): void
    {
        require_once self::HTML;
    }

}