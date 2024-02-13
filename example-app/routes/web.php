<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyAuth;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HW5_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
use App\Http\Controllers\MyAuth;
use App\Models\User;
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_titles;
*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// HOMEWORK 7 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1
Route::get('/HW7', function () {
    return view('HW7');
});


//29-1-66
Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::get('/logout', [MyAuth::class, 'logout_process']);
Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/register', [MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){
    // auth first
});

//15-1-66
/*
Route::resource('titles', C_titles::class);
*/

/* HOMEWORK 5 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1 */
Route::get('/my-form', [HW5_Controller::class, 'index']);

//เนื้อหา 4-1-66
/*
Route::get('/my-controller', [MyController::class, 'index']);

Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
    Route::post('/my-controller3-post', 'MyController@store');
});

Route::resource('/my-controller4', MyController::class);
*/


//เนื้อหา 25-12-66

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/my-route',function(){
    //echo "<h1>My Route Page</h1>";
    //return view('myroute');
    //Key => Value
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage',$data);
});

Route::post('/my-route', function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});
*/


/* HOMEWORK 4 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1 */
/*
Route::get('/my-result',function(){
    $data = ['Multiplication' => 'แม่สูตรคูณ'];
    return view('myfolder.HW4_Input',$data);
});
Route::post('/my-result', function(Request $req){
    $data['input'] = $req->input('input');
    return view('HW4_Output', $data);
});
*/


