<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vehicles(){
        return $this->hasMany(VehicleType::class);
    }
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
