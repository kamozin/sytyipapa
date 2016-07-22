<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Input;
use Storage;
use Session;

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

        $v = Validator::make($request->all(), [
            'file' => 'mimes:jpg,png,jpeg',

        ]);

        if ($v->fails()) {


            return redirect()->back()->with('error', 'Тип файла запрещен')->withInput();
        }
        $category=new Category();

        $category->name=$request->name;
        $category->url=TranslitController::str2url($category->name);
        $urlCheck = $this->checkUrl($category->url);

        if (empty($urlCheck['items'])) {


        } else {

            return redirect()->back()->with('error', 'URL уже существует измените название')->withInput();

        }
        $category->parent_id=$request->parent_id;

        $file = $request->file('file');

        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filename=TranslitController::str2url($filename);
        $filename = $filename . '-' . time() . '.' . $extension;
        $category->img = $filename;

        $request->file('file')->move('gallery/category/', $filename);



        $file = $request->file('file_background');

        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filename=TranslitController::str2url($filename);
        $filename = $filename . '-' . time() . '.' . $extension;
        $category->img = $filename;

        $request->file('file_background')->move('gallery/category/background/', $filename);

        if ($category->save()) {
            return redirect('/home/category')->with('success', 'Категория ' . $request->input('name') . ' успешно создана');
        } else {
            return redirect()->back()->with('error', 'Ошибка при создании категории');
        }


    }

    public function checkUrl($url)
    {

        $category = Category::where('url', '=', $url)->get();

        return $category;

    }


    public function edit($id){


    }

    public function update(Request $request){



    }

    public function destroy($id){

            $category=Category::find($id);

        $category->delete();


        return redirect('/home/category')->with('success', 'Категория успешно удалена');

    }
}
