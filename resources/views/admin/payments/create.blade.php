@extends('admin.layout')

@section('content')
<div style="margin-bottom: 30px;">
    <a href="{{ route('admin.payments.index') }}" style="color: var(--muted-text); font-size: 0.9rem;"><i class="fas fa-arrow-left"></i> Back to Methods</a>
    <h2 style="margin-top: 10px;">Create New Payment Method</h2>
</div>

<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.payments.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Method Name (e.g., Zelle, CashApp)</label>
            <input type="text" name="name" placeholder="Enter name" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Unique Identifier (lowercase, no spaces)</label>
            <input type="text" name="identifier" placeholder="e.g. cashapp_personal" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Payment Instructions (Shown to Client)</label>
            <textarea name="instructions" rows="6" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px; font-family: inherit;" placeholder="Provide account details..."></textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Display Order</label>
            <input type="number" name="order" value="0" style="width: 100px; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" checked>
                Enable this payment method immediately
            </label>
        </div>

        <div style="text-align: right; margin-top: 30px;">
            <button type="submit" class="btn btn-primary">Create Payment Method</button>
        </div>
    </form>
</div>
@endsection
