@extends('frontend.layout')

@section('title', $title)

@section('content')
<div class="container">
    <div class="bg-white mb-3 p-3 rounded">
        <p class="bg-green btn-block py-3 text-center text-white font-weight-bold rounded fs-20">{{ $technology->name }} Technology</p>
        <div class="row mt-4">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home"></i> Technology Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-users"></i>  Faculty Member</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-atlas"></i> Course Structure</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-list-alt"></i> Class Routine</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content text-body" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        {!! $technology->description !!}
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        {!! $technology->teachers !!}
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        {!! $technology->course_structure !!}
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        {!! $technology->class_routine !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection