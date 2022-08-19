<?php

namespace App\Models\Projects\Project11;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaWork extends Model
{
    use HasFactory;

    protected $table = 'area_work';

    protected $fillable = [
        'area_id',
        'work_id'
    ];
}
