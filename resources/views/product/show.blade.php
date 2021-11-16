@extends('layouts.app')

@section('content')

<section class="page-section product" id="product">
  <a class="btn-toolbar mt-2"  href="{{route('home')}}">{{__('pagination.back')}}</a>
  <ul class="list-group list-group-horizontal justify-content-center mt-5">
    <li class="list-group-item">
      <div class="container product-description-container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-10">{{$data["product"]->getName()}} {{$data["product"]->model}}</h2>
        <p>
            <ul class="product-description">
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="mr-5">
                      {{__('product.category')}}
                    </li>
                    <li>
                       {{$data["product"]->getCategory()}}
                    </li>
                  </ul>  
                </li>
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="mr-5">
                    {{__('product.brand')}} 
                    </li>
                    <li>
                    {{$data["product"]->getBrand()}}
                    </li>
                  </ul>
                </li>
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="mr-5">
                      {{__('product.stock')}} 
                    </li>
                    <li>
                      {{$data["product"]->getStock()}}
                    </li>
                  </ul>
                </li>
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="ml-5">
                      {{__('product.price')}} 
                    </li>
                    <li class="ml-5">
                      {{$data["product"]->getPrice()}}
                    </li>
                  </ul>
                </li>
            </ul>
        </p>
    </div>
    </li>
    
    <li class="list-group-item">
      <div class="container mt-5">
        <form method="POST" action="{{route('cart.add')}}">
            @csrf
            <input class= "form-control" type="number" placeholder= "{{ __('product.quantity')}}" name="quantity">
            <input type="hidden" name="product_id" value="{{ $data['product']->getId() }}">
            <input class="btn btn-primary mt-2" type="submit" value="{{ __('product.add_cart') }}">
        </form>   
      </div>
    </li>
    
  </ul>
</section>