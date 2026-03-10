<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'featured_image',
        'meta_title',
        'meta_description',
        'author_id',
        'is_published',
    ];

    public function author()
    {
        return $this->belongsTo(TeamMember::class, 'author_id');
    }
}
