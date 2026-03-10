@extends('admin.layout', ['title' => 'Manage Team Members'])

@section('content')
<div class="content-header">
    <div class="actions">
        <a href="{{ route('admin.team.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Team Member
        </a>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Partner</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                    <tr>
                        <td><strong>{{ $member->name }}</strong></td>
                        <td>{{ $member->title }}</td>
                        <td>
                            @if($member->is_partner)
                                <span class="badge badge-success">Partner</span>
                            @else
                                <span class="badge badge-info">Staff</span>
                            @endif
                        </td>
                        <td>{{ $member->order }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.team.edit', $member) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                {{-- <a href="{{ route('admin.team.destroy', $member) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 40px;">
                            No team members found. <a href="{{ route('admin.team.create') }}">Add your first member</a>.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
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
        text-transform: uppercase;
    }
    .badge-success { background: #e8f5e9; color: #2e7d32; }
    .badge-info { background: #e3f2fd; color: #1565c0; }
</style>
@endpush
