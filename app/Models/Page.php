<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'is_published',
    ];

    public function blocks()
    {
        return $this->hasMany(Block::class)->orderBy('order_column');
    }
}
