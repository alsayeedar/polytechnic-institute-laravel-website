@extends('admin.layout')

@section('title', "Edit Technology - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Edit Technology</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route("admin.technologies") }}">Technologies</a></li>
    <li class="breadcrumb-item active">Edit Technology</li>
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
            <div class="card-header">Edit Technology</div>
            <div class="card-body">
                <form method="POST" action="{{ route("admin.technologies.edit", $technology->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="small mb-1" for="name">Name</label>
                        <input class="form-control" id="name" type="text" value="{{ $technology->name }}" placeholder="Enter name" name="name"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="code">Code</label>
                        <input class="form-control" id="code" type="number" value="{{ $technology->code }}" placeholder="Enter code" name="code"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="logo">Logo</label>
                        <div class="py-2">
                            <img class="img-thumbnail" src="{{ asset("assets/img/".$technology->logo) }}" width="120px" height="120px" alt="logo"/>
                        </div>
                        <input class="form-control" id="logo" type="file" accept="imagd/*" name="logo"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter description">{{ $technology->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="teachers">Teachers section</label>
                        <textarea name="teachers" id="teachers" class="form-control" placeholder="Enter teachers section content">{{ $technology->teachers }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="course_structure">Course structure section</label>
                        <textarea name="course_structure" id="course_structure" class="form-control" placeholder="Enter course structure section content">{{ $technology->course_structure }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="class_routine">Routine section</label>
                        <textarea name="class_routine" id="class_routine" class="form-control" placeholder="Enter routine section content">{{ $technology->class_routine }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="color">Color</label>
                        <input class="form-control" id="color" type="color" name="color" value="{{ $technology->color }}"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="status">Status</label>
                        <select class="form-select" name="status">
                            <option value="1"{{ $technology->status ? " selected" : "" }}>Active</option>
                            <option value="0"{{ $technology->status ? "" : " selected" }}>Inactive</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Update Technology</button>
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