@extends('admin.layout')

@section('title', "Add New Technology - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Add New Technology</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Add New Technology</li>
</ol>
<div class="row">
    @if ($errors->any())
    <div class="col-md-12">
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p class="m-0">{{ $error }}</p>
            @endforeach
        </div>
    </div>
    @endif

    @if (session("success"))
    <div class="col-md-12">
        <div class="alert alert-success">
            <p class="m-0">{{ session("success") }}</p>
        </div>
    </div>
    @endif

    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">Add New Technology</div>
            <div class="card-body">
                <form method="POST" action="{{ route("admin.technologies.add") }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="small mb-1" for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Enter name" name="name"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="code">Code</label>
                        <input class="form-control" id="code" type="number" placeholder="Enter code" name="code"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="logo">Logo</label>
                        <input class="form-control" id="logo" type="file" accept="imagd/*" name="logo"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="teachers">Teachers section</label>
                        <textarea name="teachers" id="teachers" class="form-control" placeholder="Enter teachers section content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="course_structure">Course structure section</label>
                        <textarea name="course_structure" id="course_structure" class="form-control" placeholder="Enter course structure section content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="class_routine">Routine section</label>
                        <textarea name="class_routine" id="class_routine" class="form-control" placeholder="Enter routine section content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="color">Color</label>
                        <input class="form-control" id="color" type="color" name="color"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="status">Status</label>
                        <select class="form-select" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Add Technology</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customstyle')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet"/>
@endsection
@section('customscript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
$(document).ready(function() {
  $('#description').summernote();
  $('#teachers').summernote();
  $('#course_structure').summernote();
  $('#class_routine').summernote();
});
</script>
@endsection