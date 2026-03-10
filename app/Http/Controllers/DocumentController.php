<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|max:10240', // 10MB max
            'job_case_id' => 'nullable|exists:job_cases,id',
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('client_documents/' . auth()->id());
                
                Document::create([
                    'user_id' => auth()->id(),
                    'job_case_id' => $request->job_case_id,
                    'filename' => $file->hashName(),
                    'original_name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'type' => $file->getClientOriginalExtension(),
                    'status' => 'pending',
                ]);
            }
        }

        return back()->with('success', 'Documents uploaded successfully.');
    }

    public function download(Document $document)
    {
        // Add auth check here
        return Storage::download($document->path, $document->original_name);
    }
}
