<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

    public function roomTypes()
    {
        return $this->hasMany(RoomType::class);
    }
}
