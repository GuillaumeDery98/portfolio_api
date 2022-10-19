<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    public $table = 'messages';

    public $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'subject' => 'string',
        'message' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'email' => 'required|string',
        'message' => 'required|string',
        'subject' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
