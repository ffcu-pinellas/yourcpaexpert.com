@extends('admin.layout')

@section('content')
@if(session('success'))
    <div style="background: #e8f5e9; color: #2e7d32; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c8e6c9;">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div style="background: #ffebee; color: #c62828; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #ffcdd2;">
        <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
    </div>
@endif

<div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
    <div class="card stat-card" style="text-align: center; padding: 30px;">
        <div style="font-size: 0.9rem; color: #666; text-transform: uppercase;">New Leads</div>
        <div style="font-size: 2.5rem; font-weight: bold; color: var(--primary-color);">{{ $stats['leads'] }}</div>
    </div>
    <div class="card stat-card" style="text-align: center; padding: 30px;">
        <div style="font-size: 0.9rem; color: #666; text-transform: uppercase;">Active Cases</div>
        <div style="font-size: 2.5rem; font-weight: bold; color: var(--primary-color);">{{ $stats['cases'] }}</div>
    </div>
    <div class="card stat-card" style="text-align: center; padding: 30px;">
        <div style="font-size: 0.9rem; color: #666; text-transform: uppercase;">Pending Docs</div>
        <div style="font-size: 2.5rem; font-weight: bold; color: var(--accent-color);">{{ $stats['documents'] }}</div>
    </div>
    <div class="card stat-card" style="text-align: center; padding: 30px;">
        <div style="font-size: 0.9rem; color: #666; text-transform: uppercase;">Team Members</div>
        <div style="font-size: 2.5rem; font-weight: bold; color: var(--primary-color);">{{ $stats['members'] }}</div>
    </div>
</div>

<div class="card" style="margin-bottom: 20px;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h3>System Tools</h3>
            <p style="margin-top: 5px; color: #666; font-size: 0.9rem;">Initialize professional firm data if the system is empty.</p>
        </div>
        <form action="{{ route('admin.seed') }}" method="POST" onsubmit="return confirm('This will populate the database with professional content. Continue?')">
            @csrf
            <button type="submit" class="btn btn-primary" style="background: var(--fl-primary); padding: 12px 25px;">
                <i class="fas fa-database"></i> Initialize FindLaw Data
            </button>
        </form>
    </div>
</div>

<div class="card">
    <h3>Recent Activity</h3>
    <p style="margin-top: 10px; color: #666;">No recent activity to show.</p>
</div>
@endsection
