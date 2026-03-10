@extends('layouts.app')

@section('content')
<div class="auth-page">
    <div class="fl-container">
        <div class="auth-card">
            <h2 class="auth-title">Client Login</h2>
            <p class="auth-subtitle">Access your cases, documents, and secure messaging.</p>
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="fl-input-group">
                    <label>Email Address</label>
                    <input type="email" name="email" required value="{{ old('email') }}" class="fl-input">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <div class="fl-input-group">
                    <label>Password</label>
                    <input type="password" name="password" required class="fl-input">
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                
                <div class="auth-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>
                
                <button type="submit" class="fl-btn-primary full-width">Sign In <i class="fas fa-sign-in-alt"></i></button>
            </form>
            
            <div class="auth-footer">
                Don't have an account? <a href="{{ route('register') }}">Create an account</a>
            </div>
        </div>
    </div>
</div>

<style>
.auth-page {
    padding: 100px 0;
    background: #f4f6f8;
    min-height: calc(100vh - 400px);
    display: flex;
    align-items: center;
}
.auth-card {
    max-width: 450px;
    margin: 0 auto;
    background: white;
    padding: 50px;
    border-radius: 4px;
    box-shadow: 0 15px 50px rgba(0,0,0,0.08);
}
.auth-title {
    font-family: 'Outfit', sans-serif;
    color: #002D5B;
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 10px;
}
.auth-subtitle {
    color: #666;
    margin-bottom: 35px;
    font-size: 16px;
}
.auth-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    font-size: 14px;
}
.auth-footer {
    margin-top: 35px;
    text-align: center;
    border-top: 1px solid #eee;
    padding-top: 25px;
    font-size: 15px;
}
.auth-footer a { color: #FA6400; font-weight: 700; }
.forgot-password { color: #FA6400; font-weight: 600; }
.error { color: #e74c3c; font-size: 13px; margin-top: 5px; display: block; }
</style>
@endsection
