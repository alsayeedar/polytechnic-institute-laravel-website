<footer>
    <div class="footer-head">
        <div class="container py-5">
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="address">
                        <h4 class="pb-4">{{ $settings->full_title }}</h4>
                        <ul class="address-nav">
                            @if ($settings->address)
                            <li>
                                <i class="fas fa-map-marker-alt"></i> <span>{{ $settings->address }}</span>
                            </li>
                            @endif
                            @if (count($settings->mobile) > 0)
                            <li>
                                <i class="fas fa-phone-square-alt"></i>
                                @foreach ($settings->mobile as $mobile)
                                <span>{{ $mobile }},</span>
                                @endforeach
                            </li>
                            @endif
                            @if ($settings->email)
                            <li>
                                <i class="fas fa-envelope-open"></i> <span>{{ $settings->email }}</span>
                            </li> 
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav-bar-footer">
                        <h4 class="pb-4">Others Link</h4>
                        @if (count($settings->footer_menu) > 0)
                        <ul>
                            @foreach ($settings->footer_menu as $menu)
                            <li>
                                <a href="{{ $menu["href"] }}" target="">{{ $menu["text"] }}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav-bar-footer">
                        @if (!empty($settings->maps))
                        <iframe src="{{ $settings->maps }}" width="340" height="154" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-footer">
        <div class="container py-3">
            <div class="row">
                <div class="col-xs-7 col-md-6">
                    <div class="copy-write">Copyright @ {{ $settings->short_title }} {{ date("Y") }}. All right reserved</div>
                </div>
                <div class="col-xs-5 col-md-6">
                    <div class="develop-by text-right">
                        <span>Development by- <a href="#">{{ $settings->short_title }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>