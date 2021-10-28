<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;

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

Route::get('/', function () {
    return view('signup');
});

Route::get('insert',[UserController::class,'insertform']);
Route::post('/action_page.php',[UserController::class,'insert']);

Route::get('/viewdata', function () {

    $viewdata = DB::table('customauth')->get();

    return view('viewdata', ['viewdata' => $viewdata]);
});

Route::get('edit/{id}',[ListController::class,'show']);
Route::get('edit-data',[ListController::class,'index']);
Route::post('edit/{id}',[ListController::class,'edit']);

Route::get('delete-data',[ListController::class,'index']);
Route::get('delete/{id}',[ListController::class,'delete']);