@extends('layouts.app')

@section('content')

<section class="page-section product" id="product">
<a class="btn-toolbar mt-2"  href="{{route('home')}}">{{__('pagination.back')}}</a>
  <ul class="list-group list-group-horizontal justify-content-center mt-5">
    <li class="list-group-item">
      <div class="container product-description-container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-10">{{__('order.title')}}</h2>
        <p>
            <ul class="product-description">
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="mr-5">
                      {{__('order.state')}}
                    </li>
                    <li>
                       {{$data["order"]->getState()}}
                    </li>
                  </ul>  
                </li>
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="mr-5">
                    {{__('order.total')}} 
                    </li>
                    <li>
                    {{$data["order"]->getTotal()}}
                    </li>
                  </ul>
                </li>
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="mr-5">
                      {{__('order.payment-type')}} 
                    </li>
                    <li>
                      {{$data["order"]->getPaymentType()}}
                    </li>
                  </ul>
                </li>
                <li class="mr-5">
                  <ul class="list-group list-group-horizontal product-description justify-content-center">
                    <li class="ml-5">
                      {{__('order.date')}} 
                    </li>
                    <li class="ml-5">
                      {{$data["order"]->getDate()}}
                    </li>
                  </ul>
                </li>
                <li class="mr-5">
                    <ul class="list-group list-group-horizontal product-description justify-content-center">
                      <li class="ml-5">
                        {{__('order.address')}} 
                      </li>
                      <li class="ml-5">
                        {{$data["order"]->getAddress()}}
                      </li>
                    </ul>
                </li>
            </ul>
        </p>
    </div>
    </li>
    
  </ul>
</section>