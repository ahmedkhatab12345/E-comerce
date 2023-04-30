<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
<meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
<link rel="icon" href="{{url('/')}}/assets/img/favicon.ico" type="image/x-icon"> 
<title>:: LUNO :: Dashboard</title>

<link rel="stylesheet" href="{{url('/')}}/assets/cssbundle/daterangepicker.min.css">

<link rel="stylesheet" href="{{url('/')}}/assets/css/luno-style.css">

<script src="{{url('/')}}/assets/js/plugins.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>
<body class="layout-1 rtl_mode" data-luno="theme-blue">

<div class="sidebar p-2 py-md-3 @@cardClass">
<div class="container-fluid">

<div class="title-text d-flex align-items-center mb-4 mt-1">
<h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">L</span><span>UNO Admin</span></h4>
<div class="dropdown morphing scale-right">
<a class="dropdown-toggle more-icon" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu shadow border-0 p-2 mt-2" data-bs-popper="none">
<li class="fw-bold px-2">Quick Actions</li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="./landing/index.html" aria-current="page">Landing page</a></li>
<li><a class="dropdown-item" href="./inventory/index.html">Inventory</a></li>
<li><a class="dropdown-item" href="./ecommerce/index.html">eCommerce</a></li>
<li><a class="dropdown-item" href="./hrms/index.html">HRMS</a></li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="./account-invoices.html">Invoices List</a></li>
<li><a class="dropdown-item" href="./account-create-invoices.html">Create Invoices</a></li>
</ul>
</div>
</div>

<div class="create-new py-3 mb-2">
<div class="d-flex">
<select class="form-select rounded-pill me-1">
<option selected>Select Project</option>
<option value="1">Luno University</option>
<option value="2">Book Manager</option>
<option value="3">Luno Sass App</option>
</select>
<button class="btn bg-primary text-white rounded-circle" data-bs-toggle="modal" data-bs-target="#CreateNew" type="button"><i class="fa fa-plus"></i></button>
</div>
</div>

<div class="main-menu flex-grow-1">
<ul class="menu-list">
<li class="divider py-2 lh-sm"><span class="small">MAIN</span><br> <small class="text-muted">Unique dashboard designs </small></li>
<li class="collapsed">
<a class="m-link active" data-bs-toggle="collapse" data-bs-target="#my_dashboard" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
<path class="var(--secondary-color)" fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
</svg>
<span class="ms-2">Brands</span>

<span style="font-size: 15px; margin-right: 10px;" class="badge rounded-pill bg-danger">{{App\Models\Brand::count()}}</span>

<span class="arrow fa fa-angle-right ms-auto text-end"></span>
</a>

<ul class="sub-menu collapse show" id="my_dashboard">
<li><a class="ms-link active" href="{{route('brand.dashboard')}}"> brands</a></li>
<li><a class="ms-link" href="{{ route('admin.brands.create') }}">Add brand</a></li>
</ul>
</li>




<a class="m-link" href="./docs/doc-changelog.html">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
</svg>
<span class="ms-2">Changelog</span>
<span id="Changelog"></span>
</a>
</li>
</ul>
</div>


<ul class="menu-list nav navbar-nav flex-row text-center menu-footer-link">
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#ScheduleModal" title="My Schedule">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
<path class="fill-secondary" d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal" title="My notes">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
<path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
<path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
</svg>
</a>
</li>
<li class="nav-item flex-fill p-2">
<a class="d-inline-block w-100 color-400" href="./auth-signin.html" title="sign-out">
<svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M7.5 1v7h1V1h-1z" />
<path class="fill-secondary" d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
</svg>
</a>
</li>
</ul>
</div>
</div>

<div class="wrapper">

@include('include.header')


@yield('content')



@include( 'include.footer' )


</div>

<div class="modal fade" id="CreateNew" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content rounded-0">
<div class="modal-header">
<h5 class="modal-title">Setup new project</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="progress bg-transparent" style="height: 3px;">
<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
</div>
<div class="modal-body custom_scroll">
<ul class="nav nav-tabs tab-card border-0 fs-6" role="tablist">
<li class="nav-item flex-fill text-center"><a class="nav-link active" href="#step1" data-bs-toggle="tab" data-bs-step="1">1. Project</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step2" data-bs-toggle="tab" data-bs-step="3">2. Team</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step3" data-bs-toggle="tab" data-bs-step="4">3. File</a></li>
<li class="nav-item flex-fill text-center"><a class="nav-link" href="#step4" data-bs-toggle="tab" data-bs-step="5">4. Completed</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane fade show active" id="step1">
<div class="card mb-2">
<div class="card-body">
<h6 class="card-title mb-1">Project Type</h6>
<p class="text-muted small">If you need more info, please check out <a href="#">FAQ Page</a></p>

