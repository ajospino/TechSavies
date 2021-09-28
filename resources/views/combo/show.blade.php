@extends('layouts.app')

@section('content')

<section class="page-section combo" id="combo">
    <div class="container combo-description-container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-10">{{$data["product"]->name}} {{$data["product"]->model}}</h2>
        
        <p>
            <ul class="combo-description">
                <li>
                  Name : {{$data["combo"]->name}}  
                </li>
                <li>
                  Type : {{$data["combo"]->type}}
                </li>
                <li>
                  Price : {{$data["combo"]->price}}
                </li>
                <li>
                   Description : {{$data["combo"]->description}}
                 </li>
                 <li>
                    Stock : {{$data["combo"]->quantityAvailable}}
                  </li>
            </ul>
        </p>
    </div>
    <div class="col-lg-4 mr-auto">
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="{{ route('combo.edit', ['id' => $combo->id]) }}">
                Edit
            </a>
        </div>
    </div>
</section>