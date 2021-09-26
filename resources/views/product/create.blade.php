@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
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
                    <input type="text" placeholder="Enter the name" name="name" value="{{ old('name') }}" />
                    <input type="text" placeholder="Enter the model" name="model" value="{{ old('model') }}" />
                    <!-- <input type="text" placeholder="Enter the category/type of the product" name="category" value="{{ old('category') }}" /> -->
                    <select id="my-select" name="category" value="{{ old('category') }}">
                            <option value="Phone"> Phone</option>
                            <option value="Phone case"> Phone case</option>
                            <option value="Charger"> Charger</option>
                            <option value="USB-C cable"> USB-C cable</option>
                            <option value="Lightning cable"> Lightning cable</option>
                    </select>
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
