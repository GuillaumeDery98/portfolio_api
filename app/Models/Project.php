<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';

    public $fillable = [
        'name',
        'description',
        'client',
        'objective',
        'challenge',
        'tools'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'client' => 'string',
        'objective' => 'string',
        'challenge' => 'string',
        'tools' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'client' => 'required|string',
        'objective' => 'required|string',
        'challenge' => 'required|string',
        'tools' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
