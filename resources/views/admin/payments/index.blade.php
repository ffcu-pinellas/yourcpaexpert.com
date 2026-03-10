@extends('admin.layout')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Payment Methods</h2>
</div>

<div class="card">
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="border-bottom: 2px solid var(--border-color); text-align: left;">
                <th style="padding: 12px;">Method Name</th>
                <th style="padding: 12px;">Status</th>
                <th style="padding: 12px;">Order</th>
                <th style="padding: 12px; text-align: right;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($methods as $method)
            <tr style="border-bottom: 1px solid var(--border-color);">
                <td style="padding: 12px;">
                    <strong>{{ $method->name }}</strong>
                    <div style="font-size: 0.8rem; color: #888;">{{ $method->identifier }}</div>
                </td>
                <td style="padding: 12px;">
                    <span class="status-badge {{ $method->is_active ? 'status-active' : 'status-inactive' }}" style="padding: 4px 8px; border-radius: 12px; font-size: 0.75rem; {{ $method->is_active ? 'background: #e8f5e9; color: #2e7d32;' : 'background: #ffebee; color: #c62828;' }}">
                        {{ $method->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td style="padding: 12px;">{{ $method->order }}</td>
                <td style="padding: 12px; text-align: right;">
                    <a href="{{ route('admin.payments.edit', $method) }}" class="btn" style="padding: 5px 10px; border: 1px solid var(--border-color); font-size: 0.8rem;">Edit Info</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
