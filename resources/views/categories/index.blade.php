@extends('layout')

@section('page')
<style> .pagination { justify-content: center; } </style>
<div class="col-12 text-center">
  <span class="display-5 mb-sm-3">Categories</span>
  <span><a href="{{route('categories.create')}}" class="btn btn-primary m-4">New Category</a></span>
</div>
<table class="table table-bordered table-striped mx-auto w-auto">
  <thead class="table-dark">
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
{{$categories->onEachSide(1)->links()}}
@endsection
