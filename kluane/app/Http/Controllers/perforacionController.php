<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perforacionController extends Controller
{
    public function __invoke(){
        return view('Esp.perforacion');
    }
}
