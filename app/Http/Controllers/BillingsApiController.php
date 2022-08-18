<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\SchemaBuiler;
use App\Models\Billings;
use League\Csv\Reader;
use League\Csv\Writer;
use League\Csv\Statement;

use Illuminate\Support\Facades\Schema;


class BillingsApiController extends Controller
{
    //
    public function index (){
       // return Billings::all();
       $filename='unpaidconsumers';
       $path = storage_path() . "/json_files/${filename}.json"; // ie: /var/www/laravel/app/storage/json/filename.json
       $json = json_decode(file_get_contents($path), true); 
       return $json;
    }

    public function getaccountno ($accountnumber){
        $filename='unpaidconsumers';
        $path = storage_path() . "/json_files/${filename}.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $data=file_get_contents($path);
        $json = json_decode($data, true); 
      return collect($json)->where('accountnumber',$accountnumber)->first();
     }

    public function readCsv(){
        $filename='sample';
        $path = storage_path() . "/json_files/${filename}.csv"; // ie: /var/www/laravel/app/storage/json/filename.json
        $file= Reader::createFromPath($path,'r');
        $file=$file-->setOffset(1);
       // $file=$file-->setHeaderOffset(0);
        
        //dd($file->fetchAll());
        $response =json_encode($file);
        header('Content-type:application/json;charset="utf-8"');
        return($response);

        


    }
    

}
