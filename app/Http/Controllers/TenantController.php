<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index(){
        /*Temporalmente para el landing hasta que desarrolle sus vistas*/
        return redirect()->route('landing');
    }
}
