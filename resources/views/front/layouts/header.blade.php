<nav id="navbar-main" class="navbar is-fixed-top lg:pl-24">
    <div class="navbar-brand">
        <div class="navbar-item">
            <!-- <div class="control"><input placeholder="Search everywhere..." class="input"></div> -->
            <a href="{{ url('/') }}">
                <img class="shrink-0 p-3 h-16" src="{{ asset('img/logo_dmb.png') }}">
            </a>
        </div>
    </div>
    <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item dropdown has-divider">
                <a class="navbar-link">
                    <span class="icon"><i class="mdi mdi-menu"></i></span>
                    <span>{{ trans('front.menu') }}</span>
                    <span class="icon">
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="navbar-dropdown">
                    <a href="{{ url('/') }}" class="navbar-item">
                        <span class="icon"><i class="mdi mdi-home"></i></span>
                        <span>{{ trans('front.dashboard') }}</span>
                    </a>
                    <a href="{{ route('front.blog-list') }}" class="navbar-item">
                        <span class="icon"><i class="mdi mdi-lightbulb-on-outline"></i></span>
                        <span>{{ trans('front.tips') }}</span>
                    </a>
                    <hr class="navbar-divider">
                </div>
            </div>
           
            <a href="{{ url('/faq') }}" class="navbar-item has-divider desktop-icon-only" title="FAQ">
                <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
                <span>{{ trans('front.faq') }}</span>
            </a>
            <hr class="navbar-divider">
            <a href="{{ url('/login') }}" title="Login" class="navbar-item desktop-icon-only">
                <span class="icon"><i class="mdi mdi-lock"></i></span>
                <span>Login</span>
            </a>
        </div>
    </div>
</nav>
