@extends('admin.layout', ['title' => isset($page) ? 'Edit Page' : 'Create Page'])

@section('content')
<div class="card mt-4">
    <div class="card-body">
        <form action="{{ isset($page) ? route('admin.pages.update', $page) : route('admin.pages.store') }}" method="POST">
            @csrf
            @if(isset($page)) @method('PUT') @endif

            <div class="form-group mb-4">
                <label for="title">Page Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $page->title ?? '') }}" required placeholder="e.g. Tax Planning & Litigation">
            </div>

            <div class="form-group mb-4">
                <label for="slug">Slug (URL)</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $page->slug ?? '') }}" required placeholder="e.g. services/tax">
                <small class="text-muted">The URL will be: <code>yourcpaexpert.com/slug</code></small>
            </div>

            <div class="form-group mb-4">
                <label for="meta_title">SEO Title</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title ?? '') }}" placeholder="Search engine title">
            </div>

            <div class="form-group mb-4">
                <label for="meta_description">SEO Description</label>
                <textarea name="meta_description" id="meta_description" class="form-control" rows="3" placeholder="Brief summary for search results">{{ old('meta_description', $page->meta_description ?? '') }}</textarea>
            </div>

            <div class="form-actions mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ isset($page) ? 'Update Page' : 'Save Page' }}
                </button>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
    .form-control { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; }
    .form-actions { display: flex; gap: 10px; border-top: 1px solid #eee; padding-top: 20px; }
</style>
@endpush
