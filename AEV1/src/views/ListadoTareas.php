<?php

namespace AP34\Views;

class ListadoTareas
{
    const HTML = __DIR__ . '/../../public/assets/tareas.html';

    /**
     * Renderiza la vista de listado de tareas.
     * @param array|null $listadoTareas
     * @return void
     */
    public function render(array $listadoTareas = null): void
    {
        require_once self::HTML;
    }

}