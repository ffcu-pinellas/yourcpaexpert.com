<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['name', 'identifier', 'instructions', 'config', 'is_active', 'order'];

    protected $casts = [
        'config' => 'array',
        'is_active' => 'boolean',
    ];
}
