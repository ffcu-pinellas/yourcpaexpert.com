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
<!-- Lead Detail Modal -->
<div id="leadModal" class="modal" style="display: none; position: fixed; z-index: 3000; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
    <div class="modal-content" style="background: #fff; margin: 10% auto; padding: 30px; border-radius: 8px; width: 50%; max-width: 600px; box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
            <h3 id="modalSubject" style="margin: 0; color: #002244;">Lead Details</h3>
            <span onclick="closeLeadModal()" style="cursor: pointer; font-size: 24px; color: #888;">&times;</span>
        </div>
        <div id="modalBody">
            <div style="display: grid; grid-template-columns: 100px 1fr; gap: 15px; margin-bottom: 15px;">
                <div style="font-weight: bold; color: #666;">Name:</div><div id="modalName"></div>
                <div style="font-weight: bold; color: #666;">Email:</div><div id="modalEmail"></div>
                <div style="font-weight: bold; color: #666;">Phone:</div><div id="modalPhone"></div>
                <div style="font-weight: bold; color: #666;">Date:</div><div id="modalDate"></div>
            </div>
            <div style="font-weight: bold; color: #666; margin-bottom: 10px;">Message:</div>
            <div id="modalMessage" style="background: #f8f9fa; padding: 15px; border-radius: 4px; border: 1px solid #eee; line-height: 1.6; white-space: pre-wrap;"></div>
        </div>
        <div style="margin-top: 25px; text-align: right;">
            <button onclick="closeLeadModal()" class="btn" style="background: #eee; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Close</button>
        </div>
    </div>
</div>

@push('scripts')
<script>
function viewLead(id) {
    fetch(`/admin/leads/${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('modalName').textContent = data.name;
            document.getElementById('modalEmail').textContent = data.email;
            document.getElementById('modalPhone').textContent = data.phone || 'N/A';
            document.getElementById('modalSubject').textContent = data.subject;
            document.getElementById('modalDate').textContent = new Date(data.created_at).toLocaleString();
            document.getElementById('modalMessage').textContent = data.message;
            document.getElementById('leadModal').style.display = 'block';
        })
        .catch(err => alert('Error loading lead details'));
}

function closeLeadModal() {
    document.getElementById('leadModal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == document.getElementById('leadModal')) {
        closeLeadModal();
    }
}
</script>
@endpush
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
