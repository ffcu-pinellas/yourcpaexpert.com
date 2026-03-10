<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $fillable = [
        'user_id', 
        'job_case_id', 
        'filename', 
        'original_name', 
        'path', 
        'type', 
        'status', 
        'admin_notes'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobCase(): BelongsTo
    {
        return $this->belongsTo(JobCase::class);
    }
}
