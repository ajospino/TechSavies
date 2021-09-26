@extends('layouts.app')

@section('content')

<section class="page-section products" id="products-list">
    <div class="container mt-5">
        <!-- Products list Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Products</h2>
        <!-- Product Grid Items-->
        <div class="row">
            @foreach($data["product"] as $product)
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="product-item mx-auto">
                    <a href="{{ route('product.show', ['id' => $product->id]) }}">
                        <h2 class="product-title">
                        {{$product->name}} {{$product->model}}
                        </h2>
                    </a>
                    
                   <p class="product-price">
                    Price:  ${{$product->price}} COP
                   </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>