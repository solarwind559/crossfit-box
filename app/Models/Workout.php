<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workout extends Model
{
    use HasFactory;

    public function getDayOfWeek()
    {
        return Carbon::parse($this->workout_date)->format('l, d/m/Y');
    }
}
