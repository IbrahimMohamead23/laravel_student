@extends('layout')
@section('content')

<div class="card my-3 text-center">
    <div class="card-header">View page</div>
    <div class="card-body">
        <img src="/images/{{$service->image}}" alt="card_imag">
        <h5>{{$service->title}}</h5>
        <p class="text">{{$service->details}}</p>
    </div>
</div>

@stop