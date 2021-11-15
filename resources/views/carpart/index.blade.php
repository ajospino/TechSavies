@extends('layouts.app')

@section('content')

<section class="page-section cartparts" id="cartparts-list">
    <div class="container mt-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{__('carpart.title')}}</h2>
        <table border=\"0\">
            <thead>
                <tr>
                    <th WIDTH="500" HEIGHT="50"> {{__('carpart.id')}}</th>
                    <th> {{__('carpart.name')}}</th>
                    <th> {{__('carpart.desc')}}  </th>
                    <th> {{__('carpart.sale')}} </th>
                    <th> {{__('carpart.cost')}} </th>
                    <th> {{__('carpart.cat')}} </th>
                    <th> {{__('carpart.brand')}} </th>
                    <th> {{__('carpart.war')}} </th>
                    <th> {{__('carpart.qua')}} </th>
                    <th> {{__('carpart.img')}} </th>
                    <th> {{__('carpart.created')}} </th>
                    <th> {{__('carpart.update')}} </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $datos)
                <tr>
                    <td WIDTH="500" HEIGHT="50"> {{$datos['id']}} </td>
                    <td> {{$datos['name']}} </td>
                    <td> {{$datos['description']}} </td>
                    <td> {{$datos['sale_price']}} </td>
                    <td> {{$datos['cost']}} </td>
                    <td> {{$datos['category']}} </td>
                    <td> {{$datos['brand']}} </td>
                    <td> {{$datos['warranty']}} </td>
                    <td> {{$datos['quantity']}} </td>
                    <td> {{$datos['image_path']}} </td>
                    <td> {{$datos['created_at']}} </td>
                    <td> {{$datos['updated_at']}} </td>
                </tr>
                @endforeach
        </tbody>
        </table>
    </div>
</section>