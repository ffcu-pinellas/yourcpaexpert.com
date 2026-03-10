<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $partners = TeamMember::where('is_partner', true)->orderBy('order')->get();
        $associates = TeamMember::where('is_partner', false)->orderBy('order')->get();
        return view('about', compact('partners', 'associates'));
    }
}
