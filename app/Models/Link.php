<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $table = 'links';

    public $fillable = [
        'name',
        'url',
        'icon'
    ];

    protected $casts = [
        'name' => 'string',
        'url' => 'string',
        'icon' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'url' => 'required|string',
        'icon' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
