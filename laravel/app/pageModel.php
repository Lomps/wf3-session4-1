<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pageModel extends Model
{
    // table page
    protected $table = 'page';
    protected $primaryKey = 'id_page';
    public $timestamps = false;
}
