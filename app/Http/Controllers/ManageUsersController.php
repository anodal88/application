<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;

class ManageUsersController extends Controller
{

   public function index(){
       return view('management.users.index');
   }
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIndexData()
    {
        return Datatables::of(User::query())->make(true);
    }
}
