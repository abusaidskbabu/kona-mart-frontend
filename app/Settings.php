<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'general_settings';

    protected $appends = [
        'logo',
    ];
    
    public function getLogo()
    {
        $logo = ($this->attributes['site_logo'] != null ) ? env('APPI_URL').'/logo/'.$this->attributes['site_logo'] : null; 
        return $logo;
    }
}
