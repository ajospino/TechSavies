@extends('layouts.app')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header">List Users</div>
                <div class="card-body">
                    <ul id="errors">
                        @foreach($data["users"] as $counter => $user)
                        <li>

                            <a href=" {{ route("admin.show", ['id' => $user->getId()]) }}">
                            @if($counter == 0 || $counter == 1)
                            <b>
                            @endif
                                {{ $user->getId() }} 
                            @if($counter == 0 || $counter == 1)
                            </b>
                            @endif
                            </a>
                            - {{ $user->getName() }} - {{ $user->getEmail() }}

                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection