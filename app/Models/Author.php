<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books():  HasMany {
        return $this->hasMany(Book::class);
    }


}
