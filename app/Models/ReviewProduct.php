<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReviewProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'rate',
        'description',
    ];

    protected $hidden = [
        'product_id',
        'created_at',
        'updated_at',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