<div class="c_radio d-flex flex-md-wrap">
<label class="m-1 w-100" for="Personal">
<input type="radio" name="plan" id="Personal" checked />
<span class="card">
<span class="card-body d-flex p-3">
<svg class="avatar" viewBox="0 0 16 16">
<path class="fill-muted" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
</svg>
<span class="ms-3">
<span class="h6 d-flex mb-1">Personal Project</span>
<span class="text-muted">For smaller business, with simple salaries and pay schedules.</span>
</span>
</span>
</span>
</label>
<label class="m-1 w-100" for="Team">
<input type="radio" name="plan" id="Team" />
<span class="card">
<span class="card-body d-flex p-3">
<svg class="avatar" viewBox="0 0 16 16">
<path class="fill-muted" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
<path class="fill-muted" fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
<path class="fill-muted" d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
</svg>
<span class="ms-3">
<span class="h6 d-flex mb-1">Team Project</span>
<span class="text-muted">For growing business who wants to create a rewarding place to work.</span>
</span>
</span>
</span>
</label>
</div>
</div>
</div>
<div class="card mb-2">
<div class="card-body">
<h6 class="card-title mb-1">Project Details</h6>
<p class="text-muted small">It is a long established fact that a reader will be distracted by Luno.</p>
<div class="form-floating mb-2">
<select class="form-select">
<option selected>Open this select menu</option>
<option value="1">Lucid</option>
<option value="2">LUNO</option>
<option value="3">Luno</option>
</select>
<label>Choose a Customer *</label>
</div>
<div class="form-floating mb-2">
<input type="text" class="form-control" placeholder="Project name">
<label>Project name *</label>
</div>
<div class="form-floating mb-2">
<textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
<label>Add project details</label>
</div>
<div class="form-floating mb-2">
<input type="date" class="form-control">
<label>Enter release Date *</label>
</div>
<div class="d-flex justify-content-between">
<div class="text-muted">Allow Notifications *</div>
<div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="allow_phone" value="option1">
<label class="form-check-label" for="allow_phone">Phone</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" id="allow_email" value="option2">
<label class="form-check-label" for="allow_email">Email</label>
</div>
</div>
</div>
</div>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Add People</button>
</div>
</div>
<div class="tab-pane fade" id="step2">
<div class="card mb-3">
<div class="card-body">
<h6 class="card-title mb-1">Build a Team</h6>
<p class="text-muted small">If you need more info, please check out <a href="#">Project Guidelines</a></p>
<div class="form-floating mb-4">
<input type="text" class="form-control" placeholder="Invite Teammates">
<label>Invite Teammates</label>
</div>
<h6 class="card-title mb-1">Team Members</h6>
<div class="form-check form-switch">
<input class="form-check-input" type="checkbox" id="list-group6" checked="">
<label class="form-check-label text-muted" for="list-group6">Adding Users by Team Members</label>
</div>
</div>
<ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Angular Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Joge Lucky</div>
<small class="text-muted">ReactJs Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar3.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">NodeJs Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar4.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Sr. Designer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar5.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Designer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar6.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Front-End Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar7.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">QA</small>
</div>
 <select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
