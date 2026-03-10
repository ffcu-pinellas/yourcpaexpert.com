@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container" style="max-width: 900px;">
        <h1>Professional Legal & Tax Advisory</h1>
        <p>Expert guidance in Tax Planning, Real Estate Acquisitions, and Estate Planning for high-net-worth individuals and business owners.</p>
        <div class="hero-actions">
            <a href="/contact" class="btn btn-primary">Book a Free Consultation</a>
            <a href="/services" class="btn" style="color: white; border: 1px solid white; margin-left: 15px;">View Our Services</a>
        </div>
        <div class="affiliations" style="margin-top: 50px; opacity: 0.7; font-size: 0.9rem;">
            <span>Members of: ABA | AICPA | State Bar Association</span>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="section-title">
            <h2>Our Core Expertise</h2>
            <p>Tailored solutions for complex legal and financial needs.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-calculator fa-3x" style="color: var(--primary-color); margin-bottom: 20px;"></i>
                <h3>Tax Planning</h3>
                <p>Strategic tax reduction strategies for individuals and businesses to maximize wealth retention.</p>
                <a href="/services/tax-planning" style="margin-top: 15px; display: inline-block;">Learn More &rarr;</a>
            </div>
            <div class="service-card">
                <i class="fas fa-building fa-3x" style="color: var(--primary-color); margin-bottom: 20px;"></i>
                <h3>Real Estate Law</h3>
                <p>Expert legal counsel for commercial and residential closings, 1031 exchanges, and litigation.</p>
                <a href="/services/real-estate" style="margin-top: 15px; display: inline-block;">Learn More &rarr;</a>
            </div>
            <div class="service-card">
                <i class="fas fa-file-signature fa-3x" style="color: var(--primary-color); margin-bottom: 20px;"></i>
                <h3>Estate Planning</h3>
                <p>Secure your legacy with comprehensive wills, trusts, and probate administration services.</p>
                <a href="/services/estate-planning" style="margin-top: 15px; display: inline-block;">Learn More &rarr;</a>
            </div>
        </div>
    </div>
</section>

<section style="padding: 100px 0; background-color: var(--primary-color); color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Need Help Navigating Complex Laws?</h2>
        <p style="font-size: 1.25rem; margin-bottom: 40px; opacity: 0.9;">Our partners are ready to guide you through every step of your legal or tax journey.</p>
        <a href="/contact" class="btn btn-primary" style="background-color: white; color: var(--primary-color);">Schedule Your Call Today</a>
    </div>
</section>
@endsection
