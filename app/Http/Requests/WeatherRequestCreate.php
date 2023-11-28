<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeatherRequestCreate extends FormRequest
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
            'location_name' => 'required|string|max:255',
            'recorded_at' => 'required|date',
            'temperature' => 'required|numeric|min:-100|max:100',
            'humidity' => 'required|numeric|min:0|max:100',
            'wind_speed' => 'required|numeric|min:0|max:100',
            'weather_description' => 'required|string|max:500',
            'pressure' => 'required|numeric|min:800|max:1200',
            'uv_index' => 'required|numeric|min:0|max:10',
            'forecast' => 'required|string|max:500',
            'latitude' => 'required|numeric|min:-90|max:90',
            'longitude' => 'required|numeric|min:-180|max:180',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
