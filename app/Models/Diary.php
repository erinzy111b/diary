<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'date', 'feelings', 'feeling_point_average', 'feeling_point_max', 'feeling_point_min', 'weather_id', 'temperature', 'feellike', 'exercise', 'eat', 'drink', 'weight', 'pressure', 'symptom_id', 'period', 'autolesionA', 'autolesionB', 'autolesionC'];

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