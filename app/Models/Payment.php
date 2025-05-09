<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function book():  BelongsTo {
        return $this->belongsTo(Book::class);
    }

    public function user():  BelongsTo {
        return $this->belongsTo(User::class);
    }
}
