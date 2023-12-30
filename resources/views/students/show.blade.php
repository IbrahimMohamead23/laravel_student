@extends('layout')
@section('content')

<div class="card my-3">
    <div class="card-header">View page</div>
    <div class="card-body">
        <h5>Name :- {{$student->name}}</h5>
        <p>Addres :- {{$student->addres}}</p>
        <p>Mobile :- {{$student->mobile}}</p>
        <p>Created_at :- {{$student->created_at}}</p>
    </div>
</div>

@stop