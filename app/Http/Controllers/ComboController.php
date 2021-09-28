<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combo;
use Carbon\Carbon;

class ComboController extends Controller
{
    public function list()
    {
        $data = []; //to be sent to the view

        $data["title"] = "Combos";
        $data["combo"] = Combo::orderBy("id", "desc")->get();

        return view("combo.list")->with("data", $data);
    }

    public function show($id)
    {
        $data = [];
        $combo = Combo::findOrFail($id);
        $data["combo"] = $combo;
        return view("combo.show")->with("data", $data);
    }

    public function add()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create combo";

        return view("combo.create")->with("data", $data);
    }

    public function save(Request $request)
    {
        Combo::validateCombo($request);

        $combo = Combo::create(
            $request->only(
                "name",
                "type",
                "description",
                "validity",
                "quantityAvailable"
            )
        );

        $productPrice = $combo->comboDivider->product->price;
        $productQuantity = $combo->comboDivider->quantity;

        $combo->price =
            $productPrice * $productQuantity -
            $productPrice * $productQuantity * 10;

        $combo->creationDate = Carbon::now()->toDateTimeString();

        if ($combo->quantityAvailable < 51) {
            $combo->lowSale = false;
        } else {
            $combo->lowSale = true;
        }

        //here goes the code to call the model and save it to the database
    }

    public function edit($id)
    {
        $data = [];
        $combo = Combo::findOrFail($id);
        $data["combo"] = $combo;
        $data["title"] = "Edit combo";

        return view("combo.edit")->with("data", $data);
    }

    public function delete($id)
    {
        $data = [];
        $comnbo = Combo::findOrFail($id);
        $data["combo"] = $combo;
        return view("combo.show")->with("data", $data);
    }

    public function moderate(Request $request)
    {
        $data = []; //to be sent to the view
        $data["title"] = "Moderate combo";
        $data["request"] = $request;

        return view("combo.moderate")->with("data", $data);
    }

    public function approve(Request $request)
    {
        $this->save($request);

        redirect()->route("home.index");
    }

    public function deny($id)
    {
        $data = [];
        $product = Product::findOrFail($id);
        $data["product"] = $product;
        return view("product.show")->with("data", $data);
    }
}

?>
