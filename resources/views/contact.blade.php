@extends('layouts.app')

@section('content')
<section class="fl-banner" style="background-image: url('{{ asset('images/findlaw_banner_hero.png') }}'); padding: 80px 0; min-height: 300px;">
    <div class="fl-banner__content text-center">
        <h1 class="fl-banner__text-main">Connect With Our Experts</h1>
        <p class="fl-banner__text-secondary">We're ready to provide the specialized legal and tax counsel you need.</p>
    </div>
</section>

<section class="fl-section-padding">
    <div class="fl-container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px;">
            <div>
                <h2 style="color: #002D5B; font-size: 2.2rem; margin-bottom: 25px;">Send a Secure Message</h2>
                <form action="{{ route('leads.store') }}" method="POST">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <input type="text" name="name" placeholder="Full Name" required class="fl-input" style="width: 100%;">
                        <input type="email" name="email" placeholder="Email Address" required class="fl-input" style="width: 100%;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <input type="text" name="subject" placeholder="Legal Subject" required class="fl-input" style="width: 100%;">
                    </div>
                    <div style="margin-bottom: 25px;">
                        <textarea name="message" placeholder="How can our experts help you?" required class="fl-input" style="width: 100%; height: 150px;"></textarea>
                    </div>
                    <button type="submit" class="fl-btn-primary" style="width: 100%;">Submit Case Review <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
            
            <div style="background: #fff; padding: 50px; border-radius: 8px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); border: 1px solid #eee;">
                <h3 style="color: #002D5B; margin-bottom: 25px;">Firm Contact Channels</h3>
                
                <div style="display: flex; gap: 20px; margin-bottom: 30px;">
                    <div style="color: #FA6400; font-size: 1.5rem;"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4 style="margin-bottom: 5px;">Headquarters</h4>
                        <p style="color: #666;">{{ $siteSettings['address'] ?? '123 Enterprise Way, NY' }}</p>
                    </div>
                </div>

                <div style="display: flex; gap: 20px; margin-bottom: 30px;">
                    <div style="color: #FA6400; font-size: 1.5rem;"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <h4 style="margin-bottom: 5px;">Direct Line</h4>
                        <p style="color: #666;">{{ $siteSettings['contact_phone'] ?? '+1 (555) Find-Law' }}</p>
                    </div>
                </div>

                <div style="display: flex; gap: 20px;">
                    <div style="color: #FA6400; font-size: 1.5rem;"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4 style="margin-bottom: 5px;">Secure Email</h4>
                        <p style="color: #666;">{{ $siteSettings['contact_email'] ?? 'contact@yourcpaexpert.com' }}</p>
                    </div>
                </div>
                
                <div style="margin-top: 50px; padding-top: 30px; border-top: 1px solid #eee;">
                    <p style="font-size: 0.9rem; color: #888;">Expected response time for new inquiries: <strong>Under 24 hours</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
