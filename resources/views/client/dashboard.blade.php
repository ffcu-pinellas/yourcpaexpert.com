@extends('layouts.app')

@section('content')
<div class="fl-container" style="padding: 60px 0;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 50px;">
        <h1 style="color: #002D5B; font-family: 'Outfit', sans-serif; font-size: 2.5rem;">Welcome back, {{ auth()->user()->name }}</h1>
        <a href="/contact" class="fl-btn-primary">New Expert Inquiry <i class="fas fa-plus"></i></a>
    </div>

    <div style="display: grid; grid-template-columns: 1.8fr 1fr; gap: 40px;">
        <!-- Active Cases -->
        <div>
            <h2 style="margin-bottom: 25px; color: #002D5B; font-size: 1.5rem;">Your Secure Active Cases</h2>
            @forelse($cases as $case)
                <div class="card" style="margin-bottom: 30px; padding: 35px; border-left: 5px solid #FA6400; background: #fff; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border-radius: 4px;">
                    <div style="display: flex; justify-content: space-between; align-items: start;">
                        <div>
                            <h3 style="color: #002D5B; margin-bottom: 10px;">{{ $case->title }}</h3>
                            <p style="color: #666; font-size: 0.95rem;">Type: <strong>{{ $case->type }}</strong> | Status: <span style="text-transform: uppercase; font-weight: 800; color: #FA6400; letter-spacing: 0.5px;">{{ $case->status }}</span></p>
                        </div>
                        <a href="#" class="btn" style="border: 2px solid #eee; padding: 8px 15px; font-weight: 700; color: #002D5B; border-radius: 4px;">Case Details</a>
                    </div>
                    
                    <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid #eee;">
                        <h4 style="font-size: 0.9rem; margin-bottom: 15px; color: #333; text-transform: uppercase; font-weight: 700;">Secure Documents ({{ $case->documents->count() }})</h4>
                        <div style="display: flex; gap: 15px;">
                            <form action="{{ route('documents.upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="job_case_id" value="{{ $case->id }}">
                                <input type="file" name="files[]" multiple onchange="this.form.submit()" style="display: none;" id="upload-{{ $case->id }}">
                                <label for="upload-{{ $case->id }}" class="fl-btn-primary" style="font-size: 0.85rem; padding: 10px 20px; background: #f4f6f8; color: #002D5B; box-shadow: none;">
                                    <i class="fas fa-cloud-upload-alt"></i> Upload Secure Document
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="card" style="text-align: center; padding: 80px; color: #999; background: #fff; border: 1px dashed #ccc; border-radius: 8px;">
                    <i class="fas fa-folder-open fa-4x" style="margin-bottom: 25px; opacity: 0.3;"></i>
                    <p style="font-size: 1.1rem;">No active cases. Need professional representation?</p>
                    <a href="/services" style="color: #FA6400; font-weight: 700; margin-top: 15px; display: block;">Browse Legal Services &rarr;</a>
                </div>
            @endforelse
        </div>

        <!-- Sidebar / Recent Documents -->
        <div>
            <h2 style="margin-bottom: 25px; color: #002D5B; font-size: 1.5rem;">Recent Portal Activity</h2>
            <div class="card" style="padding: 30px; background: #fff; border: 1px solid #eee; border-radius: 4px; box-shadow: 0 5px 15px rgba(0,0,0,0.02);">
                @forelse($recentDocuments as $doc)
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #f9f9f9;">
                        <div style="color: #FA6400;"><i class="fas fa-file-pdf fa-2x"></i></div>
                        <div style="flex: 1; overflow: hidden;">
                            <div style="font-weight: 700; color: #002D5B; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $doc->original_name }}</div>
                            <div style="font-size: 0.8rem; color: #888;">{{ $doc->created_at->diffForHumans() }} | <span style="color: #2e7d32;">SECURE</span></div>
                        </div>
                        <a href="{{ route('documents.download', $doc) }}" style="color: #999; transition: color 0.2s;"><i class="fas fa-download"></i></a>
                    </div>
                @empty
                    <p style="color: #999; font-size: 1rem; text-align: center; padding: 40px 0;">Your secure uploads will appear here.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
