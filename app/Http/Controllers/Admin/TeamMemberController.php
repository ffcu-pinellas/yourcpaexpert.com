<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::orderBy('order')->get();
        return view('admin.team.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $member = TeamMember::create($request->validate([
            'name' => 'required',
            'title' => 'required',
            'bio' => 'nullable',
            'is_partner' => 'boolean',
        ]));

        return redirect()->route('admin.team.index');
    }
}