<li class="list-group-item d-flex align-items-center">
<img class="avatar rounded" src="{{url('/')}}/assets/img/xs/avatar8.jpg" alt="">
<div class="flex-fill ms-2">
<div class="h6 mb-0">Chris Fox</div>
<small class="text-muted">Laravel Developer</small>
</div>
<select class="form-select rounded-pill form-select-sm w120">
<option value="1">Owner</option>
<option value="2">Can Edit</option>
<option value="3">Guest</option>
</select>
</li>
</ul>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Select Files</button>
</div>
</div>
<div class="tab-pane fade" id="step3">
<div class="card mb-3">
<div class="card-body">
<h6 class="card-title mb-1">Upload Files</h6>
<div class="mb-4">
<label class="form-label small">Upload up to 10 files</label>
<input class="form-control" type="file" multiple>
</div>
<span>Already Uploaded File</span>
</div>
<ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Annual Sales Report 2018-19</p>
<small class="text-muted">.pdf, 5.3 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-excel-o text-success"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Complete Product Sheet</p>
<small class="text-muted">.xls, 2.1 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-word-o text-info"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Marketing Guidelines</p>
<small class="text-muted">.doc, 2.3 MB</small>
</div>
</div>
</li>
<li class="list-group-item py-3">
<div class="d-flex align-items-center">
<div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
<div class="flex-fill ms-3 text-truncate">
<p class="mb-0 color-800">Brand Photography</p>
<small class="text-muted">.zip, 30.5 MB</small>
</div>
</div>
</li>
</ul>
</div>
<div class="text-center">
<button class="btn btn-lg bg-secondary text-light next text-uppercase">Advanced Options</button>
</div>
</div>
<div class="tab-pane fade" id="step4">
<div class="card text-center">
<div class="card-body">
<h4 class="card-title mb-1">Project Created!</h4>
<span class="text-muted">If you need more info, please check how to create project</span>
</div>
<div class="card-body">
<button class="btn btn-lg bg-light first text-uppercase">Cretae new project</button>
<button class="btn btn-lg bg-secondary text-light text-uppercase">View project</button>
</div>
<div class="card-body">
<img class="img-fluid" src="{{url('/')}}/assets/img/project-team.svg" alt="" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="MynotesModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header px-4">
<h5 class="modal-title">My Notes <span class="badge bg-danger ms-2">14</span></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="bg-light px-4 py-3">
<ul class="nav nav-pills nav-fill" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#Notetab-all" role="tab" aria-selected="true">All Notes</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Business" role="tab" aria-selected="false">Business</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Social" role="tab">Social</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#Notetab-Create" role="tab"><i class="fa fa-plus me-2"></i>New</a>
</li>
</ul>
</div>
<div class="modal-body px-4 custom_scroll">
<div class="tab-content p-0">
<div class="tab-pane fade active show" id="Notetab-all" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-primary position-absolute"></div>
<div class="card-body">
<span class="text-muted">02 January 2021</span>
<p class="lead">Give Review for design</p>
<span>It has roots in a piece of classical Latin literature from 45 BC, making it over 2020 years old.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-success position-absolute"></div>
<div class="card-body">
<span class="text-muted">17 January 2022</span>
<p class="lead">Give salary to employee</p>
<span>The generated Lorem Ipsum is therefore always free from repetition</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-info position-absolute"></div>
<div class="card-body">
<span class="text-muted">02 Fabruary 2020</span>
<p class="lead">Launch new template</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-dark position-absolute"></div>
<div class="card-body">
<span class="text-muted">22 August 2021</span>
<p class="lead">Nightout with friends</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-danger position-absolute"></div>
<div class="card-body">
<span class="text-muted">01 December 2021</span>
<p class="lead">Change a Design</p>
<span> It has survived not only five centuries, but also the leap into electronic</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-warning position-absolute"></div>
<div class="card-body">
<span class="text-muted">10 December 2021</span>
<p class="lead">Meeting with Mr.Lee</p>
<span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Business" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-warning position-absolute"></div>
<div class="card-body">
<span class="text-muted">10 December 2021</span>
<p class="lead">Meeting with Mr.Lee</p>
<span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
<div class="card ribbon mb-2">
<div class="option-2 bg-danger position-absolute"></div>
<div class="card-body">
<span class="text-muted">01 December 2021</span>
<p class="lead">Change a Design</p>
<span> It has survived not only five centuries, but also the leap into electronic</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Social" role="tabpanel">
<div class="card ribbon mb-2">
<div class="option-2 bg-dark position-absolute"></div>
<div class="card-body">
<span class="text-muted">22 August 2021</span>
<p class="lead">Nightout with friends</p>
<span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
</div>
<div class="card-footer pt-0 border-0">
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
<a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
</div>
</div>
</div>
<div class="tab-pane fade" id="Notetab-Create" role="tabpanel">
<div class="form-floating mb-2">
<input type="text" class="form-control" placeholder="Note Title">
<label>Note Title</label>
</div>
<div class="form-floating mb-2">
<input type="text" class="form-control datepicker" placeholder="Select Date">
<label>Select Date</label>
</div>
<div class="form-floating mb-2">
<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
<option selected>Open this select menu</option>
<option value="1">Business</option>
<option value="2">Social</option>
</select>
<label>Works with selects</label>
</div>
<div class="form-floating mb-4">
<textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
<label>Leave a comment here</label>
</div>
<button type="button" class="btn btn-primary lift">Save note</button>
<button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="ScheduleModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header bg-secondary rounded-0">
<h5 class="modal-title text-light">Schedule</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body custom_scroll">
<div class="ps-2">

