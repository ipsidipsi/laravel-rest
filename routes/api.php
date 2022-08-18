<?php

use App\Models\Billings;
use App\Http\Controllers\BillingsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\storage_path;

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

//-----------ALL CONSUMERS in DB--------------
// Route:: get('/billing', function(){
//     return Billings::all();
  
//});
//----------SPECIFIC CONSUMERS in DB--------------------
// Route:: get('/billing/{accountnumber}', function($accountnumber){

//     return Billings::where('accountnumber',$accountnumber)->first();
  
// });
//----------------------ALL CONSUMERS IN JSON FILE----------------------------
Route:: get('/unpaid', function(){

    $filename='unpaidconsumers';
    $path = storage_path() . "/json_files/${filename}.json"; // ie: /var/www/laravel/app/storage/json/filename.json
    $json = json_decode(file_get_contents($path), true); 
    return $json;
});


//----------------------SPECIFIC CONSUMERS IN JSON FILE SANA-----------
Route:: get('/unpaid/{accountnumber}', function($accountnumber){
    
    $filename='unpaidconsumers';
    $path = storage_path() . "/json_files/${filename}.json"; // ie: /var/www/laravel/app/storage/json/filename.json
    $data=file_get_contents($path);
    $json = json_decode($data, true); 
      return collect($json)->where('accountnumber',$accountnumber)->first();
    });

//Route::get('/csv', [BillingsApiController::class, 'readCsv']);

//Route::get('/billing/{billing}', [PostsApiController::class, 'index']);
// Route::post('/posts', [PostsApiController::class, 'store']);
// Route::put('/posts/{post}', [PostsApiController::class, 'update']);
// Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
