@extends('layout')
@section('content')

<div class="card my-3">
    <div class="card-header">Add Student</div>
    <div class="card-body">
        <form action="{{url('students')}}" method="post">
            @csrf
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Addres</label><br>
            <input type="text" name="addres" id="addres" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" value="Add" class="btn btn-success btn-sm">
        </form>
    </div>
</div>

@stop