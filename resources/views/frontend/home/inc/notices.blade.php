<div class="col-md-4 py-3">
    <div class="allNotice">
        <div class="notice p-4">
            <h2>
                <i class="fa fa-bullhorn" aria-hidden="true"></i><span>NOTICES</span>
            </h2>
            <hr class="hrNotice"/>
            @if ($notices->count() > 0)
                @foreach ($notices as $notice)
                <div class="displayNotice">
                    <p class="dateTime">
                        <i class="far fa-calendar-alt"></i> <span>{{ date("d F, Y", strtotime($notice->created_at)) }}</span>
                    </p>
                    <a class="shortNotice" href="{{ route("frontend.notice.show", $notice->id) }}">
                        <i class="far fa-hand-point-right"></i> <span>{{ $notice->title }}</span>
                    </a>
                    <hr>
                </div>
                @endforeach
                <a href="{{ route("frontend.notices") }}" class="btn btn-block btn-secondary">See More</a>
            @else
                <p class="text-center">No notices available!</p>
            @endif
        </div>
    </div>
</div>