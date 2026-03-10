@extends('admin.layout')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Client Cases & Real Estate Projects</h2>
    <a href="{{ route('admin.cases.create') }}" class="btn btn-primary">+ Create New Case</a>
</div>

<div class="card">
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="border-bottom: 2px solid var(--border-color); text-align: left;">
                <th style="padding: 12px;">Client</th>
                <th style="padding: 12px;">Case Title</th>
                <th style="padding: 12px;">Type</th>
                <th style="padding: 12px;">Status</th>
                <th style="padding: 12px; text-align: right;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cases as $case)
            <tr style="border-bottom: 1px solid var(--border-color);">
                <td style="padding: 12px;">
                    <strong>{{ $case->user->name }}</strong>
                    <div style="font-size: 0.8rem; color: #888;">{{ $case->user->email }}</div>
                </td>
                <td style="padding: 12px;">{{ $case->title }}</td>
                <td style="padding: 12px;">{{ $case->type }}</td>
                <td style="padding: 12px;">
                    <span style="text-transform: uppercase; font-size: 0.75rem; font-weight: bold; color: var(--primary-color);">{{ $case->status }}</span>
                </td>
                <td style="padding: 12px; text-align: right;">
                    <a href="#" class="btn" style="padding: 5px 10px; border: 1px solid var(--border-color); font-size: 0.8rem;">Review Documents</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
