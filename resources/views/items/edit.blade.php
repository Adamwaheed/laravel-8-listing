@extends('layout')

@section('page')
<div class="row justify-content-center">
  <div class="col-md-8">
    <form method="POST" action="{{route('items.update',$item->id)}}">
      @csrf
      @method('put')

      <div class="py-3">
        <span class="display-5">Edit Item</span>
        <a href="{{route('items.index')}}" class="btn btn-secondary m-4">Go Back</a>
        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="text" value="{{$item->name}}" class="form-control" name="name" placeholder="Mohamed Mufeeedh">
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Code</label>
          <input type="text" value="{{$item->code}}" class="form-control" name="code" placeholder="CD12312">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Description</label>
          <textarea name="description" class="form-control" rows="3">{{$item->description}}</textarea>
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Cost</label>
          <input type="text" value="{{$item->cost}}" class="form-control" name="cost" placeholder="123">
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">price</label>
          <input type="text" value="{{$item->price}}" class="form-control" name="price" placeholder="1213">
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">select Category</label>

          <select name="category_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>

            @foreach ($categories as $category)
            <option @if($category->id ===$item->category_id) selected @endif
              value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

          </select>

        </div>

        <div class="mb-3">

          <button type="submit" class="btn btn-primary">save</button>
          <button type="reset" class="btn btn-warning">reset</button>
          <a href="{{route('items.index')}}" class="btn btn-secondary">Go Back</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection