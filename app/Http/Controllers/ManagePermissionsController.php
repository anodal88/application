<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Permission;

class ManagePermissionsController extends Controller
{
    /**
     * Function to render mange roles view
     */
    public function index(){
        return view('management.permissions.index');
    }

    /**
     * Function that return Json data for datattable
     * @return mixed
     */
    public function getIndexData()
    {
        return Datatables::of(Permission::query())->make(true);
    }
}
