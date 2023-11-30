@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">

<div 
class="box box-primary w-50 p-3"
style="margin-right: 50px; padding =30px; border:solid 2px #2794EB; border-radius: 25px;">

<div class="box-header">
    <h2 class="box-title text-center">Create Brand</h2>
</div><!-- end of box header -->
<div class="alert alert-success" id="success_msg" style="display: none;">
            تم الحفظ بنجاح
        </div>
<div class="box-body" style="padding-right:30px;">
    <form  id="brandForm"   enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
            data-validation="required" data-validation-required="required">
            <small id="name_error" class="form-text text-danger"></small>
            @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group col-md-8" style="margin-top :15px;">
            <label class="">Description</label>
            <input type="text" name="description"  
            class="form-control  @error('description') is-invalid @enderror"
            data-validation="required" data-validation-required="required">
            <small id="description_error" class="form-text text-danger"></small>
            @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group" style="margin-top :15px;">
            <label>Photo</label>
            <input type="file" id="file" name="photo" class="dropify  @error('photo') is-invalid @enderror"
            data-validation="required" data-validation-required="required">
            <small id="photo_error" class="form-text text-danger"></small>
            @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        <div class="form-group" style="margin-top :15px;">
            <button type="submit" id="save_brand" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
        </div>
    </form><!-- end of form -->

</div><!-- end of box body -->

</div><!-- end of box -->
</div>
@endsection 
@section('scripts')
<script>
    $(document).on('click','#save_brand',function(e){
        e.preventDefault();
        // alert('hhh');
        var formData = new FormData($('#brandForm')[0]);
        $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('brands.store')}}",
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
