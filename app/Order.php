<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->traking_no = 'KM' . Carbon::now()->timestamp . $model->id;
        });
    }

    public function orderdetails(){
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }

    public function district(){
        return $this->hasOne(District::class, 'id', 'shipping_district');
    }

    public function upazila(){
        return $this->hasOne(Upazila::class, 'id', 'shipping_city');
    }
}
