<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSalle extends Model
{
    //
    protected $fillable = ['user_id','salle_id','dbtReser','finReser'];
}
