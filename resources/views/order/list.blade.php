@extends('layouts.app')

@section('content')

<section class="page-section">
    <a class="btn-toolbar mt-2"  href="{{route('home')}}">{{__('pagination.back')}}</a>
    <div class="container mt-5">
        <!-- Products list Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{__('order.title_l')}}</h2>
        <a class="btn-toolbar-2 mt-2"  href="{{route('order.generatePDF')}}">{{__('order.pdf_create')}}</a>
        <!-- Product Grid Items-->
        <div class="row mt-5">
            @foreach($data["list"] as $order)
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="product-item mx-auto">
                    <a href="{{ route('order.show', ['id' => $order->getId()]) }}">
                        <h2 class="product-title">
                        {{__('order.order_number') . $order->getId()}}
                        </h2>
                    </a>
                    
                   <p class="product-price">
                    {{__('order.date') . $order->getDate() }}
                   </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>