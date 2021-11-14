@extends('layouts.app')

@section('content')
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Welcome to the TechSavies store</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="{{ route('product.list') }}">
                        Products
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mr-auto">
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="{{ route('combo.list') }}">
                        Combos
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mr-auto">
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="{{ route('carpart.index') }}">
                        CarPart
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
