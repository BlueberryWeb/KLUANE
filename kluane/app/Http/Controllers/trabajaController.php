<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trabajaController extends Controller
{
    public function __invoke(){
        return view('Esp.trabaja-con-nosotros');
    }
}
