@extends('layout')

@section('page')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Cost</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($items as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->code}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->category->name}}</td>
      <td>{{$item->cost}}</td>
      <td>{{$item->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection
