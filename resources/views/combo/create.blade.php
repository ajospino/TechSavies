@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<section class="page-section create-products" id="products-creation">
    <div class="container mt-5 mb-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Combo creation</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create combo</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="GET" action="{{ route('combo.moderate') }}">
                    @csrf
                    <input type="text" placeholder="Enter the name" name="name" value="{{ old('name') }}" />
                    <select id="my-select" name="type" value="{{ old('type') }}">
                            <option value="1"> Phone and charger</option>
                            <option value="2"> Phone and Phone case</option>
                            <option value="3"> Charger and USB-C cable</option>
                            <option value="4"> Charger and Lightning cable</option>
                            <option value="5"> Phone case, charger and USB-C cable</option>
                            <option value="5"> Phone case, charger and Lightning cable</option>
                    </select>
                    <input type="number" placeholder="Enter the price" name="price" value="{{ old('price') }}" />
                    <input type="text" placeholder="Enter the description" name="description" value="{{ old('description') }}" />
                    <input type="number" placeholder="Enter validity" name="validity" value="{{ old('validity') }}" />
                    <input type="number" placeholder="Enter the available quantity" name="quantityAvailable" value="{{ old('quantityAvailable') }}" />

                    <input type="submit" value="Send for moderation" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
