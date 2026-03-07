<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia;
use App\Traits\NonOptimizedMediaThumbs;



class Slide extends Model implements HasMedia
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use NonOptimizedMediaThumbs;

    protected $fillable = [
        'description',
        'type'

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/slides/' . $this->getKey());
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('slide')
            ->accepts('image/*')
            ->maxNumberOfFiles(1);
    }


    public function registerMediaConversions($media = null): void
    {
        $this->autoRegisterThumb200();
        $this->addMediaConversion('800x420')
            ->width(800)
            ->height(420)
            ->nonOptimized()
            ->performOnCollections('slide');
    }
}
