<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->paginate(20);
        return view('admin.leads.index', compact('leads'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'need' => 'required|string',
            'details' => 'required|string',
        ]);

        Lead::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => 'Inquiry: ' . $validated['need'],
            'message' => $validated['details'],
            'status' => 'new',
            'extra_data' => [
                'need' => $validated['need']
            ]
        ]);
        return response()->json(['message' => 'Thank you! We will contact you shortly.']);
    }

    public function show(Lead $lead)
    {
        return response()->json($lead);
    }
}
