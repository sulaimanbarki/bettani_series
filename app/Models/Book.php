<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class Book extends Model  implements HasMedia
{

    use SoftDeletes;
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    use Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'publisher',
        'language',
        'author_id',
        'enabled',
        'price',
        'category_id',
        'is_hard',
        'status',
        'online_amount',
        'ship_amount',
        'orderNo'
    ];


    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',

    ];


    //check payment 
    public function payment()
    {
        $paid = 0;
        if (Auth::check()) {
            $where = ['user_id' => Auth::User()->id];
        } else {
            $where = ['session_id' => session()->getId()];
        }
        $orderItem = OrderItem::where('model_id', $this->getKey())->where('type', 'read')->where($where)->with('OrderHd')->first();
       
        if ($orderItem) {
            // dd($orderItem);
            if ($orderItem->orderHd != null) {

                checkPayment($orderItem->orderHd['id']);
                $orderhd = OrderHd::where('id', $orderItem->orderHd['id'])->first();

                if ($orderhd->status  == 2 || $orderItem->book['status'] == 4) {
                    $paid = 1;
                } else {
                    $paid = 2;
                }
            } else {
                $paid = 3;
            }
        }

        return $paid;
    }

    //  Generate slug 
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/books/' . $this->getKey());
    }


    /* ************************ RELATIONSHIP ************************* */

    // with category 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // with Author

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    //with Section

    public function sections($parent = 0)
    {
        return $this->hasMany(Section::class)->where('hassection', $parent);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('books')
            ->accepts('image/*')
            ->maxNumberOfFiles(20);

        $this->addMediaCollection('pdf')
            ->maxFileSize(30000000)
            ->maxNumberOfFiles(1);
    }

    public function registerMediaConversions($media = null): void
    {
        $this->autoRegisterThumb200();
        $this->addMediaConversion('150x226')
            ->width(150)
            ->height(226)
            ->performOnCollections('books');

        $this->addMediaConversion('300x452')
            ->width(300)
            ->height(452)
            ->performOnCollections('books');
    }

    public function is_free()
    {
        if ($this->status == 4) {
            return true;
        } else {
            return false;
        }
    }
}
