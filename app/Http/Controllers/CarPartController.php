<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Http;

class CarPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuesta = Http::get('http://carpart.ml/carparts_ecommerce/public/api/products');
        $datos = $respuesta->json();
        return view('carpart.index', compact('datos'));
    }
}
