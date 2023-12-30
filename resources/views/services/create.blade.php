@extends('layout')
@section('content')

<div class="card my-3">
    <div class="card-header">Add Course</div>
    <div class="card-body">
        <form action="{{url('services')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Image</label><br>
            <input type="file" name="image" id="image" class="form-control"><br>
            <label>Title</label><br>
            <input type="text" name="title" id="title" class="form-control"><br>
            <label>Details</label><br>
            <textarea name="details" id="details" cols="30" rows="4" class="form-control"></textarea><br>
            <input type="submit" value="Add Course" class="btn btn-success">
        </form>
    </div>
</div>

@stop