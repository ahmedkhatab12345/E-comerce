
<link rel="stylesheet" href="{{url('/')}}/assets/cssbundle/dropify.min.css">

    <form  id="sliderForm"  method="POST" enctype="multipart/form-data" >

        {{ csrf_field() }}
       
        <div class="form-group col-md-9"  style="margin-right: 50px;">
            <label>Name</label>
            <input type="hidden" value="{{$sliders->id}}" name="slider_id" id="slider_id">
            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"  value="{{$sliders->name}}">
            @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        
        <div class="form-group col-md-9" style="margin-right: 50px;">
            <label>Description</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" 
            value="{{$sliders->description}}">
            @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group col-md-10" style="margin-right: 50px;">
            <label>Photo</label>
            <input type="file" id="file" name="photo" class="dropify @error('photo') is-invalid @enderror" 
            id="dropify-event" data-default-file="{{asset('images/sliders/'.$sliders->photo)}}">
            @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
        <div class="form-group"  style="text-align:center;">
            <button type="submit" id="saveBtn" 
            style="margin-top: 20px; margin-bottom: 20px; " class="btn btn-primary"><i class="fa fa-plus"></i> Update </button>
        </div>

    </form><!-- end of form -->
    <script src="{{url('/')}}/assets/js/bundle/dropify.bundle.js"></script>
<script>
   $(document).on('click', '#saveBtn', function (e) {
            e.preventDefault();
            var formData = new FormData($('#sliderForm')[0]);
            $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('admin.sliders.update')}}",
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
