<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-md-6">
                    <div class="header-left-content">
                        @if (!is_null($settings->email) && !empty($settings->email))
                        <a href="mailto:{{ $settings->email }}">
                            <i class="fa fa-envelope"></i><span>{{ $settings->email }}</span>
                        </a>
                        @endif
                        @if (!is_null($settings->mobile) && count($settings->mobile) > 0 && !is_null($settings->mobile[0]))
                        <a href="tel:{{ $settings->mobile[0] }}">
                            <i class="fa fa-phone"></i><span>{{ $settings->mobile[0] }}</span>
                        </a>
                        @endif
                    </div>
                </div>
                <div class="col-xs-4 col-md-6">
                    <div class="header-right-content">
                        <a href="{{ $settings->facebook }}" target="_blank" class="hvr-pulse-shrink">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="{{ $settings->youtube }}" class="hvr-pulse-shrink" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area" id="sticker">
        <div class="container fzindex">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route("frontend.index") }}">
                    <img src="{{ asset("assets/img/" . $settings->logo) }}" class="d-inline-block" alt="Logo"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if (count($settings->header_menu) > 0)
                    <ul class="nav navbar-nav ml-auto">
                    @foreach ($settings->header_menu as $menu)
                        <li class="nav-item {{ array_key_exists("children", $menu) ? "dropdown" : "" }}">
                            @if (array_key_exists("children", $menu) && count($menu["children"]) > 0)
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu["text"] }}</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($menu["children"] as $children)
                                <a class="dropdown-item hvr-underline-from-left" href="{{ $children["href"] }}" target="">
                                    <i class="fas fa-angle-right"></i>
                                    {{ $children["text"] }}
                                </a>
                                @endforeach
                            </div>
                            @else
                            <a class="nav-link" href="{{ $menu["href"] }}" target="">
                                {{ $menu["text"] }}
                            </a>
                            @endif
                        </li>
                    @endforeach
                    </ul>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</header>