@extends('admin.layout')

@section('title', "Admin Settings - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Admin Settings</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Admin Settings</li>
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
    
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">Change Account Information</div>
            <div class="card-body">
                <form method="POST" action="{{ route("admin.settings.update.info") }}">
                    @csrf
                    <div class="mb-3">
                        <label class="small mb-1" for="name">Name</label>
                        <input class="form-control" id="name" value="{{ $user->name }}" type="text" placeholder="Enter name" name="name"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="email">Email</label>
                        <input class="form-control" id="email" value="{{ $user->email }}" type="email" placeholder="Enter email" name="email"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="password">Current Password</label>
                        <input class="form-control" id="password" type="password" placeholder="Current Password" name="password"/>
                    </div>
                    <button class="btn btn-primary" type="submit">Update Account</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">Change Password</div>
            <div class="card-body">
                <form method="POST" action="{{ route("admin.settings.update.password") }}">
                    @csrf
                    <div class="mb-3">
                        <label class="small mb-1" for="currentPassword">Current Password</label>
                        <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password" name="current_password"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="newPassword">New Password</label>
                        <input class="form-control" id="newPassword" type="password" placeholder="Enter new password" name="password_confirmation"/>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                        <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password" name="password"/>
                    </div>
                    <button class="btn btn-primary" type="submit">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection