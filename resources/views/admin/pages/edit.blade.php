@extends('admin.layout')

@section('title', "Edit Page - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Edit Page</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route("admin.pages") }}">Pages</a></li>
    <li class="breadcrumb-item active">Edit Page</li>
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
            <div class="card-header">Edit Page</div>
            <div class="card-body">
                <form method="POST" action="{{ route("admin.pages.edit", $page->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="small mb-1" for="title">Title</label>
                        <input class="form-control" id="title" type="text" value="{{ $page->title }}" placeholder="Enter title" name="title"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="summernote">Content</label>
                        <textarea name="body" id="summernote" class="form-control" placeholder="Enter notice content">{{ $page->body }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="status">Status</label>
                        <select class="form-select" name="status">
                            <option value="1"{{ $page->status ? " selected" : "" }}>Published</option>
                            <option value="0"{{ $page->status ? "" : " selected" }}>Unpublished</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Edit Page</button>
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
  $('#summernote').summernote();
});
</script>
@endsection