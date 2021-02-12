@extends('layout')

@section('page')
<div class="row justify-content-center">
  <div class="col-md-8">

    <form method="POST" action="{{route('items.store')}}">
      @csrf

      <div class="py-3">
        <span class="display-5">Create New Item</span>
        <a href="{{route('items.index')}}" class="btn btn-secondary m-4">Go Back</a>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('code')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Mohamed Mufeeedh">
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Code</label>
          <input type="text" class="form-control" name="code" placeholder="CD12312">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Description</label>
          <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Cost</label>
          <input type="text" class="form-control" name="cost" placeholder="123">
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">price</label>
          <input type="text" class="form-control" name="price" placeholder="1213">
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">select Category</label>

          <select name="category_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

          </select>

        </div>

        <div class="mb-3">

          <button type="submit" class="btn btn-primary">Save</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <a href="{{route('items.index')}}" class="btn btn-secondary">Go Back</a>

        </div>
      </div>
    </form>
  </div>
</div>
@endsection