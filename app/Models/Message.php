<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $table = 'messages';

    public $fillable = [
        'name',
        'email',
        'message'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'message' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'email' => 'required|string',
        'message' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
