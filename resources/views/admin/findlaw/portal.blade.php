@extends('admin.layout')

@section('content')
<div class="findlaw-portal-wrapper">
    <div class="header" style="margin-bottom: 30px;">
        <h1 style="color: #002244; font-family: 'Outfit', sans-serif;">FindLaw High-Fidelity Portal</h1>
        <p style="color: #666;">Manage your FindLaw clone structural elements and synchronization.</p>
    </div>

    <div class="portal-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
        <div class="main-controls">
            <div class="card" style="background: #fff; padding: 30px; border-radius: 8px; border: 1px solid #eee; margin-bottom: 30px;">
                <h3 style="margin-bottom: 20px; color: #002244;">Core Synchronization</h3>
                <p style="margin-bottom: 25px; line-height: 1.6; color: #555;">
                    Keep your website structure aligned with the latest FindLaw high-fidelity templates. 
                    This will refresh the Practice Areas, Header navigation, and Footer structure to match the professional FindLaw blueprint.
                </p>
                <form action="{{ route('admin.findlaw-portal.sync') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-sync" style="background: #FA6400; color: #fff; border: none; padding: 15px 30px; border-radius: 4px; font-weight: 700; cursor: pointer;">
                        <i class="fas fa-sync"></i> Synchronize Design System
                    </button>
                </form>
            </div>

            <div class="card" style="background: #fff; padding: 30px; border-radius: 8px; border: 1px solid #eee;">
                <h3 style="margin-bottom: 20px; color: #002244;">High-Fidelity Practice Areas</h3>
                <div class="practice-list">
                    @php
                        $practiceAreas = \App\Models\Page::whereIn('slug', ['tax', 'real-estate', 'estate', 'audit', 'business', 'asset-protection'])->get();
                    @endphp
                    @foreach($practiceAreas as $page)
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px; border-bottom: 1px solid #f0f0f0;">
                        <div>
                            <div style="font-weight: 700;">{{ $page->title }}</div>
                            <div style="font-size: 0.8rem; color: #888;">Slug: /services/{{ $page->slug }}</div>
                        </div>
                        <a href="{{ route('admin.pages.edit', $page) }}" style="color: #FA6400;">Edit View <i class="fas fa-edit"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="card" style="background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #eee; margin-bottom: 30px;">
                <h4 style="color: #002244; margin-bottom: 15px;">Clone Status</h4>
                <div style="display: flex; align-items: center; gap: 10px; color: #2e7d32; font-weight: 700; margin-bottom: 10px;">
                    <i class="fas fa-check-circle"></i> HIGH-FIDELITY ACTIVE
                </div>
                <div style="font-size: 0.85rem; color: #777;">
                    Current Template: FindLaw 2.0 (High Resolution)
                </div>
            </div>

            <div class="card" style="background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #eee;">
                <h4 style="color: #002244; margin-bottom: 15px;">Quick Resources</h4>
                <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                    <li style="margin-bottom: 12px;"><a href="/" target="_blank" style="color: #FA6400;">View Live Homepage <i class="fas fa-external-link-alt"></i></a></li>
                    <li style="margin-bottom: 12px;"><a href="/login" target="_blank" style="color: #FA6400;">Test Client Portal <i class="fas fa-external-link-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
