<?php

namespace App\Models;
//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'users';
    protected $fillable = [
        'username',
         'email',
        'password',
         'firstname',
         'lastname',
         'phone',
         'skills',
         'state',
         'town',
         'verify_token',
                
    ];

    protected $hidden = [
        'password',
         'remember_token',
    ];
}
