<?php
//namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;
//use DB;


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
Route::get('photo/director', 'PhotoController@getDirector');
Route::resource('photo', 'PhotoController');






Route::resource('api', 'ApiController');

Route::get('/', function () {
    return view('welcome');
   // return 'hello';
});

Route::get('/user', function (Request $request) {
     return view('welcome');
    //$users = DB::select('select * from `employee`');
    //return $users;
});

