<?php

use App\Models\Billings;
use App\Http\Controllers\PostsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route:: get('/billing', function(){
    return Billings::all();
  
});

Route:: get('/billing/{accountnumber}', function($accountnumber){

    return Billings::where('accountnumber',$accountnumber)->first();
  
});

Route:: get('/json', function(){
   $b= new Billings();
   return dd($b);
  
});

//Route::get('/billing', [BillingsApiController::class, 'index']);

//Route::get('/billing/{billing}', [PostsApiController::class, 'index']);
// Route::post('/posts', [PostsApiController::class, 'store']);
// Route::put('/posts/{post}', [PostsApiController::class, 'update']);
// Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
