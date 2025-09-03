<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bakery()
    {
        return view('bakery'); // nome da view
    }

    public function sobre()
    {
        return view('sobre'); // nova view "sobre.blade.php"
    }

    public function contato()
    {
        return view('contato'); // nova view "contato.blade.php"
    }
}
