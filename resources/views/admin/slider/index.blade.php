@extends('admin.layout')

@section('title', "Slider - ".$settings->short_title)

@section('content')
<h1 class="mt-4">Slider</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Slider</li>
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
    <div class="modal fade" id="addSlider" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="addSliderLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Item</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label class="small mb-1" for="image">Image</label>
                            <input class="form-control" id="image" type="file" name="image" accept="image/*"/>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="position">Position</label>
                            <input class="form-control" id="position" value="1" type="number" placeholder="Enter slider position" name="position"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if ($sliders->count() > 0)
    @foreach ($sliders as $slider)
    <div class="modal fade" id="editSlider{{ $slider->id }}" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="Edit Slider" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form method="POST" action="{{ route("admin.slider.edit", $slider->id) }}">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Item</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label class="small mb-1" for="position">Position</label>
                            <input class="form-control" id="position" value="{{ $slider->position }}" type="number" placeholder="Enter slider position" name="position"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header d-flex flex-row justify-content-between">
                <span>Manage Slider</span>
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addSlider" type="button">Add Item</button>
            </div>
            <div class="card-body">
                @if ($sliders->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col" class="text-center">Position</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($sliders as $slider)
                            <tr>
                                <th scope="row" class="text-center">{{ $i }}</th>
                                <td class="text-center"><img src="{{ asset("assets/img/".$slider->image) }}" width="200px" height="70px"/></td>
                                <td class="text-center">{{ $slider->position }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Action Button">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editSlider{{ $slider->id }}">Edit</button>
                                        <button type="button" class="btn btn-danger" onclick="confirm('Are you sure?') ? location.href = '{{ route('admin.slider.delete', $slider->id) }}' : ''">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="alert alert-danger">No item found!</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection