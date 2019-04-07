<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    //
    protected $table = 'admins';
    public $timestamps = false;
    public $primarykey = 'id';
    protected $fillable = [
        'username','password', 'name', 'profile_image', 'phone', 'remember_token',
    ];
}
