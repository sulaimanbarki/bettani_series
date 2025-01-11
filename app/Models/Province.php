<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name',
    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/provinces/' . $this->getKey());
    }

    public function districts()
    {
        return $this->hasMany(District::class, 'province_id');
    }

    public function zones()
    {
        return $this->hasMany(Zone::class, 'province_id');
    }
}
