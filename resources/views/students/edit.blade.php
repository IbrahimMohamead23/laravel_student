@extends('layout')
@section('content')

<div class="card my-3">
    <div class="card-header">Update page</div>
    <div class="card-body">
        <form action="{{url('students/' .$student->id)}}" method="post">
            @csrf
            @method('put')
            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"><br>
            <label>Addres</label><br>
            <input type="text" name="addres" id="addres" value="{{$student->addres}}" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" value="{{$student->mobile}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success btn-sm">
        </form>
    </div>
</div>

@stop