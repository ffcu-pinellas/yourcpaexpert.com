@extends('layouts.app')

@section('content')
<!-- EXACT REPLICA: HERO BANNER -->
<section class="fl-banner" style="background-image: url('https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177840/ability-law/wp-prod/www-Group-162-1-2/www-Group-162-1-2.jpg?_i=AA');">
    <div class="fl-banner__content">
        <h1>Professional Solutions Start Here</h1>
        <p>Your CPA Expert is the premier source for specialized tax planning, legal advisory, and audit services.</p>
        
        <div class="fl-search-card">
            <div class="fl-search-field">
                <i class="fa fa-briefcase"></i>
                <input type="text" placeholder="I want to... (e.g. Lower Taxes, Audit My Business)">
            </div>
            <div class="fl-search-field">
                <i class="fa fa-location-dot"></i>
                <input type="text" placeholder="City, State or Zip">
            </div>
            <button class="fl-btn-search">Find Solutions <i class="fa fa-angle-right"></i></button>
        </div>
    </div>
</section>

<!-- EXACT REPLICA: STATS BAR -->
<section class="fl-stats">
    <div class="fl-container">
        <div class="fl-stats-container">
            <div class="fl-stat-item">
                <i class="fa fa-award fl-stat-icon"></i>
                <div class="fl-stat-text">
                    <h4>#1 Rated Firm</h4>
                    <p>Recognized for excellence in tax strategy</p>
                </div>
            </div>
            <div class="fl-stat-item">
                <i class="fa fa-check-double fl-stat-icon"></i>
                <div class="fl-stat-text">
                    <h4>Verified Experts</h4>
                    <p>Certified CPAs and Legal advisors</p>
                </div>
            </div>
            <div class="fl-stat-item">
                <i class="fa fa-file-shield fl-stat-icon"></i>
                <div class="fl-stat-text">
                    <h4>100% Secure</h4>
                    <p>Highest standards of data protection</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXACT REPLICA: LEGAL TOPICS -->
<section class="fl-section">
    <div class="fl-container">
        <div class="fl-section-header">
            <h2>Explore Our Expertise</h2>
            <p>From complex tax litigation to corporate compliance, our specialized departments provide the deep expertise required for today's professional challenges.</p>
        </div>

        <div class="fl-topic-grid">
            <div class="fl-topic-box">
                <i class="fa fa-scale-balanced fl-topic-icon"></i>
                <div class="fl-topic-content">
                    <h3>Tax Litigation</h3>
                    <p>Defending your interests in complex tax disputes and IRS representations with proven strategies.</p>
                    <a href="/services/tax" class="fl-topic-link">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="fl-topic-box">
                <i class="fa fa-building-columns fl-topic-icon"></i>
                <div class="fl-topic-content">
                    <h3>Corporate Audit</h3>
                    <p>Providing rigorous internal and external audit services to ensure compliance and fiscal integrity.</p>
                    <a href="/services/audit" class="fl-topic-link">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="fl-topic-box">
                <i class="fa fa-users-rectangle fl-topic-icon"></i>
                <div class="fl-topic-content">
                    <h3>Estate Planning</h3>
                    <p>Securing your legacy through meticulous trust management and comprehensive estate strategies.</p>
                    <a href="/services/estate" class="fl-topic-link">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="fl-topic-box">
                <i class="fa fa-briefcase fl-topic-icon"></i>
                <div class="fl-topic-content">
                    <h3>Business Law</h3>
                    <p>Navigating the legal complexities of business formation, mergers, and regulatory compliance.</p>
                    <a href="/services/business" class="fl-topic-link">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="fl-topic-box">
                <i class="fa fa-file-contract fl-topic-icon"></i>
                <div class="fl-topic-content">
                    <h3>Real Estate Law</h3>
                    <p>Facilitating seamless property acquisitions and resolving complex title or zoning issues.</p>
                    <a href="/services/real-estate" class="fl-topic-link">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="fl-topic-box">
                <i class="fa fa-shield-halved fl-topic-icon"></i>
                <div class="fl-topic-content">
                    <h3>Asset Protection</h3>
                    <p>Safeguarding your wealth from unforeseen liabilities through robust legal structures.</p>
                    <a href="/services/asset-protection" class="fl-topic-link">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="fl-section fl-section--gray">
    <div class="fl-container" style="text-align: center;">
        <h2 style="font-size: 2.8rem; margin-bottom: 25px;">Ready to Start Your Strategy?</h2>
        <p style="font-size: 1.3rem; margin-bottom: 45px; opacity: 0.8; max-width: 800px; margin-left: auto; margin-right: auto;">Our team of experts is ready to provide the professional guidance you need to reach your financial and legal goals.</p>
        <a href="/contact" class="fl-btn-cta" style="padding: 18px 50px; font-size: 1.2rem;">Book Your Free Consultation</a>
    </div>
</section>
@endsection
