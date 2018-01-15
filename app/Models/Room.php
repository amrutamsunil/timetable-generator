<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * DB table this model uses
     * 
     * @var string
     */
    protected $table = 'rooms';

    /**
     * Declare a relationship between this room and the courses
     * that are allowed to use this room
     * 
     * @return Illuminate\Database\Eloquent
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'favourite_rooms', 'room_id', 'course_id');
    }
}
