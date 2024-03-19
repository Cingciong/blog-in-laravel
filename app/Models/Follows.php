<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
    use HasFactory;

    /**
     * Get the follower associated with the follow.
     */
    public function follower()
    {
        return $this->belongsTo(User::class, 'follower_id');
    }

    /**
     * Get the followed user associated with the follow.
     */
    public function followed()
    {
        return $this->belongsTo(User::class, 'followed_id');
    }
}
