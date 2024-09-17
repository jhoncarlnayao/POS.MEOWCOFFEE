<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAccount extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'Email',
        'Username',
        'Password',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];
    public function getAuthPassword()
    {
        return $this->Password;
    }

    protected $table = '_user_accounts';
}

