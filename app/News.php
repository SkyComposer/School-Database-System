<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    public function user(){
        return $this -> belongsTo('App\User');
    }
}
