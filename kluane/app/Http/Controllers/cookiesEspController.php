<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cookiesEspController extends Controller
{
    public function __invoke(){
        return view('Esp.cookiesEsp');
    }
}
