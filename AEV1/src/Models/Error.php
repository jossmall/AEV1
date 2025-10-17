<?php

namespace AEV1\Models;

class Error
{
    public function __construct()
    {
    }

    public function error() : string
    {
        return "ERROR!: ID no encontrado";
    }
}