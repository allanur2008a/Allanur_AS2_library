<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author():  BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function series():  BelongsTo
    {
        return $this->belongsTo(Series::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

}
