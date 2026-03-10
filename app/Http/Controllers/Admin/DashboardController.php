<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\Page;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'leads' => \App\Models\Lead::count(),
            'pages' => \App\Models\Page::count(),
            'members' => \App\Models\TeamMember::count(),
            'cases' => \App\Models\JobCase::count(),
            'documents' => \App\Models\Document::where('status', 'pending')->count(),
        ];
        
        return view('admin.dashboard', compact('stats'));
    }
}
