<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobOffer extends Model
{
    use HasFactory;

    public $table = 'job_offers';

    public $fillable = [
        'name',
        'email',
        'category',
        'description'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'description' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'email' => 'required|string',
        'category' => 'required',
        'description' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
