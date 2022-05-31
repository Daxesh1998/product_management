<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    function index(){

        $data=User::all();
       // echo $data;
       // return view('admin.viewuser');
        return view('admin.viewuser', compact('data'));
    }

    function oneuserview($id){

        $data=User::find($id);
        return view('admin.oneuserview', compact('data'));

    }

    function deleteuser($id){

        User::find($id)->delete();
        return redirect('/user');
    }
}
