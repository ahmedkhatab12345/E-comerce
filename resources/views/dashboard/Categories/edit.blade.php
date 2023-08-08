<link rel="stylesheet" href="{{url('/')}}/assets/cssbundle/dropify.min.css">

    <form  id="categoryForm" method="POST" enctype="multipart/form-data" >
   
@csrf
<div class="form-group col-md-9"  style="margin-right: 50px;">
    <label>Name</label>
    <input type="hidden" value="{{$categories->id}}" name="category_id" id="category_id">
    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
      value="{{$categories->name}}">
      @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

<div class="form-group col-md-9" style="margin-right: 50px;">
            <label>Sub category of</label>
                <select  class="form-control @error('parent_id') is-invalid @enderror" name="parent_id">
                    <option value="">Main Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id??null}}">{{$category->name??'not found'}}</option>
                    @endforeach
                </select>
                <small id="parent_id_error" class="form-text text-danger"></small>
                @error('parent_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
<div class="form-group col-md-9"  style="margin-right: 50px;">
    <label>Description</label>
    <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror"
     value="{{$categories->description}}">
     @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

<div class="form-group col-md-10"  style="margin-right: 50px;">
    <label>Photo</label>
    <input type="file" id="file" name="photo" class="dropify @error('parent_id') is-invalid @enderror" 
    data-default-file="{{asset('images/categories/'.$categories->photo)}}">
    @error('photo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

<div class="form-group" style="text-align:center; margin-top: 20px; margin-bottom: 20px; ">
    <button type="submit" id="saveBtn" class="btn btn-primary"><i class="fa fa-plus"></i> Update </button>
</div>

</form><!-- end of form -->
<script src="{{url('/')}}/assets/js/bundle/dropify.bundle.js"></script>
<script>
     $(document).on('click', '#saveBtn', function (e) {
            e.preventDefault();
            var formData = new FormData($('#categoryForm')[0]);
            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('admin.categories.update')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    if(data.status == true){
                        $('#success_msg').show();
                        location.reload();
                    }
                }, error: function (reject) {
                    if (data.status == false) {
                        $('#error_msg').show();
                    }
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });
                }
            });
        });

    $(function() {
      $('.dropify').dropify();
      var drEvent = $('#dropify-event').dropify();
      drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
      });
      drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
      });
      $('.dropify-fr').dropify({
        messages: {
          default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
          replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
          remove: 'Supprimer',
          error: 'DÃ©solÃ©, le fichier trop volumineux'
        }
      });
    });
  </script>