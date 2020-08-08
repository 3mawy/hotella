<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function getAvailableRooms()
    {
    $date_from= session('reservation')?session('reservation')['check_in']:null;
    $date_to= session('reservation')?session('reservation')['check_out']:null;
        $result= \DB::select("
            SELECT room_number-number_of_bookedRooms AS available_rooms
            FROM
              (SELECT count(id) AS number_of_bookedRooms
               FROM bookings
               WHERE room_id = {$this->id}
                 AND (CAST( '$date_from' AS DATE) BETWEEN date_from AND date_to
                      OR CAST('$date_to' AS DATE) BETWEEN date_from AND date_to) ) AS TerritorySummary
            JOIN
              (SELECT room_number
               FROM rooms
               WHERE id={$this->id}) AS allRooms;");
        return $result[0]->available_rooms;

    }
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
    public function utilities()
    {
        return $this->belongsTomany(Utility::class, 'room_utility');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class)->latest();
    }
}
