@extends('admin.layout', ['title' => 'Manage Pages'])

@section('content')
<div class="content-header">
    <div class="actions">
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Page
        </a>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Blocks</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                    <tr>
                        <td><strong>{{ $page->title }}</strong></td>
                        <td><code>/{{ $page->slug }}</code></td>
                        <td>{{ $page->blocks_count ?? $page->blocks->count() }}</td>
                        <td>{{ $page->updated_at->format('M d, Y') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="/{{ $page->slug }}" target="_blank" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-external-link-alt"></i> View
                                </a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 40px;">
                            No pages found. <a href="{{ route('admin.pages.create') }}">Create your first page</a>.
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
    .card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        padding: 20px;
    }
    .btn-sm {
        padding: 5px 10px;
        font-size: 0.85rem;
    }
    code {
        background: #f1f1f1;
        padding: 2px 5px;
        border-radius: 3px;
    }
</style>
@endpush
