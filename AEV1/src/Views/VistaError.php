<?php

namespace AEV1\Views;

class VistaError
{
    const HTML = __DIR__ . '/../../public/assets/mostrarError.html.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param string|null $error
     * @return void
     */
    public function render(string $error = null): void
    {
        require_once self::HTML;
    }
}