@extends('layouts.app')

@section('content')
<!-- FindLaw Banner / Hero -->
<section class="fl-banner" style="background-image: url('https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177840/ability-law/wp-prod/www-Group-162-1-2/www-Group-162-1-2.jpg?_i=AA');">
    <div class="fl-banner__content">
        <h1 class="fl-banner__text-main">Legal Solutions Start Here</h1>
        <span class="fl-banner__text-secondary">FindLaw is the number one source of free legal information and resources on the web.</span>
        <div class="fl-banner__search">
            <input type="text" placeholder="Legal Issue (e.g. Divorce, DUI, Personal Injury)">
            <input type="text" placeholder="City, State or Zip">
            <button type="button">Find a Lawyer <i class="fa fa-angle-right"></i></button>
        </div>
    </div>
</section>

<!-- FindLaw Stats Bar -->
<section class="fl-stats">
    <ul class="fl-stats-cards-container">
        <li class="fl-stats-card">
            <span class="fl-stats-card-value">#1</span>
            <span class="fl-stats-card-description">Most visited legal website</span>
        </li>
        <li class="fl-stats-card">
            <span class="fl-stats-card-value">35k+</span>
            <span class="fl-stats-card-description">Expert articles reviewed</span>
        </li>
        <li class="fl-stats-card">
            <span class="fl-stats-card-value">1.2m</span>
            <span class="fl-stats-card-description">Law firms in directory</span>
        </li>
        <li class="fl-stats-card">
            <span class="fl-stats-card-value">100%</span>
            <span class="fl-stats-card-description">Free access to laws</span>
        </li>
    </ul>
</section>

<!-- Legal Topics / Issues Grid -->
<div class="topic-box-section">
    <div class="fl-container fl-section-title">
        <h2 class="fl-title-H2">Explore Legal Issues</h2>
        <p>Whether you are facing a legal issue or want to learn about a specific legal subject, browsing FindLaw’s legal topics is the perfect starting point.</p>
    </div>
    
    <div class="topic-box-section-content__items">
        <a href="/services/tax" class="fl-topic-box-item">
            <img src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177791/ability-law/wp-prod/www-topic-box-user-pilot/www-topic-box-user-pilot.png" class="fl-topic-box-item-icon" alt="Tax Law">
            <span class="fl-topic-box-item-text">Tax Law & Litigation</span>
        </a>
        <a href="/services/real-estate" class="fl-topic-box-item">
            <img src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177820/ability-law/wp-prod/www-topic-box-house-building/www-topic-box-house-building.png" class="fl-topic-box-item-icon" alt="Real Estate">
            <span class="fl-topic-box-item-text">Real Estate Acquisition</span>
        </a>
        <a href="/services/family" class="fl-topic-box-item">
            <img src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177811/ability-law/wp-prod/www-topic-box-family/www-topic-box-family.png" class="fl-topic-box-item-icon" alt="Family Law">
            <span class="fl-topic-box-item-text">Family & Estate Law</span>
        </a>
        <a href="/services/business" class="fl-topic-box-item">
            <img src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177800/ability-law/wp-prod/www-topic-box-briefcase/www-topic-box-briefcase.png" class="fl-topic-box-item-icon" alt="Business Law">
            <span class="fl-topic-box-item-text">Business Formation</span>
        </a>
        <a href="/services/estate" class="fl-topic-box-item">
            <img src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177828/ability-law/wp-prod/www-topic-box-estate/www-topic-box-estate.png" class="fl-topic-box-item-icon" alt="Estate Planning">
            <span class="fl-topic-box-item-text">Estate Planning</span>
        </a>
        <a href="/services/litigation" class="fl-topic-box-item">
            <img src="https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177785/ability-law/wp-prod/www-topic-box-truck-medical/www-topic-box-truck-medical.png" class="fl-topic-box-item-icon" alt="Personal Injury">
            <span class="fl-topic-box-item-text">Personal Injury</span>
        </a>
    </div>
</div>

<!-- Professional Call to Action -->
<section style="padding: 100px 0; background-color: var(--fl-navy); color: white; text-align: center;">
    <div class="fl-container">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Need Professional Guidance?</h2>
        <p style="font-size: 1.25rem; margin-bottom: 40px; opacity: 0.8;">Our experts are standing by to help you navigate your legal and tax challenges.</p>
        <a href="/contact" class="fl-button primary" style="background: var(--fl-primary); color: white; padding: 15px 40px; font-size: 1.1rem; border-radius: 4px; font-weight: 700;">Schedule Your Strategy Session</a>
    </div>
</section>
@endsection
