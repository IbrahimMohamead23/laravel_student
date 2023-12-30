@extends('layout')
@section('content')

<div class="card my-3">
    <div class="card-header">Update Course</div>
    <div class="card-body">
        <form action="{{url('services/'.$service->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label>Image</label><br>
            <input type="file" name="image" id="image" value="{{$service->image}}" class="form-control"><br>
            <label>Title</label><br>
            <input type="text" name="title" id="title" value="{{$service->title}}" class="form-control"><br>
            <label>Details</label><br>
            <textarea name="details" id="details" cols="30" rows="4"class="form-control">{{$service->details}}</textarea><br>
            <input type="submit" value="Update Course" class="btn btn-success">
        </form>
    </div>
</div>

@stop