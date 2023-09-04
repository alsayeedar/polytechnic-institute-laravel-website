@extends('frontend.layout')

@section('title', $title)

@section('content')
<div class="container">
    <div class="bg-white mb-3 p-3 rounded">
        <p class="bg-green btn-block py-3 text-center text-white font-weight-bold rounded fs-20">Notices Board</p>
        @if ($notices->count() > 0)
        <div class="row">
            @foreach ($notices as $notice)
            <div class="col-md-4 mx-auto mb-3 d-grid">
                <div class="card">
                    <div class="card-body text-center d-flex flex-column align-items-center justify-content-between">
                        <div>
                            <h4 class="card-title ">
                                <i class="far fa-calendar-alt"></i> <span>{{ date("d F, Y", strtotime($notice->created_at)) }}</span>
                            </h4>
                            <p class="card-text">{{ $notice->title }}</p>
                        </div>
                        <a href="{{ route("frontend.notice.show", $notice->id) }}" class="btn btn-warning">Read More <i class="fas fa-arrow-alt-circle-right"></i></a>  
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">{{ $notices->links() }}</div>
        @else
            <div class="alert alert-danger text-center">No notices available!</div>
        @endif
    </div>
</div>
@endsection