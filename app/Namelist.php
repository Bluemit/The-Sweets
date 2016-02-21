<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Namelist extends Model
{

    protected $table = 'namelist';

    protected $guard = ['id'];

    protected $hidden= ['age'];

    //
}
