<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deadline extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'deadline',
    ];


    protected $dates = [
        'deleted_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function demand()
    {
        return $this->belongsTo(Demand::class);
    }
}
