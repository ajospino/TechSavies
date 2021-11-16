<?php

//phpcs:disable

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        $objects = $request->session()->get('products');
        if ($objects && array_key_exists($product->getId(), $objects)) {
            $msg = 'item_in_cart';
        } else {
            if ($product->getStock() < $request->input('quantity')) {
                $msg = 'item_quantity_error';
                return back()->with('message', $msg);
            }
        }
        $objects[$product->getId()] = [
            'quantity' => $request->input('quantity'),
            'itemTotal' => $product->getPrice() * $request->input('quantity'),
        ];

        $request->session()->put('products', $objects);
        $msg = 'item_added';

        return back()->with('message', $msg);
    }

    public function show(Request $request)
    {
        $data = [];

        $objects = $request->session()->get('products');
        if ($objects) {
            $products = Product::find(array_keys($objects));
            $data['empty'] = false;
        } else {
            $data['empty'] = true;
            return view('cart.show', ['data' => $data]);
        }
        $data['objects'] = $objects;

        foreach ($products as $key => $product) {
            if ($objects[$product->getId()]['quantity'] > $product->getStock()) {
                unset($products[$key]);
                unset($objects[$product->getId()]);
            }
        }

        session()->put('products', $objects);
        if (!$objects) {
            $data['empty'] = true;
            return view('cart.show', ['data' => $data]);
        }

        $data['products'] = $products;
        $subtotal = 0;
        foreach ($objects as $object) {
            $subtotal += $object['itemTotal'];
        }
        $data['subtotal'] = $subtotal;

        return view('cart.show', ['data' => $data]);
    }

    public function checkout(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('register');
        } else {
            Order::validate($request);
            $objects = $request->session()->get('products');
            if ($objects) {
                $user = Auth::user();
                $total = 0;
                $order = new Order();
                $order->setAddress($user->getAddress());
                $order->setDate(Carbon::now());
                $order->setPaymentType($request->input('paymentType'));
                $order->setUserId($user->getId());
                $order->setTotal($total);
                $order->save();
                foreach ($objects as $key => $object) {
                    $product = Product::find($key);
                    $item = new Item();
                    $item->setOrderId($order->getId());
                    $item->setProductId($product->getId());
                    $product->setStock($product->getStock() - $object['quantity']);
                    $item->setQuantity($object['quantity']);
                    $item->setSubtotal($object['itemTotal']);
                    $total += $object['itemTotal'];
                    $product->save();
                    $item->save();
                }
                $order->setTotal($total);
                $order->save();
                $request->session()->forget('products');
                return redirect()->route('order.show', ['id' => $order->getId()]);
            }
        }

        return back();
    }

    public function empty(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }
}
