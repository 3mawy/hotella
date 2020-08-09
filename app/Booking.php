<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $fillable = ['hotel_id',
        'room_id',
        'user_id',
        'date_from',
        'date_to' ,
        'price' ,
        'first_name' ,
        'last_name',
        'email',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function status()
    {
        return $this->belongsTo(BookingStatus::class);
    }
}
