<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Table name
    //protected $table = 'students';
    //PRimary Key ... can be changed to others if want to change  
    //public $primaryKey = 'id';
     public function user(){
         return $this -> belongsTo('App\User');
     }

}
