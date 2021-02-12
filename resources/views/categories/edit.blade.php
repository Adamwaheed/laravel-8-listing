@extends('layout')

@section('page')
<div class="row justify-content-center">
  <div class="col-md-7">
    <form method="POST" action="{{route('categories.update',$category->id)}}">
      @csrf
      @method('PUT')
      <div class="py-3">
        <span class="display-5">Edit Category</span>
        <a href="{{route('categories.index')}}" class="btn btn-secondary m-4">Go Back</a>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="text" value="{{$category->name}}" class="form-control" name="name"
            placeholder="Mohamed Mufeeedh">
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Code</label>
          <input type="text" value="{{$category->code}}" class="form-control" name="code" placeholder="CD12312">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Base price</label>
          <input type="number" class="form-control" value="{{$category->price}}" name="price" placeholder="234" />
        </div>

        <div class="mb-3">

          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <a href="{{route('categories.index')}}" class="btn btn-secondary">Go Back</a>


        </div>
      </div>
    </form>
  </div>
</div>
@endsection()