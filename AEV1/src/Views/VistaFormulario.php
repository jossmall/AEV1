<?php

namespace AEV1\Views;

class VistaFormulario
{
    const HTML = __DIR__ . '/../../public/assets/formulario.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param string|null $formulario
     * @return void
     */
    public function render(string $formulario = null): void
    {
        require_once self::HTML;
    }
}