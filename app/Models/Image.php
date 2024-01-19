<?php

namespace App\Models;

use App\Models\Album;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 
        'image_path', 
        'album_id'
    ];

    // relation one to many album and image
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
