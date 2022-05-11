<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'loginUser']);

Route::get('/logout',[UserController::class,'logoutUser']);


//signup routing 
Route::get('/signup', function (){
    return view('signup');
});

Route::post('/signup',[UserController::class,'signUp']);


Route::group(['middleware'=>['loginAuth']],function(){

    Route::get('/',[UserController::class,'index']);



    Route::get('/add_data', function () {
        return view('add_data');
    });
    
    
    Route::get('delete/{id}',[UserController::class,'deleteData']);
    Route::post('/add_data',[UserController::class,'addData']);
    
    
    
    Route::get('edit/{id}',[UserController::class,'showData']);
    Route::post('/update_data',[UserController::class,'updateData']);
    
    

});