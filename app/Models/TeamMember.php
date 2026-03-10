<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'title',
        'bio',
        'photo',
        'email',
        'phone',
        'social_links',
        'order',
        'is_partner',
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_partner' => 'boolean',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }
}
