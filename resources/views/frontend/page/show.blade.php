@extends('frontend.layout')

@section('title', $title)

@section('content')
<div class="container">
    <div class="bg-white mb-3 p-3 rounded">
        <p class="bg-green btn-block py-3 text-center text-white font-weight-bold rounded fs-20">{{ $page->title }}</p>
        <div class="content-body">
            {!! $page->body !!}
        </div>
    </div>
</div>
@endsection