@extends('layouts.app')

@section('content')

<section class="page-section combos" id="combos-list">
    <div class="container mt-5">
        <!-- Products list Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Combos</h2>
        <!-- Product Grid Items-->
        <div class="row">
            @foreach($data["combo"] as $combo)
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="combo-item mx-auto">
                    <a href="{{ route('combo.show', ['id' => $combo->id]) }}">
                        <h2 class="combo-title">
                        {{$combo->name}}
                        </h2>
                    </a>
                    
                   <p class="combo-price">
                    Price:  ${{$combo->price}} COP
                   </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>