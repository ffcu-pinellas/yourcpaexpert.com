<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $page = Page::create($request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
        ]));

        return redirect()->route('admin.pages.edit', $page);
    }

    public function edit(Page $page)
    {
        $page->load('blocks');
        return view('admin.pages.edit', compact('page'));
    }
}
