<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    // table users
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
