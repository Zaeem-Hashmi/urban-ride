<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value)  {
        return Carbon::parse($value)->format("d/m/Y");
    }
    public function getCostAttribute($value)  {
        return (int)$value;
    }
}
