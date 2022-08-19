<?php

namespace App\Models\Projects\Project11;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'title',
        'desc'
    ];

    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }
}
