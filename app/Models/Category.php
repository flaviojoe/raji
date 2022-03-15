<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function deadline()
    {
        return $this->hasOne(Deadline::class);
    }

    public function demand()
    {
        return $this->belongsTo(Demand::class);
    }

}