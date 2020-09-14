<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    final public function childrenCategories(): HasMany
    {
        return $this->hasMany(__CLASS__)->with('childrenCategories');
    }
}
