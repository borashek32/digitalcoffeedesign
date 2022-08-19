<?php

namespace App\Models\Projects\Project11;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class, 'area_work', 'area_id', 'work_id');
    }
}
