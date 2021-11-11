<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function list()
    {
        $data = []; //to be sent to the view

        $data["title"] = "Order";
        $data["item"] = Item::orderBy("id", "desc")->get();

        return view("item.list")->with("data", $data);
    }

    public function add()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create order";

        return view("order.create")->with("data", $data);
    }

    public function save(Request $request)
    {
        Order::validateOrder($request);

        $product = Order::create(
            $request->only(
                "name",
                "model",
                "category",
                "brand",
                "stock",
                "price"
            )
        );

        $product->isPromoted = Combo::findOrFail(
            $product->comboDivider->combo->id
        );

        redirect()->route("home.index");
        //here goes the code to call the model and save it to the database
    }

    public function show($id)
    {
        $data = [];
        $product = Product::findOrFail($id);
        $data["product"] = $product;
        return view("product.show")->with("data", $data);
    }

    // public function search(Request $request)
    // {
    //     $term = $request->input("term");

    //     $results = Product::query()->when($term, fn ($query)=> $query->where('name','like',"%{term}%"))->paginate(10);

    //     return view('product.search')->with([("results",$results),("term",$term)]);
    // }
}

?>
