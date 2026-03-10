<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $meta_title ?? 'Your CPA Expert - Professional Legal & Tax Advisory' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $meta_description ?? 'Expert tax planning, real estate law, and estate planning services.' }}">
    
    <link rel="icon" type="image/png" href="https://www.findlaw.com/static/c/images/image/upload/v1751527194/favicon/favicon-96x96.png" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --fl-primary: {{ $siteSettings['primary_color'] ?? '#FA6400' }};
        }
    </style>

    @if(isset($siteSettings['chat_site_id']))
    <!--Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/{{ $siteSettings['chat_site_id'] }}';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    @endif
</head>

<body class="page">

<header>
    <div class="fl-header" data-activity-map="main-nav">
        <a class="link-skip-nav" href="#main-content">Skip to main content</a>
        <div class="fl-header-bar">
            <button class="fl-header-bar__menu-button" type="button" aria-label="Menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="fl-header-bar__logo-box" href="/" aria-label="FindLaw logo">
                <svg class="fl-header-bar__logo" xmlns="http://www.w3.org/2000/svg" width="202px" height="64px" viewBox="0 0 200 63">
                    <style type="text/css">.st0{fill: #FA6400;}</style>
                    <g>
                        <path class="st0" d="M1,10.6h23v4.1H5.8v12.5h17v4.2h-17v15.2H1V10.6z"/>
                        <path class="st0" d="M29.9,10.7c1.9,0,3.1,1.5,3.1,3.1s-1.2,3.1-3.1,3.1c-1.9,0-3.1-1.5-3.1-3.1C26.7,12.1,27.9,10.7,29.9,10.7z M27.6,46.6V20.8h4.6v25.8H27.6z"/>
                        <path class="st0" d="M53.8,46.6V29.7c0-3.5-1.7-5.5-5.2-5.5c-4.1,0-7.1,3.2-7.1,8.5v13.8h-4.6V20.8h4.5v5.3c1.5-3.3,4.3-5.8,8.8-5.8c5.8,0,8.3,3.3,8.3,8.8v17.6H53.8z"/>
                        <path class="st0" d="M71.9,20.2c4.2,0,7,2.2,8.5,5.5V10.6h4.6v36h-4.5v-4.9c-1.6,3.3-4.5,5.5-8.8,5.5c-7.1,0-10.2-5.9-10.2-13.5C61.6,26.2,64.7,20.2,71.9,20.2z M73.1,43.4c5,0,7.3-4.4,7.3-9.7s-2.4-9.7-7.3-9.7c-4.9,0-6.8,4.1-6.8,9.7C66.3,39.3,68.2,43.4,73.1,43.4z"/>
                        <path class="st0" d="M89.3,10.6H94v31.9h17.3v4.1h-22V10.6z"/>
                        <path class="st0" d="M130.5,46.6v-4.4c-1.8,3.1-4.9,4.9-9,4.9c-5.1,0-8-3-8-7.6c0-5.5,3.7-8,9.1-8h7.8v-2.4c0-3.5-2-5-6.2-5c-2.9,0-5.6,0.6-8.1,1.8l-0.8-3.7c2.9-1.4,6.2-2.1,9.5-2.1c6.7,0,10.2,2.8,10.2,8.6v17.8H130.5z M130.3,34.9h-7.1c-3.6,0-5.2,1.6-5.2,4.6c0,2.9,1.8,4.4,4.9,4.4c4.3,0,7.5-3.3,7.5-7.3V34.9z"/>
                        <path class="st0" d="M163.6,41.3l5.4-20.6h4.5l-7.6,25.8h-4.6l-6.2-21.5l-6.3,21.5h-4.6l-7.6-25.8h4.5l5.5,20.6l5.9-20.6h5L163.6,41.3z"/>
                        <path class="st0" d="M173.8,39.7c2.2,0,3.6,1.6,3.6,3.5s-1.4,3.5-3.6,3.5c-2.2,0-3.6-1.6-3.6-3.5C170.2,41.3,171.6,39.7,173.8,39.7z M173.8,46.3c1.9,0,3.1-1.4,3.1-3.1s-1.2-3.1-3.1-3.1c-1.8,0-3,1.4-3,3.1C170.7,45,172,46.3,173.8,46.3z M174.5,43.5l1.1,1.4h-0.8l-1-1.4h-0.4v1.4h-0.7v-3.5h1.3c0.7,0,1.2,0.4,1.2,1C175.2,42.9,174.9,43.3,174.5,43.5z M173.9,41.9h-0.6V43h0.6c0.4,0,0.6-0.2,0.6-0.6C174.5,42.1,174.3,41.9,173.9,41.9z"/>
                    </g>
                </svg>
            </a>
            <nav class="fl-header-nav">
                <ul class="fl-header-nav-list">
                    <li><a href="/services">Learn About the Law</a></li>
                    <li><a href="/team">Legal Professionals</a></li>
                    @guest
                        <li><a href="{{ route('login') }}" class="fl-button primary">Client Portal</a></li>
                    @else
                        <li><a href="{{ route('dashboard') }}" class="fl-button primary">Dashboard</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="fl-link-button" style="color: white; border: none; background: none; cursor: pointer; padding: 10px 15px;">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
    </div>
</header>

<main id="main-content">
    @yield('content')
</main>

<footer class="fl-footer">
    <div class="fl-container">
        <div class="fl-footer-main">
            <div class="fl-footer-logo-box">
                <svg class="fl-footer-logo" xmlns="http://www.w3.org/2000/svg" width="202px" height="64px" viewBox="0 0 200 63">
                    <style type="text/css">.st_white{fill: #FFFFFF;}</style>
                    <g>
                        <path class="st_white" d="M1,10.6h23v4.1H5.8v12.5h17v4.2h-17v15.2H1V10.6z"/>
                        <path class="st_white" d="M29.9,10.7c1.9,0,3.1,1.5,3.1,3.1s-1.2,3.1-3.1,3.1c-1.9,0-3.1-1.5-3.1-3.1C26.7,12.1,27.9,10.7,29.9,10.7z M27.6,46.6V20.8h4.6v25.8H27.6z"/>
                        <path class="st_white" d="M53.8,46.6V29.7c0-3.5-1.7-5.5-5.2-5.5c-4.1,0-7.1,3.2-7.1,8.5v13.8h-4.6V20.8h4.5v5.3c1.5-3.3,4.3-5.8,8.8-5.8c5.8,0,8.3,3.3,8.3,8.8v17.6H53.8z"/>
                        <path class="st_white" d="M71.9,20.2c4.2,0,7,2.2,8.5,5.5V10.6h4.6v36h-4.5v-4.9c-1.6,3.3-4.5,5.5-8.8,5.5c-7.1,0-10.2-5.9-10.2-13.5C61.6,26.2,64.7,20.2,71.9,20.2z M73.1,43.4c5,0,7.3-4.4,7.3-9.7s-2.4-9.7-7.3-9.7c-4.9,0-6.8,4.1-6.8,9.7C66.3,39.3,68.2,43.4,73.1,43.4z"/>
                        <path class="st_white" d="M89.3,10.6H94v31.9h17.3v4.1h-22V10.6z"/>
                        <path class="st_white" d="M130.5,46.6v-4.4c-1.8,3.1-4.9,4.9-9,4.9c-5.1,0-8-3-8-7.6c0-5.5,3.7-8,9.1-8h7.8v-2.4c0-3.5-2-5-6.2-5c-2.9,0-5.6,0.6-8.1,1.8l-0.8-3.7c2.9-1.4,6.2-2.1,9.5-2.1c6.7,0,10.2,2.8,10.2,8.6v17.8H130.5z M130.3,34.9h-7.1c-3.6,0-5.2,1.6-5.2,4.6c0,2.9,1.8,4.4,4.9,4.4c4.3,0,7.5-3.3,7.5-7.3V34.9z"/>
                        <path class="st_white" d="M163.6,41.3l5.4-20.6h4.5l-7.6,25.8h-4.6l-6.2-21.5l-6.3,21.5h-4.6l-7.6-25.8h4.5l5.5,20.6l5.9-20.6h5L163.6,41.3z"/>
                        <path class="st_white" d="M173.8,39.7c2.2,0,3.6,1.6,3.6,3.5s-1.4,3.5-3.6,3.5c-2.2,0-3.6-1.6-3.6-3.5C170.2,41.3,171.6,39.7,173.8,39.7z M173.8,46.3c1.9,0,3.1-1.4,3.1-3.1s-1.2-3.1-3.1-3.1c-1.8,0-3,1.4-3,3.1C170.7,45,172,46.3,173.8,46.3z M174.5,43.5l1.1,1.4h-0.8l-1-1.4h-0.4v1.4h-0.7v-3.5h1.3c0.7,0,1.2,0.4,1.2,1C175.2,42.9,174.9,43.3,174.5,43.5z M173.9,41.9h-0.6V43h0.6c0.4,0,0.6-0.2,0.6-0.6C174.5,42.1,174.3,41.9,173.9,41.9z"/>
                    </g>
                </svg>
            </div>
            <div class="fl-footer-links-grid">
                <div class="fl-footer-col">
                    <h3 class="fl-text-md-bold">Legal Solutions</h3>
                    <ul class="fl-footer-list">
                        <li><a href="/services/tax">Tax Planning</a></li>
                        <li><a href="/services/real-estate">Real Estate Law</a></li>
                        <li><a href="/services/estate">Estate Planning</a></li>
                    </ul>
                </div>
                <div class="fl-footer-col">
                    <h3 class="fl-text-md-bold">Firm Info</h3>
                    <ul class="fl-footer-list">
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/team">Our Experts</a></li>
                        <li><a href="/contact">Location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fl-footer-bottom">
            <p>&copy; {{ date('Y') }} {{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}. All rights reserved. <a href="/privacy">Privacy Policy</a></p>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
