@extends('layout')

@section('page')
<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="btn btn-primary" href="{{route('categories.create')}}">Create</a>
  </div>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->code}}</td>
      <td>{{$category->name}}</td>
      <td>{{$category->price}}</td>
      <td>
        <a class="btn" href="{{route('categories.edit',$category->id)}}">
          <i class="fa fa-edit"></i>
        </a>
      
      </td>

      <td>
        <form action="{{route('categories.destroy',$category->id)}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn" >
            <i class="fa fa-trash"></i>
          </button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection
