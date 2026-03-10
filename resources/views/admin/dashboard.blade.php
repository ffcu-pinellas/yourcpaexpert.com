@extends('admin.layout')

@section('content')
<div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
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

<div class="card">
    <h3>Recent Activity</h3>
    <p style="margin-top: 10px; color: #666;">No recent activity to show.</p>
</div>
@endsection
