@extends('layout')
@section('content')

<div class="card my-3 text-center">
    <div class="card-header">View page</div>
    <div class="card-body">
        <img src="/images/{{$book->image}}" alt="card_imag">
        <h5>{{$book->name}}</h5>
        <p class="text">{{$book->details}}</p>
    </div>
</div>

@stop