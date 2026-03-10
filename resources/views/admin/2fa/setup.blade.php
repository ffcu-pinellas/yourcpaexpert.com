@extends('admin.layout')

@section('content')
<div class="card" style="max-width: 500px; margin: 40px auto; text-align: center;">
    <h2>Secure Your Account</h2>
    <p style="margin: 20px 0; color: #666;">Two-Factor Authentication (2FA) is mandatory for all administrative accounts. Please scan the QR code below using your authenticator app (Google Authenticator, Authy, etc.).</p>

    <div id="qr-code" style="padding: 20px; background: #eee; margin-bottom: 20px;">
        <!-- QR Code Placeholder -->
        <i class="fas fa-qrcode fa-5x"></i>
        <p style="margin-top: 10px; font-family: monospace;">ABCDEF1234567890</p>
    </div>

    <form action="{{ route('admin.2fa.confirm') }}" method="POST">
        @csrf
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Enter 6-digit Code</label>
            <input type="text" name="code" maxlength="6" style="width: 100%; padding: 12px; font-size: 1.25rem; text-align: center; border: 1px solid var(--border-color); border-radius: 4px;" required>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px;">Verify and Enable 2FA</button>
    </form>
</div>
@endsection
