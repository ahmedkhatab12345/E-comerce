@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">

<div 
class="box box-primary w-50 p-3"
style="margin-right: 50px; padding =30px; border:solid 2px #2794EB; border-radius: 25px;">
<div class="alert alert-success" id="success_msg" style="display: none;">
            تم الحفظ بنجاح
        </div>
<div class="box-header">
    <h2 class="box-title text-center">Create Category</h2>
</div><!-- end of box header -->

<div class="box-body" style="padding-right:30px;">


    <form  method="POST" id="categoryForm" enctype="multipart/form-data" >

        {{ csrf_field() }}

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control control-label col-md-3 col-sx-12 @error('name') is-invalid @enderror" >
            <small id="name_error" class="form-text text-danger"></small>
            @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control control-label col-md-3 col-sx-12 @error('description') is-invalid @enderror" >
            <small id="description_error" class="form-text text-danger"></small>
            @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <label>Sub category of</label>
            <div  class="col-md-6 col-sm-6 col-sx-12">
                <select  class="form-control @error('parent_id') is-invalid @enderror" name="parent_id">
                    <option value="">Main Category</option>
                    @foreach(App\Models\Category::where('parent_id',null)->get() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <small id="parent_id_error" class="form-text text-danger"></small>
                @error('parent_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        <div class="form-group @error('parent_id') is-invalid @enderror" style="margin-top :15px;">
            <label>Photo</label>
            <input type="file" class="dropify" name="photo"/>
            <small id="photo_error" class="form-text text-danger"></small>
            @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
        <div class="form-group" style="margin-top :15px;">
            <button id="save_brand" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
        </div>
       
    </form><!-- end of form -->

</div><!-- end of box body -->

</div><!-- end of box -->
</div><!-- end of content wrapper -->


@stop

@section('scripts')
<script>
    $(document).on('click','#save_brand',function(e){
        e.preventDefault();
        // alert('hhh');
        // var formData = new FormData(this);
        var formData = new FormData($('#categoryForm')[0]);
        $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('admin.categories.store')}}",
                data: formData,
                processData: false,
                contentType: false,
                // cache: false,
                success: function (data) {
                    if (data.status == true) {
                        $('#success_msg').show();
                    }

                },
                error: function (reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });
                }
     }); 
});
    
</script>
@stop
