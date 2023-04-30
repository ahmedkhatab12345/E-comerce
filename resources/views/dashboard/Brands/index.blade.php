@extends('layouts.dashboard.app')

@section('content')
@php
$index=0
@endphp
<div >
<table class="table" >
<div class="col-md-6"style="margin-bottom: 25px;">        
        <a href="{{ route('admin.brands.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i><h7> Add Brand </h7></a>
    </div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
      <th scope="col">Process</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($brands as $brand)
    <tr>
      <th scope="row">{{$index=$index+1}}</th>
      <td>{{ $brand->name }}</td>
      <td>{{ $brand->description }}</td>
      <td><img style="width: 150px; height: 100px;" src="{{asset('images/brands/'.$brand->photo)}}"></td>
      <td>
          <a href="{{ route('admin.brands.edit',$brand ->id) }}"
             class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>
          <a href="{{route('admin.brands.delete',$brand->id)}}"
             class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">DElete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection