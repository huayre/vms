<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PruebaController extends Controller
{
    public function listapersonas()
    {
        /*$personas=DB::select('select *from personas');
        dd($personas);*/
        $persona=Persona::all();
        dd($persona);
    }
}
