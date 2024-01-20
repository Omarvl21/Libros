<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecomenController extends Controller
{
    public function index(){
        return view('cursos.otros');

    }
}
