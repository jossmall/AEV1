<?php

namespace AEV1\Views;

class VistaError404
{
    const HTML = __DIR__ . '/../../public/assets/404.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param string|null $error404
     * @return void
     */
    public function render(string $error404 = null): void
    {
        require_once self::HTML;
    }
}