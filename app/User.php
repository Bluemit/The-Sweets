<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users' ;

    protected $guard = ['id'];

    protected $hidden= ['password','remember_token'];


}
