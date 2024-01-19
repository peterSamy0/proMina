<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 
        'user_id'
    ];

    // relation one to many user and album
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // relation many to one images and album
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
