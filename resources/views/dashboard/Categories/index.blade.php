@extends('layouts.dashboard.app')

@section('content')
@php
$index=0
@endphp
<div >
<table class="table datatable" >
<div class="col-md-6"style="margin-bottom: 25px;">        
        <a  class="btn btn-primary"><i class="fa fa-plus"></i><h7> Add Category </h7></a>
    </div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">parent_id</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
      <th scope="col">Process</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
    <tr>
      <td scope="row">{{$index=$index+1}}</td>
      <td>{{ $category->name }}</td>
      <td> {{ $category->parent->name ?? 'this is category' }}</td>
      <td>{{ $category->description }}</td>
      <td><img style="width: 150px; height: 100px;" src="{{asset('images/categories/'.$category->photo)}}"></td>
      <td>
          <a href=""
             class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>
          <a href="{{route('admin.categories.delete',$category->id)}}"
             class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">DElete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection