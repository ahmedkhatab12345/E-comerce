@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">

<div class="box box-primary w-50 p-3" style="margin-right: 50px; padding =30px; border:solid 2px #2794EB; border-radius: 25px;">

<div class="box-header">
    <h2 class="box-title text-center">Edit Brand</h2>
</div><!-- end of box header -->

<div class="box-body"  style="padding-right:30px;">


    <form action="{{route('admin.brands.update',$brands -> id)}}" method="POST" enctype="multipart/form-data" >

        {{ csrf_field() }}
        {{ method_field('post') }}
        <div class="form-group">
            <div class="text-center">
            <img
            style="width: 200px; height: 200px; margin-left :50px;"
            src="{{asset('images/brands/'.$brands->photo)}}"
            class="rounded-circle  height-150" alt="صورة القسم  ">
            </div>
        </div>

        <div class="form-group col-md-8">
            <label>Name</label>
            <input type="text" name="name" class="form-control"  value="{{$brands->name}}">
        </div>

        

        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="{{$brands->description}}">
        </div>

        <div class="form-group col-md-6" style="margin-top :15px;">
            <label>Photo</label>
            <input type="file" id="file" name="photo">
            </div>
        
        <div class="form-group" style="margin-top :15px;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Update </button>
        </div>

    </form><!-- end of form -->

</div><!-- end of box body -->

</div><!-- end of box -->
</div><!-- end of content wrapper -->


@endsection