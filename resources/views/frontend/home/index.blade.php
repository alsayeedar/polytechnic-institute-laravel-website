@extends('frontend.layout')

@section('title', $settings->full_title)

@section('content')
@include('frontend.home.inc.slider')
@include('frontend.home.inc.section')
@endsection