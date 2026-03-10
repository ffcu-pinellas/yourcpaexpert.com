@extends('admin.layout')

@section('content')
<div style="margin-bottom: 30px;">
    <a href="{{ route('admin.cases.index') }}" style="color: var(--muted-text); font-size: 0.9rem;"><i class="fas fa-arrow-left"></i> Back to Cases</a>
    <h2 style="margin-top: 10px;">Create New Legal/Tax Case</h2>
</div>

<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.cases.store') }}" method="POST">
        @csrf
        
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Assign to Client</label>
            <select name="user_id" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
                <option value="">Select a Client...</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Case/Project Title</label>
            <input type="text" name="title" placeholder="e.g. 2026 Personal Tax Filing or 456 Maple Ave Acquisition" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
            <div>
                <label style="display: block; margin-bottom: 8px;">Service Type</label>
                <select name="type" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
                    <option value="Real Estate">Real Estate Acquisition</option>
                    <option value="Property Management">Property Management</option>
                    <option value="Tax Advisory">Tax Advisory</option>
                    <option value="Estate Planning">Estate Planning</option>
                    <option value="Corporate Law">Corporate Law</option>
                </select>
            </div>
            <div>
                <label style="display: block; margin-bottom: 8px;">Initial Status</label>
                <select name="status" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
                    <option value="Pending Info">Pending Info</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Under Review">Under Review</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Confidential Description</label>
            <textarea name="description" rows="5" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px; font-family: inherit;"></textarea>
        </div>

        <div style="text-align: right; margin-top: 30px;">
            <button type="submit" class="btn btn-primary">Initiate Case</button>
        </div>
    </form>
</div>
@endsection
