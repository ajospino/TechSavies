<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use PDF;

class OrderController extends Controller
{
    public function list()
    {
        $data = []; //to be sent to the view

        $data['title'] = 'Orders Listing';
        $user = Auth::user();

        $data['list'] = Order::with('user')
            ->orderBy('id')
            ->where('user_id', $user->getId())
            ->get();

        return view('order.list')->with('data', $data);
    }

    public function show($id)
    {
        $data = [];
        $order = Order::findOrFail($id);
        $data['order'] = $order;
        return view('order.show')->with('data', $data);
    }

    public function orderPDF()
    {
        $data = [];
        $data['title'] = 'Orders list';
        $user = Auth::user();
        $data['list'] = Order::with('user')
            ->orderBy('id')
            ->where('user_id', $user->getId())
            ->get();

        $pdf = PDF::loadView('order.generatePdf', ['data' => $data]);

        return $pdf->download('Orders.pdf');
    }
}
