@extends('layout')
@section('content')

<div class="card my-3">
    <div class="card-header">Add Book</div>
    <div class="card-body">
        <form action="{{url('books')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Image</label><br>
            <input type="file" name="image" id="image" class="form-control"><br>
            <label>Title</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Details</label><br>
            <textarea name="details" id="details" cols="30" rows="4" class="form-control"></textarea><br>
            <input type="submit" value="Add Book" class="btn btn-success">
        </form>
    </div>
</div>

@stop