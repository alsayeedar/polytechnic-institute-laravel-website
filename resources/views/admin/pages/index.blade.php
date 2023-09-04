@extends('admin.layout')

@section('title', "Pages - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Pages</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Pages</li>
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
                <span>Manage Pages</span>
                <a class="btn btn-sm btn-primary" href="{{ route("admin.pages.add") }}">Add Page</a>
            </div>
            <div class="card-body">
                @if ($pages->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Title</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($pages as $page)
                            <tr>
                                <th scope="row" class="text-center">{{ $i }}</th>
                                <td>{{ $page->title }}</td>
                                <td class="text-center"><span class="badge {{ $page->status ? "bg-success" : "bg-danger" }}">{{ $page->status ? "Published" : "Unpublished" }}</span></td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Action Button">
                                        @if ($page->status)
                                        <a target="_blank" href="{{ route("frontend.page.show", $page->slug) }}" class="btn btn-success">View</a>
                                        @endif
                                        <a href="{{ route("admin.pages.edit", $page->id) }}" class="btn btn-primary">Edit</a>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Are you sure?') ? location.href = '{{ route('admin.pages.delete', $page->id) }}' : ''">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>{{ $pages->links() }}</div>
                @else
                <div class="alert alert-danger">No pages found!</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection