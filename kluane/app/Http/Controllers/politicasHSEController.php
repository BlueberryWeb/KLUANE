<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class politicasHSEController extends Controller
{
    public function __invoke(){
        return view('Esp.politicasHSE');
    }
}