<div class="timeline-item ti-primary p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Call Danny at Colby's</div>
<small class="text-muted">Today - 11:32am</small>
</div>
</div>

<div class="timeline-item ti-info p-3">
<div class="timeline-icon">
<img class="avatar sm rounded-circle" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="">
</div>
<div class="timeline-content ms-3">
<div>Meeting with Alice</div>
<small class="text-muted">Today - 12:50pm</small>
</div>
</div>

<div class="timeline-item ti-danger p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-comment"></i>
 </div>
<div class="timeline-content ms-3">
<div>Answer Annie's message</div>
<small class="text-muted">Today - 01:35pm</small>
</div>
</div>

<div class="timeline-item ti-danger p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Send new campaign</div>
<small class="text-muted">Today - 02:40pm</small>
</div>
</div>

<div class="timeline-item ti-primary p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-smile-o"></i>
</div>
<div class="timeline-content ms-3">
<div>Project review</div>
<small class="text-muted">Today - 03:15pm</small>
</div>
</div>

<div class="timeline-item ti-warning p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-phone"></i>
</div>
<div class="timeline-content ms-3">
<div>Call Trisha Jackson</div>
<small class="text-muted">Today - 05:40pm</small>
</div>
</div>

<div class="timeline-item ti-success p-3">
<div class="avatar sm rounded-circle no-thumbnail">
<i class="fa fa-leaf"></i>
</div>
<div class="timeline-content ms-3">
<div>Write proposal for Don</div>
<small class="text-muted">Today - 06:30pm</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="RecentChat" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
<div class="modal-content">
<div class="d-flex align-items-start">
<div class="nav flex-column nav-pills p-3 h-100">
<a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar3.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar4.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-5" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar5.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar6.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-7" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar7.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar8.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar9.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar10.jpg" alt="avatar">
</a>
<a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
<img class="avatar sm rounded-circle border" src="{{url('/')}}/assets/img/xs/avatar5.jpg" alt="avatar">
</a>
</div>
<div class="tab-content shadow-sm">
<div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
<div class="card">

<div class="card-header border-bottom py-3">
<div class="d-flex">
<a href="javascript:void(0);" title="">
<img class="avatar rounded-circle" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="avatar">
</a>
<div class="ms-3">
<h6 class="mb-0">Orlando Lentz</h6>
<small class="text-muted">Last seen: 2 hours ago</small>
</div>
</div>
<div class="dropdown morphing scale-right">
<a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
<a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
<a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu shadow border-0 p-2">
<li><a class="dropdown-item" href="#">File Info</a></li>
<li><a class="dropdown-item" href="#">Copy to</a></li>
<li><a class="dropdown-item" href="#">Move to</a></li>
<li><a class="dropdown-item" href="#">Rename</a></li>
<li><a class="dropdown-item" href="#">Block</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</div>

<div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
<ul class="list-unstyled chat-history flex-grow-1">

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Hi Aiden, how are you?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Are we meeting today?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
 <li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message">
<p>Please find attached images</p>
<img class="w120 img-thumbnail" src="{{url('/')}}/assets/img/gallery/3.jpg" alt="">
<img class="w120 img-thumbnail" src="{{url('/')}}/assets/img/gallery/4.jpg" alt="">
</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Okay, will check and let you know.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
 <li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>
</ul>
</div>

<div class="card-footer border-top bg-transparent py-3 px-4">
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter text here...">
<button class="btn btn-primary" type="button">Send</button>
</div>
</div>
</div>
</div>
<div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
<div class="card">

<div class="card-header border-bottom py-3">
<div class="d-flex">
<a href="javascript:void(0);" title="">
<img class="avatar rounded-circle" src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="avatar">
</a>
<div class="ms-3">
<h6 class="mb-0">Orlando Lentz</h6>
<small class="text-muted">Last seen: 2 hours ago</small>
</div>
</div>
<div class="dropdown morphing scale-right">
<a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
<a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
<a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
<a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
<ul class="dropdown-menu shadow border-0 p-2">
<li><a class="dropdown-item" href="#">File Info</a></li>
<li><a class="dropdown-item" href="#">Copy to</a></li>
<li><a class="dropdown-item" href="#">Move to</a></li>
<li><a class="dropdown-item" href="#">Rename</a></li>
<li><a class="dropdown-item" href="#">Block</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</div>

