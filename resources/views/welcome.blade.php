@extends('layouts.app')


@section('content')
<main id="main-content" class="ability-corporate flw-general-main-content">
    <div class="root">
        <!-- Exact FindLaw Banner -->
        <section class="fl-banner" style="--fl-homepage-banner-background-image-desktop: url({{ asset('images/findlaw_banner_hero.png') }});">
            <div class="fl-banner__content">
                <h1 class="fl-banner__text-main">Legal Solutions Start Here</h1>
                <span class="fl-banner__text-secondary">
                    <p>FindLaw is the number one source of free legal information and resources on the web.</p>
                </span>
                
                <div class="fl-banner__search-card">
                    <div class="fl-search-card-header">I want to...</div>
                    <div class="fl-search-card-body">
                        <div class="fl-input-wrapper">
                            <i class="fa fa-search"></i>
                            <input type="text" placeholder="Legal Issue or Topic" class="fl-input">
                        </div>
                        <div class="fl-input-wrapper">
                            <i class="fa fa-location-arrow"></i>
                            <input type="text" placeholder="Location" class="fl-input">
                        </div>
                        <button class="fl-button primary">Find a Lawyer <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Exact FindLaw Stats -->
        <section class="fl-stats fl-flex fl-items-center fl-justify-center fl-stats-horizontal">
            <ul class="fl-stats-cards-container fl-no-margin">
                <li class="fl-stats-cards-item">
                    <div class="fl-stats-card">
                        <span class="fl-stats-card-value">#1</span>
                        <span class="fl-stats-card-description">most visited legal information website</span>
                    </div>
                </li>
                <li class="fl-stats-cards-item">
                    <div class="fl-stats-card">
                        <span class="fl-stats-card-value">35k+</span>
                        <span class="fl-stats-card-description">articles reviewed by legal professionals</span>
                    </div>
                </li>
                <li class="fl-stats-cards-item">
                    <div class="fl-stats-card">
                        <span class="fl-stats-card-value">1.2m</span>
                        <span class="fl-stats-card-description">law firms in our nationwide directory</span>
                    </div>
                </li>
                <li class="fl-stats-cards-item">
                    <div class="fl-stats-card">
                        <span class="fl-stats-card-value">100%</span>
                        <span class="fl-stats-card-description">free access to federal & state laws</span>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Exact FindLaw Topics -->
        <div class="topic-box-section">
            <div class="fl-container fl-section-title fl-text-center">
                <h2 class="fl-title-H2">Explore Legal Issues</h2>
                <p>Whether you are facing a legal issue or want to learn about a specific legal subject, browsing FindLaw’s legal topics is the perfect starting point.</p>
            </div>
            <div class="fl-container">
                <div class="topic-box-grid">
                    @php
                        $topics = [
                            ['title' => 'Criminal Law', 'icon' => 'https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177791/ability-law/wp-prod/www-topic-box-user-pilot/www-topic-box-user-pilot.png'],
                            ['title' => 'Family Law', 'icon' => 'https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177811/ability-law/wp-prod/www-topic-box-family/www-topic-box-family.png'],
                            ['title' => 'Personal Injury', 'icon' => 'https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177785/ability-law/wp-prod/www-topic-box-truck-medical/www-topic-box-truck-medical.png'],
                            ['title' => 'Real Estate Law', 'icon' => 'https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177820/ability-law/wp-prod/www-topic-box-house-building/www-topic-box-house-building.png'],
                            ['title' => 'Employment Law', 'icon' => asset('images/employment_law_icon.png')],
                            ['title' => 'Estate Planning', 'icon' => 'https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177820/ability-law/wp-prod/www-topic-box-house-building/www-topic-box-house-building.png'],
                        ];
                    @endphp
                    @foreach($topics as $topic)
                    <a href="/services" class="fl-topic-box-item">
                        <img src="{{ $topic['icon'] }}" class="fl-topic-box-item-icon" alt="{{ $topic['title'] }}">
                        <span class="fl-topic-box-item-text">{{ $topic['title'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
