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
        <div class="col mt-4">
                <div class="text-center mt-4" align=center>
                    <a class="btn btn-xl btn-outline-light" href="{{ route('product.list') }}">
                        {{__('product.index')}}
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
        <div class="row mt-5">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" >
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="https://storage.googleapis.com/proyecto-1/descarga3.jpg" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="https://storage.googleapis.com/proyecto-1/Galaxy_S7_Edge_Coral_Blue.jpg" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="https://storage.googleapis.com/proyecto-1/descarga.jpg" alt="" />
                </div>
            </div>
    </div>
</section>
@endsection
