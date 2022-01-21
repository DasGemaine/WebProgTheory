<?php

use App\Http\Controllers\GhostController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\UserController;
use App\Models\Ghost;
use App\Models\Story;
use App\Models\User;
use Illuminate\Support\Facades\Route;
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

Route::GET('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
})->name('home');
Route::POST('/logout', [UserController::class, 'logout']);


Route::GET('/login',function(){
    return view('login', [
        'title' => 'Login'
    ]);
})->middleware('guest')->name('login');
Route::POST('/login', [UserController::class, 'login']);



Route::GET('/register',function(){
    return view('register', [
        'title' => 'Register'
    ]);
})->middleware('guest')->name('register');

Route::POST('/register', [UserController::class, 'register']);


Route::GET('/ghosts', [GhostController::class, 'index'])->name('ghosts');

Route::GET('/ghosts/add-ghost', function(){
    return view('add-ghost', [
        'title' => 'Add Ghost'
    ]);
})->middleware('auth')->name('add-ghost');

Route::POST('/ghosts/add-ghost', [GhostController::class, 'create']);

Route::GET('/ghosts/{ghosts:name}', [GhostController::class, 'detail'])->name('ghost-detail');

// Route::GET('/ghosts/{ghosts:name}/weakness', function () {
//     return view('weakness');
// })->name('weakness');

Route::GET('/stories', [StoryController::class, 'index'])->name('stories');

Route::GET('/stories/add-story', function(){

    $ghosts = Ghost::all();
    
    return view('add-story', [
        'title' => 'Share Story',
        'ghosts' => $ghosts
    ]);
});

Route::POST('/stories/add-story', [StoryController::class, 'create'])->middleware('auth');

Route::GET('/stories/{story:title}', [StoryController::class, 'show']);



Route::GET('/profile/{users:name}', [UserController::class, 'index'])->middleware('auth');

Route::GET('/profile/{users:name}/edit', [UserController::class, 'editProfile'])->middleware('auth');

Route::POST('/profile/{users:name}/edit', [UserController::class, 'update'])->middleware('auth');








