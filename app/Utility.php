<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }
    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }

}
