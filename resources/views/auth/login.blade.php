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
    padding: 80px 0;
    background: #f4f6f8;
    min-height: 80vh;
    display: flex;
    align-items: center;
}
.auth-card {
    max-width: 450px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 4px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}
.auth-title {
    font-family: 'Outfit', sans-serif;
    color: #002D5B;
    font-size: 28px;
    margin-bottom: 10px;
}
.auth-subtitle {
    color: #666;
    margin-bottom: 30px;
    font-size: 15px;
}
.auth-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    font-size: 14px;
}
.auth-footer {
    margin-top: 30px;
    text-align: center;
    border-top: 1px solid #eee;
    padding-top: 20px;
    font-size: 14px;
}
.full-width { width: 100%; height: 50px; }
.error { color: #e74c3c; font-size: 13px; margin-top: 5px; display: block; }
</style>
@endsection
