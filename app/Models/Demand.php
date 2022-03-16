<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demand extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'number_property',
        'description',
    ];

    protected $guarded = [
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deadline()
    {
        return $this->hasOne(Deadline::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