<div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
<ul class="list-unstyled chat-history flex-grow-1">

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Are we meeting today?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Hi Aiden, how are you?</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message">
<p>Please find attached images</p>
<img class="w120 img-thumbnail" src="{{url('/')}}/assets/img/gallery/1.jpg" alt="">
<img class="w120 img-thumbnail" src="{{url('/')}}/assets/img/gallery/2.jpg" alt="">
</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row-reverse align-items-end">
<div class="max-width-70 text-end">
<div class="user-info mb-1">
<span class="text-muted small">10:12 AM, Today</span>
</div>
<div class="card border-0 p-3 bg-primary text-light">
<div class="message">Okay, will check and let you know.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>

<li class="mb-3 d-flex flex-row align-items-end">
<div class="max-width-70">
<div class="user-info mb-1">
<img class="avatar xs rounded-circle me-1" src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="avatar">
<span class="text-muted small">10:10 AM, Today</span>
</div>
<div class="card p-3">
<div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
</div>
</div>

<div class="btn-group">
<a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<ul class="dropdown-menu rounded-4 border-0 shadow">
<li><a class="dropdown-item" href="#">Edit</a></li>
<li><a class="dropdown-item" href="#">Share</a></li>
<li><a class="dropdown-item" href="#">Delete</a></li>
</ul>
</div>
</li>
</ul>
</div>

<div class="card-footer border-top bg-transparent py-3 px-4">
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter text here...">
<button class="btn btn-primary" type="button">Send</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="SettingsModal" tabindex="-1">
<div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
<div class="modal-content">
<div class="px-xl-4 modal-header">
<h5 class="modal-title">Theme Setting</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="px-xl-4 modal-body custom_scroll">

<div class="card fieldset border border-primary p-3 setting-theme mb-4">
<span class="fieldset-tile text-primary bg-card">Color Settings</span>
<ul class="list-unstyled d-flex choose-skin mb-0">
<li data-theme="black">
<div class="black"></div>
</li>
<li data-theme="indigo">
<div class="indigo"></div>
</li>
<li data-theme="blue">
<div class="blue"></div>
</li>
<li data-theme="cyan">
<div class="cyan"></div>
</li>
<li data-theme="green">
<div class="green"></div>
</li>
<li data-theme="orange">
<div class="orange"></div>
</li>
<li data-theme="blush">
<div class="blush"></div>
</li>
<li data-theme="red">
<div class="red"></div>
</li>
<li data-theme="dynamic">
<div class="dynamic"><i class="fa fa-paint-brush"></i></div>
</li>
</ul>

<div class="card fieldset border border-primary p-3 dt-setting mt-4">
<span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
<div class="row g-3">
<div class="col-7">
<ul class="list-unstyled mb-0">
<li>
<button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
<label>Primary Color</label>
</li>
<li>
<button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
<label>Secondary Color</label>
</li>
<li>
<button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
<label>Site Background</label>
</li>
<li>
<button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
<label>Widget Background</label>
</li>
<li>
<button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
<label>Border Color</label>
</li>
</ul>
</div>
<div class="col-5">
<ul class="list-unstyled mb-0">
<li>
<button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
<label>Chart Color 1</label>
</li>
<li>
<button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
<label>Chart Color 2</label>
</li>
<li>
<button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
<label>Chart Color 3</label>
</li>
<li>
<button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
<label>Chart Color 4</label>
</li>
<li>
<button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
<label>Chart Color 5</label>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="card fieldset border setting-mode mb-4">
<span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
<div class="c_radio d-flex text-center">
<label class="m-1 theme-switch" for="theme-switch">
<input type="checkbox" id="theme-switch" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/dark-version.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1 theme-dark" for="theme-dark">
<input type="checkbox" id="theme-dark" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/dark-theme.svg" alt="Theme Dark Mode" />
</span>
</label>
<label class="m-1 theme-high-contrast" for="theme-high-contrast">
<input type="checkbox" id="theme-high-contrast" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/high-version.svg" alt="High Contrast" />
</span>
</label>
<label class="m-1 theme-rtl" for="theme-rtl">
<input type="checkbox" id="theme-rtl" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/rtl-version.svg" alt="RTL Mode!" />
</span>
</label>
</div>
</div>

