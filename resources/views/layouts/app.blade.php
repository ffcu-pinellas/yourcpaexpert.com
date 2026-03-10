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
    <div class="fl-header__upper">
        <div class="fl-container">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span>Professional CPA & Legal Advisory Services</span>
                <div style="display: flex; gap: 20px;">
                    <a href="/faq">FAQs</a>
                    <a href="/contact">Client Support</a>
                    <a href="/en-es">EN/ES</a>
                </div>
            </div>
        </div>
    </div>
    <div class="fl-header__main">
        <div class="fl-container">
            <div class="fl-header-flex">
                <a class="fl-logo" href="/" aria-label="Home">
                    <img src="{{ $siteSettings['logo'] ?? asset('logo.png') }}" alt="{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}">
                </a>
                
                <nav class="fl-nav">
                    <ul class="fl-nav-main">
                        <li><a class="fl-nav-link" href="/services">Services <i class="fa fa-angle-down"></i></a></li>
                        <li><a class="fl-nav-link" href="/team">Our Experts <i class="fa fa-angle-down"></i></a></li>
                        <li><a class="fl-nav-link" href="/insights">Insights</a></li>
                        <li><a class="fl-nav-link" href="/contact">Contact</a></li>
                        @guest
                            <li><a href="/login" class="fl-btn-cta">Client Portal</a></li>
                        @else
                            <li><a href="/dashboard" class="fl-btn-cta">My Case</a></li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<main id="main-content">
    @yield('content')
</main>

<footer class="fl-footer">
    <div class="fl-container">
        <div class="fl-footer-grid">
            <div class="fl-footer-col">
                <img src="{{ $siteSettings['logo'] ?? asset('logo_white.png') }}" alt="Logo" style="height: 45px; margin-bottom: 25px; filter: brightness(0) invert(1);">
                <p style="color: rgba(255,255,255,0.7); line-height: 1.8; font-size: 15px;">
                    {{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }} is a leading professional services firm providing expert tax planning, audit, and legal advisory services.
                </p>
                <div class="fl-social-icons" style="margin-top: 25px;">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="fl-footer-col">
                <h4>Legal Services</h4>
                <ul class="fl-footer-links">
                    <li><a href="/services/tax">Tax Planning</a></li>
                    <li><a href="/services/real-estate">Real Estate Law</a></li>
                    <li><a href="/services/estate">Estate Planning</a></li>
                    <li><a href="/services/audit">Corporate Audit</a></li>
                </ul>
            </div>
            <div class="fl-footer-col">
                <h4>Firm Information</h4>
                <ul class="fl-footer-links">
                    <li><a href="/about">About Our Firm</a></li>
                    <li><a href="/team">Meet the Experts</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/contact">Location & Hours</a></li>
                </ul>
            </div>
            <div class="fl-footer-col">
                <h4>Resources</h4>
                <ul class="fl-footer-links">
                    <li><a href="/blog">Legal Blog</a></li>
                    <li><a href="/privacy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Use</a></li>
                    <li><a href="/accessibility">Accessibility</a></li>
                </ul>
            </div>
        </div>
        
        <div class="fl-footer-bottom">
            <div>&copy; {{ date('Y') }} {{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}. All rights reserved.</div>
            <div style="display: flex; gap: 20px;">
                <a href="/sitemap">Sitemap</a>
                <span>findyoursolutions.com</span>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
