<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category=Category::all();
      return view('admin.category.show', ['category'=>$category]);
    }


    public function store(){

        $category=Category::all();

        return view('admin.category.add', ['categories'=>$category]);

    }


    public function create(Request $request){


    }


    public function edit($id){


    }

    public function update(Request $request){



    }

    public function destroy($id){



    }
}
