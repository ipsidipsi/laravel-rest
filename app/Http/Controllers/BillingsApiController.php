<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billings;

class BillingsApiController extends Controller
{
    //
    public function index (){
        return Billings::all();
    }

}
