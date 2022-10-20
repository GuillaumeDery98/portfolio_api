<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    public $table = 'projects';

    public $fillable = [
        'name',
        'description',
        'client',
        'objective',
        'challenge',
        'tools',
        'pictures'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'client' => 'string',
        'objective' => 'string',
        'challenge' => 'string',
        'tools' => 'string',
        'pictures' => 'string',
    ];

    public static $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'client' => 'required|string',
        'objective' => 'required|string',
        'challenge' => 'required|string',
        'tools' => 'required|string',
        'pictures' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
