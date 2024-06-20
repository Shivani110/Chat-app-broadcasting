<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('send-message',function(Request $request){
    event(new Message($request->username,$request->message));
    return ['success'=> true];
});

Route::get('/test',function(){
    return view('test');
});

Route::get('/login',[UserController::class,'login']);
Route::get('/register',[UserController::class,'register']);
Route::post('/user_register',[UserController::class,'registerUser']);
Route::post('/loginuser',[UserController::class,'loginUser']);
Route::get('/logout',[UserController::class,'logout']);