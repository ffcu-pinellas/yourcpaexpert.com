<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $meta_title ?? 'Your CPA Expert - Professional Legal & Tax Advisory' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $meta_description ?? 'Expert tax planning, real estate law, and estate planning services.' }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        :root {
            --primary-color: {{ $siteSettings['primary_color'] ?? '#0d47a1' }};
            --secondary-color: {{ $siteSettings['secondary_color'] ?? '#1565c0' }};
            --accent-color: {{ $siteSettings['accent_color'] ?? '#f57c00' }};
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    @if(isset($siteSettings['chat_site_id']))
    <!--Start of Tawk.to Script-->
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
    <!--End of Tawk.to Script-->
    @endif

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Your CPA Expert",
      "image": "{{ asset('images/logo.png') }}",
      "@id": "https://yourcpaexpert.com",
      "url": "https://yourcpaexpert.com",
      "telephone": "+1000000000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main St",
        "addressLocality": "Your City",
        "postalCode": "00000",
        "addressCountry": "US"
      }
    }
    </script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <!-- Accessibility: Skip to Content Link -->
    <a href="#main-content" class="skip-link" style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">Skip to main content</a>

    <header role="banner">
        <div class="container py-4 flex justify-between items-center bg-white shadow-sm px-6">
            <a href="/" class="text-2xl font-bold flex items-center" aria-label="Go to Homepage">
                <img src="{{ $siteSettings['logo'] ?? asset('logo.png') }}" alt="{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }} Logo" class="h-12 mr-3">
                <span class="hidden md:inline">{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}</span>
            </a>
            
            <nav role="navigation" aria-label="Main Navigation">
                <ul class="flex space-x-8 text-sm font-semibold text-gray-700">
                    <li><a href="/services" class="hover:text-blue-800 transition">Practice Areas</a></li>
                    <li><a href="/about" class="hover:text-blue-800 transition">About Us</a></li>
                    <li><a href="/blog" class="hover:text-blue-800 transition">Insights</a></li>
                    @guest
                        <li><a href="/login" class="px-5 py-2.5 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition shadow-md">Portal Login</a></li>
                    @else
                        <li><a href="/dashboard" class="px-5 py-2.5 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition shadow-md">My Dashboard</a></li>
                    @endguest
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-content" role="main" class="flex-grow">
        @yield('content')
    </main>

    <footer role="contentinfo" class="bg-gray-900 text-white pt-20 pb-10 mt-auto">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>About Us</h4>
                    <p>Professional tax, legal, and estate planning advice for high-net-worth individuals and business owners.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <a href="/about">Our Team</a>
                    <a href="/blog">Latest News</a>
                    <a href="/contact">Book Consultation</a>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <a href="/services/tax-planning">Tax Planning</a>
                    <a href="/services/real-estate">Real Estate Law</a>
                    <a href="/services/estate-planning">Estate Planning</a>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <p><i class="fas fa-phone"></i> +1 (000) 000-0000</p>
                    <p><i class="fas fa-envelope"></i> contact@yourcpaexpert.com</p>
                </div>
            </div>
            <div style="text-align: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; font-size: 0.8rem;">
                &copy; {{ date('Y') }} Your CPA Expert. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>
