<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use MongoDB\Laravel\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken as SanctumToken;
use MongoDB\Laravel\Eloquent\DocumentModel;

class User extends Authenticatable
{

    use HasFactory ,  HasApiTokens , Notifiable;

    protected $connection = 'mongodb';
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
