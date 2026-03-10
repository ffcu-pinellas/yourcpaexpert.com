@extends('layouts.app')

@section('content')
<!-- FindLaw Ultra-High Fidelity Homepage -->

<!-- Hero Banner Section -->
<section class="fl-banner">
    <div class="fl-container">
        <div class="fl-banner-content">
            <h1 class="fl-banner-title">Find the Right Legal & Tax Advisor</h1>
            <p class="fl-banner-subtitle">World-class guidance for Tax Litigation, Estate Planning, and Corporate Audit.</p>
            
            <!-- Exact FindLaw Search Card -->
            <div class="fl-search-card">
                <div class="fl-search-header">
                    <span class="fl-search-label">I want to...</span>
                </div>
                <div class="fl-search-inputs">
                    <div class="fl-input-group">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Topic: Tax, Audit, Property..." class="fl-input">
                    </div>
                    <div class="fl-input-group">
                        <i class="fas fa-location-dot"></i>
                        <input type="text" placeholder="Location: State or Zip" class="fl-input">
                    </div>
                    <button class="fl-btn-search">Find My Advisor <i class="fas fa-angle-right"></i></button>
                </div>
                <div class="fl-search-footer">
                    <a href="#" class="fl-link">Browse by Topic</a>
                    <span class="fl-spacer">|</span>
                    <a href="#" class="fl-link">View All States</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats High-Fidelity Bar -->
<section class="fl-stats">
    <div class="fl-container">
        <div class="fl-stats-grid">
            <div class="fl-stat-item">
                <i class="fas fa-user-shield fl-stat-icon"></i>
                <div class="fl-stat-text">Certified JD/CPA Experts</div>
            </div>
            <div class="fl-stat-item">
                <i class="fas fa-balance-scale fl-stat-icon"></i>
                <div class="fl-stat-text">Top-Rated Advisory Firm</div>
            </div>
            <div class="fl-stat-item">
                <i class="fas fa-lock fl-stat-icon"></i>
                <div class="fl-stat-text">100% Secure Client Data</div>
            </div>
        </div>
    </div>
</section>

<!-- Topics Grid Section -->
<section class="fl-topics">
    <div class="fl-container">
        <h2 class="fl-section-title">Explore Professional Practice Areas</h2>
        <div class="fl-topic-grid">
            @php
                $topics = [
                    ['title' => 'Tax Planning & Litigation', 'icon' => 'fa-calculator', 'desc' => 'Navigate complex tax codes with JD/CPA support.', 'slug' => 'tax'],
                    ['title' => 'Real Estate Acquisition', 'icon' => 'fa-building', 'desc' => 'Strategic counsel for commercial property projects.', 'slug' => 'real-estate'],
                    ['title' => 'Estate Planning & Trust', 'icon' => 'fa-file-signature', 'desc' => 'Protect your assets and future legacy.', 'slug' => 'estate'],
                    ['title' => 'Corporate Audit & Compliance', 'icon' => 'fa-chart-bar', 'desc' => 'Forensic accounting and internal audits.', 'slug' => 'audit'],
                    ['title' => 'Business Law & Formation', 'icon' => 'fa-briefcase', 'desc' => 'Structure your LLC or Corporation correctly.', 'slug' => 'business'],
                    ['title' => 'Asset Protection Strategy', 'icon' => 'fa-shield-alt', 'desc' => 'Defensive positioning for high-net-worth clients.', 'slug' => 'asset-protection'],
                ];
            @endphp

            @foreach($topics as $topic)
            <div class="fl-topic-box" onclick="window.location='{{ route('services.show', $topic['slug']) }}'">
                <i class="fas {{ $topic['icon'] }} fl-topic-icon"></i>
                <div class="fl-topic-content">
                    <h3 class="fl-topic-title">{{ $topic['title'] }}</h3>
                    <p class="fl-topic-desc">{{ $topic['desc'] }}</p>
                    <a href="{{ route('services.show', $topic['slug']) }}" class="fl-topic-link">Learn More <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="fl-cta">
    <div class="fl-container">
        <div class="fl-cta-card">
            <h2>Ready to start your consultation?</h2>
            <p>Speak with an expert advisor today about your specific tax or legal needs.</p>
            <a href="{{ route('contact') }}" class="fl-btn-cta">Book Free Consultation</a>
        </div>
    </div>
</section>
@endsection
