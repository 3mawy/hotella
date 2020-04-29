<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomStatus extends Model
{
    public function rooms()
    {
        return $this->hasMany(Room::class)->latest();
    }
}
