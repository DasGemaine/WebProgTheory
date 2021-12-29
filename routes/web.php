<?php

use App\Http\Controllers\GhostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use app\Models\Story;

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
    return view('home',[
        "title" => "Home"
    ]);
});
Route::POST('/logout', [UserController::class, 'logout']);


Route::get('/login',function(){
    
    return view('login');
})->middleware('guest');
Route::POST('/login', [UserController::class, 'login']);



Route::get('/register',function(){
    
    return view('register');
})->middleware('guest');

Route::POST('/register', [UserController::class, 'register']);



Route::get('/fight', function () {
    return view('fight');
});



Route::get('/stories', function () {
    return view('stories');
});

Route::get('/story',function(){
    
    return view('story');
});
Route::get('/experiences',function(){
    
    return view('experiences');
});


Route::GET('/add-ghost', [GhostController::class, 'index']);



