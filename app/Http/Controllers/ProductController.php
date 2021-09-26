<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function list()
    {
        $data = []; //to be sent to the view

        $data["title"] = "Products";
        $data["product"] = Product::orderBy('id','desc')->get();
        
        return view('product.list')->with("data",$data);
    }
    
    public function add()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";

        return view('product.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "model" => "required",
            "category" => "required",
            "brand" => "required",
            "stock" => "required|gt:0",
            "price" => "required|gt:0"
        ]);
        
        $product = Product::create($request->only('name','model','category','brand','stock','price'));
        $product -> isPromoted = False;


        redirect()->route('home.index');
        //here goes the code to call the model and save it to the database     
    }

    public function show($id)
    {
        $data = [];
        $product = Product::findOrFail($id);
        $data["product"] = $product;
        return view('product.show')->with("data", $data);
    }

    public function search($id)
    {
        $data = [];
        $product = Product::findOrFail($id);
        $data["product"] = $product;
        return view('product.show')->with("data", $data);
    }


}




?>