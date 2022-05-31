<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/product', function () {
//     $data = [];
//     //return view('user.viewproduct', ['data' => $data]);

// });

Route::get('/product', 'ProductController@index');

Route::get('/setting', function () {
    return view('user.setting');
});

// Route::get('/edit',function(){
//     return view('user.edit');
// });

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::post('/resetpassword', 'ResetController@updatePassword');


Route::post('/addproduct', 'ProductController@insert');

Route::get('/view', 'ProductController@index');

Route::get('/search', 'ProductController@search');


Route::get('/oneproduct/{id}', 'ProductController@onerecordview');
//Route::get('/oneproduct/{id}', 'ProductController@onerecordview');

// Route::get('/onerecord', function () {
//     return view('user.oneproductview');
// });



// Route::get('/demo', function () {
//     return view('user.demo');
// });

//Route::get('/demo/{id}','ProductController@onerecordview');



Route::get('/edit/{id}', 'ProductController@edit');
Route::post('/update', 'ProductController@update');


Route::get('/profile', 'ProductController@profile');

Route::get('/changepassword', 'ProductController@changepasswordshow');
Route::post('/change_password', 'ProductController@changePassword');






Route::get('/contact', function () {
    return view('includes.contact');
});

// Admin route

Route::get('/user', 'AdminController@index');
Route::get('/oneuser/{id}', 'AdminController@oneuserview');
Route::get('/delete/{id}', 'AdminController@deleteuser');




// forgot and reset password

// Route::get('/forget',function(){
//     return view('auth.forgotpassword');
// });
// Route::get('/reset',function(){
//     return view('auth.resetpassword');
// });