<div class="card fieldset border setting-font">
<span class="fieldset-tile bg-card">Google Font Settings</span>
<div class="c_radio d-flex text-center font_setting">
<label class="m-1" for="font-opensans">
<input type="radio" name="font" id="font-opensans" value="font-opensans" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/font-opensans.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-quicksand">
<input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/font-quicksand.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-nunito">
<input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/font-nunito.svg" alt="Dark Mode" />
</span>
</label>
<label class="m-1" for="font-raleway">
<input type="radio" name="font" id="font-raleway" value="font-raleway" />
<span class="card p-2">
<img class="img-fluid" src="{{url('/')}}/assets/img/font-raleway.svg" alt="Dark Mode" />
</span>
</label>
</div>
</div>

<div class="m-1 p-3 bg-body rounded-4 mb-4">
<p>Dynamic Font Settings</p>
<div class="mb-2">
<label class="form-label small text-muted mb-0">Enter font URL</label>
<input id="font_url" type="text" class="form-control" placeholder="http://fonts.cdnfonts.com/css/vonfont">
 </div>
<div class="mb-3">
<label class="form-label small text-muted mb-0">Enter font family name</label>
<input id="font_family" type="text" class="form-control" placeholder="vonfont">
</div>
<button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
<button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
</div>

<div class="setting-more mb-4">
<h6 class="card-title">More Setting</h6>
<ul class="list-group list-group-flush list-group-custom fs-6">

<li class="list-group-item">
<div class="form-check form-switch h-menu-switch mb-1">
<input class="form-check-input" type="checkbox" id="h_menu">
<label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch pageheader-switch mb-1">
<input class="form-check-input" type="checkbox" id="PageHeader" checked>
<label class="form-check-label" for="PageHeader">Page Header Fix</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch pageheader-dark-switch mb-1">
<input class="form-check-input" type="checkbox" id="PageHeader_dark">
<label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch radius-switch mb-1">
<input class="form-check-input" type="checkbox" id="BorderRadius">
<label class="form-check-label" for="BorderRadius">Border Radius none</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch sidebar-v2 mb-1">
<input class="form-check-input" type="checkbox" id="sidebar_v2">
<label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch sidebardark-switch mb-1">
<input class="form-check-input" type="checkbox" id="SidebarDark">
<label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
</div>
</li>

<li class="list-group-item setting-img">
<div class="form-check form-switch imagebg-switch mb-1">
<input class="form-check-input" type="checkbox" id="CheckImage">
<label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
</div>
<div class="bg-images">
<ul class="list-unstyled d-flex">
<li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="{{url('/')}}/assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
<li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2" href="#"><img src="{{url('/')}}/assets/img/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
<li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3" href="#"><img src="{{url('/')}}/assets/img/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
<li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4" href="#"><img src="{{url('/')}}/assets/img/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
<li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5" href="#"><img src="{{url('/')}}/assets/img/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
</ul>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch fluid-switch mb-1">
<input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
<label class="form-check-label" for="fluidLayout">Container Fluid</label>
</div>
</li>

<li class="list-group-item">
<div class="form-check form-switch shadow-switch mb-1">
<input class="form-check-input" type="checkbox" id="card_shadow">
<label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
</div>
</li>
</ul>
</div>

<div class="mb-4">
<a class="btn lift  btn-outline-secondary" href="./marketing/index.html">Marketing page</a>
<a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/onepage.html">Landing page</a>
<a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/index.html">One page Ui Kit Elements</a>
</div>
</div>
<div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
<button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
<button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<script src="{{url('/')}}/assets/js/theme.js"></script>

<script src="{{url('/')}}/assets/js/bundle/apexcharts.bundle.js"></script>

<script src="{{url('/')}}/assets/js/bundle/apexcharts.bundle.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{url('/')}}/assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
      $.validate({
        form: 'form'
      });
    </script>


<script>
    // LUNO Revenue
    var options = {
      series: [{
        name: 'Income',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
      }, {
        name: 'Expenses',
        data: [123, 142, 135, 127, 143, 122, 117, 131, 122, 122, 112, 116]
      }, {
        name: 'Revenue',
        data: [223, 242, 235, 227, 243, 222, 217, 231, 222, 222, 212, 216]
      }],
      chart: {
        type: 'bar',
        height: 260,
        stacked: true,
        stackType: '100%',
        toolbar: {
          show: false,
        },
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 0
          }
        }
      }],
      xaxis: {
        categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      },
      fill: {
        opacity: 1
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      },
    };
    var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);
    chart.render();
    // Sales by Category
    var options = {
      chart: {
        height: 280,
        type: 'donut',
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              total: {
                showAlways: true,
                show: true
              }
            }
          }
        }
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        show: true,
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      series: [55, 35, 10],
    }
    var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);
    chart.render();
  </script>
</body>
</html>