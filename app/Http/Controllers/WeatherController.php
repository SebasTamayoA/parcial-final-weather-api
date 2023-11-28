<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use App\Http\Requests\WeatherRequestCreate;
use App\Http\Requests\WeatherRequestUpdate;
use Illuminate\Http\Response;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Weather::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WeatherRequestCreate $request)
    {
        $weather = Weather::create($request->all());
        return response()->json(['weather' => $weather], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Weather $weather)
    {
        // Cargar la relación 'category'
        $weather->load('category');

        return response()->json(['weather' => $weather, 'category' => $weather->category], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WeatherRequestUpdate $request, Weather $weather)
    {
        $weather->update($request->all());
        return response()->json(['weather' => $weather], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weather $weather)
    {
        $weather->delete();
        return response()->json(['weather' => $weather], Response::HTTP_ACCEPTED);
    }
}
