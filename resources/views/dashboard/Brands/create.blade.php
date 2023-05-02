@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">

<div 
class="box box-primary w-50 p-3"
style="margin-right: 50px; padding =30px; border:solid 2px #2794EB; border-radius: 25px;">

<div class="box-header">
    <h2 class="box-title text-center">Create Brand</h2>
</div><!-- end of box header -->

<div class="box-body" style="padding-right:30px;">


    <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data" >

        {{ csrf_field() }}

        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Name</label>
            <input type="text" name="name" class="form-control" >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        

        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group col-md-6" style="margin-top :15px;">
            <label>Photo</label>
            <input type="file" id="file" name="photo" class="form-control">
            </div>
        
        <div class="form-group" style="margin-top :15px;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
        </div>

    </form><!-- end of form -->

</div><!-- end of box body -->

</div><!-- end of box -->
</div><!-- end of content wrapper -->


@endsection