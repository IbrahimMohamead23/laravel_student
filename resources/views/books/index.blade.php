@extends('layout')
@section('content')

<style>
    .delte{
        display: inline-block;
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
  <img class="logos" src="/images/bookss.jpg" alt="">
  <h4>Books</h4>
  <h5>Welcome to the global platform for teaching programming languages</h5>
  <p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam molestias<br>
     ab illum. Consequuntur quas dolorem similique deleniti ipsum earum<br>
      necessitatibus assumenda ratione sed recusandae tempore pariatur<br>
       delectus, atque magni eos.
  </p>
</div>
@auth
<a href="{{url('books/create')}}" class="btn btn-outline-success">Add Book</a>
@endauth

  <div class="row">
    @foreach($book as $item)
  <div class="col-lg-3 col-sm-6 g-4">
  <div class="card">
  <img src="/images/{{$item->image}}" class="card-img-top" alt="Card_img">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    <p class="card-text">{{$item->details}}</p>
    <a href="{{url('books/' .$item->id)}}" class="btn btn-primary">View</a>
    @auth
    <a href="{{url('books/' .$item->id . '/edit')}}" class="btn btn-info">Edit</a>
    <form class="delte" action="{{url('books' . '/' .$item->id)}}" method="post">
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