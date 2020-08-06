<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_utility');
    }
    public function rooms()
    {
        return $this->belongsToMany(Room::class,'room_utility');
    }

}
