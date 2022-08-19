<?php

namespace App\Models\Projects\Project11;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'text'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
