<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">

    @if ( isset($meta['description']) && !empty($meta['description']) )
        <meta name="description" content="{{ $meta['description'] }}">
    @else
        <meta name="description" content="Your meta description.">
    @endif

    @if ( isset($meta['keywords']) && !empty($meta['keywords']) )
        <meta name="keywords" content="{{ $meta['keywords'] }}">
    @else
        <meta name="keywords" content="Your meta keywords">
    @endif

    @if ( isset($meta['og_title']) && !empty($meta['og_title']) )
        <meta property="og:title" content="{{ $meta['og_title'] }}">
    @else
        <meta property="og:title" content="Your OG title">
    @endif

    @if ( isset($meta['og_url']) && !empty($meta['og_url']) )
        <meta property="og:url" content="{{ $meta['og_url'] }}">
    @else
        <meta property="og:url" content="{{ url()->current() }}">
    @endif

    @if ( isset($meta['og_image']) && !empty($meta['og_image']) )
        <meta property="og:image" content="{{ asset($meta['og_image']) }}">
    @else
        <meta property="og:image" content="{{ asset('images/meta/og.jpg') }}">
    @endif

    @if ( isset($meta['og_description']) && !empty($meta['og_description']) )
        <meta property="og:description" content="{{ $meta['og_description'] }}">
    @else
        <meta property="og:description" content="Your OG description">
    @endif

    <meta property="og:type" content="website">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="fb:app_id" content="{{ config('services.facebook.id') }}" />

    @if ( isset($meta['title']) && isset($meta['show_title_only']) )
        <title>{{ $meta['title'] }}</title>
    @elseif ( isset($meta['title']) )
        <title>{{ $meta['title'] }} — Website</title>
    @else
        <title>Website - Meta title</title>
    @endif

    <!-- Favicon -->
    @section ('favicon')
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/'. ($faviconFolder ?? "images/favicon") .'/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#FABF33">
        <meta name="msapplication-TileImage" content="{{ asset('/' . ($faviconFolder ?? "images/favicon") .'/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#FABF33">
        <meta name="apple-mobile-web-app-status-bar-style" content="#FABF33">
    @show
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('css/app.css')) }}">
    @stack ('stylesheets')
</head>