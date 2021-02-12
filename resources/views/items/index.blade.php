@extends('layout')

@section('page')
<div class="col-12">
  <span class="display-5 mb-sm-3">Items</span>
  <span><a href="{{route('items.create')}}" class="btn btn-primary m-4">New Item</a></span>
</div>
<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Cost</th>
      <th scope="col">Price</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
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

      <td>
        <a class="btn" href="{{route('items.edit',$item->id)}}">
          <i class="fa fa-edit"></i>
        </a>
      
      </td>

      <td>
        <form action="{{route('items.destroy',$item->id)}}" method="post">
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
{{$items->links()}}
@endsection
