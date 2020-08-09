<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function bookings()
    {
        return $this->hasMany(Booking::class)->latest();
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function utilities()
    {
        return $this->belongsTomany(Utility::class, 'hotel_utility');
    }



}
