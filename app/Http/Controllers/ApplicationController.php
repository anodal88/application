<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class ApplicationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard depending of the role of atuthenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function router()
    {
        if(Auth::user()->hasRole('admin')){
            return redirect()->route('admin.dashboard');
        }elseif (Auth::user()->hasRole('owner')){
            return redirect()->route('owner.dashboard');
        }else{
            return redirect()->route('tenant.dashboard');
        }

    }
}
