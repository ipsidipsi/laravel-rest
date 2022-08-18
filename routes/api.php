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
//-------------ORIGINNAL API AUTH
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {
    //----------------------ALL CONSUMERS IN JSON FILE----------------------------
    Route:: get('/unpaid', [BillingsApiController::class, 'index']);

    //----------------------SPECIFIC CONSUMERS IN JSON FILE SANA-----------
    Route:: get('/unpaid/{accountnumber}', [BillingsApiController::class, 'getaccountno']);
});
    //     return $request->user();
    // });

//-----------ALL CONSUMERS in DB--------------
// Route:: get('/billing', function(){
//     return Billings::all();
  
//});
//----------SPECIFIC CONSUMERS in DB--------------------
// Route:: get('/billing/{accountnumber}', function($accountnumber){

//     return Billings::where('accountnumber',$accountnumber)->first();
  
// });

//Route::get('/csv', [BillingsApiController::class, 'readCsv']);

//Route::get('/billing/{billing}', [PostsApiController::class, 'index']);
// Route::post('/posts', [PostsApiController::class, 'store']);
// Route::put('/posts/{post}', [PostsApiController::class, 'update']);
// Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
