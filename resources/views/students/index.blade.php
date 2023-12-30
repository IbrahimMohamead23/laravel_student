@extends('layout')
@section('content')

<style>
    .table{
        text-align: center;
    }
    .delte{
        display: inline-block;
    }
</style>
     @auth
      <a href="{{url('students/create')}}" class="btn btn-outline-success">Add New</a><br>
      @endauth
<table class="table my-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Addres</th>
      <th scope="col">Mobile</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $item)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->addres}}</td>
      <td>{{$item->mobile}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->updated_at}}</td>

      <td>
        <a href="{{url('students/' .$item->id )}}" class="btn btn-success btn-sm">View</a>
           @auth
        <a href="{{url('students/' .$item->id .'/edit')}}" class="btn btn-info btn-sm">Edit</a>
        <form class="delte" action="{{url('students' . '/' . $item->id)}}" method="post">
            @csrf 
            @method('delete')
           <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
        </form>
        @endauth
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection