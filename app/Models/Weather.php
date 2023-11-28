<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_name',
        'recorded_at',
        'temperature',
        'humidity',
        'wind_speed',
        'weather_description',
        'pressure',
        'uv_index',
        'forecast',
        'latitude',
        'longitude',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
