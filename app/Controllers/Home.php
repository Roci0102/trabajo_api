<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function mostrar(): string
    {
        return view('mostrar');
    }
}
