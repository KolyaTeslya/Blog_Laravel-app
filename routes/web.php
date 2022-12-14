<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('post', \App\Http\Controllers\PostController::class);

Route::get('test-provider', [\App\Http\Controllers\TestController::class, 'testProvider']);



//Route::get('/roles', function (){
//   $user = \Illuminate\Support\Facades\Auth::user();
//   return response()->json([
//       'roles' => $user->roles
//   ]);
//});
