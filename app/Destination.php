<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Note:
 * Models should alwyes be where you store quired
 * and should alwyes be returning arrays/Collections
 */

class Destination extends Model
{
    protected $table = 'destinations';
    protected $fillable = ['name',
        'longitude',
        'latitude',
        'zipcode',
        'destination_id'
        ];

    public function listByName(string $name)
    {
        return $this->where('name', 'LIKE', '%' . $name . '%')->take(3)->get();
    }
}
