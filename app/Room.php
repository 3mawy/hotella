<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function rates()
    {
        return $this->hasMany(Rate::class)->latest();
    }
    public function type()
    {
        return $this->belongsTo(RoomType::class);
    }
    public function status()
    {
        return $this->belongsTo(RoomStatus::class);
    }
}
