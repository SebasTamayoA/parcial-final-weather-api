<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeatherRequestUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'location_name' => 'string|max:255',
            'recorded_at' => 'date',
            'temperature' => 'numeric|min:-100|max:100',
            'humidity' => 'numeric|min:0|max:100',
            'wind_speed' => 'numeric|min:0|max:100',
            'weather_description' => 'string|max:500',
            'pressure' => 'numeric|min:800|max:1200',
            'uv_index' => 'numeric|min:0|max:10',
            'forecast' => 'string|max:500',
            'latitude' => 'numeric|min:-90|max:90',
            'longitude' => 'numeric|min:-180|max:180',
        ];
    }
}
