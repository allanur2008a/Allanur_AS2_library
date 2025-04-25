<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
