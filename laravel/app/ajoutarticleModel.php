<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ajoutarticleModel extends Model
{
     protected $table = 'contenu';
    protected $primaryKey = 'id_contenu';
    public $timestamps = false;
}
