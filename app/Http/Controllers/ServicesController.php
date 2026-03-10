<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $query = Page::where('is_published', true);

        if ($request->has('q')) {
            $query->where('title', 'like', '%' . $request->q . '%')
                  ->orWhere('meta_description', 'like', '%' . $request->q . '%');
        }

        $services = $query->get();
        return view('services.index', compact('services'));
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->with('blocks')->firstOrFail();
        return view('services.show', compact('page'));
    }

    public function wizard()
    {
        return view('services.wizard');
    }
}
