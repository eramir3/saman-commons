<?php

namespace Saman\Traits;

use Saman\Utils\Hasher;

trait HashableId 
{
    public function gethashIdAttribute()
    {
        return Hasher::encode($this->attributes['id']);
    }
}