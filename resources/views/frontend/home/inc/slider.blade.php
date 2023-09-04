<div class="container">
    @if ($sliders->count() > 0)
    <div>
        <div id="carouselMain" class="carousel slide lazy-load" data-ride="carousel">
            <ol class="carousel-indicators">
                @php($i = 0)
                @foreach ($sliders as $slider)
                <li data-target="#carouselMain" data-slide-to="0" class="{{ $i == 0 ? "active" : "" }}"></li>
                    @php($i++)
                @endforeach
            </ol>
            <div class="carousel-inner">
                @php($j = 0)
                @foreach ($sliders as $slider)
                <div class="carousel-item{{ $j == 0 ? " active" : "" }}">
                    <img src="{{ asset("assets/img/" . $slider->image) }}" class="d-block w-100"/>
                </div>
                    @php($j++)
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    @endif
    @if (!is_null($settings->notice) && !empty($settings->notice))
    <div id="topMarquee" style="display:block">
        <div class="row">
            <div class="col-md-12">
                <div class="topMarquee">বিজ্ঞপ্তিঃ </div>
                <div class="marquee">
                    <marquee behavior="scroll" direction="left" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                        {!! $settings->notice !!}
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    @endif
    
</div>