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
            <a class="fl-header-bar__logo-box" href="/" aria-label="Firm logo">
                @if(isset($siteSettings['logo_url']))
                    <img src="{{ $siteSettings['logo_url'] }}" alt="{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}" style="height: 45px; width: auto;">
                @else
                    <span style="font-family: 'Outfit', sans-serif; font-weight: 800; font-size: 24px; color: #002D5B; letter-spacing: -1px;">
                        {{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}<span style="color: #FA6400;">.</span>
                    </span>
                @endif
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
                @if(isset($siteSettings['logo_url_white']))
                    <img src="{{ $siteSettings['logo_url_white'] }}" alt="{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}" style="height: 45px; width: auto; filter: brightness(0) invert(1);">
                @else
                    <span style="font-family: 'Outfit', sans-serif; font-weight: 800; font-size: 24px; color: #FFFFFF; letter-spacing: -1px;">
                        {{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}<span style="color: #FA6400;">.</span>
                    </span>
                @endif
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
