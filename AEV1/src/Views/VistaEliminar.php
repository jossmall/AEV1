<?php

namespace AEV1\Views;

class VistaEliminar
{
    const HTML = __DIR__ . '/../../public/assets/eliminarTarea.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param string|null $formularioEliminar
     * @return void
     */
    public function render(string $formularioEliminar = null): void
    {
        require_once self::HTML;
    }
}