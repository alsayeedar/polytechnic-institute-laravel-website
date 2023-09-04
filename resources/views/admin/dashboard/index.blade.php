@extends('admin.layout')

@section('title', "Dashboard - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Notices</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route("admin.notices") }}">View Notices</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Pages</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route("admin.pages") }}">View Pages</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Technologies</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route("admin.technologies") }}">View Technologies</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Site Settings</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route("admin.site.settings") }}">View Site Settings</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection