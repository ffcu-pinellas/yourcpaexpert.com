@extends('admin.layout')

@section('content')
<div class="admin-dashboard-wrapper">
    @if(session('success'))
        <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 4px; border-left: 5px solid #28a745; margin-bottom: 25px;">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <div class="welcome-banner" style="background: linear-gradient(135deg, #002244 0%, #003366 100%); color: #fff; padding: 40px; border-radius: 8px; margin-bottom: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        <h1 style="font-size: 2rem; margin-bottom: 10px;">Welcome back, Administrator</h1>
        <p style="opacity: 0.8;">The "Your CPA Expert" portal is currently synchronized with the FindLaw high-fidelity design system.</p>
    </div>

    <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px; margin-bottom: 40px;">
        <div class="card stat-card" style="background: #fff; border: 1px solid #eee; padding: 30px; border-radius: 8px; border-top: 4px solid #FA6400;">
            <div style="font-size: 0.85rem; color: #888; text-transform: uppercase; font-weight: 700;">Incoming Leads</div>
            <div style="font-size: 2.8rem; font-weight: 800; color: #002244; margin-top: 5px;">{{ $stats['leads'] }}</div>
            <div style="margin-top: 10px; font-size: 0.9rem; color: #2e7d32;">+12% vs last month</div>
        </div>
        <div class="card stat-card" style="background: #fff; border: 1px solid #eee; padding: 30px; border-radius: 8px; border-top: 4px solid #002244;">
            <div style="font-size: 0.85rem; color: #888; text-transform: uppercase; font-weight: 700;">Active Cases</div>
            <div style="font-size: 2.8rem; font-weight: 800; color: #002244; margin-top: 5px;">{{ $stats['cases'] }}</div>
        </div>
        <div class="card stat-card" style="background: #fff; border: 1px solid #eee; padding: 30px; border-radius: 8px; border-top: 4px solid #FAC400;">
            <div style="font-size: 0.85rem; color: #888; text-transform: uppercase; font-weight: 700;">Pending Actions</div>
            <div style="font-size: 2.8rem; font-weight: 800; color: #002244; margin-top: 5px;">{{ $stats['documents'] }}</div>
        </div>
        <div class="card stat-card" style="background: #fff; border: 1px solid #eee; padding: 30px; border-radius: 8px; border-top: 4px solid #666;">
            <div style="font-size: 0.85rem; color: #888; text-transform: uppercase; font-weight: 700;">Expert Staff</div>
            <div style="font-size: 2.8rem; font-weight: 800; color: #002244; margin-top: 5px;">{{ $stats['members'] }}</div>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 30px;">
        <div class="card" style="background: #fff; border: 1px solid #eee; padding: 25px; border-radius: 8px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="color: #002244;">Recent Lead Inquiries</h3>
                <a href="{{ route('admin.leads.index') }}" style="color: #FA6400; font-weight: 700; font-size: 0.9rem;">View All Leads</a>
            </div>
            <p style="color: #888; padding: 20px 0; text-align: center;">New leads will appear here automatically from your website form.</p>
        </div>

        <div class="card" style="background: #fff; border: 1px solid #eee; padding: 25px; border-radius: 8px;">
            <h3 style="color: #002244; margin-bottom: 15px;">Firm Control Center</h3>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 25px;">Use these terminal-free tools to manage your Hostinger deployment.</p>
            
            <form action="{{ route('admin.seed') }}" method="POST" onsubmit="return confirm('CRITICAL ACTION: This will overwrite or initialize firm data to match the FindLaw High-Fidelity template. Proceed?')">
                @csrf
                <button type="submit" style="width: 100%; background: #FA6400; color: #fff; border: none; padding: 18px; border-radius: 6px; font-weight: 800; font-size: 1rem; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 12px; box-shadow: 0 5px 15px rgba(250, 100, 0, 0.3);">
                    <i class="fas fa-magic"></i> INITIALIZE FINDLAW SYSTEM
                </button>
            </form>
            
            <div style="margin-top: 20px; padding: 15px; background: #fdfae6; border-radius: 4px; border-left: 4px solid #fac400; font-size: 0.85rem; color: #856404;">
                <i class="fas fa-info-circle"></i> This action populates your homepage, team, and legal service pages with pixel-perfect content.
            </div>
        </div>
    </div>
</div>
@endsection
