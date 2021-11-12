@extends('layouts.app')

@section('content')

<section class="page-section product" id="product">
    <div class="container product-description-container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-10">{{$data["product"]->name}} {{$data["product"]->model}}</h2>
        
        <p>
            <ul class="product-description">
                <li>
                  {{__('product.category')}}{{$data["product"]->category}}  
                </li>
                <li>
                  {{__('product.brand')}} {{$data["product"]->brand}}
                </li>
                <li>
                  {{__('product.stock')}} {{$data["product"]->stock}}
                </li>
                <li>
                   {{__('product.price')}} {{$data["product"]->price}}
                 </li>
            </ul>
        </p>
    </div>
</section>