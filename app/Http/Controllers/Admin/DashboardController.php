<?php

namespace App\Http\Controllers\Admin;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered(){
      $users = User::all();
      return view('admin.register')->with('users',$users);
    }

  /*
    public function registerededit(Request $request, $id){

    }
    */

    public function registeredit(Request $request, $id){

        $id = User::findOrFail($id);
        return view('admin.registeredit')->with('id',$id);

    }


}
