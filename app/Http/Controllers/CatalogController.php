<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogController extends Controller
{

    public function products($url){

        return view('products');

    }


    public function product(){



    }
}
