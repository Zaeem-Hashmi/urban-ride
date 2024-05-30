<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function driver(){
        return $this->hasOne(Driver::class);
    }
    // protected static function booted()
    // {
    //     static::updated(function ($booking) {
    //         $driver = Driver::where('id', $booking->driver_id)->get();
    //         dd($driver);
    //         if ($driver) {
    //             $driver->is_available = 1;
    //             $driver->save();
    //         }
    //     });
    // }
}
