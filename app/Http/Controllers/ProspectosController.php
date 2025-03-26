<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comercial\Prospecto;

class ProspectosController extends Controller
{
    public function prospectos(){
        return view('comercial.prospectos.prospectos');
    }
}
