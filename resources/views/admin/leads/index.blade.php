@extends('admin.layout', ['title' => 'Inbound Leads'])

@section('content')
<div class="card mt-4">
    <div class="card-body">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($leads as $lead)
                    <tr>
                        <td>{{ $lead->created_at->format('M d, H:i') }}</td>
                        <td><strong>{{ $lead->name }}</strong></td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->subject }}</td>
                        <td>
                            <span class="badge {{ $lead->status == 'new' ? 'badge-danger' : 'badge-success' }}">
                                {{ strtoupper($lead->status) }}
                            </span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info" onclick="viewLead({{ $lead->id }})">
                                    <i class="fas fa-eye"></i> View
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 40px;">
                            No leads received yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        <div class="mt-4">
            {{ $leads->links() }}
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .admin-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .admin-table th {
        text-align: left;
        background: #f8f9fa;
        padding: 15px;
        border-bottom: 2px solid #eee;
    }
    .admin-table td {
        padding: 15px;
        border-bottom: 1px solid #eee;
    }
    .badge {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 700;
    }
    .badge-danger { background: #ffebee; color: #c62828; }
    .badge-success { background: #e8f5e9; color: #2e7d32; }
</style>
@endpush
