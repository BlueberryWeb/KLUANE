<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workController extends Controller
{
    public function __invoke(){
        return view('Pagina.work-with-us');
    }
}
