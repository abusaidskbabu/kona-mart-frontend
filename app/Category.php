<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function subcategory(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
