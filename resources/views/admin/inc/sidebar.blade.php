<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link{{ Str::contains(url()->current(), route('admin.dashboard')) ? " active" : "" }}" href="{{ route("admin.dashboard") }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span>Dashboard</span>
                </a>
                <a class="nav-link collapsed{{ Str::contains(url()->current(), route('admin.notices')) ? " active" : "" }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseNotices" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <span>Notices</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseNotices" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link{{ url()->current() == route('admin.notices.add') ? " active" : "" }}" href="{{ route("admin.notices.add") }}">Add New</a>
                        <a class="nav-link{{ url()->current() == route('admin.notices') ? " active" : "" }}" href="{{ route("admin.notices") }}">All Notices</a>
                    </nav>
                </div>
                <a class="nav-link collapsed{{ Str::contains(url()->current(), route('admin.pages')) ? " active" : "" }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <span>Pages</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link{{ url()->current() == route('admin.pages.add') ? " active" : "" }}" href="{{ route("admin.pages.add") }}">Add New</a>
                        <a class="nav-link{{ url()->current() == route('admin.pages') ? " active" : "" }}" href="{{ route("admin.pages") }}">All Pages</a>
                    </nav>
                </div>
                <a class="nav-link collapsed{{ Str::contains(url()->current(), route('admin.technologies')) ? " active" : "" }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTechnology" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <span>Technologies</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseTechnology" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link{{ url()->current() == route('admin.technologies.add') ? " active" : "" }}" href="{{ route("admin.technologies.add") }}">Add New</a>
                        <a class="nav-link{{ url()->current() == route('admin.technologies') ? " active" : "" }}" href="{{ route("admin.technologies") }}">All Technologies</a>
                    </nav>
                </div>
                <a class="nav-link collapsed{{ url()->current() == route('admin.menus.header') || url()->current() == route('admin.menus.footer') ? " active" : "" }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMenus" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-table"></i>
                    </div>
                    <span>Menus</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseMenus" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link{{ url()->current() == route('admin.menus.header') ? " active" : "" }}" href="{{ route("admin.menus.header") }}">Header Menu</a>
                        <a class="nav-link{{ url()->current() == route('admin.menus.footer') ? " active" : "" }}" href="{{ route("admin.menus.footer") }}">Footer Menu</a>
                    </nav>
                </div>
                <a class="nav-link{{ Str::contains(url()->current(), route('admin.slider')) ? " active" : "" }}" href="{{ route("admin.slider") }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-sliders"></i>
                    </div>
                    <span>Slider</span>
                </a>
                <a class="nav-link{{ Str::contains(url()->current(), route('admin.site.settings')) ? " active" : "" }}" href="{{ route("admin.site.settings") }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <span>Site Settings</span>
                </a>
                <a class="nav-link{{ Str::contains(url()->current(), route('admin.settings')) ? " active" : "" }}" href="{{ route("admin.settings") }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <span>Admin Settings</span>
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <span>{{ $user->name }}</span>
        </div>
    </nav>
</div>