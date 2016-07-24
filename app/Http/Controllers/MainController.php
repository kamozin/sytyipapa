<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

class MainController extends Controller
{
    public function index(){

        $category=$this->getCategory();

        return view ('main');
    }


    public function contact(){


        return view('contact');

    }



    static  function getCategory(){

        $categoryes=Category::all();

        $category=[];

        $i=0;
        foreach($categoryes as $c){

            $category[$i]=$c['original'];

            $i++;

        }

        $cats=[];

        foreach($category as $cat){

            $cats_ID[$cat['id']][] = $cat;
            $cats[$cat['parent_id']][$cat['id']] =  $cat;

        }

//        dd($cats);

        $cat=CategoryesController::build_tree($cats, 0);

//        dd($cat);
        return $cat;
    }




}
