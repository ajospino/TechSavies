@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="container combo-description-container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mt-10">{{$data["product"]->name}} {{$data["product"]->model}}</h2>
        
        <p>
            <ul class="combo-description">
                <li>
                  Category : {{$data["combo"]->category}}  
                </li>
                <li>
                  Brand : {{$data["combo"]->brand}}
                </li>
                <li>
                  Stock : {{$data["combo"]->stock}}
                </li>
                <li>
                   Price : {{$data["combo"]->price}}
                 </li>
            </ul>
        </p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit combo</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('combo.save') }}">
                    @csrf
                    <input type="text" placeholder="Enter the type" name="type" value="{{ old('type') }}" />
                    <select id="my-select" name="type" value="{{ old('type') }}">
                            <option value="1"> Phone and charger</option>
                            <option value="2"> Phone and Phone case</option>
                            <option value="3"> Charger and USB-C cable</option>
                            <option value="4"> Charger and Lightning cable</option>
                            <option value="5"> Phone case, charger and USB-C cable</option>
                            <option value="5"> Phone case, charger and Lightning cable</option>
                    </select>
                    <input type="text" placeholder="Enter the model" name="model" value="{{ old('model') }}" />
                    <input type="text" placeholder="Enter brand" name="brand" value="{{ old('brand') }}" />
                    <input type="number" placeholder="Enter stock" name="stock" value="{{ old('stock') }}" />
                    <input type="number" placeholder="Enter price" name="price" value="{{ old('price') }}" />

                    <input type="submit" value="Send" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
