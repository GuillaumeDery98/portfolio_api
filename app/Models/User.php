<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'users';

    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'address',
        'phone',
        'biography',
        'picture',
        'cv',
        'remember_token'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'biography' => 'string',
        'picture' => 'string',
        'cv' => 'string',
        'remember_token' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'email' => 'required|string',
        'email_verified_at' => 'nullable',
        'password' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',
        'biography' => 'required|string',
        'picture' => 'required|string',
        'cv' => 'required|string',
        'remember_token' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
