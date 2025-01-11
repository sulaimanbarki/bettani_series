<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntroVideo extends Model
{
    protected $fillable = [
        'title',
        'url',
        'thumbnail',
        'order',
        'platform',
        'is_active',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/intro-videos/'.$this->getKey());
    }
}
