@extends('layouts.app')

@section('content')
<div class="container" style="padding: 40px 0;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px;">
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <div>
            <a href="/contact" class="btn btn-primary">New Inquiry</a>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
        <!-- Active Cases -->
        <div>
            <h2 style="margin-bottom: 20px;">Your Active Cases</h2>
            @forelse($cases as $case)
                <div class="card" style="margin-bottom: 20px; padding: 25px; border-left: 4px solid var(--primary-color);">
                    <div style="display: flex; justify-content: space-between; align-items: start;">
                        <div>
                            <h3>{{ $case->title }}</h3>
                            <p style="color: var(--muted-text); font-size: 0.9rem;">Type: {{ $case->type }} | Status: <span style="text-transform: uppercase; font-weight: bold; color: var(--primary-color);">{{ $case->status }}</span></p>
                        </div>
                        <a href="#" class="btn" style="border: 1px solid var(--border-color);">View Details</a>
                    </div>
                    
                    <div style="margin-top: 20px; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <h4 style="font-size: 0.9rem; margin-bottom: 10px;">Case Documents: {{ $case->documents->count() }}</h4>
                        <div style="display: flex; gap: 10px;">
                            <form action="{{ route('documents.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="job_case_id" value="{{ $case->id }}">
                                <input type="file" name="files[]" multiple onchange="this.form.submit()" style="display: none;" id="upload-{{ $case->id }}">
                                <label for="upload-{{ $case->id }}" class="btn" style="font-size: 0.8rem; background: var(--light-bg); cursor: pointer;">
                                    <i class="fas fa-upload"></i> Upload Document
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="card" style="text-align: center; padding: 50px; color: #999;">
                    <i class="fas fa-folder-open fa-3x" style="margin-bottom: 20px;"></i>
                    <p>No active cases found. Need help with Real Estate or Tax? Contact us today.</p>
                </div>
            @endforelse
        </div>

        <!-- Sidebar / Recent Documents -->
        <div>
            <h2 style="margin-bottom: 20px;">Recent Uploads</h2>
            <div class="card" style="padding: 20px;">
                @forelse($recentDocuments as $doc)
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid var(--border-color);">
                        <div style="color: var(--primary-color);"><i class="fas fa-file-alt fa-2x"></i></div>
                        <div style="flex: 1; overflow: hidden;">
                            <div style="font-weight: 600; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $doc->original_name }}</div>
                            <div style="font-size: 0.75rem; color: #999;">{{ $doc->created_at->diffForHumans() }} | {{ strtoupper($doc->status) }}</div>
                        </div>
                        <a href="{{ route('documents.download', $doc) }}" style="color: var(--muted-text);"><i class="fas fa-download"></i></a>
                    </div>
                @empty
                    <p style="color: #999; font-size: 0.9rem; text-align: center;">No documents uploaded yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
