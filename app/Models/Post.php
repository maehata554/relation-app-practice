<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    protected $fillable = [
        'title',
        'content',
        'published_at',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
