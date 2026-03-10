@extends('layouts.app')

@section('content')
<section class="hero" style="padding: 60px 0; background: var(--bg-color); color: var(--text-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <h1>Our Practice Areas</h1>
        <p style="color: var(--muted-text);">Comprehensive legal and tax solutions tailored to your unique needs.</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container">
        <div class="services-grid">
            @forelse($services as $service)
                <div class="service-card">
                    <h3>{{ $service->title }}</h3>
                    <p style="font-size: 0.9rem; color: var(--muted-text); margin: 15px 0;">{{ $service->meta_description }}</p>
                    <a href="{{ route('services.show', $service->slug) }}" class="btn" style="padding: 8px 0; color: var(--primary-color);">Explore Service &rarr;</a>
                </div>
            @empty
                <div class="service-card" style="grid-column: 1 / -1; text-align: center;">
                    <h3>Tax Planning</h3>
                    <p>Strategic tax reduction and planning.</p>
                    <a href="/services/tax-planning" class="btn">Learn More</a>
                </div>
                <div class="service-card" style="text-align: center;">
                    <h3>Real Estate Law</h3>
                    <p>Closings, 1031 exchanges, and litigation.</p>
                    <a href="/services/real-estate" class="btn">Learn More</a>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
