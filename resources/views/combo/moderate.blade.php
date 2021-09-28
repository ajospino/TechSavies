@extends('layouts.app')

@section("title", $data["title"])

@section('content')
<section class="page-section create-products" id="products-creation">
    <div class="container mt-5 mb-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Combo moderation</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Moderate combo</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                
                <p>
                    <ul class="combo-description">
                        <li>
                          Name : {{$data["request"]->name}}  
                        </li>
                        <li>
                          Type : {{$data["request"]->type}}
                        </li>
                        <li>
                          Price : {{$data["request"]->price}}
                        </li>
                        <li>
                           Description : {{$data["request"]->description}}
                         </li>
                         <li>
                            Stock : {{$data["request"]->quantityAvailable}}
                          </li>
                    </ul>
                </p>


                
                <form method="POST" action="{{ route('combo.approve')}}">
                    @csrf
                    <input name="request" type="hidden" value="{{old('name')}}">
                    <input name="request" type="hidden" value="{{old('type')}}">
                    <input name="request" type="hidden" value="{{old('price')}}">
                    <input name="request" type="hidden" value="{{old('description')}}">
                    <input name="request" type="hidden" value="{{old('quantityAvailable')}}">
                    <input type="submit" value="Approve" />
                </form>

                <form method="POST" action="{{ route('combo.deny') }}">
                    @csrf
                    <input name="request" type="hidden" value={{$data["request"]}}>
                    <input type="submit" value="Deny" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
