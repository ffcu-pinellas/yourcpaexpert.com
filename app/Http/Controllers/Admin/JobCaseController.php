<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCase;
use App\Models\User;
use Illuminate\Http\Request;

class JobCaseController extends Controller
{
    public function index()
    {
        $cases = JobCase::with('user')->latest()->get();
        return view('admin.cases.index', compact('cases'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.cases.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required',
            'type' => 'required',
            'status' => 'required',
            'description' => 'nullable',
        ]);

        JobCase::create($validated);

        return redirect()->route('admin.cases.index')->with('success', 'Case created successfully.');
    }

    public function show(JobCase $case)
    {
        $case->load('user', 'documents');
        return view('admin.cases.show', compact('case'));
    }
}
