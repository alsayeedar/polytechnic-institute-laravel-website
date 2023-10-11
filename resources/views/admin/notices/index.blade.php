@extends('admin.layout')

@section('title', "Notices - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Notices</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Notices</li>
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
                <span>Manage Notices</span>
                <a class="btn btn-sm btn-primary" href="{{ route("admin.notices.add") }}">Add Notice</a>
            </div>
            <div class="card-body">
                @if ($notices->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Title</th>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($notices as $notice)
                            <tr>
                                <th scope="row" class="text-center">{{ $i }}</th>
                                <td>{{ $notice->title }}</td>
                                <td class="text-center">{{ date("d F, Y", strtotime($notice->created_at)) }}</td>
                                <td class="text-center"><span class="badge {{ $notice->is_published ? "bg-success" : "bg-danger" }}">{{ $notice->is_published ? "Published" : "Unpublished" }}</span></td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Action Button">
                                        <a target="_blank" href="{{ $notice->is_published ? route("frontend.notice.show", $notice->id) : "" }}" class="btn btn-success {{ $notice->is_published ? "" : "disabled" }}">View</a>
                                        <a href="{{ route("admin.notices.edit", $notice->id) }}" class="btn btn-primary">Edit</a>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Are you sure?') ? location.href = '{{ route('admin.notices.delete', $notice->id) }}' : ''">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>{{ $notices->links() }}</div>
                @else
                <div class="alert alert-danger">No notices found!</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
