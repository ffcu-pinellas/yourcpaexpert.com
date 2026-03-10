@extends('admin.layout')

@section('content')
<div style="margin-bottom: 30px;">
    <a href="{{ route('admin.cases.index') }}" style="color: var(--muted-text); font-size: 0.9rem;"><i class="fas fa-arrow-left"></i> Back to Cases</a>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
        <h2>Case Details: {{ $case->title }}</h2>
        <span class="badge" style="background: #e8f5e9; color: #2e7d32; padding: 5px 15px; border-radius: 20px; font-weight: bold; text-transform: uppercase;">{{ $case->status }}</span>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
    <div>
        <div class="card" style="margin-bottom: 25px;">
            <h3 style="margin-bottom: 15px; color: #002244; border-bottom: 1px solid #eee; padding-bottom: 10px;">Case Description</h3>
            <p style="line-height: 1.6; color: #444; white-space: pre-wrap;">{{ $case->description ?? 'No description provided.' }}</p>
        </div>

        <div class="card">
            <h3 style="margin-bottom: 15px; color: #002244; border-bottom: 1px solid #eee; padding-bottom: 10px;">Submitted Documents</h3>
            @if($case->documents->count() > 0)
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="text-align: left; color: #666; font-size: 0.85rem;">
                            <th style="padding: 10px;">Document Name</th>
                            <th style="padding: 10px;">Date Uploaded</th>
                            <th style="padding: 10px; text-align: right;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($case->documents as $doc)
                            <tr style="border-top: 1px solid #eee;">
                                <td style="padding: 10px;">
                                    <i class="fas fa-file-pdf" style="color: #c62828; margin-right: 8px;"></i>
                                    {{ $doc->filename }}
                                </td>
                                <td style="padding: 10px; color: #888;">{{ $doc->created_at->format('M d, Y') }}</td>
                                <td style="padding: 10px; text-align: right;">
                                    <a href="{{ route('documents.download', $doc) }}" class="btn btn-sm" style="border: 1px solid #ddd;">Download</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div style="text-align: center; padding: 30px; color: #888;">
                    <i class="fas fa-folder-open" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
                    No documents uploaded for this case yet.
                </div>
            @endif
        </div>
    </div>

    <div>
        <div class="card" style="margin-bottom: 25px; border-top: 4px solid #FA6400;">
            <h3 style="margin-bottom: 15px; color: #002244;">Client Information</h3>
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="width: 50px; height: 50px; background: #eee; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #666;">
                    {{ strtoupper(substr($case->user->name, 0, 1)) }}
                </div>
                <div>
                    <div style="font-weight: bold; font-size: 1.1rem;">{{ $case->user->name }}</div>
                    <div style="color: #888; font-size: 0.85rem;">{{ $case->user->email }}</div>
                </div>
            </div>
            <a href="#" class="btn" style="display: block; text-align: center; border: 1px solid #FA6400; color: #FA6400; padding: 10px; border-radius: 4px;">Message Client</a>
        </div>

        <div class="card">
            <h3 style="margin-bottom: 15px; color: #002244;">Update Status</h3>
            <form action="{{ route('admin.cases.update', $case) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="status" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; margin-bottom: 15px;">
                    <option value="pending" {{ $case->status == 'pending' ? 'selected' : '' }}>Pending Review</option>
                    <option value="active" {{ $case->status == 'active' ? 'selected' : '' }}>Active / Processing</option>
                    <option value="completed" {{ $case->status == 'completed' ? 'selected' : '' }}>Completed / Closed</option>
                    <option value="archived" {{ $case->status == 'archived' ? 'selected' : '' }}>Archived</option>
                </select>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Update Case Status</button>
            </form>
        </div>
    </div>
</div>
@endsection
