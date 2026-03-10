@extends('layouts.app')

@section('content')
<div class="fl-dashboard">
    <div class="fl-container">
        <!-- Dashboard Header -->
        <div class="fl-dashboard-header">
            <div class="fl-dashboard-welcome">
                <span class="fl-welcome-back">SECURE CLIENT PORTAL</span>
                <h1 class="fl-dashboard-title">Welcome, {{ auth()->user()->name }}</h1>
            </div>
            <div class="fl-dashboard-actions">
                <a href="/contact" class="fl-btn-primary">
                    <i class="fas fa-plus"></i> NEW EXPERT INQUIRY
                </a>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="fl-dashboard-stats">
            <div class="fl-stat-item">
                <div class="fl-stat-icon"><i class="fas fa-folder-open"></i></div>
                <div class="fl-stat-info">
                    <span class="fl-stat-label">Active Cases</span>
                    <span class="fl-stat-value">{{ $cases->count() }}</span>
                </div>
            </div>
            <div class="fl-stat-item">
                <div class="fl-stat-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="fl-stat-info">
                    <span class="fl-stat-label">Documents</span>
                    <span class="fl-stat-value">{{ auth()->user()->documents->count() }}</span>
                </div>
            </div>
            <div class="fl-stat-item">
                <div class="fl-stat-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="fl-stat-info">
                    <span class="fl-stat-label">Account Status</span>
                    <span class="fl-stat-value" style="color: #2e7d32;">SECURE</span>
                </div>
            </div>
        </div>

        <div class="fl-dashboard-grid">
            <!-- Main Content: Case Tracking -->
            <div class="fl-dashboard-main">
                <div class="fl-content-card">
                    <div class="fl-card-header">
                        <h2>Your Active Legal & Tax Cases</h2>
                    </div>
                    <div class="fl-card-body">
                        @forelse($cases as $case)
                            <div class="fl-case-item">
                                <div class="fl-case-main">
                                    <div class="fl-case-icon">
                                        <i class="fas fa-gavel"></i>
                                    </div>
                                    <div class="fl-case-details">
                                        <h3>{{ $case->title }}</h3>
                                        <div class="fl-case-meta">
                                            <span>Type: <strong>{{ $case->type }}</strong></span>
                                            <span class="fl-case-divider">|</span>
                                            <span class="fl-status-badge {{ strtolower($case->status) }}">{{ $case->status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-case-actions">
                                    <form action="{{ route('documents.upload') }}" method="POST" enctype="multipart/form-data" class="fl-inline-upload">
                                        @csrf
                                        <input type="hidden" name="job_case_id" value="{{ $case->id }}">
                                        <input type="file" name="files[]" multiple onchange="this.form.submit()" style="display: none;" id="upload-{{ $case->id }}">
                                        <label for="upload-{{ $case->id }}" class="fl-icon-btn" title="Upload Secure Document">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </label>
                                    </form>
                                    <a href="#" class="fl-btn-outline">VIEW TIMELINE</a>
                                </div>
                            </div>
                        @empty
                            <div class="fl-empty-state">
                                <i class="fas fa-briefcase"></i>
                                <p>No active cases in your portal. Need specialized counsel?</p>
                                <a href="/services" class="fl-btn-link">Browse Practice Areas &rarr;</a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Sidebar: Activity Feed -->
            <div class="fl-dashboard-sidebar">
                <div class="fl-content-card">
                    <div class="fl-card-header">
                        <h2>Recent Activity</h2>
                    </div>
                    <div class="fl-card-body">
                        @forelse($recentDocuments as $doc)
                            <div class="fl-activity-item">
                                <div class="fl-activity-icon"><i class="fas fa-file-pdf"></i></div>
                                <div class="fl-activity-content">
                                    <p class="fl-activity-text">File <strong>{{ $doc->original_name }}</strong> was securely uploaded.</p>
                                    <span class="fl-activity-time">{{ $doc->created_at->diffForHumans() }}</span>
                                </div>
                                <a href="{{ route('documents.download', $doc) }}" class="fl-activity-download"><i class="fas fa-download"></i></a>
                            </div>
                        @empty
                            <p class="fl-sidebar-empty">No recent activity detected.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.fl-dashboard { background: #f8fbff; padding: 60px 0; min-height: 80vh; }
.fl-dashboard-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; }
.fl-welcome-back { color: #FA6400; font-weight: 800; font-size: 13px; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 8px; display: block; }
.fl-dashboard-title { color: #002D5B; font-family: 'Outfit', sans-serif; font-size: 2.8rem; line-height: 1; }
.fl-dashboard-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 40px; }
.fl-stat-item { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,45,91,0.05); display: flex; align-items: center; gap: 20px; border: 1px solid #eff4f9; }
.fl-stat-icon { width: 50px; height: 50px; background: rgba(0,45,91,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #002D5B; font-size: 20px; }
.fl-stat-label { display: block; color: #7f8c8d; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
.fl-stat-value { color: #002D5B; font-size: 24px; font-weight: 800; }

.fl-dashboard-grid { display: grid; grid-template-columns: 1fr 380px; gap: 40px; }
.fl-content-card { background: white; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,45,91,0.06); border: 1px solid #eff4f9; }
.fl-card-header { padding: 25px 30px; border-bottom: 1px solid #eff4f9; }
.fl-card-header h2 { font-size: 1.3rem; color: #002D5B; font-family: 'Outfit', sans-serif; }
.fl-card-body { padding: 30px; }

.fl-case-item { background: #fcfdfe; border: 1px solid #edf2f7; padding: 25px; border-radius: 6px; margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; transition: all 0.2s; }
.fl-case-item:hover { transform: translateX(5px); border-color: #FA6400; }
.fl-case-main { display: flex; align-items: center; gap: 20px; }
.fl-case-icon { width: 45px; height: 45px; background: #002D5B; color: white; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 18px; }
.fl-case-details h3 { font-size: 1.15rem; color: #002D5B; margin-bottom: 5px; }
.fl-case-meta { color: #7f8c8d; font-size: 0.9rem; }
.fl-case-divider { margin: 0 10px; opacity: 0.3; }
.fl-status-badge { font-weight: 800; font-size: 11px; letter-spacing: 0.5px; padding: 4px 10px; border-radius: 20px; text-transform: uppercase; }
.fl-status-badge.active { background: #e8f5e9; color: #2e7d32; }
.fl-case-actions { display: flex; align-items: center; gap: 15px; }
.fl-icon-btn { cursor: pointer; color: #95a5a6; font-size: 20px; transition: color 0.2s; }
.fl-icon-btn:hover { color: #FA6400; }
.fl-btn-outline { border: 2px solid #eff4f9; color: #002D5B; padding: 8px 15px; border-radius: 4px; font-weight: 700; font-size: 11px; letter-spacing: 1px; transition: all 0.2s; text-decoration: none; }
.fl-btn-outline:hover { background: #002D5B; color: white; border-color: #002D5B; }

.fl-activity-item { display: flex; align-items: flex-start; gap: 15px; padding-bottom: 20px; margin-bottom: 20px; border-bottom: 1px solid #f9f9f9; }
.fl-activity-icon { color: #FA6400; font-size: 20px; padding-top: 3px; }
.fl-activity-content { flex: 1; }
.fl-activity-text { font-size: 0.95rem; color: #34495e; margin-bottom: 3px; line-height: 1.4; }
.fl-activity-time { font-size: 0.8rem; color: #95a5a6; font-weight: 600; }
.fl-activity-download { color: #bdc3c7; transition: color 0.2s; }
.fl-activity-download:hover { color: #002D5B; }

.fl-empty-state { text-align: center; padding: 60px 0; color: #bdc3c7; }
.fl-empty-state i { font-size: 4rem; opacity: 0.2; margin-bottom: 20px; display: block; }
.fl-btn-link { color: #FA6400; font-weight: 700; text-decoration: none; display: block; margin-top: 15px; }

@media (max-width: 992px) {
    .fl-dashboard-grid { grid-template-columns: 1fr; }
    .fl-dashboard-stats { grid-template-columns: 1fr; }
    .fl-dashboard-header { flex-direction: column; align-items: flex-start; gap: 30px; }
}
</style>
@endsection
