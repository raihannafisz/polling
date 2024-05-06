<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'poll_id',
    ];

    // relasi many to one
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function poll()
    {
        return $this->hasOne(Poll::class);
    }
}
