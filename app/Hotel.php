<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $fillable = [
        'id',
        'name',
        'thumbnail_url',
        'longitude',
        'latitude',
        'address',
        'destination_id',
        'zipcode'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class)->latest();
    }
    public function rooms()
    {
        return $this->hasMany(Room::class)->latest();
    }
    public function destination()
    {
        return $this->belongsTo(Destination::class)->latest();
    }

}
