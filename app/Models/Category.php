<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    public function category():  HasMany {
        return $this->hasMany(Category::class);
    }

    public function series():  HasMany {
        return $this->hasMany(Series::class);
    }

    public function book():  HasMany {
        return $this->hasMany(Book::class);
    }


}
