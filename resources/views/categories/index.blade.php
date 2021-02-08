@extends('layout')

@section('page')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->code}}</td>
      <td>{{$category->name}}</td>
      <td>{{$category->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection
