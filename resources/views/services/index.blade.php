@extends('layouts.app')

@section('content')
<section class="fl-banner" style="background-image: url('{{ asset('images/findlaw_banner_hero.png') }}'); padding: 80px 0; min-height: 300px;">
    <div class="fl-banner__content">
        <h1 class="fl-banner__text-main">Our Practice Areas</h1>
        <p class="fl-banner__text-secondary">Comprehensive legal and tax solutions tailored to your unique needs.</p>
    </div>
</section>

<section class="fl-section-padding">
    <div class="fl-container">
        <div class="topic-box-grid">
            @forelse($services as $service)
                <a href="{{ route('services.show', $service->slug) }}" class="fl-topic-box-item">
                    <div style="flex: 1;">
                        <h3 class="fl-topic-box-item-text">{{ $service->title }}</h3>
                        <p style="font-size: 0.9rem; color: #666; margin-top: 10px;">{{ $service->meta_description }}</p>
                    </div>
                    <i class="fas fa-chevron-right" style="color: #FA6400;"></i>
                </a>
            @empty
                <a href="/services/tax" class="fl-topic-box-item">
                    <div style="flex: 1;">
                        <h3 class="fl-topic-box-item-text">Tax Planning & Litigation</h3>
                        <p style="font-size: 0.9rem; color: #666; margin-top: 10px;">Strategic tax reduction and professional IRS representation.</p>
                    </div>
                </a>
                <a href="/services/real-estate" class="fl-topic-box-item">
                    <div style="flex: 1;">
                        <h3 class="fl-topic-box-item-text">Real Estate Acquisition</h3>
                        <p style="font-size: 0.9rem; color: #666; margin-top: 10px;">Protecting your property interests in complex transactions.</p>
                    </div>
                </a>
            @endforelse
        </div>
    </div>
</section>
@endsection
