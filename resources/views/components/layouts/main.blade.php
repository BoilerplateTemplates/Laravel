<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<x-seo::meta />
	
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
	<link rel="mask-icon" href="{{ asset('icons/safari-pinned-tab.svg') }}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#030246">
	<meta name="theme-color" content="#030246">
	
	@googlefonts
	@vite(['resources/app.css', 'resources/app.js'])
	@livewireStyles
	@stack('styles')
</head>
<body class="antialiased leading-none bg-white {{ config('app.debug') ? 'debug-screens' : null }}">
	<livewire:toasts/>
	
	<x-layouts.partials.header />
	
	{{ $slot }}
	
	@toastScripts
	@livewireScripts
	@stack('scripts')
</body>
</html>
