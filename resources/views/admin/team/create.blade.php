@extends('admin.layout', ['title' => isset($member) ? 'Edit Team Member' : 'Add Team Member'])

@section('content')
<div class="card mt-4">
    <div class="card-body">
        <form action="{{ isset($member) ? route('admin.team.update', $member) : route('admin.team.store') }}" method="POST">
            @csrf
            @if(isset($member)) @method('PUT') @endif

            <div class="form-row mb-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $member->name ?? '') }}" required placeholder="e.g. Jonathan R. Sterling">
                </div>
                <div class="form-group">
                    <label for="title">Title / Role</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $member->title ?? '') }}" required placeholder="e.g. Senior Partner">
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="bio">Biography</label>
                <textarea name="bio" id="bio" class="form-control" rows="5" placeholder="Professional background and expertise">{{ old('bio', $member->bio ?? '') }}</textarea>
            </div>

            <div class="form-row mb-4" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label for="is_partner">Employment Type</label>
                    <select name="is_partner" id="is_partner" class="form-control">
                        <option value="1" {{ old('is_partner', $member->is_partner ?? '') == 1 ? 'selected' : '' }}>Partner</option>
                        <option value="0" {{ old('is_partner', $member->is_partner ?? '') == 0 ? 'selected' : '' }}>Staff / Associate</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="order">Display Order</label>
                    <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $member->order ?? 0) }}">
                </div>
            </div>

            <div class="form-actions mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ isset($member) ? 'Update Member' : 'Save Member' }}
                </button>
                <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Cancel</a>
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
