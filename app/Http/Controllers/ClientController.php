<?php

namespace App\Http\Controllers;

use App\Models\JobCase;
use App\Models\Document;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $cases = auth()->user()->jobCases()->with('documents')->get();
        $recentDocuments = auth()->user()->documents()->latest()->take(5)->get();
        
        return view('client.dashboard', compact('cases', 'recentDocuments'));
    }
}
