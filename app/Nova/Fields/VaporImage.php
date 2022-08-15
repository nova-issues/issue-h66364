<?php

namespace App\Nova\Fields;

class VaporImage extends \Laravel\Nova\Fields\VaporImage
{
    /**
     * Get the disk that the field is stored on.
     *
     * @return string|null
     */
    public function getStorageDisk()
    {
        return 's3images';
    }

}
