<?php

namespace App\Traits;

use Spatie\MediaLibrary\Conversions\ConversionCollection;

trait NonOptimizedMediaThumbs
{
    /**
     * @param string $mediaCollectionName
     * @return mixed
     */
    public function getThumbs200ForCollection(string $mediaCollectionName)
    {
        $mediaCollection = $this->getMediaCollection($mediaCollectionName);
        return $this->getMedia($mediaCollectionName)->filter(static function ($medium) use ($mediaCollectionName, $mediaCollection) {
            //We also want all files (PDF, Word, Excell etc.)
            if (!$mediaCollection->isImage()) {
                return true;
            }

            return ConversionCollection::createForMedia($medium)->filter(static function ($conversion) use ($mediaCollectionName) {
                return $conversion->shouldBePerformedOn($mediaCollectionName);
            })->filter(static function ($conversion) {
                return $conversion->getName() === 'thumb_200';
            })->count() > 0;
        })->map(static function ($medium) use ($mediaCollection) {
            return [
                'id' => $medium->id,
                'url' => $medium->getUrl(),
                'thumb_url' => $mediaCollection->isImage() ? $medium->getUrl('thumb_200') : $medium->getUrl(),
                'type' => $medium->mime_type,
                'mediaCollection' => $mediaCollection->getName(),
                'name' => $medium->hasCustomProperty('name') ? $medium->getCustomProperty('name') : $medium->file_name,
                'size' => $medium->size,
            ];
        });
    }

    /**
     * Register thumb with size 200x200 for all media collections without optimization
     */
    public function autoRegisterThumb200(): void
    {
        $this->getMediaCollections()->filter->isImage()->each(function ($mediaCollection) {
            $this->addMediaConversion('thumb_200')
                ->width(200)
                ->height(200)
                ->fit('crop', 200, 200)
                ->nonOptimized()
                ->performOnCollections($mediaCollection->getName());
        });
    }
}
