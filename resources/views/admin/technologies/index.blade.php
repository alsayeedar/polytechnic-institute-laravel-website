@extends('admin.layout')

@section('title', "Technologies - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Technologies</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Technologies</li>
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
            <div class="card-header d-flex flex-row justify-content-between">
                <span>Manage Technologies</span>
                <a class="btn btn-sm btn-primary" href="{{ route("admin.technologies.add") }}">Add Technology</a>
            </div>
            <div class="card-body">
                @if ($technologies->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Code</th>
                            <th scope="col" class="text-center">Logo</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($technologies as $technology)
                            <tr>
                                <th scope="row" class="text-center">{{ $i }}</th>
                                <td>{{ $technology->name }}</td>
                                <td class="text-center">{{ $technology->code }}</td>
                                <td class="text-center"><img src="{{ asset("assets/img/".$technology->logo) }}" width="50px" height="50px"/></td>
                                <td class="text-center"><span class="badge {{ $technology->status ? "bg-success" : "bg-danger" }}">{{ $technology->status ? "Active" : "Inactive" }}</span></td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Action Button">
                                        @if ($technology->status)
                                        <a target="_blank" href="{{ route("frontend.technology.show", $technology->code) }}" class="btn btn-success">View</a>
                                        @endif
                                        <a href="{{ route("admin.technologies.edit", $technology->id) }}" class="btn btn-primary">Edit</a>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Are you sure?') ? location.href = '{{ route('admin.technologies.delete', $technology->id) }}' : ''">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>{{ $technologies->links() }}</div>
                @else
                <div class="alert alert-danger">No technology found!</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection