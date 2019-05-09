<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Product(){
        return $this->hasMany(Product::class);
    }
    public function SubCategory(){
        return $this->hasMany(SubCategory::class);
    }
}
