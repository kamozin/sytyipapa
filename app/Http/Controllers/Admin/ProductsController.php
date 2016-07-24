<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Session;
use Input;
use Validator;
use Storage;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

//    Все товары
    public function index(){


        $products=Products::all();

        $category=Category::all();

        return view('admin.products.show', ['products'=>$products, 'category'=>$category]);


    }


//    форма создания
    public function store(){

        $category=Category::all();
        return view('admin.products.store', ['category'=>$category]);

    }


    public function create(Request $request){

        $product=new Products();

        $product->name=$request->name;
        $product->url=TranslitController::str2url($product->name);
        $product->category_id=$request->id_category;

        $file = $request->file('file');

        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filename=TranslitController::str2url($filename);
        $filename = $filename . '-' . time() . '.' . $extension;
        $product->img = $filename;

        $request->file('file')->move('gallery/products/', $filename);

        $product->price=$request->price;
        $product->compare_price=0;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->keywords=$request->keywords;
        $product->text=$request->text;

        $product->save();

        return redirect('/home/products')->with('success', 'Товар '.$product->name.' успешно добавлен');


    }


    public function edit($id){

        $product=Products::find($id);
        $category=Category::all();
        return view('admin.products.edit', ['product'=>$product, 'category'=>$category]);
    }


    public function update(Request $request){

        $product=Products::find($request->id);

        $product->name=$request->name;
        $product->url=TranslitController::str2url($product->name);
        $product->category_id=$request->id_category;
        $product->price=$request->price;
        $product->compare_price=0;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->keywords=$request->keywords;
        $product->text=$request->text;

        $product->save();

        return redirect('/home/products')->with('success', 'Товар '.$product->name.' успешно обновлен');

    }


    public function updateImg(Request $request){

        $product=Products::find($request->id);


        $file_old=$product->img;

        $file = $request->file('file');

        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filename=TranslitController::str2url($filename);
        $filename = $filename . '-' . time() . '.' . $extension;
        $product->img = $filename;

        $request->file('file')->move('/gallery/products/', $filename);

        $path='/gallery/products/';
        Storage::delete($path . $file_old);

        $product->save();

        return redirect('/home/products')->with('success', 'Фото товара успешно обновлено');


    }


    public function destroy($id){

        $product=Products::find($id);
//
        $path='/gallery/products/';



        if($product->delete){

            Storage::delete($path . $product->img);

            return redirect('/home/products')->with('success', 'Товар успешно удален');

        }




    }


}
