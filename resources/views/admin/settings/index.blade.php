@extends('admin.layout')

@section('content')
<div class="card">
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div style="margin-bottom: 30px;">
            <h3>Branding</h3>
            <div style="margin-top: 15px;">
                <label style="display: block; margin-bottom: 5px;">Firm Name</label>
                <input type="text" name="site_name" value="{{ $settings['branding']['site_name']->value ?? 'Your CPA Expert' }}" style="width: 100%; padding: 8px; border: 1px solid var(--border-color); border-radius: 4px;">
            </div>
            <div style="margin-top: 15px;">
                <label style="display: block; margin-bottom: 5px;">Logo</label>
                <input type="file" name="site_logo">
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <h3>Contact Information</h3>
            <div style="margin-top: 15px;">
                <label style="display: block; margin-bottom: 5px;">Phone</label>
                <input type="text" name="contact_phone" value="{{ $settings['contact']['contact_phone']->value ?? '' }}" style="width: 100%; padding: 8px; border: 1px solid var(--border-color); border-radius: 4px;">
            </div>
            <div style="margin-top: 15px;">
                <label style="display: block; margin-bottom: 5px;">Email</label>
                <input type="email" name="contact_email" value="{{ $settings['contact']['contact_email']->value ?? '' }}" style="width: 100%; padding: 8px; border: 1px solid var(--border-color); border-radius: 4px;">
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <h3>Global Styling</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div style="margin-top: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Primary Color</label>
                    <input type="color" name="primary_color" value="{{ $settings['theme']['primary_color']->value ?? '#1a237e' }}" style="width: 100%; height: 40px; padding: 5px; border: 1px solid var(--border-color); border-radius: 4px;">
                </div>
                <div style="margin-top: 15px;">
                    <label style="display: block; margin-bottom: 5px;">Secondary Color</label>
                    <input type="color" name="secondary_color" value="{{ $settings['theme']['secondary_color']->value ?? '#303f9f' }}" style="width: 100%; height: 40px; padding: 5px; border: 1px solid var(--border-color); border-radius: 4px;">
                </div>
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <h3>External Integrations</h3>
            <div style="margin-top: 15px;">
                <label style="display: block; margin-bottom: 5px;">Tawk.to Site ID (Free Chat)</label>
                <input type="text" name="chat_site_id" value="{{ $settings['integrations']['chat_site_id']->value ?? '' }}" placeholder="e.g. 642.../1... " style="width: 100%; padding: 8px; border: 1px solid var(--border-color); border-radius: 4px;">
                <small style="color: #666;">Get your free ID at <a href="https://tawk.to" target="_blank">tawk.to</a></small>
            </div>
        </div>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-primary">Save All Settings</button>
        </div>
    </form>
</div>
@endsection
