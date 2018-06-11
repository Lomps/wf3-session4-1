<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class themeModel extends Model
{
    // table theme
    protected $table = 'theme';
    protected $primaryKey = 'id_theme';
    public $timestamps = false;
}
