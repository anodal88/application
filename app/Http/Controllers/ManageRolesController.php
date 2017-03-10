<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Role;

class ManageRolesController extends Controller
{
    /**
     * Function to render mange roles view
     */
    public function index(){
        return view('management.roles.index');
    }

    /**
     * Function that return Json data for datattable
     * @return mixed
     */
    public function getIndexData()
    {
        return Datatables::of(Role::query())->make(true);
    }
}
