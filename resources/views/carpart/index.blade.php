@extends('layouts.app')

@section('content')

<section class="page-section cartparts" id="cartparts-list">
    <div class="container mt-5">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CarPart</h2>
        <table>
            <thead>
                <tr>
                    <th> Id</th>
                    <th> Name</th>
                    <th> Description  </th>
                    <th> Sale_price </th>
                    <th> Cost </th>
                    <th> Category </th>
                    <th> Brand </th>
                    <th> Warranty </th>
                    <th> Quantity </th>
                    <th> Image_path </th>
                    <th> Created_at </th>
                    <th> Updated_at </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $datos)
                <tr>
                    <td> {{$datos['id']}} </td>
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