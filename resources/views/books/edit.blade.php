@extends('layout')
@section('content')

<div class="card my-3">
    <div class="card-header">Update Book</div>
    <div class="card-body">
        <form action="{{url('books/'.$book->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label>Image</label><br>
            <input type="file" name="image" id="image" value="{{$book->image}}" class="form-control"><br>
            <label>Title</label><br>
            <input type="text" name="name" id="name" value="{{$book->name}}" class="form-control"><br>
            <label>Details</label><br>
            <textarea name="details" id="details" cols="30" rows="4"class="form-control">{{$book->details}}</textarea><br>
            <input type="submit" value="Update Book" class="btn btn-success">
        </form>
    </div>
</div>

@stop