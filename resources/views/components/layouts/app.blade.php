<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <x-layouts.partials.meta/>
    <title>{{ $title ?? 'Technology & IT Solutions HTML Template - Software Company' }}</title>
    <!--==============================
        Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    @include('components.layouts.partials.styles')
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>
<body>

<div class="cursor"></div>
<div class="cursor2"></div>

<x-layouts.partials.preloader/>
@if(config('sipetades.show_cart'))
    <x-layouts.partials.sidemenu/>
@endif
@if(config('sipetades.show_global_search'))
    <x-layouts.partials.popup-search/>
@endif
<x-layouts.partials.mobile-menu/>
<x-layouts.partials.header/>

{{ $slot }}

<x-layouts.partials.footer/>
<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<x-layouts.partials.scripts/>
</body>
</html>
