@extends('layouts.app')

@section('content')
<section class="hero" style="padding: 60px 0; background: var(--bg-color); color: var(--text-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <h1>Meet Our Expert Team</h1>
        <p style="color: var(--muted-text);">Dedicated professionals committed to your financial and legal success.</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container">
        <h2 class="section-title">Partners</h2>
        <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));">
            @forelse($partners as $partner)
                <div class="service-card" style="display: flex; gap: 20px; align-items: start;">
                    <div style="width: 120px; height: 120px; background: #eee; border-radius: 8px; flex-shrink: 0;">
                        @if($partner->photo)
                            <img src="{{ asset('storage/' . $partner->photo) }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                        @else
                            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #ccc;">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                        @endif
                    </div>
                    <div>
                        <h3 style="margin-bottom: 5px;">{{ $partner->name }}</h3>
                        <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 10px;">{{ $partner->title }}</p>
                        <p style="font-size: 0.9rem; color: var(--muted-text);">{{ Str::limit($partner->bio, 150) }}</p>
                        <a href="mailto:{{ $partner->email }}" style="display: block; margin-top: 10px; font-size: 0.8rem;">
                            <i class="fas fa-envelope"></i> Contact {{ $partner->name }}
                        </a>
                    </div>
                </div>
            @empty
                <p style="text-align: center; color: #999;">Team profiles coming soon.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
