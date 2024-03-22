<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $table = 'product_variants';

    public function variant(){
        return $this->hasOne(Variant::class, 'id', 'variant_id');
    }
}
