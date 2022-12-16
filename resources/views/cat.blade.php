@extends('layouts.app')
@section ('content')

<h1 class="text-center m-5">DES CHATS</h1>

<div class="row">
    @foreach ($cats as $cat)
    <div class="card m-3" style="width: 18rem;">
        <img class="card-img-top" src="{{$cat -> url}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">{{$cat -> legend}}</h5>
        </div>
    </div>
    @endforeach
</div>

@endsection