<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articleModel extends Model
{
    // table contenu pour article
    protected $table = 'contenu';
    protected $primaryKey = 'id_contenu';
    public $timestamps = false;
}
