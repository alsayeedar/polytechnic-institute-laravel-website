@extends('admin.layout')

@section('title', "Site Settings - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Site Settings</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Site Settings</li>
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
            <div class="card-header">Change Site Information</div>
            <div class="card-body">
                <form method="POST" action="{{ route("admin.site.settings") }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="small mb-1" for="short_title">Short Title</label>
                        <input class="form-control" id="short_title" value="{{ $settings->short_title }}" type="text" placeholder="Enter short title" name="short_title"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="full_title">Full Title</label>
                        <input class="form-control" id="full_title" value="{{ $settings->full_title }}" type="text" placeholder="Enter full title" name="full_title"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="logo">Logo</label>
                        @if ($settings->logo)
                        <div class="py-2">
                            <img class="img-thumbnail" src="{{ asset("assets/img/".$settings->logo) }}" alt="logo"/>
                        </div>
                        @endif
                        <input class="form-control" id="logo" type="file" name="logo" accept="image/*"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="address">Address</label>
                        <input class="form-control" id="address" value="{{ $settings->address }}" type="text" placeholder="Enter address" name="address"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="email">Email</label>
                        <input class="form-control" id="email" value="{{ $settings->email }}" type="email" placeholder="Enter email address" name="email"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="mobile1">Mobile</label>
                        <input class="form-control" id="mobile1" value="{{ $settings->mobile[0] ?? "" }}" type="text" placeholder="Enter mobile number" name="mobile[]"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="mobile2">Mobile</label>
                        <input class="form-control" id="mobile2" value="{{ $settings->mobile[1] ?? "" }}" type="text" placeholder="Enter mobile number" name="mobile[]"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="facebook">Facebook</label>
                        <input class="form-control" id="facebook" value="{{ $settings->facebook }}" type="text" placeholder="Enter facebook link" name="facebook"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="youtube">YouTube</label>
                        <input class="form-control" id="youtube" value="{{ $settings->youtube }}" type="text" placeholder="Enter youtube link" name="youtube"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="maps">Google Maps</label>
                        <input class="form-control" id="maps" value="{{ $settings->maps }}" type="text" placeholder="Enter maps link" name="maps"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="notice">Scrolling Notice (HTML Supported)</label>
                        <textarea class="form-control" placeholder="Enter scrolling notice" name="notice" id="notice">{{ $settings->notice }}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection