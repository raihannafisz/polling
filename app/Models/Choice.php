<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'description',
        'image',
        'poll_id',
    ];

    // relasi many to one
    public function poll()
    {
        return $this->hasOne(Poll::class);
    }
}
