<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pageModel extends Model
{
    protected $table = 'zonetheme';
    protected $primaryKey = 'id_zone';
    public $timestamps = false;
}
