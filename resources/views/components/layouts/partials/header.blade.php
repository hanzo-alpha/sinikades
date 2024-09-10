<header class="th-header header-layout1 onepage-nav">
    @if(config('sipetades.show_header_top'))
        <x-layouts.partials.header-top/>
    @endif
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a class="icon-masking" href="{{ route('landing') }}">
                                <span data-mask-src="{{ asset('logo/svg/logo.svg') }}" class="mask-icon"></span>
                                <img src="{{ asset('logo/svg/logo.svg') }}" alt="Webteck">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <x-landing.menu/>
                        <div class="header-button">
                            <button type="button" class="icon-btn sideMenuToggler d-inline-block d-lg-none">
                                <i class="fal fa-shopping-cart"></i>
                                <span class="badge">5</span>
                            </button>
                            <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            @if(config('sipetades.show_global_search'))
                                <button type="button" class="icon-btn searchBoxToggler">
                                    <i class="fal fa-search"></i>
                                </button>
                            @endif
                            @if(config('sipetades.show_cart'))
                                <button type="button" class="icon-btn sideMenuToggler">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="badge">5</span>
                                </button>
                            @endif
                            <a href="#" class="th-btn style3 shadow-none">
                                Make Appointment
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>
