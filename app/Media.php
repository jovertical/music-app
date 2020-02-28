<?php

namespace App;

use Spatie\MediaLibrary\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = ['url'];

    /**
     * Get the url to a original media file.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return $this->getUrl();
    }
}
