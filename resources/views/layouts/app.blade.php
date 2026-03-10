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

<header class="fl-header">
    <div class="fl-header-bar">
        <a class="fl-header-bar__logo-box" href="/" aria-label="Home">
            <img src="{{ $siteSettings['logo'] ?? asset('logo.png') }}" alt="{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}" style="height: 50px;">
        </a>
        
        <nav class="fl-header-menu__nav">
            <ul class="fl-header-menu__nav-list">
                <li class="fl-header-menu__nav-list-item">
                    <a class="fl-header-menu__nav-list-item-head" href="/services">Practice Areas <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </li>
                <li class="fl-header-menu__nav-list-item">
                    <a class="fl-header-menu__nav-list-item-head" href="/about">About Us</a>
                </li>
                <li class="fl-header-menu__nav-list-item">
                    <a class="fl-header-menu__nav-list-item-head" href="/blog">Insights</a>
                </li>
                <li class="fl-header-menu__nav-list-item">
                    <a class="fl-header-menu__nav-list-item-head" href="/contact">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="fl-header-actions" style="display: flex; align-items: center; gap: 20px;">
            <a href="/search" class="fl-header-search-btn" aria-label="Search"><i class="fa fa-search" aria-hidden="true"></i></a>
            @guest
                <a href="/login" class="fl-button primary" style="background: var(--fl-primary); color: white; padding: 10px 20px; border-radius: 4px; font-weight: 700;">Portal Login</a>
            @else
                <a href="/dashboard" class="fl-button primary" style="background: var(--fl-primary); color: white; padding: 10px 20px; border-radius: 4px; font-weight: 700;">Dashboard</a>
            @endguest
        </div>
    </div>
</header>

<main id="main-content">
    @yield('content')
</main>

<footer class="fl-footer" style="background: var(--fl-navy); color: white; padding: 80px 0 40px; margin-top: 80px;">
    <div class="fl-container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px;">
            <div>
                <img src="{{ $siteSettings['logo'] ?? asset('logo_white.png') }}" alt="Logo" style="height: 40px; margin-bottom: 20px; filter: brightness(0) invert(1);">
                <p style="opacity: 0.7; line-height: 1.8;">{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }} provides world-class legal and tax advisory services for individuals and businesses.</p>
            </div>
            <div>
                <h4 style="margin-bottom: 25px; font-size: 1.2rem;">Our Services</h4>
                <ul style="list-style: none; opacity: 0.7; line-height: 2.5;">
                    <li><a href="/services/tax">Tax Planning & Litigation</a></li>
                    <li><a href="/services/real-estate">Real Estate Acquisition</a></li>
                    <li><a href="/services/estate">Estate & Trust Management</a></li>
                    <li><a href="/services/audit">Internal Audit & Compliance</a></li>
                </ul>
            </div>
            <div>
                <h4 style="margin-bottom: 25px; font-size: 1.2rem;">Quick Links</h4>
                <ul style="list-style: none; opacity: 0.7; line-height: 2.5;">
                    <li><a href="/privacy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Service</a></li>
                    <li><a href="/accessibility">Accessibility</a></li>
                    <li><a href="/contact">Book a Consultation</a></li>
                </ul>
            </div>
            <div>
                <h4 style="margin-bottom: 25px; font-size: 1.2rem;">Connect With Us</h4>
                <div style="display: flex; gap: 20px; font-size: 1.5rem; margin-top: 10px;">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 60px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); opacity: 0.5; font-size: 0.85rem;">
            &copy; {{ date('Y') }} {{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}. All rights reserved.
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
