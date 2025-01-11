<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DropDownMenu extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'order',
        'parent_id',
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
        return url('/admin/drop-down-menus/'.$this->getKey());
    }
}
