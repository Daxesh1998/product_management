<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Str;
use App\Password_reset;
use Illuminate\Support\Facades\DB;

class ResetController extends Controller
{


    public function updatePassword(Request $request)
    {
        echo "call reset function";
        //$email=$request->email;
        // $token=$request->token;

        $request->validate([

            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);


        $user = User::where('email', $request->email)->first();


        if ($user) {


            $user['password'] = Hash::make($request->password);
            $user->save();
            return redirect('/login')->with('success', 'Success! password has been changed');
        }
        return redirect('/resetpassword')->with('failed', 'Failed! something went wrong');
    }
}
