<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();

        // echo $data;
        return view('user.viewproduct', ['data' => $data]);

        //echo $data;
    }


    function profile()
    {
        $data = User::first();
        //echo $data;
        // return redirect('user.profile');
        return view('user.profile', compact('data'));
    }

    function insert(Request $req)
    {
        //dd("hello");

        //echo "call insert function";

        $data = new Product;
        $data->name = $req->name;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->image = $req->image;
        $data->user_id=$req->user_id;
        
        // $userid=$req->userid;
        // dd($userid);

        // if($req->hasFile('image'))
        // {
        //     // $file=$req->file('image');
        //     // $extention=$file->getClientOriginalExtension();
        //     // $filename=time().'.'.$extention;
        //     // $file->move('image/',$filename);
        //     // $data->image=$filename;
        //    // Storage::disk('public')->put($filename,  File::get($file));

        //    $destination_path='public/image';
        //    $image=$req->file('image');
        //    $image_name=$image->getClientOriginalName();
        //    $path=$req->file('image')->storeAs($destination_path,$image_name);

        //    $data->image=$image_name;
        // }
        $data->save();
        return redirect('/product');
    }


    function onerecordview($id)
    {

        $data = Product::find($id);
        //echo $data;
        // return view('user.oneproductview',['data' => $data]);
        return view('user.oneproductview', compact('data'));
    }


    function edit($id)
    {
        $data =  Product::find($id);
        echo $data;
        return view('user.edit', ['data' => $data]);
    }
    function update(Request $req)
    {


        $data = Product::find($req->id);;
        $data->name = $req->update_name;
        $data->price = $req->update_price;
        $data->description = $req->update_description;
        $data->image = $req->update_image;
        $data->save();
        return redirect('/product');
    }


    function changepasswordshow(Request $req)
    {

        return view('user.setting');
    }

    public function changePassword(Request $request)
    {

        // $data = User::find($request->id);
        // $data->oldpass=$request->oldpassword;
        // $data->newpass=$request->newpassword;
        // $data->confpass=$request->confpassword;


        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password successfully changed!');
    }



    public function search(Request $request)
    {

        $output = "";
        $data = Product::where('name', 'Like', '%' . $request->search . '%')
        ->orwhere('description', 'Like', '%' . $request->search . '%')
        ->get();

        foreach ($data as $item) {
            $output .=
                '<table><tr>
            <td scope="row"> ' . $item->id . '</td>
            <td> ' . $item->name . '</td>
            <td> ' . $item->price . '</td>
            <td> ' . $item->description . '</td>
            
            <td><img src="image/'.$item->image.'" height="70px" width="70px"></td>
            <td> <a href="/oneproduct/'.$item->id.'">View</a> </td>
                <td><a href="/edit/'.$item->id.'">Edit</a></td>
            

            </tr></table>';
        }
        return response($output);
    }
}
