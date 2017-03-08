<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        /*Temporary to landing page till i finish lessor views*/
        return redirect()->route('landing');
    }
}
