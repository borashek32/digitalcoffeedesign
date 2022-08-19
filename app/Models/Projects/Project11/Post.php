<?php

namespace App\Models\Projects\Project11;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'cat_id',
        'desc',
        'img',
        'video'
    ];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
