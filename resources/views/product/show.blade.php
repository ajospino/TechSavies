@extends('layouts.app')

@section('content')

<section class="page-section portfolio" id="portfolio">
    <div class="container product-description-container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-10">{{$data["product"]->name}} {{$data["product"]->model}}</h2>
        
        <p>
            <ul class="product-description">
                <li>
                  Category : {{$data["product"]->category}}  
                </li>
                <li>
                  Brand : {{$data["product"]->brand}}
                </li>
                <li>
                  Stock : {{$data["product"]->stock}}
                </li>
                <li>
                   Price : {{$data["product"]->price}}
                 </li>
            </ul>
        </p>
    </div>
</section>