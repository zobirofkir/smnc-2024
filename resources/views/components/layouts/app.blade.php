<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <!-- Site Title -->
    <title>{{ $title ?? 'SMNeurologie' }}</title>
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery.timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="{{ asset('js/plugins/jquery-3.6.0.min.js') }}"></script>

</head>
<body>
<!-- Start Preloader -->
{{-- <div class="cs_perloader">
    <div class="cs_perloader_in">
        <div class="cs_wave_first">
            <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z"/>
            </svg>
        </div>
        <div class="cs_wave_second">
            <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z"/>
            </svg>
        </div>
    </div>
</div> --}}
<!-- End Preloader -->

<x-ui.app.header />
<div>
    {{ $slot }}
</div>
<x-ui.app.footer />

<script src="{{ asset('js/plugins/wow.min.js') }}"></script>
<script src="{{ asset('js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('js/plugins/odometer.js') }}"></script>
<script src="{{ asset('js/plugins/isotope.pkg.min.js') }}"></script>
<script src="{{ asset('js/plugins/lightgallery.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('js/plugins/ripples.min.js') }}"></script>
<script src="{{ asset('js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

{{ $scripts ?? '' }}
</body>
</html>
