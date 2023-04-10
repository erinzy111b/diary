<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
        return $this->hasOne(User::class);
    }

    public function feelings()
    {
        return $this->hasMany(Feeling::class);
    }

    public function weather()
    {
        return $this->hasMany(Weather::class);
    }

    public function symptoms()
    {
        return $this->hasMany(Symptom::class);
    }
}