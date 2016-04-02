<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMateriel extends Model
{
    //
    protected $fillable = ['user_id','materiel_id','dbtReser','finReser'];
}
