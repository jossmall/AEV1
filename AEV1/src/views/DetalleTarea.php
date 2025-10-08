<?php

namespace AP34\Views;

class DetalleTarea
{
    const HTML = __DIR__ . '/../../public/assets/detalle.html';

    /**
     * Renderiza la vista de detalle de tarea.
     * @param array|null $detalleTarea
     * @return void
     */
    public function render(array $detalleTarea = null): void
    {
        require_once self::HTML;
    }

}