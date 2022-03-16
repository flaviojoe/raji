<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_number',
        'date_finish',
        'date_reopen',
        'description',
        'reopen_reason',
        'finish_reason',
        'comments',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function demand()
    {
        return $this->belongsTo(Demand::class);
    }
}
