<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'seasonality',
        'probability_of_occurrence',
        'severity_level',
        'is_active',
    ];

    public function weather()
    {
        return $this->hasMany(Weather::class, 'category_id');
    }
}
