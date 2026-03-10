@extends('admin.layout')

@section('content')
<div style="margin-bottom: 30px;">
    <h2>System Settings</h2>
    <p style="color: #666;">Global portal configuration and branding.</p>
</div>

<div class="card" style="max-width: 900px;">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <div>
                <h3 style="margin-bottom: 15px; color: #002244;">General Info</h3>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Firm Name</label>
                    <input type="text" name="firm_name" value="{{ $siteSettings['firm_name'] ?? 'Your CPA Expert' }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Firm Tagline</label>
                    <input type="text" name="firm_tagline" value="{{ $siteSettings['firm_tagline'] ?? '' }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Contact Email</label>
                    <input type="email" name="contact_email" value="{{ $siteSettings['contact_email'] ?? '' }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
            </div>

            <div>
                <h3 style="margin-bottom: 15px; color: #002244;">Branding & Colors</h3>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Primary Color (FindLaw Orange: #FA6400)</label>
                    <input type="color" name="primary_color" value="{{ $siteSettings['primary_color'] ?? '#FA6400' }}" style="width: 100%; height: 40px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Secondary Color (FindLaw Navy: #002244)</label>
                    <input type="color" name="secondary_color" value="{{ $siteSettings['secondary_color'] ?? '#002244' }}" style="width: 100%; height: 40px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                
                <div style="margin-top: 25px; padding: 15px; background: #e3f2fd; border-radius: 4px; font-size: 0.85rem;">
                    <i class="fas fa-info-circle"></i> These colors are applied globally to the header, buttons, and high-fidelity blocks.
                </div>
            </div>
        </div>

        <div style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px; text-align: right;">
            <button type="submit" class="btn btn-primary" style="padding: 12px 30px;">Save All Portal Settings</button>
        </div>
    </form>
</div>
@endsection
