@extends('admin.layout')

@section('content')
<div style="margin-bottom: 30px;">
    <a href="{{ route('admin.payments.index') }}" style="color: var(--muted-text); font-size: 0.9rem;"><i class="fas fa-arrow-left"></i> Back to Methods</a>
    <h2 style="margin-top: 10px;">Edit Payment Method: {{ $payment->name }}</h2>
</div>

<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.payments.update', $payment) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Method Name</label>
            <input type="text" name="name" value="{{ $payment->name }}" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px;">Payment Instructions (Shown to Client)</label>
            <textarea name="instructions" rows="6" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 4px; font-family: inherit;">{{ $payment->instructions }}</textarea>
            <small style="color: #888;">Provide account details, phone numbers, or links for the client to complete the payment.</small>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" {{ $payment->is_active ? 'checked' : '' }}>
                Enable this payment method
            </label>
        </div>

        <div style="text-align: right; margin-top: 30px;">
            <button type="submit" class="btn btn-primary">Save Payment Updates</button>
        </div>
    </form>
</div>
@endsection
