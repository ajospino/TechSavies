@extends('layouts.app')

@section('content')

<section class="page-section cart" id="cart">
    <div class="container mt-4 mb-4">
        <div class="card ">
            <div class="card-header text-center h1">{{ __('cart.header') }}</div>
            <div class="card-body">
                @if ($data['empty'])
                    <p class="card-text text-center">{{ __('cart.empty') }}</p>
                @else
                    @foreach ($data['products'] as $product)
                        <div class="col mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                        class="stretched-link"></a>
                                </div>
                                <div class="col-md-8 my-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->getBrand() . " ". $product->getName() ." ". $product->getModel() }}</h5>
                                        <p class="card-text">{{ __('cart.quantity') }}
                                            {{ $data['objects'][$product->getId()]['quantity'] }}
                                        </p>
                                        <p class="card-text">{{ __('cart.item_t') }}
                                            {{ $data['objects'][$product->getId()]['itemTotal'] . __('cart.currency') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <p class="card-text">
                        {{ __('cart.subtotal') }} {{ $data['subtotal'] . __('cart.currency') }}
                    </p>
                    <p class="card-text">
                        {{ __('cart.total') }} {{ $data['subtotal'] . __('cart.currency') }}
                    </p>
                    <a class="btn btn-danger mt-2" href="{{ route('cart.empty') }}">{{ __('cart.empty_all') }}</a>
                    <div class="col-md-8 mt-2 pl-0">
                        <div class="card">
                            <div class="card-header" style="text-align: center; font-size: 25px">
                                {{ __('cart.checkout') }}
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <ul id="errors">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <form method="POST" action="{{ route('cart.checkout') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="text"
                                            placeholder="{{ __('cart.address_info') }}" name="address"
                                            value="{{ old('address') }}" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="paymentForm">{{ __('cart.payment_info') }}</label>
                                        <select class="form-control" name="paymentType" id="paymentForm">
                                            <option value="1">{{ __('cart.payment_1') }}</option>
                                            <option value="2">{{ __('cart.payment_2') }}</option>
                                            <option value="3">{{ __('cart.payment_3') }}</option>
                                        </select>
                                    </div>
                                    <input class="btn btn-success mt-2" type="submit" value="Checkout">
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


</section>