@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin-top: 50px; margin-bottom: 100px;">
    <div class="card" style="padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-radius: 12px; background: white;">
        <h1 style="text-align: center; margin-bottom: 10px; color: var(--primary-color);">System Setup</h1>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">Welcome to Your CPA Expert Portal. Follow the steps below to initialize your system.</p>

        @if($errors->any())
            <div style="background: #ffebee; color: #c62828; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('setup.install') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid var(--border-color);">
                <h3 style="margin-bottom: 15px;">1. Database Initialization</h3>
                <p style="font-size: 0.9rem; color: #888;">We will automatically create all necessary tables for leads, documents, and site settings.</p>
            </div>

            <div style="margin-bottom: 20px;">
                <h3 style="margin-bottom: 15px;">2. Create Super Admin</h3>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: 500;">Full Name</label>
                    <input type="text" name="admin_name" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: 500;">Email Address</label>
                    <input type="email" name="admin_email" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: 500;">Password</label>
                    <input type="password" name="admin_password" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: 500;">Confirm Password</label>
                    <input type="password" name="admin_password_confirmation" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 1.1rem; margin-top: 10px;">
                Complete Installation <i class="fas fa-check-circle" style="margin-left: 8px;"></i>
            </button>
        </form>
    </div>
</div>
@endsection
