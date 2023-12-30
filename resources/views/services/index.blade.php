@extends('layout')
@section('content')

<style>
    .delte{
        display: inline-block;
    }
    .books{
       gap: 1rem;
    }
    img{
      width: 100%;
      height: 150px;
    }
    .header h5{
      color: #607274;
      font-weight: bold;
    }
    .header p{
      color: #607274;
      /* width: 30rem; */
    }
    .logos{
      width: 180px;
      height: 175px;
      margin-bottom: 1rem;
    }
    </style>

<div class="header my-5 text-center">
  <img class="logos" src="/images/books.png" alt="">
  <h3>courses</h3>
  <p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam molestias<br>
     ab illum. Consequuntur quas dolorem similique deleniti ipsum earum<br>
      necessitatibus assumenda ratione sed recusandae tempore pariatur<br>
       delectus, atque magni eos.
  </p>
</div>
@auth
<a href="{{url('services/create')}}" class="btn btn-outline-success">Add Course</a>
@endauth
<div class="row">
@foreach($service as $item)
<div class="col-lg-3 col-sm-6 g-4">
<div class="card">
  <img src="/images/{{$item->image}}" class="card-img-top" alt="Card_img">
  <div class="card-body">
    <h5 class="card-title">{{$item->title}}</h5>
    <p class="card-text">{{$item->details}}</p>
    <a href="{{url('services/' .$item->id)}}" class="btn btn-primary">View</a>
    @auth
    <a href="{{url('services/' .$item->id . '/edit')}}" class="btn btn-info">Edit</a>
    <form class="delte" action="{{url('services' . '/' .$item->id)}}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    @endauth
  </div>
  </div>

</div>
@endforeach
</div>

@endsection