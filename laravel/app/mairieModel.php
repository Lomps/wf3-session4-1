<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mairieModel extends Model
{
    protected $table = 'mairie';
    protected $primaryKey = 'id_mairie';
    public $timestamps = false;
}
