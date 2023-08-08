@extends('layouts.dashboard.app')

@section('content')
<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
<div class="container-fluid">
<div class="row g-3 mb-3 align-items-center">
<div class="col">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a class="text-secondary" href="index.html">Home</a></li>
<li class="breadcrumb-item"><a class="text-secondary" href="#">Account</a></li>
<li class="breadcrumb-item active" aria-current="page">Settings</li>
</ol>
</div>
</div> 
<div class="row align-items-center">
<div class="col-auto">
<h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, {{auth()->user()->name}}</h1>
<small class="text-muted">You have 12 new messages and 7 new notifications.</small>
</div>
<div class="col d-flex justify-content-lg-end mt-2 mt-md-0">
<div class="p-2 me-md-3">
<div><span class="h6 mb-0">8.18K</span> <small class="text-secondary"><i class="fa fa-angle-up"></i> 1.3%</small></div>
<small class="text-muted text-uppercase">Income</small>
</div>
<div class="p-2 me-md-3">
<div><span class="h6 mb-0">1.11K</span> <small class="text-secondary"><i class="fa fa-angle-up"></i> 4.1%</small></div>
<small class="text-muted text-uppercase">Expense</small>
</div>
<div class="p-2 pe-lg-0">
<div><span class="h6 mb-0">3.66K</span> <small class="text-danger"><i class="fa fa-angle-down"></i> 7.5%</small></div>
<small class="text-muted text-uppercase">Revenue</small>
</div>
</div>
</div> 
</div>
</div>

<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
<div class="container-fluid">
<div class="row g-3">
<div class="col-xxl-3 col-lg-4 col-md-4">
<div class="list-group list-group-custom sticky-top me-xl-4" style="top: 100px;">
<a class="list-group-item list-group-item-action" href="#list-item-1">Profile Details</a>
<a class="list-group-item list-group-item-action" href="#list-item-2">Change Password</a>
</div>
</div>
<div class="col-xxl-8 col-lg-8 col-md-8">
<div id="list-item-1" class="card fieldset border border-muted mt-0">

<span class="fieldset-tile text-muted bg-body">Profile Details:</span>
<div class="card">
<div class="card-body">
<div class="alert alert-success" id="success_msg" style="display: none;">
            تم التحديث بنجاح
        </div>
<form method="POST" class="form" id="profileForm"  action="{{route('profile.update')}}" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Avatar</label>
<div class="col-md-9 col-sm-8">
<div class="image-input avatar xxl rounded-4" style="background-image: url({{url('/')}}/assets/img/avatar.png)">
<div class="avatar-wrapper rounded-4" style="background-image: url({{asset('images/admins/'.auth()->user()->photo)}})" ></div>
<div class="file-input">
<input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="file-input">
@error('photo')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
<label for="file-input" class="fa fa-pencil shadow text-muted"></label>
</div>
</div>
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Full Name *</label>
<div class="col-md-9 col-sm-8">
<input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{auth()->user()->name}}"
name="name"  data-validation="required" data-validation-required="required">
<small id="name_error" class="form-text text-danger"></small>
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
</div>
<div class="row mb-3">
<label class="col-md-3 col-sm-4 col-form-label">Email *</label>
<div class="col-md-9 col-sm-8">
<input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{auth()->user()->email}}"
name="email"  data-validation="required" data-validation-required="required">
<small id="email_error" class="form-text text-danger"></small>
@error('email')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
</div>
<div class="card-footer text-end">
<button class="btn btn-lg btn-light me-2" type="reset">Discard</button>
<button class="btn btn-lg btn-primary" id="update_profile" type="submit">Save Changes</button>

</div>
</div>
</div>
</form>
<div id="list-item-2" class="card fieldset border border-muted mt-5">

<span class="fieldset-tile text-muted bg-body">Change Password</span>
<div class="card">
<div class="card-body">
<div class="row g-3">
<div class="col-12">
<h6 class="border-top pt-2 mt-2 mb-3">Change Password</h6>
<div class="mb-3">
<form method="POST" class="form password-meter" id="passform" action="{{route('password.update')}}">
    
@csrf
<input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
placeholder="Current Password" name="current_password" data-validation="required" data-validation-required="required">
<div class="progress mb-1" style="height: 13px;">
<div class="progress-bar bg-primary-gradient" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="100"></div>
</div>
@error('current_password')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="mb-1">
<input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
placeholder="New Password" name="password" data-validation="required" data-validation-required="required">
<div class="progress mb-1" style="height: 13px;">
<div class="progress-bar bg-primary-gradient" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="100"></div>
</div>

@error('password')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div>
<input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
placeholder="Confirm New Password" name="password_confirmation" data-validation="required" data-validation-required="required">
<div class="progress mb-1" style="height: 13px;">
<div class="progress-bar bg-primary-gradient" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="100"></div>
</div>

@error('password_confirmation')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
</div>
</div>
</div>
<div class="card-footer text-end">
<button class="btn btn-lg btn-light me-2" type="reset">Discard</button>
<button class="btn btn-lg btn-primary" id="update_password" type="submit">Save Changes</button>
</div>
</div>
</div>
</form>

@endsection

@section('scripts')
<script>
    $(document).on('click','#update_profile',function(e){
        e.preventDefault();
        // alert('hhh');
        // var formData = new FormData(this);
        var formData = new FormData($('#profileForm')[0]);
        $.ajax({
                type: 'post',
                enctype: 'multipart/form-data',
                url: "{{route('profile.update')}}",
                data: formData,
                processData: false,
                contentType: false,
                // cache: false,
                success: function (data) {
                    if (data.status == true) {
                        $('#success_msg').show();
                    location.reload();

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