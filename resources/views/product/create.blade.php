@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<section class="page-section create-products" id="products-creation">
<div class="container mt-5 mb-5">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Product creation</h2>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create product</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('product.save') }}">
                    @csrf
                    <ul>
                        <li>
                            <input type="text" placeholder="Enter the name" name="name" value="{{ old('name') }}" />                    
                        </li>
                        <li>
                            <input type="text" placeholder="Enter the model" name="model" value="{{ old('model') }}" />
                        </li>
                        <li>
                            <select id="my-select" name="category" value="{{ old('category') }}">
                                <option value="Phone"> Phone</option>
                                <option value="Phone case"> Phone case</option>
                                <option value="Charger"> Charger</option>
                                <option value="USB-C cable"> USB-C cable</option>
                                <option value="Lightning cable"> Lightning cable</option>
                        </select>
                        </li>
                        <li>
                            <input type="text" placeholder="Enter brand" name="brand" value="{{ old('brand') }}" />
                        </li>
                        <li>
                            <input type="number" placeholder="Enter stock" name="stock" value="{{ old('stock') }}" />
                        </li>
                        <li>
                            <input type="number" placeholder="Enter price" name="price" value="{{ old('price') }}" />
                        </li>      
                    </ul>
                    <input type="submit" value="Send" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
