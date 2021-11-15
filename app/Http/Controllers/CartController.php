<?php
//phpcs:disable
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function add(Request $request)
    {
        
    }

    public function show(Request $request)
    {
        $item = Item::findOrFail($id);
    }

    public function checkout()
    {
        Order::validate($request);
        $items = $request->session()->get('items');
    }
}
