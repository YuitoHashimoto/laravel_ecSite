<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class UsersTable extends Model
{
    protected $table = 'ecUsers';
}

class Columns extends Model
{
    use Notifiable;

    protected $fillable = ['email','password','name','nameRuby'];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}


