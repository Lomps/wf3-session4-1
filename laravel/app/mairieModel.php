<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mairieModel extends Model
{
    // table mairie
    protected $table = 'mairie';
    protected $primaryKey = 'id_mairie';
    public $timestamps = false;
}
