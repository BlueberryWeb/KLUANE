<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hseController extends Controller
{
    public function __invoke(){
        return view('Pagina.hse');
    }
}
