<div class="row">
    <div class="container">
        <div class="department pb-4">
            <div class="educare-section-title pt-4">
                <h2>DEPARTMENTS</h2>
                <p>4 years Diploma in Engineering and Textile Engineering under BTEB</p>
            </div>
            <div class="row justify-content-md-center">
                @if ($technologies->count() > 0)
                    @foreach ($technologies as $technology)
                    <div class="col-md-4 py-4">
                        <div class="dep">
                            <a href="{{ route("frontend.technology.show", $technology->code) }}" class="card">
                                <img class="hvr-shrink" src="{{ asset("assets/img/" . $technology->logo) }}" alt="{{ $technology->name }}"/>
                                <h3>{{ $technology->name }}</h3>
                                <span class="line" style="background-color: {{ $technology->color }}"></span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="alert alert-danger">No technology available!</div>
                @endif
            </div>
        </div>
    </div>
</div>