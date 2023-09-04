@extends('frontend.layout')

@section('title', $title)

@section('content')
<div class="container">
    <div class="bg-white mb-3 p-3 rounded">
        <h4><i class="fa fa-bullhorn" aria-hidden="true"></i> <span>{{ $notice->title }}</span></h4>
        <p class="pb-3"><i class="far fa-calendar-alt"></i> Published On: <span>{{ date("d F, Y", strtotime($notice->created_at)) }}</span></p>
        <div>
            {!! $notice->body !!}
        </div>
    </div>
</div>
@endsection