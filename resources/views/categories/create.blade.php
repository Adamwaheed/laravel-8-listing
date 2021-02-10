@extends('layout')

@section('page')
<form method="POST" action="{{route('categories.store')}}">
    @csrf


@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror  

@error('code')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror 

@error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror 

<div class="p-5">

  <div class="mb-3 ">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text"  class="form-control" name="name" placeholder="Mohamed Mufeeedh">
  </div>

  <div class="mb-3 ">
    <label for="exampleFormControlInput1" class="form-label">Code</label>
    <input type="text" class="form-control" name="code" placeholder="CD12312">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Base price</label>
    <input type="number" class="form-control"  name="price" placeholder="234"/>
  </div>

  <div class="mb-3">
    
    <button type="submit" class="btn btn-primary" >save</button>
    <button type="reset" class="btn btn-warning" >cancel</button>

  </div>
</div>
</form>
  @endsection()

      